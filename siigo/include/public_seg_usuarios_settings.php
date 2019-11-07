<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_seg_usuarios = array();
	$tdatapublic_seg_usuarios[".truncateText"] = true;
	$tdatapublic_seg_usuarios[".NumberOfChars"] = 400;
	$tdatapublic_seg_usuarios[".ShortName"] = "public_seg_usuarios";
	$tdatapublic_seg_usuarios[".OwnerID"] = "";
	$tdatapublic_seg_usuarios[".OriginalTable"] = "public.seg_usuarios";

//	field labels
$fieldLabelspublic_seg_usuarios = array();
$fieldToolTipspublic_seg_usuarios = array();
$pageTitlespublic_seg_usuarios = array();
$placeHolderspublic_seg_usuarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_seg_usuarios["Spanish"] = array();
	$fieldToolTipspublic_seg_usuarios["Spanish"] = array();
	$placeHolderspublic_seg_usuarios["Spanish"] = array();
	$pageTitlespublic_seg_usuarios["Spanish"] = array();
	$fieldLabelspublic_seg_usuarios["Spanish"]["id_usuario"] = "Serial Usuario";
	$fieldToolTipspublic_seg_usuarios["Spanish"]["id_usuario"] = "";
	$placeHolderspublic_seg_usuarios["Spanish"]["id_usuario"] = "";
	$fieldLabelspublic_seg_usuarios["Spanish"]["usu_identificacion"] = "Identificación";
	$fieldToolTipspublic_seg_usuarios["Spanish"]["usu_identificacion"] = "";
	$placeHolderspublic_seg_usuarios["Spanish"]["usu_identificacion"] = "";
	$fieldLabelspublic_seg_usuarios["Spanish"]["usu_nombres"] = "Nombres";
	$fieldToolTipspublic_seg_usuarios["Spanish"]["usu_nombres"] = "";
	$placeHolderspublic_seg_usuarios["Spanish"]["usu_nombres"] = "";
	$fieldLabelspublic_seg_usuarios["Spanish"]["usu_contrasena"] = "Contraseña";
	$fieldToolTipspublic_seg_usuarios["Spanish"]["usu_contrasena"] = "";
	$placeHolderspublic_seg_usuarios["Spanish"]["usu_contrasena"] = "";
	$fieldLabelspublic_seg_usuarios["Spanish"]["usu_correo"] = "Correo";
	$fieldToolTipspublic_seg_usuarios["Spanish"]["usu_correo"] = "";
	$placeHolderspublic_seg_usuarios["Spanish"]["usu_correo"] = "";
	$fieldLabelspublic_seg_usuarios["Spanish"]["usu_estado"] = "Estado";
	$fieldToolTipspublic_seg_usuarios["Spanish"]["usu_estado"] = "";
	$placeHolderspublic_seg_usuarios["Spanish"]["usu_estado"] = "";
	$fieldLabelspublic_seg_usuarios["Spanish"]["reset_token"] = "Reset Token";
	$fieldToolTipspublic_seg_usuarios["Spanish"]["reset_token"] = "";
	$placeHolderspublic_seg_usuarios["Spanish"]["reset_token"] = "";
	$fieldLabelspublic_seg_usuarios["Spanish"]["reset_date"] = "Reset Date";
	$fieldToolTipspublic_seg_usuarios["Spanish"]["reset_date"] = "";
	$placeHolderspublic_seg_usuarios["Spanish"]["reset_date"] = "";
	$fieldLabelspublic_seg_usuarios["Spanish"]["id_perfil"] = "Cargo";
	$fieldToolTipspublic_seg_usuarios["Spanish"]["id_perfil"] = "";
	$placeHolderspublic_seg_usuarios["Spanish"]["id_perfil"] = "";
	$fieldLabelspublic_seg_usuarios["Spanish"]["id_empresa"] = "Empresa";
	$fieldToolTipspublic_seg_usuarios["Spanish"]["id_empresa"] = "";
	$placeHolderspublic_seg_usuarios["Spanish"]["id_empresa"] = "";
	$fieldLabelspublic_seg_usuarios["Spanish"]["orden"] = "Orden";
	$fieldToolTipspublic_seg_usuarios["Spanish"]["orden"] = "";
	$placeHolderspublic_seg_usuarios["Spanish"]["orden"] = "";
	if (count($fieldToolTipspublic_seg_usuarios["Spanish"]))
		$tdatapublic_seg_usuarios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_seg_usuarios[""] = array();
	$fieldToolTipspublic_seg_usuarios[""] = array();
	$placeHolderspublic_seg_usuarios[""] = array();
	$pageTitlespublic_seg_usuarios[""] = array();
	$fieldLabelspublic_seg_usuarios[""]["id_usuario"] = "Id Usuario";
	$fieldToolTipspublic_seg_usuarios[""]["id_usuario"] = "";
	$placeHolderspublic_seg_usuarios[""]["id_usuario"] = "";
	$fieldLabelspublic_seg_usuarios[""]["usu_identificacion"] = "Usu Identificacion";
	$fieldToolTipspublic_seg_usuarios[""]["usu_identificacion"] = "";
	$placeHolderspublic_seg_usuarios[""]["usu_identificacion"] = "";
	$fieldLabelspublic_seg_usuarios[""]["usu_nombres"] = "Usu Nombres";
	$fieldToolTipspublic_seg_usuarios[""]["usu_nombres"] = "";
	$placeHolderspublic_seg_usuarios[""]["usu_nombres"] = "";
	$fieldLabelspublic_seg_usuarios[""]["usu_contrasena"] = "Usu Contrasena";
	$fieldToolTipspublic_seg_usuarios[""]["usu_contrasena"] = "";
	$placeHolderspublic_seg_usuarios[""]["usu_contrasena"] = "";
	$fieldLabelspublic_seg_usuarios[""]["usu_correo"] = "Usu Correo";
	$fieldToolTipspublic_seg_usuarios[""]["usu_correo"] = "";
	$placeHolderspublic_seg_usuarios[""]["usu_correo"] = "";
	$fieldLabelspublic_seg_usuarios[""]["usu_estado"] = "Usu Estado";
	$fieldToolTipspublic_seg_usuarios[""]["usu_estado"] = "";
	$placeHolderspublic_seg_usuarios[""]["usu_estado"] = "";
	$fieldLabelspublic_seg_usuarios[""]["reset_token"] = "Reset Token";
	$fieldToolTipspublic_seg_usuarios[""]["reset_token"] = "";
	$placeHolderspublic_seg_usuarios[""]["reset_token"] = "";
	$fieldLabelspublic_seg_usuarios[""]["reset_date"] = "Reset Date";
	$fieldToolTipspublic_seg_usuarios[""]["reset_date"] = "";
	$placeHolderspublic_seg_usuarios[""]["reset_date"] = "";
	$fieldLabelspublic_seg_usuarios[""]["id_perfil"] = "Id Perfil";
	$fieldToolTipspublic_seg_usuarios[""]["id_perfil"] = "";
	$placeHolderspublic_seg_usuarios[""]["id_perfil"] = "";
	$fieldLabelspublic_seg_usuarios[""]["id_empresa"] = "Id Empresa";
	$fieldToolTipspublic_seg_usuarios[""]["id_empresa"] = "";
	$placeHolderspublic_seg_usuarios[""]["id_empresa"] = "";
	$fieldLabelspublic_seg_usuarios[""]["orden"] = "Orden";
	$fieldToolTipspublic_seg_usuarios[""]["orden"] = "";
	$placeHolderspublic_seg_usuarios[""]["orden"] = "";
	if (count($fieldToolTipspublic_seg_usuarios[""]))
		$tdatapublic_seg_usuarios[".isUseToolTips"] = true;
}


	$tdatapublic_seg_usuarios[".NCSearch"] = true;



$tdatapublic_seg_usuarios[".shortTableName"] = "public_seg_usuarios";
$tdatapublic_seg_usuarios[".nSecOptions"] = 0;
$tdatapublic_seg_usuarios[".recsPerRowPrint"] = 1;
$tdatapublic_seg_usuarios[".mainTableOwnerID"] = "";
$tdatapublic_seg_usuarios[".moveNext"] = 0;
$tdatapublic_seg_usuarios[".entityType"] = 0;

$tdatapublic_seg_usuarios[".strOriginalTableName"] = "public.seg_usuarios";

	



$tdatapublic_seg_usuarios[".showAddInPopup"] = true;

$tdatapublic_seg_usuarios[".showEditInPopup"] = true;

$tdatapublic_seg_usuarios[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap";
$tdatapublic_seg_usuarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_seg_usuarios[".fieldsForRegister"] = array();

	$tdatapublic_seg_usuarios[".listAjax"] = true;

	$tdatapublic_seg_usuarios[".audit"] = false;

	$tdatapublic_seg_usuarios[".locking"] = false;

$tdatapublic_seg_usuarios[".edit"] = true;
$tdatapublic_seg_usuarios[".afterEditAction"] = 1;
$tdatapublic_seg_usuarios[".closePopupAfterEdit"] = 1;
$tdatapublic_seg_usuarios[".afterEditActionDetTable"] = "";

$tdatapublic_seg_usuarios[".add"] = true;
$tdatapublic_seg_usuarios[".afterAddAction"] = 1;
$tdatapublic_seg_usuarios[".closePopupAfterAdd"] = 1;
$tdatapublic_seg_usuarios[".afterAddActionDetTable"] = "";

$tdatapublic_seg_usuarios[".list"] = true;





$tdatapublic_seg_usuarios[".exportFormatting"] = 2;
$tdatapublic_seg_usuarios[".exportDelimiter"] = ",";
		
$tdatapublic_seg_usuarios[".view"] = true;


$tdatapublic_seg_usuarios[".exportTo"] = true;


$tdatapublic_seg_usuarios[".delete"] = true;

$tdatapublic_seg_usuarios[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_seg_usuarios[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_seg_usuarios[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_seg_usuarios[".searchSaving"] = false;
//

$tdatapublic_seg_usuarios[".showSearchPanel"] = true;
		$tdatapublic_seg_usuarios[".flexibleSearch"] = true;

$tdatapublic_seg_usuarios[".isUseAjaxSuggest"] = true;

$tdatapublic_seg_usuarios[".rowHighlite"] = true;





$tdatapublic_seg_usuarios[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_seg_usuarios[".buttonsAdded"] = false;

$tdatapublic_seg_usuarios[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapublic_seg_usuarios[".isUseTimeForSearch"] = false;



$tdatapublic_seg_usuarios[".badgeColor"] = "388E8E";


$tdatapublic_seg_usuarios[".allSearchFields"] = array();
$tdatapublic_seg_usuarios[".filterFields"] = array();
$tdatapublic_seg_usuarios[".requiredSearchFields"] = array();

$tdatapublic_seg_usuarios[".allSearchFields"][] = "id_empresa";
	$tdatapublic_seg_usuarios[".allSearchFields"][] = "id_perfil";
	$tdatapublic_seg_usuarios[".allSearchFields"][] = "usu_identificacion";
	$tdatapublic_seg_usuarios[".allSearchFields"][] = "usu_nombres";
	$tdatapublic_seg_usuarios[".allSearchFields"][] = "usu_correo";
	$tdatapublic_seg_usuarios[".allSearchFields"][] = "usu_estado";
	

$tdatapublic_seg_usuarios[".googleLikeFields"] = array();
$tdatapublic_seg_usuarios[".googleLikeFields"][] = "id_usuario";
$tdatapublic_seg_usuarios[".googleLikeFields"][] = "usu_identificacion";
$tdatapublic_seg_usuarios[".googleLikeFields"][] = "usu_nombres";
$tdatapublic_seg_usuarios[".googleLikeFields"][] = "usu_contrasena";
$tdatapublic_seg_usuarios[".googleLikeFields"][] = "usu_correo";
$tdatapublic_seg_usuarios[".googleLikeFields"][] = "usu_estado";
$tdatapublic_seg_usuarios[".googleLikeFields"][] = "reset_token";
$tdatapublic_seg_usuarios[".googleLikeFields"][] = "reset_date";
$tdatapublic_seg_usuarios[".googleLikeFields"][] = "id_perfil";
$tdatapublic_seg_usuarios[".googleLikeFields"][] = "orden";
$tdatapublic_seg_usuarios[".googleLikeFields"][] = "id_empresa";


$tdatapublic_seg_usuarios[".advSearchFields"] = array();
$tdatapublic_seg_usuarios[".advSearchFields"][] = "id_empresa";
$tdatapublic_seg_usuarios[".advSearchFields"][] = "id_perfil";
$tdatapublic_seg_usuarios[".advSearchFields"][] = "usu_identificacion";
$tdatapublic_seg_usuarios[".advSearchFields"][] = "usu_nombres";
$tdatapublic_seg_usuarios[".advSearchFields"][] = "usu_correo";
$tdatapublic_seg_usuarios[".advSearchFields"][] = "usu_estado";

$tdatapublic_seg_usuarios[".tableType"] = "list";

$tdatapublic_seg_usuarios[".printerPageOrientation"] = 0;
$tdatapublic_seg_usuarios[".nPrinterPageScale"] = 100;

$tdatapublic_seg_usuarios[".nPrinterSplitRecords"] = 40;

$tdatapublic_seg_usuarios[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_seg_usuarios[".geocodingEnabled"] = false;





$tdatapublic_seg_usuarios[".listGridLayout"] = 3;

$tdatapublic_seg_usuarios[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatapublic_seg_usuarios[".pageSize"] = 20;

$tdatapublic_seg_usuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY orden asc,usu_nombres asc";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_seg_usuarios[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_seg_usuarios[".orderindexes"] = array();
	$tdatapublic_seg_usuarios[".orderindexes"][] = array(10, (1 ? "ASC" : "DESC"), "case 
	when id_perfil is null then 1
	else 2
end");

	$tdatapublic_seg_usuarios[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "usu_nombres");


$tdatapublic_seg_usuarios[".sqlHead"] = "SELECT id_usuario,  usu_identificacion,  usu_nombres,  usu_contrasena,  usu_correo,  usu_estado,  reset_token,  reset_date,  id_perfil,  case   	when id_perfil is null then 1  	else 2  end as orden,  id_empresa";
$tdatapublic_seg_usuarios[".sqlFrom"] = "FROM \"public\".seg_usuarios";
$tdatapublic_seg_usuarios[".sqlWhereExpr"] = "";
$tdatapublic_seg_usuarios[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",	
	'showRowCount' => 0,
	'hideEmpty' => 0,	
);				  
$tdatapublic_seg_usuarios[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_seg_usuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_seg_usuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_seg_usuarios[".highlightSearchResults"] = true;

$tableKeyspublic_seg_usuarios = array();
$tableKeyspublic_seg_usuarios[] = "id_usuario";
$tdatapublic_seg_usuarios[".Keys"] = $tableKeyspublic_seg_usuarios;

$tdatapublic_seg_usuarios[".listFields"] = array();
$tdatapublic_seg_usuarios[".listFields"][] = "id_empresa";
$tdatapublic_seg_usuarios[".listFields"][] = "id_perfil";
$tdatapublic_seg_usuarios[".listFields"][] = "usu_identificacion";
$tdatapublic_seg_usuarios[".listFields"][] = "usu_nombres";
$tdatapublic_seg_usuarios[".listFields"][] = "usu_correo";
$tdatapublic_seg_usuarios[".listFields"][] = "usu_estado";

$tdatapublic_seg_usuarios[".hideMobileList"] = array();


$tdatapublic_seg_usuarios[".viewFields"] = array();
$tdatapublic_seg_usuarios[".viewFields"][] = "id_empresa";
$tdatapublic_seg_usuarios[".viewFields"][] = "id_perfil";
$tdatapublic_seg_usuarios[".viewFields"][] = "usu_identificacion";
$tdatapublic_seg_usuarios[".viewFields"][] = "usu_nombres";
$tdatapublic_seg_usuarios[".viewFields"][] = "usu_correo";
$tdatapublic_seg_usuarios[".viewFields"][] = "usu_estado";

$tdatapublic_seg_usuarios[".addFields"] = array();
$tdatapublic_seg_usuarios[".addFields"][] = "id_empresa";
$tdatapublic_seg_usuarios[".addFields"][] = "id_perfil";
$tdatapublic_seg_usuarios[".addFields"][] = "usu_identificacion";
$tdatapublic_seg_usuarios[".addFields"][] = "usu_nombres";
$tdatapublic_seg_usuarios[".addFields"][] = "usu_correo";

$tdatapublic_seg_usuarios[".masterListFields"] = array();
$tdatapublic_seg_usuarios[".masterListFields"][] = "id_usuario";
$tdatapublic_seg_usuarios[".masterListFields"][] = "usu_contrasena";
$tdatapublic_seg_usuarios[".masterListFields"][] = "reset_token";
$tdatapublic_seg_usuarios[".masterListFields"][] = "reset_date";
$tdatapublic_seg_usuarios[".masterListFields"][] = "orden";
$tdatapublic_seg_usuarios[".masterListFields"][] = "id_empresa";
$tdatapublic_seg_usuarios[".masterListFields"][] = "id_perfil";
$tdatapublic_seg_usuarios[".masterListFields"][] = "usu_identificacion";
$tdatapublic_seg_usuarios[".masterListFields"][] = "usu_nombres";
$tdatapublic_seg_usuarios[".masterListFields"][] = "usu_correo";
$tdatapublic_seg_usuarios[".masterListFields"][] = "usu_estado";

$tdatapublic_seg_usuarios[".inlineAddFields"] = array();

$tdatapublic_seg_usuarios[".editFields"] = array();
$tdatapublic_seg_usuarios[".editFields"][] = "id_empresa";
$tdatapublic_seg_usuarios[".editFields"][] = "id_perfil";
$tdatapublic_seg_usuarios[".editFields"][] = "usu_identificacion";
$tdatapublic_seg_usuarios[".editFields"][] = "usu_nombres";
$tdatapublic_seg_usuarios[".editFields"][] = "usu_correo";
$tdatapublic_seg_usuarios[".editFields"][] = "usu_estado";

$tdatapublic_seg_usuarios[".inlineEditFields"] = array();

$tdatapublic_seg_usuarios[".updateSelectedFields"] = array();
$tdatapublic_seg_usuarios[".updateSelectedFields"][] = "id_empresa";
$tdatapublic_seg_usuarios[".updateSelectedFields"][] = "id_perfil";
$tdatapublic_seg_usuarios[".updateSelectedFields"][] = "usu_identificacion";
$tdatapublic_seg_usuarios[".updateSelectedFields"][] = "usu_nombres";
$tdatapublic_seg_usuarios[".updateSelectedFields"][] = "usu_correo";
$tdatapublic_seg_usuarios[".updateSelectedFields"][] = "usu_estado";


$tdatapublic_seg_usuarios[".exportFields"] = array();
$tdatapublic_seg_usuarios[".exportFields"][] = "id_empresa";
$tdatapublic_seg_usuarios[".exportFields"][] = "id_perfil";
$tdatapublic_seg_usuarios[".exportFields"][] = "usu_identificacion";
$tdatapublic_seg_usuarios[".exportFields"][] = "usu_nombres";
$tdatapublic_seg_usuarios[".exportFields"][] = "usu_correo";
$tdatapublic_seg_usuarios[".exportFields"][] = "usu_estado";

$tdatapublic_seg_usuarios[".importFields"] = array();

$tdatapublic_seg_usuarios[".printFields"] = array();


//	id_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_usuario";
	$fdata["GoodName"] = "id_usuario";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("public_seg_usuarios","id_usuario");
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








	$tdatapublic_seg_usuarios["id_usuario"] = $fdata;
//	usu_identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "usu_identificacion";
	$fdata["GoodName"] = "usu_identificacion";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("public_seg_usuarios","usu_identificacion");
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




	$tdatapublic_seg_usuarios["usu_identificacion"] = $fdata;
//	usu_nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "usu_nombres";
	$fdata["GoodName"] = "usu_nombres";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("public_seg_usuarios","usu_nombres");
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




	$tdatapublic_seg_usuarios["usu_nombres"] = $fdata;
//	usu_contrasena
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "usu_contrasena";
	$fdata["GoodName"] = "usu_contrasena";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("public_seg_usuarios","usu_contrasena");
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








	$tdatapublic_seg_usuarios["usu_contrasena"] = $fdata;
//	usu_correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usu_correo";
	$fdata["GoodName"] = "usu_correo";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("public_seg_usuarios","usu_correo");
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




	$tdatapublic_seg_usuarios["usu_correo"] = $fdata;
//	usu_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usu_estado";
	$fdata["GoodName"] = "usu_estado";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("public_seg_usuarios","usu_estado");
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




	$tdatapublic_seg_usuarios["usu_estado"] = $fdata;
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("public_seg_usuarios","reset_token");
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








	$tdatapublic_seg_usuarios["reset_token"] = $fdata;
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("public_seg_usuarios","reset_date");
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








	$tdatapublic_seg_usuarios["reset_date"] = $fdata;
//	id_perfil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_perfil";
	$fdata["GoodName"] = "id_perfil";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("public_seg_usuarios","id_perfil");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.seguridad_uggroups";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Label";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapublic_seg_usuarios["id_perfil"] = $fdata;
//	orden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "orden";
	$fdata["GoodName"] = "orden";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_seg_usuarios","orden");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "orden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case   	when id_perfil is null then 1  	else 2  end";

	
	
			
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








	$tdatapublic_seg_usuarios["orden"] = $fdata;
//	id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id_empresa";
	$fdata["GoodName"] = "id_empresa";
	$fdata["ownerTable"] = "public.seg_usuarios";
	$fdata["Label"] = GetFieldLabel("public_seg_usuarios","id_empresa");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id_empresa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_empresa";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.org_empresa";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_empresa";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "emp_nombre";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapublic_seg_usuarios["id_empresa"] = $fdata;


$tables_data["public.seg_usuarios"]=&$tdatapublic_seg_usuarios;
$field_labels["public_seg_usuarios"] = &$fieldLabelspublic_seg_usuarios;
$fieldToolTips["public_seg_usuarios"] = &$fieldToolTipspublic_seg_usuarios;
$placeHolders["public_seg_usuarios"] = &$placeHolderspublic_seg_usuarios;
$page_titles["public_seg_usuarios"] = &$pageTitlespublic_seg_usuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.seg_usuarios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.seg_usuarios"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_seg_usuarios()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "id_usuario,  usu_identificacion,  usu_nombres,  usu_contrasena,  usu_correo,  usu_estado,  reset_token,  reset_date,  id_perfil,  case   	when id_perfil is null then 1  	else 2  end as orden,  id_empresa";
$proto3["m_strFrom"] = "FROM \"public\".seg_usuarios";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "ORDER BY orden asc,usu_nombres asc";
	
		;
			$proto3["cipherer"] = null;
$proto5=array();
$proto5["m_sql"] = "";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

$proto3["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "id_usuario",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "public.seg_usuarios"
));

$proto9["m_sql"] = "id_usuario";
$proto9["m_srcTableName"] = "public.seg_usuarios";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_identificacion",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "public.seg_usuarios"
));

$proto11["m_sql"] = "usu_identificacion";
$proto11["m_srcTableName"] = "public.seg_usuarios";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_nombres",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "public.seg_usuarios"
));

$proto13["m_sql"] = "usu_nombres";
$proto13["m_srcTableName"] = "public.seg_usuarios";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_contrasena",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "public.seg_usuarios"
));

$proto15["m_sql"] = "usu_contrasena";
$proto15["m_srcTableName"] = "public.seg_usuarios";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_correo",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "public.seg_usuarios"
));

$proto17["m_sql"] = "usu_correo";
$proto17["m_srcTableName"] = "public.seg_usuarios";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_estado",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "public.seg_usuarios"
));

$proto19["m_sql"] = "usu_estado";
$proto19["m_srcTableName"] = "public.seg_usuarios";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "public.seg_usuarios"
));

$proto21["m_sql"] = "reset_token";
$proto21["m_srcTableName"] = "public.seg_usuarios";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "public.seg_usuarios"
));

$proto23["m_sql"] = "reset_date";
$proto23["m_srcTableName"] = "public.seg_usuarios";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto3["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "id_perfil",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "public.seg_usuarios"
));

$proto25["m_sql"] = "id_perfil";
$proto25["m_srcTableName"] = "public.seg_usuarios";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto3["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "case   	when id_perfil is null then 1  	else 2  end"
));

$proto27["m_sql"] = "case   	when id_perfil is null then 1  	else 2  end";
$proto27["m_srcTableName"] = "public.seg_usuarios";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "orden";
$obj = new SQLFieldListItem($proto27);

$proto3["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "id_empresa",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "public.seg_usuarios"
));

$proto29["m_sql"] = "id_empresa";
$proto29["m_srcTableName"] = "public.seg_usuarios";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "public.seg_usuarios";
$proto32["m_srcTableName"] = "public.seg_usuarios";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id_usuario";
$proto32["m_columns"][] = "usu_identificacion";
$proto32["m_columns"][] = "usu_nombres";
$proto32["m_columns"][] = "usu_contrasena";
$proto32["m_columns"][] = "usu_correo";
$proto32["m_columns"][] = "usu_estado";
$proto32["m_columns"][] = "reset_token";
$proto32["m_columns"][] = "reset_date";
$proto32["m_columns"][] = "id_perfil";
$proto32["m_columns"][] = "id_empresa";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "\"public\".seg_usuarios";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "public.seg_usuarios";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
												$proto35=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "orden"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 1;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto3["m_orderby"][]=$obj;					
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "usu_nombres",
	"m_strTable" => "public.seg_usuarios",
	"m_srcTableName" => "public.seg_usuarios"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 1;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto3["m_orderby"][]=$obj;					
$proto3["m_srcTableName"]="public.seg_usuarios";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_public_seg_usuarios = createSqlQuery_public_seg_usuarios();


	
		;

											

$tdatapublic_seg_usuarios[".sqlquery"] = $queryData_public_seg_usuarios;

include_once(getabspath("include/public_seg_usuarios_events.php"));
$tableEvents["public.seg_usuarios"] = new eventclass_public_seg_usuarios;
$tdatapublic_seg_usuarios[".hasEvents"] = true;

?>