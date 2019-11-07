<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_fac_producto = array();
	$tdatapublic_fac_producto[".truncateText"] = true;
	$tdatapublic_fac_producto[".NumberOfChars"] = 400;
	$tdatapublic_fac_producto[".ShortName"] = "public_fac_producto";
	$tdatapublic_fac_producto[".OwnerID"] = "";
	$tdatapublic_fac_producto[".OriginalTable"] = "public.fac_producto";

//	field labels
$fieldLabelspublic_fac_producto = array();
$fieldToolTipspublic_fac_producto = array();
$pageTitlespublic_fac_producto = array();
$placeHolderspublic_fac_producto = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_fac_producto["Spanish"] = array();
	$fieldToolTipspublic_fac_producto["Spanish"] = array();
	$placeHolderspublic_fac_producto["Spanish"] = array();
	$pageTitlespublic_fac_producto["Spanish"] = array();
	$fieldLabelspublic_fac_producto["Spanish"]["id_producto"] = "Serial Producto";
	$fieldToolTipspublic_fac_producto["Spanish"]["id_producto"] = "";
	$placeHolderspublic_fac_producto["Spanish"]["id_producto"] = "";
	$fieldLabelspublic_fac_producto["Spanish"]["id_empresa"] = "Empresa";
	$fieldToolTipspublic_fac_producto["Spanish"]["id_empresa"] = "";
	$placeHolderspublic_fac_producto["Spanish"]["id_empresa"] = "";
	$fieldLabelspublic_fac_producto["Spanish"]["pro_nombre"] = "Producto";
	$fieldToolTipspublic_fac_producto["Spanish"]["pro_nombre"] = "";
	$placeHolderspublic_fac_producto["Spanish"]["pro_nombre"] = "";
	$fieldLabelspublic_fac_producto["Spanish"]["pro_descripcion"] = "Descripción";
	$fieldToolTipspublic_fac_producto["Spanish"]["pro_descripcion"] = "";
	$placeHolderspublic_fac_producto["Spanish"]["pro_descripcion"] = "";
	$fieldLabelspublic_fac_producto["Spanish"]["pro_valor"] = "Valor";
	$fieldToolTipspublic_fac_producto["Spanish"]["pro_valor"] = "";
	$placeHolderspublic_fac_producto["Spanish"]["pro_valor"] = "";
	if (count($fieldToolTipspublic_fac_producto["Spanish"]))
		$tdatapublic_fac_producto[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_fac_producto[""] = array();
	$fieldToolTipspublic_fac_producto[""] = array();
	$placeHolderspublic_fac_producto[""] = array();
	$pageTitlespublic_fac_producto[""] = array();
	$fieldLabelspublic_fac_producto[""]["id_producto"] = "Id Producto";
	$fieldToolTipspublic_fac_producto[""]["id_producto"] = "";
	$placeHolderspublic_fac_producto[""]["id_producto"] = "";
	$fieldLabelspublic_fac_producto[""]["id_empresa"] = "Id Empresa";
	$fieldToolTipspublic_fac_producto[""]["id_empresa"] = "";
	$placeHolderspublic_fac_producto[""]["id_empresa"] = "";
	$fieldLabelspublic_fac_producto[""]["pro_nombre"] = "Pro Nombre";
	$fieldToolTipspublic_fac_producto[""]["pro_nombre"] = "";
	$placeHolderspublic_fac_producto[""]["pro_nombre"] = "";
	$fieldLabelspublic_fac_producto[""]["pro_descripcion"] = "Pro Descripcion";
	$fieldToolTipspublic_fac_producto[""]["pro_descripcion"] = "";
	$placeHolderspublic_fac_producto[""]["pro_descripcion"] = "";
	$fieldLabelspublic_fac_producto[""]["pro_valor"] = "Pro Valor";
	$fieldToolTipspublic_fac_producto[""]["pro_valor"] = "";
	$placeHolderspublic_fac_producto[""]["pro_valor"] = "";
	if (count($fieldToolTipspublic_fac_producto[""]))
		$tdatapublic_fac_producto[".isUseToolTips"] = true;
}


	$tdatapublic_fac_producto[".NCSearch"] = true;



$tdatapublic_fac_producto[".shortTableName"] = "public_fac_producto";
$tdatapublic_fac_producto[".nSecOptions"] = 0;
$tdatapublic_fac_producto[".recsPerRowPrint"] = 1;
$tdatapublic_fac_producto[".mainTableOwnerID"] = "";
$tdatapublic_fac_producto[".moveNext"] = 0;
$tdatapublic_fac_producto[".entityType"] = 0;

$tdatapublic_fac_producto[".strOriginalTableName"] = "public.fac_producto";

	



$tdatapublic_fac_producto[".showAddInPopup"] = true;

$tdatapublic_fac_producto[".showEditInPopup"] = true;

$tdatapublic_fac_producto[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap";
$tdatapublic_fac_producto[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_fac_producto[".fieldsForRegister"] = array();

	$tdatapublic_fac_producto[".listAjax"] = true;

	$tdatapublic_fac_producto[".audit"] = false;

	$tdatapublic_fac_producto[".locking"] = false;

$tdatapublic_fac_producto[".edit"] = true;
$tdatapublic_fac_producto[".afterEditAction"] = 1;
$tdatapublic_fac_producto[".closePopupAfterEdit"] = 1;
$tdatapublic_fac_producto[".afterEditActionDetTable"] = "";

$tdatapublic_fac_producto[".add"] = true;
$tdatapublic_fac_producto[".afterAddAction"] = 1;
$tdatapublic_fac_producto[".closePopupAfterAdd"] = 1;
$tdatapublic_fac_producto[".afterAddActionDetTable"] = "";

$tdatapublic_fac_producto[".list"] = true;





$tdatapublic_fac_producto[".exportFormatting"] = 2;
$tdatapublic_fac_producto[".exportDelimiter"] = ",";
		
$tdatapublic_fac_producto[".view"] = true;


$tdatapublic_fac_producto[".exportTo"] = true;

$tdatapublic_fac_producto[".printFriendly"] = true;

$tdatapublic_fac_producto[".delete"] = true;

$tdatapublic_fac_producto[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_fac_producto[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_fac_producto[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_fac_producto[".searchSaving"] = false;
//

$tdatapublic_fac_producto[".showSearchPanel"] = true;
		$tdatapublic_fac_producto[".flexibleSearch"] = true;

$tdatapublic_fac_producto[".isUseAjaxSuggest"] = true;

$tdatapublic_fac_producto[".rowHighlite"] = true;





$tdatapublic_fac_producto[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_fac_producto[".buttonsAdded"] = false;

$tdatapublic_fac_producto[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_fac_producto[".isUseTimeForSearch"] = false;



$tdatapublic_fac_producto[".badgeColor"] = "388E8E";


$tdatapublic_fac_producto[".allSearchFields"] = array();
$tdatapublic_fac_producto[".filterFields"] = array();
$tdatapublic_fac_producto[".requiredSearchFields"] = array();

$tdatapublic_fac_producto[".allSearchFields"][] = "pro_nombre";
	

$tdatapublic_fac_producto[".googleLikeFields"] = array();
$tdatapublic_fac_producto[".googleLikeFields"][] = "id_producto";
$tdatapublic_fac_producto[".googleLikeFields"][] = "id_empresa";
$tdatapublic_fac_producto[".googleLikeFields"][] = "pro_nombre";
$tdatapublic_fac_producto[".googleLikeFields"][] = "pro_descripcion";
$tdatapublic_fac_producto[".googleLikeFields"][] = "pro_valor";


$tdatapublic_fac_producto[".advSearchFields"] = array();
$tdatapublic_fac_producto[".advSearchFields"][] = "pro_nombre";

$tdatapublic_fac_producto[".tableType"] = "list";

$tdatapublic_fac_producto[".printerPageOrientation"] = 0;
$tdatapublic_fac_producto[".nPrinterPageScale"] = 100;

$tdatapublic_fac_producto[".nPrinterSplitRecords"] = 40;

$tdatapublic_fac_producto[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_fac_producto[".geocodingEnabled"] = false;





$tdatapublic_fac_producto[".listGridLayout"] = 3;

$tdatapublic_fac_producto[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatapublic_fac_producto[".pageSize"] = 20;

$tdatapublic_fac_producto[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_fac_producto[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_fac_producto[".orderindexes"] = array();

$tdatapublic_fac_producto[".sqlHead"] = "SELECT id_producto,  	id_empresa,  	pro_nombre,  	pro_descripcion,  	pro_valor";
$tdatapublic_fac_producto[".sqlFrom"] = "FROM \"public\".fac_producto";
$tdatapublic_fac_producto[".sqlWhereExpr"] = "";
$tdatapublic_fac_producto[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_fac_producto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_fac_producto[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_fac_producto[".highlightSearchResults"] = true;

$tableKeyspublic_fac_producto = array();
$tableKeyspublic_fac_producto[] = "id_producto";
$tdatapublic_fac_producto[".Keys"] = $tableKeyspublic_fac_producto;

$tdatapublic_fac_producto[".listFields"] = array();
$tdatapublic_fac_producto[".listFields"][] = "pro_nombre";
$tdatapublic_fac_producto[".listFields"][] = "pro_descripcion";
$tdatapublic_fac_producto[".listFields"][] = "pro_valor";

$tdatapublic_fac_producto[".hideMobileList"] = array();


$tdatapublic_fac_producto[".viewFields"] = array();
$tdatapublic_fac_producto[".viewFields"][] = "pro_nombre";
$tdatapublic_fac_producto[".viewFields"][] = "pro_descripcion";
$tdatapublic_fac_producto[".viewFields"][] = "pro_valor";

$tdatapublic_fac_producto[".addFields"] = array();
$tdatapublic_fac_producto[".addFields"][] = "pro_nombre";
$tdatapublic_fac_producto[".addFields"][] = "pro_descripcion";
$tdatapublic_fac_producto[".addFields"][] = "pro_valor";

$tdatapublic_fac_producto[".masterListFields"] = array();
$tdatapublic_fac_producto[".masterListFields"][] = "id_producto";
$tdatapublic_fac_producto[".masterListFields"][] = "id_empresa";
$tdatapublic_fac_producto[".masterListFields"][] = "pro_nombre";
$tdatapublic_fac_producto[".masterListFields"][] = "pro_descripcion";
$tdatapublic_fac_producto[".masterListFields"][] = "pro_valor";

$tdatapublic_fac_producto[".inlineAddFields"] = array();

$tdatapublic_fac_producto[".editFields"] = array();
$tdatapublic_fac_producto[".editFields"][] = "pro_nombre";
$tdatapublic_fac_producto[".editFields"][] = "pro_descripcion";
$tdatapublic_fac_producto[".editFields"][] = "pro_valor";

$tdatapublic_fac_producto[".inlineEditFields"] = array();

$tdatapublic_fac_producto[".updateSelectedFields"] = array();
$tdatapublic_fac_producto[".updateSelectedFields"][] = "pro_nombre";
$tdatapublic_fac_producto[".updateSelectedFields"][] = "pro_descripcion";
$tdatapublic_fac_producto[".updateSelectedFields"][] = "pro_valor";


$tdatapublic_fac_producto[".exportFields"] = array();
$tdatapublic_fac_producto[".exportFields"][] = "pro_nombre";
$tdatapublic_fac_producto[".exportFields"][] = "pro_descripcion";
$tdatapublic_fac_producto[".exportFields"][] = "pro_valor";

$tdatapublic_fac_producto[".importFields"] = array();

$tdatapublic_fac_producto[".printFields"] = array();
$tdatapublic_fac_producto[".printFields"][] = "pro_nombre";
$tdatapublic_fac_producto[".printFields"][] = "pro_descripcion";
$tdatapublic_fac_producto[".printFields"][] = "pro_valor";


//	id_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_producto";
	$fdata["GoodName"] = "id_producto";
	$fdata["ownerTable"] = "public.fac_producto";
	$fdata["Label"] = GetFieldLabel("public_fac_producto","id_producto");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id_producto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_producto";

	
	
			
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








	$tdatapublic_fac_producto["id_producto"] = $fdata;
//	id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_empresa";
	$fdata["GoodName"] = "id_empresa";
	$fdata["ownerTable"] = "public.fac_producto";
	$fdata["Label"] = GetFieldLabel("public_fac_producto","id_empresa");
	$fdata["FieldType"] = 20;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id_empresa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_empresa";

	
	
			
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "emp_nombre";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
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








	$tdatapublic_fac_producto["id_empresa"] = $fdata;
//	pro_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pro_nombre";
	$fdata["GoodName"] = "pro_nombre";
	$fdata["ownerTable"] = "public.fac_producto";
	$fdata["Label"] = GetFieldLabel("public_fac_producto","pro_nombre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pro_nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pro_nombre";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Error, ya existe.!", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapublic_fac_producto["pro_nombre"] = $fdata;
//	pro_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pro_descripcion";
	$fdata["GoodName"] = "pro_descripcion";
	$fdata["ownerTable"] = "public.fac_producto";
	$fdata["Label"] = GetFieldLabel("public_fac_producto","pro_descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pro_descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pro_descripcion";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 50;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapublic_fac_producto["pro_descripcion"] = $fdata;
//	pro_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pro_valor";
	$fdata["GoodName"] = "pro_valor";
	$fdata["ownerTable"] = "public.fac_producto";
	$fdata["Label"] = GetFieldLabel("public_fac_producto","pro_valor");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pro_valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pro_valor";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapublic_fac_producto["pro_valor"] = $fdata;


$tables_data["public.fac_producto"]=&$tdatapublic_fac_producto;
$field_labels["public_fac_producto"] = &$fieldLabelspublic_fac_producto;
$fieldToolTips["public_fac_producto"] = &$fieldToolTipspublic_fac_producto;
$placeHolders["public_fac_producto"] = &$placeHolderspublic_fac_producto;
$page_titles["public_fac_producto"] = &$pageTitlespublic_fac_producto;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.fac_producto"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.fac_producto"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_fac_producto()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "id_producto,  	id_empresa,  	pro_nombre,  	pro_descripcion,  	pro_valor";
$proto3["m_strFrom"] = "FROM \"public\".fac_producto";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
	
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
	"m_strName" => "id_producto",
	"m_strTable" => "public.fac_producto",
	"m_srcTableName" => "public.fac_producto"
));

$proto9["m_sql"] = "id_producto";
$proto9["m_srcTableName"] = "public.fac_producto";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "id_empresa",
	"m_strTable" => "public.fac_producto",
	"m_srcTableName" => "public.fac_producto"
));

$proto11["m_sql"] = "id_empresa";
$proto11["m_srcTableName"] = "public.fac_producto";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "pro_nombre",
	"m_strTable" => "public.fac_producto",
	"m_srcTableName" => "public.fac_producto"
));

$proto13["m_sql"] = "pro_nombre";
$proto13["m_srcTableName"] = "public.fac_producto";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "pro_descripcion",
	"m_strTable" => "public.fac_producto",
	"m_srcTableName" => "public.fac_producto"
));

$proto15["m_sql"] = "pro_descripcion";
$proto15["m_srcTableName"] = "public.fac_producto";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "pro_valor",
	"m_strTable" => "public.fac_producto",
	"m_srcTableName" => "public.fac_producto"
));

$proto17["m_sql"] = "pro_valor";
$proto17["m_srcTableName"] = "public.fac_producto";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "public.fac_producto";
$proto20["m_srcTableName"] = "public.fac_producto";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id_producto";
$proto20["m_columns"][] = "id_empresa";
$proto20["m_columns"][] = "pro_nombre";
$proto20["m_columns"][] = "pro_descripcion";
$proto20["m_columns"][] = "pro_valor";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "\"public\".fac_producto";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "public.fac_producto";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="public.fac_producto";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_public_fac_producto = createSqlQuery_public_fac_producto();


	
		;

					

$tdatapublic_fac_producto[".sqlquery"] = $queryData_public_fac_producto;

include_once(getabspath("include/public_fac_producto_events.php"));
$tableEvents["public.fac_producto"] = new eventclass_public_fac_producto;
$tdatapublic_fac_producto[".hasEvents"] = true;

?>