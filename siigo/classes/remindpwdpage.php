<?php
class RemindPasswordPage extends RunnerPage
{
	public $action = "";
	public $userEmail = "";
	
	protected $reminded = false;
	
	protected $passwordFiled;
	protected $usernameFiled;
	protected $emailField;
	
	
	function __construct(&$params)
	{
		parent::__construct($params);
		$this->pSet = new ProjectSettings("public.seg_usuarios", $this->pageType);
		$this->pSetEdit = $this->pSet;

		$this->passwordFiled = GetPasswordField();
		$this->usernameFiled = GetUserNameField();		
		$this->emailField = "usu_correo";
		
		$this->formBricks["header"] = "remindheader";
		$this->formBricks["footer"] = "remindbuttons";
		$this->assignFormFooterAndHeaderBricks( true );	
	}

	/**
	 * Set the connection property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();		
	}
	
	protected function assignCipherer()
	{
		$this->cipherer = RunnerCipherer::getForLogin();
	}
	
	/**
	 * Check is captcha exists on current page
	 *
	 * @intellisense
	 */	
	function captchaExists()
	{
		$captchaSettings = GetGlobalData("CaptchaSettings", false);
		return $captchaSettings["isEnabledOnRemind"];
	}

	function getCaptchaId() 
	{
		return "remind";
	}

	/**
	 *
	 */
	public function process()
	{
		global $globalEvents;
		
		//	Before Process event
		if( $globalEvents->exists("BeforeProcessRemind") )
			$globalEvents->BeforeProcessRemind( $this );	

		if ( $this->action == "Remind" )
		{	
			$this->reminded = $this->remindPassword();
			
			if( !$this->reminded && $this->mode == REMIND_POPUP ) 
			{
				$returnJSON = array();
				$returnJSON['message'] = $this->message;
				
				echo printJSON( $returnJSON );
				exit();
			}
		}

		if( $this->captchaExists() )
			$this->displayCaptcha();

		$this->addCommonJs();
		$this->fillSetCntrlMaps();
		$this->addButtonHandlers();
	
		$this->doCommonAssignments();
		
		$this->showPage();
	}

	/**
	 * @return Boolean
	 */
	protected function remindPassword()
	{		
		global $globalEvents;
		
		if( !$this->checkCaptcha() )
		{
			$this->message = "Codigo de seguridad no válido";
			return false;
		}
						
		$strSQLData = $this->getUserSearchingSQLData();
		$data = $this->cipherer->DecryptFetchedArray( $this->connection->query( $strSQLData["sql"] )->fetchAssoc() );
		if( $data )
		{
			$username = $data[ $this->usernameFiled ];
			$email = $data[ $this->emailField ];
			$password = $data[ $this->passwordFiled ];
		}
	
		$tosearch = strlen( $this->userEmail ) > 0;
	
		if( $tosearch && $globalEvents->exists("BeforeRemindPassword") )
			$tosearch = $globalEvents->BeforeRemindPassword( $username, $email, $this );
		
		if( !$tosearch || !$data )
		{
			$this->message = "Usuario"." ".runner_htmlspecialchars($this->userEmail)." "."no registrado";
			return false;
		}
		
		$dbPassword = $password;
		$token = "";
		if( $this->remindMethod() == RPM_RESET )
		{
			$token = generatePassword(20);
			
			$this->connection->exec("update ".$this->connection->addTableWrappers("public.seg_usuarios")." set "
				.$this->connection->addFieldWrappers( "reset_token9" )."=". $this->connection->prepareString( $token ).","
				.$this->connection->addFieldWrappers( "reset_date1" )."=". $this->connection->addDateQuotes( now() ).""
				." where ".$strSQLData["where"]);
		} 
		else
		{
				if( !$this->cipherer->isFieldEncrypted( $this->passwordFiled ) )
			{
				$password = generatePassword(10);
				$dbPassword = $this->getPasswordHash( $password );
				
				$this->connection->exec("update ".$this->connection->addTableWrappers("public.seg_usuarios")
					." set ".$this->connection->addFieldWrappers( $this->passwordFiled )."='".$dbPassword
					."' where ".$strSQLData["where"]);
			}
	
		}
		
		$reminded = $this->sendRemindEmail( $username, $password, $email, $token, $dbPassword );
		
		if( $reminded ) 
		{
			if( $globalEvents->exists("AfterRemindPassword") )
				$globalEvents->AfterRemindPassword( $username, $email, $this );
		}
		
		return $reminded;
	}
	
	/**
	 * @return String
	 */
	protected function remindMethod()
	{
 //RPM_RESET
		return RPM_RESET;
	}
	
	/**
	 * @param String username
	 * @param String password
	 * @param String email
	 * @param String token
	 * @param String dbPassword
	 * @return Boolean
	 */
	protected function sendRemindEmail( $username, $password, $email, $token, $dbPassword )
	{
		$data = array();
		$url = GetSiteUrl().$_SERVER["SCRIPT_NAME"];
		

		$userData = Security::getUserData($username);
		if ( $userData )
		{
			foreach ($userData as $field => $value) {
				$data[goodFieldName($field)] = $value;
			}
		}
		

		if( $this->remindMethod() == RPM_RESET )
		{
			$template = "resetpassword";
			$data["reseturl"] = str_replace("/remind", "/changepwd", $url)."?token=".$token;
		}
		else
		{
			$template = "remindpassword";
			if( !@$userData["usu_estado"] )
			{		
					$data["activateurl"] = str_replace("/remind", "/register", $url);
				$data["activateurl"] .= "?a=activate&u=".rawurlencode( base64_encode( $username ) )."&code=";
				$data["activateurl"] .= rawurlencode( md5( $username.$dbPassword ) );
			}
			$data["loginurl"] =  str_replace("/remind", "/login", $url)."?username=".rawurlencode( $username );
			$data["username"] = $username;
			$data["password"] = $password;
		}

		$sentMailResults = RunnerPage::sendEmailByTemplate($email, $template, $data);

		if( !@$sentMailResults["mailed"] )
		{
			$this->message = $sentMailResults["message"];
			if( !$this->message )
				$this->message = "Usuario"." ".runner_htmlspecialchars($this->userEmail)." "."no registrado";
		}
	
		return @$sentMailResults["mailed"];	
	}
	
	/**
	 * @return Array
	 */
	protected function getUserSearchingSQLData()
	{
		global $cUserNameFieldType, $cEmailFieldType;		

		 
		$fullcUserNameField = $this->getFieldSQLDecrypt( $this->usernameFiled );

		$sWhere = "(".$fullcUserNameField."=".$this->getSqlPreparedLoginTableValue( $this->userEmail, $this->usernameFiled, $cUserNameFieldType );
		
		$fullcEmailField = $this->getFieldSQLDecrypt( $this->emailField );
	
		$sWhere.= " or ".$fullcEmailField."=".$this->getSqlPreparedLoginTableValue( $this->userEmail, $this->emailField, $cEmailFieldType ).")";
		
		$fullcPasswordField = $this->getFieldSQLDecrypt( $this->passwordFiled );
		$selectClause = "select ".$fullcUserNameField
			." as ".$this->connection->addFieldWrappers( $this->usernameFiled )
			.",".$fullcPasswordField." as ".$this->connection->addFieldWrappers( $this->passwordFiled );
		
		// prevent aliases mixing
		if( $this->usernameFiled != $this->emailField )
			$selectClause.= ",".$fullcEmailField." as ".$this->connection->addFieldWrappers( $this->emailField );

		$selectClause.= ", ".$this->connection->addFieldWrappers("usu_estado");
		
		$strSQLData = array();
		$strSQLData["where"] = $sWhere;		
		$strSQLData["sql"] = $selectClause." from ".$this->connection->addTableWrappers("public.seg_usuarios")." where ".$sWhere;
		
		return $strSQLData;
	}
	
	/**
	 *
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("id", $this->id);
		
		$this->xt->assign("username_email_attrs", ($this->is508 ? "id=\"username_email\" " : "")."value=\"".runner_htmlspecialchars( $this->userEmail )."\"");		
		
		$this->xt->assign("submit_attrs", "onclick='document.forms.form1.submit();return false;'");
		if( $this->mode == REMIND_POPUP && !$this->reminded ) 
		{			
			$this->xt->assign("backlink_attrs", 'style="display:none"');
			$this->xt->assign("submit_attrs","id='submitRemind'");				
		}			

		$this->xt->assign("username_email_label", true);

		if( $this->is508 )
			$this->xt->assign_section("username_email_label","<label for=\"username_email\">","</label>");

		if( $this->message || ( $this->mode == REMIND_POPUP && !$this->reminded ) )
		{
			if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{
				$this->xt->assign("message_class", "alert-danger" );
				$this->xt->assign("message", $this->message);
			}
			else 
			{
				$this->xt->assign("message","<div class='message rnr-error'>".$this->message."</div>");
			}
			
			$this->xt->assign("message_block", true);
			
			if( $this->mode == REMIND_POPUP && !$this->reminded ) 
				$this->xt->displayBrickHidden("message");
		}

		$this->xt->assign("closewindow_attrs", 'style="display:none" id="closeWindowRemind"');

		if( $this->mode == REMIND_SIMPLE )
			$this->assignBody();		
	}
	
	/**
	 *
	 */
	protected function assignBody()
	{
		$this->body["begin"].= GetBaseScriptsForPage(false);

		$this->body["begin"].= "<form method=post action=\"".GetTableLink("remind")."\" id=form1 name=form1>
		<input type=hidden name=btnSubmit value=\"Remind\">";
	
		$this->body['end'] = XTempl::create_method_assignment("assignBodyEnd", $this);
		$this->xt->assign("body", $this->body);	
	}	
	
	/**
	 * Assign body end
	 * @intellisense
	 */	
	function assignBodyEnd($params = "") 
	{
		$this->fillSetCntrlMaps();
		echo "</form>";
		echo "<script>
			window.controlsMap = ".my_json_encode($this->controlsHTMLMap).";
			window.viewControlsMap = ".my_json_encode($this->viewControlsHTMLMap).";
			window.settings = ".my_json_encode($this->jsSettings)."; 
			</script>\r\n";
		echo "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";
		echo "<script>".$this->PrepareJS()."</script>";
	}	
	
	/**
	 *
	 */
	protected function showPage()
	{
		global $globalEvents;

		if( $this->reminded )
		{
			$this->updatePageLayoutAndCSS("", "success");	
			$this->templatefile = GetTemplateName("", "remind_success");
		}
		
		if( $globalEvents->exists("BeforeShowRemindPwd") )
			$globalEvents->BeforeShowRemindPwd( $this->xt, $this->templatefile, $this );

			
		if( $this->mode == REMIND_POPUP )
		{
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body", $this->body);	// true if reminded?			
			
			$this->displayAJAX( $this->templatefile, $this->id + 1 );
			return;		
		}

		$this->display( $this->templatefile );	
	}
	
	/**
	 * @return String
	 */	
	public static function readActionFromRequest()
	{		
		return postvalue("btnSubmit");
	}
	
	/**
	 * @return Number
	 */
	public static function readRemindModeFromRequest()
	{
		$pageMode = postvalue("mode");
		
		if( $pageMode == "popup" )
			return REMIND_POPUP;
			
		return REMIND_SIMPLE;
	}	
}
?>