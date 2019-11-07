<?php
class RegisterPage extends RunnerPage
{
	public $pwdStrong = false;

	public $action;
	
	protected $regValues = array();
	
	protected $registerSuccess = false;
	
	protected $strUsername;
	protected $strPassword;
	protected $strEmail;
	
	protected $passwordFiled;
	protected $usernameFiled;
	protected $emailFiled;
	
	protected $prepActivationCode = "";
	
	protected $sendActivationLink = false;
	
	
	function __construct(&$params = "")
	{
		parent::__construct($params);

		$this->passwordFiled = GetPasswordField();
		$this->usernameFiled = GetUserNameField();
		$this->emailFiled = GetEmailField();

		
		// fill global password settings
		$this->pwdStrong = GetGlobalData("pwdStrong", false);
		if( $this->pwdStrong )
		{
			$this->settingsMap["globalSettings"]["pwdLen"] = GetGlobalData("pwdLen", 0);
			$this->settingsMap["globalSettings"]["pwdUnique"] = GetGlobalData("pwdUnique", 0);
			$this->settingsMap["globalSettings"]["pwdDigits"] = GetGlobalData("pwdDigits", 0);
			$this->settingsMap["globalSettings"]["pwdStrong"] = true;
			$this->settingsMap["globalSettings"]["pwdUpperLower"] = GetGlobalData("pwdUpperLower", false);
		}

		$this->formBricks["header"] = "regheader";
		$this->formBricks["footer"] = "regbuttons";
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
	
	/**
	 * Set the 'cipherer' property
	 */
	protected function assignCipherer()
	{
		$this->cipherer = new RunnerCipherer( $this->tName );
	}	

	
	/**
	 *
	 */
	public function process()
	{
		global $globalEvents;
		
		//	Before Process event
		if( $globalEvents->exists("BeforeProcessRegister") )
			$globalEvents->BeforeProcessRegister( $this );


		if( $this->action == "Register" )
		{
			$this->registerSuccess = $this->registerNewUser();
			$this->doAfterRegistrationEvent();
				
		
			if( !$this->registerSuccess && $this->mode == REGISTER_POPUP  )
			{
				$returnJSON = array();
				$returnJSON['success'] = false;
				
				if( strlen( $this->message ) )
				{
					$returnJSON['wrongCaptchaFieldName'] = $this->getCaptchaFieldName();
					$returnJSON['message'] = $this->message;
				}	
				
				echo printJSON($returnJSON);
				exit();
			}
		}
	
		// proccess captcha
		if( $this->captchaExists() )
			$this->displayCaptcha();

		if( !$this->registerSuccess )
		{		
			$this->prepareEditControls();	
			$this->prepareSteps();
			$this->fillCntrlTabGroups();
			$this->prepareReadonlyFields();		
		}		
	
		if( $this->registerSuccess && !$this->sendActivationLink || !$this->registerSuccess )
		{
			$this->addCommonJs();
			$this->fillSetCntrlMaps();
			$this->addButtonHandlers();		
		}
		
		$this->doCommonAssignments();
		
		$this->showPage();
	}

	/**
	 * Run after registration event
	 */
	protected function doAfterRegistrationEvent()
	{
		global $globalEvents;
		
		if( $this->registerSuccess && $globalEvents->exists("AfterSuccessfulRegistration") )
			$globalEvents->AfterSuccessfulRegistration( $this->regValues, $this );			
		
		if( !$this->registerSuccess && $globalEvents->exists("AfterUnsuccessfulRegistration") )
			$globalEvents->AfterUnsuccessfulRegistration( $this->regValues, $this->message, $this );		
	}

	
	
	
	/**
	 *
	 */
	protected function registerNewUser()
	{
		global $globalEvents;
		
		$allow_registration = true;
		
		if ( !$this->checkCaptcha() )
			$allow_registration = false;

		$values = array();		
		$blobfields = array();
		$filename_values = array();
		foreach( $this->pSet->getFieldsForRegister() as $uf )
		{
			$_control = $this->getControl( $uf, $this->id );;
			$_control->readWebValue($values, $blobfields, NULL, NULL, $filename_values);;
		}

		//	add filenames to values
		foreach( $filename_values as $key => $value )
		{
			$values[ $key ] = $value;
		}		

		
		$this->strUsername = $values["usu_identificacion"];
		$this->strPassword = $values["usu_contrasena"];
		$this->strEmail = $values["usu_correo"];
		
		if( !$this->checkRegisterData( $this->strUsername, $this->strPassword, $this->strEmail ) )
			$allow_registration = false;

		$retval = $allow_registration;
		if( $retval && $globalEvents->exists("BeforeRegister") )
			$retval = $globalEvents->BeforeRegister($values, $this->message, $this);
		
		if( !$retval ) 			
			return false;
			
		$passwordHash = md5( $values["usu_contrasena"] );
		$originalpassword = $values["usu_contrasena"];
		//	encrypt password
		if( !$this->cipherer->isFieldEncrypted( $this->passwordFiled ) )
		{
			$passwordHash = $this->getPasswordHash( $values["usu_contrasena"] );
			$values["usu_contrasena"] = $passwordHash;
		}

		$retval = DoInsertRecord("public.seg_usuarios", $values, $blobfields, $this);
		
		$values["usu_contrasena"] = $originalpassword;

		$this->regValues = $values;
		
		return $retval;
	}

	/**
	 * Check if the registration data is valid
	 * @param String strUsername
	 * @param String strPassword
	 * @param String strEmail
	 * @return Boolean
	 */
	protected function checkRegisterData( $strUsername, $strPassword, $strEmail )
	{
		$ret = true;
		
		//	check if entered username already exists
		if( !strlen($strUsername) )
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['msg_userError'] = "El nombre de usuario no puede estar vacío";
			$ret = false;
		}	
		else if( !$this->checkIfUsernameUnique( $strUsername ) )
		{		
			$this->jsSettings['tableSettings'][ $this->tName ]['msg_userError'] = "Este nombre de usuario"." <i>".$strUsername."</i> "."ya existe. Elija otro nombre de usuario.";
			$ret = false;
		}

		//	check if entered email already exists
		if( !strlen($strEmail) )
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['msg_emailError'] = "Favor de escribir dirección electrónica válida";
			$ret = false;
		}
		else if( !$this->checkIfEmailUnique( $strEmail ) )
		{
			$this->jsSettings['tableSettings'][ $this->tName ]['msg_emailError'] = "Correo electrónico"." <i>".$strEmail."</i> "."registrado, si olvidó su nombre de usuario o contraseña use la forma de recordador de contraseña";
			$ret = false;
		}
		
		if( $this->pwdStrong )
		{
			if( !checkpassword( $strPassword ) )
			{
				$this->jsSettings['tableSettings'][ $this->tName ]['msg_passwordError'] = $this->getPwdStrongFailedMessage();
				$ret = false;
			}
		}
		
		return $ret;
	}
	
	
	/**
	 * @return String
	 */
	protected function getPwdStrongFailedMessage()
	{
		$msg = "";
		$pwdLen = GetGlobalData("pwdLen", 0);
		if($pwdLen)
		{
			$fmt = "La contraseña debe contener por lo menos %% carácteres ";
			$fmt = str_replace("%%", "".$pwdLen, $fmt);
			$msg.= "<br>".$fmt;
		}
		$pwdUnique = GetGlobalData("pwdUnique", 0);
		if($pwdUnique)
		{
			$fmt = "La contraseña debe contener %% carácteres únicos";
			$fmt = str_replace("%%", "".$pwdUnique, $fmt);
			$msg.= "<br>".$fmt;
		}
		$pwdDigits = GetGlobalData("pwdDigits", 0);
		if($pwdDigits)
		{
			$fmt = "La contraseña debe contener por lo menos %% dígitos o símbolos";
			$fmt = str_replace("%%", "".$pwdDigits, $fmt);
			$msg.= "<br>".$fmt;
		}
		if(GetGlobalData("pwdUpperLower", false))
		{
			$fmt = "La contraseña debe contener letras en mayúscula y minúscula";
			$msg.= "<br>".$fmt;
		}
		
		if($msg)
			$msg = substr($msg, 4);

		return $msg;		
	}
	
	/**
	 * @param String strUsername
	 * @return Boolean
	 */
	protected function checkIfUsernameUnique( $strUsername )
	{
		if( $this->cipherer->isFieldEncrypted("usu_identificacion") )
			$sUsername = $this->cipherer->MakeDBValue("usu_identificacion", $strUsername, "", true);	
		else 
			$sUsername = add_db_quotes("usu_identificacion", $strUsername);
			
		$strSQL = "select count(*) from ". $this->connection->addTableWrappers( "public.seg_usuarios" ) 
			. " where " . $this->getFieldSQLDecrypt("usu_identificacion") . "=" . $sUsername;
		
		$data = $this->connection->query( $strSQL )->fetchNumeric();
		return $data[0] == 0;
	}
	
	/**
	 * @param String strEmail
	 * @return Boolean
	 */
	protected function checkIfEmailUnique( $strEmail )
	{
		if( $this->cipherer->isFieldEncrypted("usu_correo") )
			$sEmail = $this->cipherer->MakeDBValue("usu_correo", $strEmail, "", true);	
		else 
			$sEmail = add_db_quotes("usu_correo", $strEmail);
			
		$strSQL = "select count(*) from ". $this->connection->addTableWrappers( "public.seg_usuarios" ) 
			." where ".$this->getFieldSQLDecrypt("usu_correo")."=".$sEmail;
		
		$data = $this->connection->query( $strSQL )->fetchNumeric();
		return $data[0] == 0;	
	}
	
	/**
	 * Set values for the page's controls
	 */
	protected function prepareEditControls()
	{
		$regFields = $this->pSet->getFieldsForRegister();
			
		if( !count($this->regValues) )
		{
			foreach( $regFields as $f )
			{
				$defaultValue = GetDefaultValue($f, PAGE_REGISTER);
				if( strlen($defaultValue) )
					$this->regValues[ $f ] = $defaultValue;
			}
		}

		foreach($regFields as $fName)
		{
			$gfName = GoodFieldName($fName);
			
			$parameters = array();
			$parameters["id"] = $this->id;
			$parameters["mode"] = "add";
			$parameters["field"] = $fName;
			$parameters["value"] = $this->regValues[ $fName ];
			$parameters["pageObj"] = $this;
			$parameters["suggest"] = ($fName == $this->passwordFiled || $fName == $this->usernameFiled || $fName == $this->emailFiled);
				
			if( $this->pSet->getEditFormat($fName) == 'Time' )
				$this->fillTimePickSettings( $fName, @$this->regValues[ $fName ] );
			
			if( $fName == $this->passwordFiled )
			{
				$parameters["extraParams"] = array();
				$parameters["extraParams"]["getConrirmFieldCtrl"] = true;
				$this->jsSettings['tableSettings'][ $this->tName ]['passFieldName'] = $fName;
			}
			
			if( $fName == $this->usernameFiled )
				$this->jsSettings['tableSettings'][ $this->tName ]['userFieldName'] = $fName;
				
			if( $fName == $this->emailFiled )
				$this->jsSettings['tableSettings'][ $this->tName ]['emailFieldName'] = $fName;
				
			// Add validation
			if( $fName == $this->usernameFiled || $fName == $this->passwordFiled || $fName == $this->emailFiled )
				$parameters["validate"] = Array('basicValidate' => Array ( 'IsRequired' )); 
			else 
				$parameters["validate"] = $this->pSet->getValidation( $fName );
				
			$controls = array('controls' => array());
			$controls["controls"]["id"] = $this->id;
			$controls["controls"]["mode"] = "add";
			$controls["controls"]["ctrlInd"] = 0;
			$controls["controls"]['suggest'] = $parameters["suggest"];
			$controls["controls"]['fieldName'] = $fName;
				
			if( $this->is508 && $this->getLayoutVersion() != BOOTSTRAP_LAYOUT )
				$this->xt->assign_section($gfName."_label", "<label for=\"".$this->getInputElementId($fName)."\">", "</label>");
			
			$this->xt->assign($gfName."_fieldblock", true);
			$this->xt->assign($gfName."_tabfieldblock", true);

			if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{			
				$firstElementId = $this->getControl($fName, $this->id)->getFirstElementId();
				if ( $firstElementId )
				{
					$this->xt->assign("labelfor_" . goodFieldName($fName), $firstElementId);
				}
			}
				
			$this->xt->assign_function($gfName."_editcontrol", "xt_buildeditcontrol", $parameters );

			$preload = $this->fillPreload($fName, $regFields, $this->regValues);
			if( $preload !== false)
				$controls["controls"]['preloadData'] = $preload;
			
			$this->fillControlsMap( $controls );
			$this->fillFieldToolTips( $fName );
			$this->fillControlFlags( $fName, $fName == $this->usernameFiled || $fName == $this->passwordFiled || $fName == $this->emailFiled );
			
			// Confirm field for re-enter password
			if( $fName == $this->passwordFiled && $this->passwordFiled != $this->usernameFiled)
			{
				$parameters = array();
				$parameters["id"] = $this->id;
				$parameters["mode"] = "add";
				$parameters["field"] = "confirm";
				$parameters["format"] = "Password";
				$parameters["suggest"] = true;
				$parameters["pageObj"] = $this;
				$parameters["validate"]['basicValidate'] = array('IsRequired');
						
				$parameters["extraParams"] = array();
				$parameters["extraParams"]["isConfirm"] = true;
				$parameters["extraParams"]["getConrirmFieldCtrl"] = true;
						
				$controls = array('controls' => array());
				$controls["controls"]['id'] = $this->id;
				$controls["controls"]['mode'] = "add";
				$controls["controls"]['ctrlInd'] = 0;
				$controls["controls"]['suggest'] = true;
				$controls["controls"]['fieldName'] = "confirm";
						
				$this->xt->assign("confirm_label", true);
				if( $this->is508 )
					$this->xt->assign_section("confirm_label", "<label for=\"value_confirm_".$this->id."\">", "</label>");
					
				if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
				{			
					$this->xt->assign("labelfor_" . goodFieldName($fName) . "_confirm", "value_confirm_".$this->id);
				}

				$this->xt->assign_function("confirm_editcontrol1", "xt_buildeditcontrol", $parameters );
				$this->xt->assign("confirm_block", true);
				
				$this->fillControlsMap( $controls );
				$this->fillControlFlags( "confirm", true );
			}
		}	
	}
	
	/**
	 *
	 */
	protected function prepareReadonlyFields()
	{
		//	show readonly fields
		foreach( $this->pSet->getFieldsForRegister() as $uf )
		{
			if( $this->pSet->getEditFormat( $uf ) == EDIT_FORMAT_READONLY )
				$this->readOnlyFields[ $uf ] = $this->showDBValue( $uf , $this->regValues );
		}
	}
	
	/**
	 * Check is captcha exists on current page
	 *
	 * @intellisense
	 */
	function captchaExists()
	{
		$captchaSettings = GetGlobalData("CaptchaSettings", false);
		return $captchaSettings["isEnabledOnRegister"];
	}

	/**
	 * Get captcha field name
	 *
	 * @intellisense
	 */
	function getCaptchaFieldName()
	{		
		return "_register_captcha";
	}

	function getCaptchaId() 
	{
		return "register";
	}

	/**
	 *
	 */
	public function setDatabaseError( $message )
	{
		//global $strMessage;
		$this->message = $messageText;
	}

	function isMultistepped()
	{
		return $this->pSet->isRegisterMultistep();
	}
	
	/**
	 *
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("id", $this->id);
		$this->xt->assign("legend", true);
		
		$this->xt->assign("buttons_block", true);

		$this->xt->assign("message_block", true);
		if ( strlen($this->message) )
		{
			if ( $this->getLayoutVersion() == BOOTSTRAP_LAYOUT )
			{	
				$messageClass = "alert-danger";
				if ( $this->registerSuccess )
				{
					$messageClass = "alert-success";
				}

				$this->xt->assign("message_class", $messageClass );
				$this->xt->assign("message", $this->message);
			}
			else
			{
				$this->xt->assign("message", "<div class='message rnr-error'>" . $this->message . "</div>" );
			}
		}
		else
			$this->xt->displayBrickHidden("message");	
		
		$addStyle = "";
		if ( $this->isMultistepped() )
			$addStyle = " style=\"display: none;\"";
		
		$this->xt->assign("submit_attrs", "id=\"saveButton".$this->id."\"" . $addStyle);		
		
		if( $this->registerSuccess )
		{
			$this->xt->assign("registered_block", true);
			$this->xt->assign("loginlink_attrs","onclick=\"document.forms.loginform.submit();return false;\" id=\"ProceedToLogin\"");
			if( $this->mode == REGISTER_POPUP )
			{
				$this->xt->assign("close_win_btn", true);
				$this->xt->assign("closewindow_attrs", 'id="closeWindowRegister"');
			}
		}
		
		if( $this->mode == REGISTER_POPUP )
			$this->xt->assign("backlink_attrs", 'style="display:none"');
		if( $this->mode == REGISTER_SIMPLE )
			$this->assignBody();
	}
	
	/**
	 *
	 */
	protected function assignBody()
	{
		if( $this->registerSuccess )
		{
			$this->body["begin"].= GetBaseScriptsForPage( false )
				."<form method=\"POST\" action=\"".GetTableLink("login")."\" name=\"loginform\">
					<input type=\"Hidden\" name=username value=\"".runner_htmlspecialchars($this->strUsername)."\">".
					"<input type=\"Hidden\" name=password value=\"".runner_htmlspecialchars($this->strPassword)."\"></form>";

			
			$this->body['end'] = XTempl::create_method_assignment("assignBodyEnd", $this);
			$this->xt->assign("body", $this->body);			
			return;
		}
		
		parent::assignBody();		
	}
	
	/**
	 *
	 */
	protected function showPage()
	{
		global $globalEvents;
		
		if( $this->registerSuccess )
		{
			$this->updatePageLayoutAndCSS("", "success");	
			$this->templatefile = GetTemplateName("", "register_success");
		}
		
		if( $globalEvents->exists("BeforeShowRegister") )
			$globalEvents->BeforeShowRegister($this->xt, $this->templatefile, $this);
			
		if ( $this->mode == REGISTER_POPUP ) 
		{
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body",  $this->body); //?  true fore register success ?
			
			$this->displayAJAX($this->templatefile, $this->id + 1);
			exit();
		}
						
		$this->display( $this->templatefile );
		return;				
	}
	
	/**
	 * @return Number
	 */
	public static function readRegisterModeFromRequest()
	{		
		if( postvalue("onFly") == 1 ) //fix it
			return REGISTER_POPUP;
			
		return REGISTER_SIMPLE;
	}
	
	/**
	 * @return String
	 */
	public static function readActionFromRequest()
	{	
		if( @$_POST["btnSubmit"] )
			return @$_POST["btnSubmit"];
			
		return postvalue("a");
	}
}
?>