<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_users = array();
	$tdataadmin_users[".truncateText"] = true;
	$tdataadmin_users[".NumberOfChars"] = 400;
	$tdataadmin_users[".ShortName"] = "admin_users";
	$tdataadmin_users[".OwnerID"] = "";
	$tdataadmin_users[".OriginalTable"] = "public.seg_usuarios";

//	field labels
$fieldLabelsadmin_users = array();
$fieldToolTipsadmin_users = array();
$pageTitlesadmin_users = array();
$placeHoldersadmin_users = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_users["Spanish"] = array();
	$fieldToolTipsadmin_users["Spanish"] = array();
	$placeHoldersadmin_users["Spanish"] = array();
	$pageTitlesadmin_users["Spanish"] = array();
	$fieldLabelsadmin_users["Spanish"]["id_usuario"] = "Serial Usuario";
	$fieldToolTipsadmin_users["Spanish"]["id_usuario"] = "";
	$placeHoldersadmin_users["Spanish"]["id_usuario"] = "";
	$fieldLabelsadmin_users["Spanish"]["usu_identificacion"] = "Identificación";
	$fieldToolTipsadmin_users["Spanish"]["usu_identificacion"] = "";
	$placeHoldersadmin_users["Spanish"]["usu_identificacion"] = "";
	$fieldLabelsadmin_users["Spanish"]["usu_nombres"] = "Nombres";
	$fieldToolTipsadmin_users["Spanish"]["usu_nombres"] = "";
	$placeHoldersadmin_users["Spanish"]["usu_nombres"] = "";
	$fieldLabelsadmin_users["Spanish"]["usu_contrasena"] = "Contraseña";
	$fieldToolTipsadmin_users["Spanish"]["usu_contrasena"] = "";
	$placeHoldersadmin_users["Spanish"]["usu_contrasena"] = "";
	$fieldLabelsadmin_users["Spanish"]["usu_correo"] = "Correo";
	$fieldToolTipsadmin_users["Spanish"]["usu_correo"] = "";
	$placeHoldersadmin_users["Spanish"]["usu_correo"] = "";
	$fieldLabelsadmin_users["Spanish"]["usu_estado"] = "Estado";
	$fieldToolTipsadmin_users["Spanish"]["usu_estado"] = "";
	$placeHoldersadmin_users["Spanish"]["usu_estado"] = "";
	$fieldLabelsadmin_users["Spanish"]["reset_token"] = "Reset Token";
	$fieldToolTipsadmin_users["Spanish"]["reset_token"] = "";
	$placeHoldersadmin_users["Spanish"]["reset_token"] = "";
	$fieldLabelsadmin_users["Spanish"]["reset_date"] = "Reset Date";
	$fieldToolTipsadmin_users["Spanish"]["reset_date"] = "";
	$placeHoldersadmin_users["Spanish"]["reset_date"] = "";
	$fieldLabelsadmin_users["Spanish"]["id_perfil"] = "Cargo";
	$fieldToolTipsadmin_users["Spanish"]["id_perfil"] = "";
	$placeHoldersadmin_users["Spanish"]["id_perfil"] = "";
	if (count($fieldToolTipsadmin_users["Spanish"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_users[""] = array();
	$fieldToolTipsadmin_users[""] = array();
	$placeHoldersadmin_users[""] = array();
	$pageTitlesadmin_users[""] = array();
	$fieldLabelsadmin_users[""]["id_usuario"] = "Id Usuario";
	$fieldToolTipsadmin_users[""]["id_usuario"] = "";
	$placeHoldersadmin_users[""]["id_usuario"] = "";
	$fieldLabelsadmin_users[""]["usu_identificacion"] = "Usu Identificacion";
	$fieldToolTipsadmin_users[""]["usu_identificacion"] = "";
	$placeHoldersadmin_users[""]["usu_identificacion"] = "";
	$fieldLabelsadmin_users[""]["usu_nombres"] = "Usu Nombres";
	$fieldToolTipsadmin_users[""]["usu_nombres"] = "";
	$placeHoldersadmin_users[""]["usu_nombres"] = "";
	$fieldLabelsadmin_users[""]["usu_contrasena"] = "Usu Contrasena";
	$fieldToolTipsadmin_users[""]["usu_contrasena"] = "";
	$placeHoldersadmin_users[""]["usu_contrasena"] = "";
	$fieldLabelsadmin_users[""]["usu_correo"] = "Usu Correo";
	$fieldToolTipsadmin_users[""]["usu_correo"] = "";
	$placeHoldersadmin_users[""]["usu_correo"] = "";
	$fieldLabelsadmin_users[""]["usu_estado"] = "Usu Estado";
	$fieldToolTipsadmin_users[""]["usu_estado"] = "";
	$placeHoldersadmin_users[""]["usu_estado"] = "";
	$fieldLabelsadmin_users[""]["reset_token"] = "Reset Token";
	$fieldToolTipsadmin_users[""]["reset_token"] = "";
	$placeHoldersadmin_users[""]["reset_token"] = "";
	$fieldLabelsadmin_users[""]["reset_date"] = "Reset Date";
	$fieldToolTipsadmin_users[""]["reset_date"] = "";
	$placeHoldersadmin_users[""]["reset_date"] = "";
	$fieldLabelsadmin_users[""]["id_perfil"] = "Id Perfil";
	$fieldToolTipsadmin_users[""]["id_perfil"] = "";
	$placeHoldersadmin_users[""]["id_perfil"] = "";
	if (count($fieldToolTipsadmin_users[""]))
		$tdataadmin_users[".isUseToolTips"] = true;
}


	$tdataadmin_users[".NCSearch"] = true;



$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 0;
$tdataadmin_users[".recsPerRowPrint"] = 1;
$tdataadmin_users[".mainTableOwnerID"] = "";
$tdataadmin_users[".moveNext"] = 0;
$tdataadmin_users[".entityType"] = 1;

$tdataadmin_users[".strOriginalTableName"] = "public.seg_usuarios";

	



$tdataadmin_users[".showAddInPopup"] = false;

$tdataadmin_users[".showEditInPopup"] = false;

$tdataadmin_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_users[".fieldsForRegister"] = array();

	$tdataadmin_users[".listAjax"] = true;

	$tdataadmin_users[".audit"] = false;

	$tdataadmin_users[".locking"] = false;



$tdataadmin_users[".list"] = true;











$tdataadmin_users[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_users[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataadmin_users[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataadmin_users[".searchSaving"] = false;
//

$tdataadmin_users[".showSearchPanel"] = true;
		$tdataadmin_users[".flexibleSearch"] = true;

$tdataadmin_users[".isUseAjaxSuggest"] = true;

$tdataadmin_users[".rowHighlite"] = true;





$tdataadmin_users[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_users[".buttonsAdded"] = false;

$tdataadmin_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;



$tdataadmin_users[".badgeColor"] = "40E0D0";


$tdataadmin_users[".allSearchFields"] = array();
$tdataadmin_users[".filterFields"] = array();
$tdataadmin_users[".requiredSearchFields"] = array();

$tdataadmin_users[".allSearchFields"][] = "usu_identificacion";
	$tdataadmin_users[".allSearchFields"][] = "usu_nombres";
	$tdataadmin_users[".allSearchFields"][] = "usu_correo";
	$tdataadmin_users[".allSearchFields"][] = "usu_estado";
	

$tdataadmin_users[".googleLikeFields"] = array();
$tdataadmin_users[".googleLikeFields"][] = "id_usuario";
$tdataadmin_users[".googleLikeFields"][] = "usu_identificacion";
$tdataadmin_users[".googleLikeFields"][] = "usu_nombres";
$tdataadmin_users[".googleLikeFields"][] = "usu_contrasena";
$tdataadmin_users[".googleLikeFields"][] = "usu_correo";
$tdataadmin_users[".googleLikeFields"][] = "usu_estado";
$tdataadmin_users[".googleLikeFields"][] = "reset_token";
$tdataadmin_users[".googleLikeFields"][] = "reset_date";
$tdataadmin_users[".googleLikeFields"][] = "id_perfil";


$tdataadmin_users[".advSearchFields"] = array();
$tdataadmin_users[".advSearchFields"][] = "usu_identificacion";
$tdataadmin_users[".advSearchFields"][] = "usu_nombres";
$tdataadmin_users[".advSearchFields"][] = "usu_correo";
$tdataadmin_users[".advSearchFields"][] = "usu_estado";

$tdataadmin_users[".tableType"] = "list";

$tdataadmin_users[".printerPageOrientation"] = 0;
$tdataadmin_users[".nPrinterPageScale"] = 100;

$tdataadmin_users[".nPrinterSplitRecords"] = 40;

$tdataadmin_users[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_users[".geocodingEnabled"] = false;





$tdataadmin_users[".listGridLayout"] = 3;

$tdataadmin_users[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataadmin_users[".pageSize"] = 20;

$tdataadmin_users[".warnLeavingPages"] = true;



$tstrOrderBy = "order by usu_nombres asc";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_users[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_users[".orderindexes"] = array();
	$tdataadmin_users[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "usu_nombres");


$tdataadmin_users[".sqlHead"] = "SELECT id_usuario,  usu_identificacion,  usu_nombres,  usu_contrasena,  usu_correo,  usu_estado,  reset_token,  reset_date,  id_perfil";
$tdataadmin_users[".sqlFrom"] = "FROM \"public\".seg_usuarios";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_users[".highlightSearchResults"] = true;

$tableKeysadmin_users = array();
$tableKeysadmin_users[] = "id_usuario";
$tdataadmin_users[".Keys"] = $tableKeysadmin_users;

$tdataadmin_users[".listFields"] = array();
$tdataadmin_users[".listFields"][] = "usu_identificacion";
$tdataadmin_users[".listFields"][] = "usu_nombres";
$tdataadmin_users[".listFields"][] = "usu_correo";
$tdataadmin_users[".listFields"][] = "usu_estado";

$tdataadmin_users[".hideMobileList"] = array();


$tdataadmin_users[".viewFields"] = array();

$tdataadmin_users[".addFields"] = array();

$tdataadmin_users[".masterListFields"] = array();
$tdataadmin_users[".masterListFields"][] = "id_usuario";
$tdataadmin_users[".masterListFields"][] = "usu_contrasena";
$tdataadmin_users[".masterListFields"][] = "reset_token";
$tdataadmin_users[".masterListFields"][] = "reset_date";
$tdataadmin_users[".masterListFields"][] = "id_perfil";
$tdataadmin_users[".masterListFields"][] = "usu_identificacion";
$tdataadmin_users[".masterListFields"][] = "usu_nombres";
$tdataadmin_users[".masterListFields"][] = "usu_correo";
$tdataadmin_users[".masterListFields"][] = "usu_estado";

$tdataadmin_users[".inlineAddFields"] = array();

$tdataadmin_users[".editFields"] = array();

$tdataadmin_users[".inlineEditFields"] = array();

$tdataadmin_users[".updateSelectedFields"] = array();


$tdataadmin_users[".exportFields"] = array();

$tdataadmin_users[".importFields"] = array();

$tdataadmin_users[".printFields"] = array();


//	id_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_usuario";
	$fdata["GoodName"] = "id_usuario";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","id_usuario");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id_usuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_usuario";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataadmin_users["id_usuario"] = $fdata;
//	usu_identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "usu_identificacion";
	$fdata["GoodName"] = "usu_identificacion";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","usu_identificacion");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "usu_identificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_identificacion";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Error, Intentelo de nuevo", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["register"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Error, Intentelo de nuevo", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Error, Intentelo de nuevo", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["usu_identificacion"] = $fdata;
//	usu_nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "usu_nombres";
	$fdata["GoodName"] = "usu_nombres";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","usu_nombres");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "usu_nombres";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_nombres";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["usu_nombres"] = $fdata;
//	usu_contrasena
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "usu_contrasena";
	$fdata["GoodName"] = "usu_contrasena";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","usu_contrasena");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "usu_contrasena";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_contrasena";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Password");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataadmin_users["usu_contrasena"] = $fdata;
//	usu_correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usu_correo";
	$fdata["GoodName"] = "usu_correo";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","usu_correo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "usu_correo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_correo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["usu_correo"] = $fdata;
//	usu_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usu_estado";
	$fdata["GoodName"] = "usu_estado";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","usu_estado");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "usu_estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_estado";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["usu_estado"] = $fdata;
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","reset_token");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "reset_token";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataadmin_users["reset_token"] = $fdata;
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","reset_date");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "reset_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataadmin_users["reset_date"] = $fdata;
//	id_perfil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_perfil";
	$fdata["GoodName"] = "id_perfil";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_users","id_perfil");
	$fdata["FieldType"] = 20;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id_perfil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_perfil";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Label";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["register"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Label";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Label";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;








	$tdataadmin_users["id_perfil"] = $fdata;


$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;
$placeHolders["admin_users"] = &$placeHoldersadmin_users;
$page_titles["admin_users"] = &$pageTitlesadmin_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_usuario,  usu_identificacion,  usu_nombres,  usu_contrasena,  usu_correo,  usu_estado,  reset_token,  reset_date,  id_perfil";
$proto0["m_strFrom"] = "FROM \"public\".seg_usuarios";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by usu_nombres asc";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_usuario",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_users"
));

$proto6["m_sql"] = "id_usuario";
$proto6["m_srcTableName"] = "admin_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_identificacion",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_users"
));

$proto8["m_sql"] = "usu_identificacion";
$proto8["m_srcTableName"] = "admin_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_nombres",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_users"
));

$proto10["m_sql"] = "usu_nombres";
$proto10["m_srcTableName"] = "admin_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_contrasena",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_users"
));

$proto12["m_sql"] = "usu_contrasena";
$proto12["m_srcTableName"] = "admin_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_correo",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_users"
));

$proto14["m_sql"] = "usu_correo";
$proto14["m_srcTableName"] = "admin_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_estado",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_users"
));

$proto16["m_sql"] = "usu_estado";
$proto16["m_srcTableName"] = "admin_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_users"
));

$proto18["m_sql"] = "reset_token";
$proto18["m_srcTableName"] = "admin_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_users"
));

$proto20["m_sql"] = "reset_date";
$proto20["m_srcTableName"] = "admin_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id_perfil",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_users"
));

$proto22["m_sql"] = "id_perfil";
$proto22["m_srcTableName"] = "admin_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.seg_usuarios";
$proto25["m_srcTableName"] = "admin_users";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_usuario";
$proto25["m_columns"][] = "usu_identificacion";
$proto25["m_columns"][] = "usu_nombres";
$proto25["m_columns"][] = "usu_contrasena";
$proto25["m_columns"][] = "usu_correo";
$proto25["m_columns"][] = "usu_estado";
$proto25["m_columns"][] = "reset_token";
$proto25["m_columns"][] = "reset_date";
$proto25["m_columns"][] = "id_perfil";
$proto25["m_columns"][] = "id_empresa";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".seg_usuarios";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "admin_users";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "usu_nombres",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_users"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 1;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="admin_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_users = createSqlQuery_admin_users();


	
		;

																															

$tdataadmin_users[".sqlquery"] = $queryData_admin_users;

include_once(getabspath("include/admin_users_events.php"));
$tableEvents["admin_users"] = new eventclass_admin_users;
$tdataadmin_users[".hasEvents"] = true;

?>