<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("include/public_seg_usuarios_variables.php");
require_once(getabspath("classes/cipherer.php"));
require_once("classes/registerpage.php");
require_once('include/xtempl.php');





$layout = new TLayout("register_bootstrap", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "_register";
$layout->blocks["top"] = array();
$layout->containers["regpage"] = array();
$layout->container_properties["regpage"] = array(  );
$layout->containers["regpage"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"header" );
$layout->containers["header"] = array();
$layout->container_properties["header"] = array(  );
$layout->containers["header"][] = array("name"=>"regheader",
	"block"=>"regheader", "substyle"=>1  );

$layout->skins["header"] = "";


$layout->containers["regpage"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"message" );
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "";


$layout->skins["regpage"] = "";

$layout->blocks["top"][] = "regpage";
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"regfields",
	"block"=>"", "substyle"=>1  );

$layout->skins["fields"] = "";

$layout->blocks["top"][] = "fields";
$layout->containers["bottombuttons"] = array();
$layout->container_properties["bottombuttons"] = array(  );
$layout->containers["bottombuttons"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"buttons" );
$layout->containers["buttons"] = array();
$layout->container_properties["buttons"] = array(  );
$layout->containers["buttons"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"leftbuttons" );
$layout->containers["leftbuttons"] = array();
$layout->container_properties["leftbuttons"] = array(  );
$layout->containers["leftbuttons"][] = array("name"=>"regbuttons",
	"block"=>"regbuttons", "substyle"=>1  );

$layout->skins["leftbuttons"] = "";


$layout->skins["buttons"] = "";


$layout->skins["bottombuttons"] = "";

$layout->blocks["top"][] = "bottombuttons";
$page_layouts["register"] = $layout;








$layout = new TLayout("register_success_bootstrap", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "_register_success";
$layout->blocks["top"] = array();
$layout->containers["page"] = array();
$layout->container_properties["page"] = array(  );
$layout->containers["page"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"page_1" );
$layout->containers["page_1"] = array();
$layout->container_properties["page_1"] = array(  );
$layout->containers["page_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"panel" );
$layout->containers["panel"] = array();
$layout->container_properties["panel"] = array(  );
$layout->containers["panel"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"header" );
$layout->containers["header"] = array();
$layout->container_properties["header"] = array(  );
$layout->containers["header"][] = array("name"=>"regheader",
	"block"=>"regheader", "substyle"=>1  );

$layout->skins["header"] = "";


$layout->containers["panel"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"body" );
$layout->containers["body"] = array();
$layout->container_properties["body"] = array(  );
$layout->containers["body"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"header_1" );
$layout->containers["header_1"] = array();
$layout->container_properties["header_1"] = array(  );
$layout->containers["header_1"][] = array("name"=>"registered",
	"block"=>"registered_block", "substyle"=>1  );

$layout->skins["header_1"] = "";


$layout->skins["body"] = "";


$layout->skins["panel"] = "";


$layout->skins["page_1"] = "";


$layout->skins["page"] = "";

$layout->blocks["top"][] = "page";
$page_layouts["register_success"] = $layout;




$xt = new Xtempl();

$id = postvalue("id");
$id = $id ? $id : 1;

$params = array();
$params["id"] = $id;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params["pageType"] = PAGE_REGISTER;
$params["templatefile"] = "register.htm";
$params["needSearchClauseObj"] = false;
$params["captchaValue"] = postvalue("value__register_captcha_" . $id);

$params["action"] = RegisterPage::readActionFromRequest();
$params["mode"] = RegisterPage::readRegisterModeFromRequest();

$xt->assign("closewindow_attrs", 'style="display:none" id="closeWindowRegister"'); //?

$pageObject = new RegisterPage( $params );
$pageObject->init();

$pageObject->process();

?>