<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_members = array();
	$tdataadmin_members[".truncateText"] = true;
	$tdataadmin_members[".NumberOfChars"] = 400;
	$tdataadmin_members[".ShortName"] = "admin_members";
	$tdataadmin_members[".OwnerID"] = "";
	$tdataadmin_members[".OriginalTable"] = "public.seg_usuarios";

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();
$placeHoldersadmin_members = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_members["Spanish"] = array();
	$fieldToolTipsadmin_members["Spanish"] = array();
	$placeHoldersadmin_members["Spanish"] = array();
	$pageTitlesadmin_members["Spanish"] = array();
	$fieldLabelsadmin_members["Spanish"]["id_usuario"] = "Serial Usuario";
	$fieldToolTipsadmin_members["Spanish"]["id_usuario"] = "";
	$placeHoldersadmin_members["Spanish"]["id_usuario"] = "";
	$fieldLabelsadmin_members["Spanish"]["usu_identificacion"] = "Identificación";
	$fieldToolTipsadmin_members["Spanish"]["usu_identificacion"] = "";
	$placeHoldersadmin_members["Spanish"]["usu_identificacion"] = "";
	$fieldLabelsadmin_members["Spanish"]["usu_nombres"] = "Nombres";
	$fieldToolTipsadmin_members["Spanish"]["usu_nombres"] = "";
	$placeHoldersadmin_members["Spanish"]["usu_nombres"] = "";
	$fieldLabelsadmin_members["Spanish"]["usu_contrasena"] = "Contraseña";
	$fieldToolTipsadmin_members["Spanish"]["usu_contrasena"] = "";
	$placeHoldersadmin_members["Spanish"]["usu_contrasena"] = "";
	$fieldLabelsadmin_members["Spanish"]["usu_correo"] = "Correo";
	$fieldToolTipsadmin_members["Spanish"]["usu_correo"] = "";
	$placeHoldersadmin_members["Spanish"]["usu_correo"] = "";
	$fieldLabelsadmin_members["Spanish"]["usu_estado"] = "Estado";
	$fieldToolTipsadmin_members["Spanish"]["usu_estado"] = "";
	$placeHoldersadmin_members["Spanish"]["usu_estado"] = "";
	$fieldLabelsadmin_members["Spanish"]["reset_token"] = "Reset Token";
	$fieldToolTipsadmin_members["Spanish"]["reset_token"] = "";
	$placeHoldersadmin_members["Spanish"]["reset_token"] = "";
	$fieldLabelsadmin_members["Spanish"]["reset_date"] = "Reset Date";
	$fieldToolTipsadmin_members["Spanish"]["reset_date"] = "";
	$placeHoldersadmin_members["Spanish"]["reset_date"] = "";
	$fieldLabelsadmin_members["Spanish"]["id_perfil"] = "Cargo";
	$fieldToolTipsadmin_members["Spanish"]["id_perfil"] = "";
	$placeHoldersadmin_members["Spanish"]["id_perfil"] = "";
	if (count($fieldToolTipsadmin_members["Spanish"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_members[""] = array();
	$fieldToolTipsadmin_members[""] = array();
	$placeHoldersadmin_members[""] = array();
	$pageTitlesadmin_members[""] = array();
	$fieldLabelsadmin_members[""]["id_usuario"] = "Id Usuario";
	$fieldToolTipsadmin_members[""]["id_usuario"] = "";
	$placeHoldersadmin_members[""]["id_usuario"] = "";
	$fieldLabelsadmin_members[""]["usu_identificacion"] = "Usu Identificacion";
	$fieldToolTipsadmin_members[""]["usu_identificacion"] = "";
	$placeHoldersadmin_members[""]["usu_identificacion"] = "";
	$fieldLabelsadmin_members[""]["usu_nombres"] = "Usu Nombres";
	$fieldToolTipsadmin_members[""]["usu_nombres"] = "";
	$placeHoldersadmin_members[""]["usu_nombres"] = "";
	$fieldLabelsadmin_members[""]["usu_contrasena"] = "Usu Contrasena";
	$fieldToolTipsadmin_members[""]["usu_contrasena"] = "";
	$placeHoldersadmin_members[""]["usu_contrasena"] = "";
	$fieldLabelsadmin_members[""]["usu_correo"] = "Usu Correo";
	$fieldToolTipsadmin_members[""]["usu_correo"] = "";
	$placeHoldersadmin_members[""]["usu_correo"] = "";
	$fieldLabelsadmin_members[""]["usu_estado"] = "Usu Estado";
	$fieldToolTipsadmin_members[""]["usu_estado"] = "";
	$placeHoldersadmin_members[""]["usu_estado"] = "";
	$fieldLabelsadmin_members[""]["reset_token"] = "Reset Token";
	$fieldToolTipsadmin_members[""]["reset_token"] = "";
	$placeHoldersadmin_members[""]["reset_token"] = "";
	$fieldLabelsadmin_members[""]["reset_date"] = "Reset Date";
	$fieldToolTipsadmin_members[""]["reset_date"] = "";
	$placeHoldersadmin_members[""]["reset_date"] = "";
	$fieldLabelsadmin_members[""]["id_perfil"] = "Id Perfil";
	$fieldToolTipsadmin_members[""]["id_perfil"] = "";
	$placeHoldersadmin_members[""]["id_perfil"] = "";
	if (count($fieldToolTipsadmin_members[""]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;
$tdataadmin_members[".recsPerRowPrint"] = 1;
$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".moveNext"] = 0;
$tdataadmin_members[".entityType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "public.seg_usuarios";

	



$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".fieldsForRegister"] = array();

$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = false;

	$tdataadmin_members[".locking"] = false;














$tdataadmin_members[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_members[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataadmin_members[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataadmin_members[".searchSaving"] = false;
//

$tdataadmin_members[".showSearchPanel"] = true;
		$tdataadmin_members[".flexibleSearch"] = true;

$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;





$tdataadmin_members[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_members[".buttonsAdded"] = false;

$tdataadmin_members[".addPageEvents"] = true;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;



$tdataadmin_members[".badgeColor"] = "40E0D0";


$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".allSearchFields"][] = "id_perfil";
	$tdataadmin_members[".allSearchFields"][] = "usu_identificacion";
	$tdataadmin_members[".allSearchFields"][] = "usu_nombres";
	$tdataadmin_members[".allSearchFields"][] = "usu_correo";
	$tdataadmin_members[".allSearchFields"][] = "usu_estado";
	

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "id_usuario";
$tdataadmin_members[".googleLikeFields"][] = "usu_identificacion";
$tdataadmin_members[".googleLikeFields"][] = "usu_nombres";
$tdataadmin_members[".googleLikeFields"][] = "usu_contrasena";
$tdataadmin_members[".googleLikeFields"][] = "usu_correo";
$tdataadmin_members[".googleLikeFields"][] = "usu_estado";
$tdataadmin_members[".googleLikeFields"][] = "reset_token";
$tdataadmin_members[".googleLikeFields"][] = "reset_date";
$tdataadmin_members[".googleLikeFields"][] = "id_perfil";


$tdataadmin_members[".advSearchFields"] = array();
$tdataadmin_members[".advSearchFields"][] = "id_perfil";
$tdataadmin_members[".advSearchFields"][] = "usu_identificacion";
$tdataadmin_members[".advSearchFields"][] = "usu_nombres";
$tdataadmin_members[".advSearchFields"][] = "usu_correo";
$tdataadmin_members[".advSearchFields"][] = "usu_estado";

$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_members[".geocodingEnabled"] = false;





$tdataadmin_members[".listGridLayout"] = 3;

$tdataadmin_members[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "order by usu_nombres asc";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();
	$tdataadmin_members[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "usu_nombres");


$tdataadmin_members[".sqlHead"] = "SELECT id_usuario,  usu_identificacion,  usu_nombres,  usu_contrasena,  usu_correo,  usu_estado,  reset_token,  reset_date,  id_perfil";
$tdataadmin_members[".sqlFrom"] = "FROM \"public\".seg_usuarios";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "id_usuario";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;

$tdataadmin_members[".listFields"] = array();
$tdataadmin_members[".listFields"][] = "id_perfil";
$tdataadmin_members[".listFields"][] = "usu_identificacion";
$tdataadmin_members[".listFields"][] = "usu_nombres";
$tdataadmin_members[".listFields"][] = "usu_correo";
$tdataadmin_members[".listFields"][] = "usu_estado";

$tdataadmin_members[".hideMobileList"] = array();


$tdataadmin_members[".viewFields"] = array();
$tdataadmin_members[".viewFields"][] = "id_perfil";
$tdataadmin_members[".viewFields"][] = "usu_identificacion";
$tdataadmin_members[".viewFields"][] = "usu_nombres";
$tdataadmin_members[".viewFields"][] = "usu_correo";
$tdataadmin_members[".viewFields"][] = "usu_estado";

$tdataadmin_members[".addFields"] = array();
$tdataadmin_members[".addFields"][] = "id_perfil";
$tdataadmin_members[".addFields"][] = "usu_identificacion";
$tdataadmin_members[".addFields"][] = "usu_nombres";
$tdataadmin_members[".addFields"][] = "usu_correo";

$tdataadmin_members[".masterListFields"] = array();
$tdataadmin_members[".masterListFields"][] = "id_usuario";
$tdataadmin_members[".masterListFields"][] = "usu_contrasena";
$tdataadmin_members[".masterListFields"][] = "reset_token";
$tdataadmin_members[".masterListFields"][] = "reset_date";
$tdataadmin_members[".masterListFields"][] = "id_perfil";
$tdataadmin_members[".masterListFields"][] = "usu_identificacion";
$tdataadmin_members[".masterListFields"][] = "usu_nombres";
$tdataadmin_members[".masterListFields"][] = "usu_correo";
$tdataadmin_members[".masterListFields"][] = "usu_estado";

$tdataadmin_members[".inlineAddFields"] = array();

$tdataadmin_members[".editFields"] = array();
$tdataadmin_members[".editFields"][] = "id_perfil";
$tdataadmin_members[".editFields"][] = "usu_identificacion";
$tdataadmin_members[".editFields"][] = "usu_nombres";
$tdataadmin_members[".editFields"][] = "usu_correo";
$tdataadmin_members[".editFields"][] = "usu_estado";

$tdataadmin_members[".inlineEditFields"] = array();

$tdataadmin_members[".updateSelectedFields"] = array();
$tdataadmin_members[".updateSelectedFields"][] = "id_perfil";
$tdataadmin_members[".updateSelectedFields"][] = "usu_identificacion";
$tdataadmin_members[".updateSelectedFields"][] = "usu_nombres";
$tdataadmin_members[".updateSelectedFields"][] = "usu_correo";
$tdataadmin_members[".updateSelectedFields"][] = "usu_estado";


$tdataadmin_members[".exportFields"] = array();
$tdataadmin_members[".exportFields"][] = "id_perfil";
$tdataadmin_members[".exportFields"][] = "usu_identificacion";
$tdataadmin_members[".exportFields"][] = "usu_nombres";
$tdataadmin_members[".exportFields"][] = "usu_correo";
$tdataadmin_members[".exportFields"][] = "usu_estado";

$tdataadmin_members[".importFields"] = array();

$tdataadmin_members[".printFields"] = array();


//	id_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_usuario";
	$fdata["GoodName"] = "id_usuario";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","id_usuario");
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








	$tdataadmin_members["id_usuario"] = $fdata;
//	usu_identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "usu_identificacion";
	$fdata["GoodName"] = "usu_identificacion";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","usu_identificacion");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdataadmin_members["usu_identificacion"] = $fdata;
//	usu_nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "usu_nombres";
	$fdata["GoodName"] = "usu_nombres";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","usu_nombres");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdataadmin_members["usu_nombres"] = $fdata;
//	usu_contrasena
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "usu_contrasena";
	$fdata["GoodName"] = "usu_contrasena";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","usu_contrasena");
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








	$tdataadmin_members["usu_contrasena"] = $fdata;
//	usu_correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usu_correo";
	$fdata["GoodName"] = "usu_correo";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","usu_correo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdataadmin_members["usu_correo"] = $fdata;
//	usu_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usu_estado";
	$fdata["GoodName"] = "usu_estado";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","usu_estado");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdataadmin_members["usu_estado"] = $fdata;
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","reset_token");
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








	$tdataadmin_members["reset_token"] = $fdata;
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","reset_date");
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








	$tdataadmin_members["reset_date"] = $fdata;
//	id_perfil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_perfil";
	$fdata["GoodName"] = "id_perfil";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("admin_members","id_perfil");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id_perfil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_perfil";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_members["id_perfil"] = $fdata;


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$placeHolders["admin_members"] = &$placeHoldersadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
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
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "id_usuario";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_identificacion",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "usu_identificacion";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_nombres",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "usu_nombres";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_contrasena",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto12["m_sql"] = "usu_contrasena";
$proto12["m_srcTableName"] = "admin_members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_correo",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto14["m_sql"] = "usu_correo";
$proto14["m_srcTableName"] = "admin_members";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_estado",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto16["m_sql"] = "usu_estado";
$proto16["m_srcTableName"] = "admin_members";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto18["m_sql"] = "reset_token";
$proto18["m_srcTableName"] = "admin_members";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto20["m_sql"] = "reset_date";
$proto20["m_srcTableName"] = "admin_members";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id_perfil",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "admin_members"
));

$proto22["m_sql"] = "id_perfil";
$proto22["m_srcTableName"] = "admin_members";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.seg_usuarios";
$proto25["m_srcTableName"] = "admin_members";
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
$proto24["m_srcTableName"] = "admin_members";
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
	"m_srcTableName" => "admin_members"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 1;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
		;

									

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

include_once(getabspath("include/admin_members_events.php"));
$tableEvents["admin_members"] = new eventclass_admin_members;
$tdataadmin_members[".hasEvents"] = true;

?>