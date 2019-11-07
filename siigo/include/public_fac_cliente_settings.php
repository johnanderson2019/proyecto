<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_fac_cliente = array();
	$tdatapublic_fac_cliente[".truncateText"] = true;
	$tdatapublic_fac_cliente[".NumberOfChars"] = 400;
	$tdatapublic_fac_cliente[".ShortName"] = "public_fac_cliente";
	$tdatapublic_fac_cliente[".OwnerID"] = "";
	$tdatapublic_fac_cliente[".OriginalTable"] = "public.fac_cliente";

//	field labels
$fieldLabelspublic_fac_cliente = array();
$fieldToolTipspublic_fac_cliente = array();
$pageTitlespublic_fac_cliente = array();
$placeHolderspublic_fac_cliente = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_fac_cliente["Spanish"] = array();
	$fieldToolTipspublic_fac_cliente["Spanish"] = array();
	$placeHolderspublic_fac_cliente["Spanish"] = array();
	$pageTitlespublic_fac_cliente["Spanish"] = array();
	$fieldLabelspublic_fac_cliente["Spanish"]["id_cliente"] = "Serial Cliente";
	$fieldToolTipspublic_fac_cliente["Spanish"]["id_cliente"] = "";
	$placeHolderspublic_fac_cliente["Spanish"]["id_cliente"] = "";
	$fieldLabelspublic_fac_cliente["Spanish"]["cli_nombre"] = "Nombre";
	$fieldToolTipspublic_fac_cliente["Spanish"]["cli_nombre"] = "";
	$placeHolderspublic_fac_cliente["Spanish"]["cli_nombre"] = "";
	$fieldLabelspublic_fac_cliente["Spanish"]["cli_nit"] = "NIT";
	$fieldToolTipspublic_fac_cliente["Spanish"]["cli_nit"] = "";
	$placeHolderspublic_fac_cliente["Spanish"]["cli_nit"] = "";
	$fieldLabelspublic_fac_cliente["Spanish"]["id_empresa"] = "Empresa";
	$fieldToolTipspublic_fac_cliente["Spanish"]["id_empresa"] = "";
	$placeHolderspublic_fac_cliente["Spanish"]["id_empresa"] = "";
	if (count($fieldToolTipspublic_fac_cliente["Spanish"]))
		$tdatapublic_fac_cliente[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_fac_cliente[""] = array();
	$fieldToolTipspublic_fac_cliente[""] = array();
	$placeHolderspublic_fac_cliente[""] = array();
	$pageTitlespublic_fac_cliente[""] = array();
	$fieldLabelspublic_fac_cliente[""]["id_cliente"] = "Id Cliente";
	$fieldToolTipspublic_fac_cliente[""]["id_cliente"] = "";
	$placeHolderspublic_fac_cliente[""]["id_cliente"] = "";
	$fieldLabelspublic_fac_cliente[""]["cli_nombre"] = "Cli Nombre";
	$fieldToolTipspublic_fac_cliente[""]["cli_nombre"] = "";
	$placeHolderspublic_fac_cliente[""]["cli_nombre"] = "";
	$fieldLabelspublic_fac_cliente[""]["cli_nit"] = "Cli Nit";
	$fieldToolTipspublic_fac_cliente[""]["cli_nit"] = "";
	$placeHolderspublic_fac_cliente[""]["cli_nit"] = "";
	$fieldLabelspublic_fac_cliente[""]["id_empresa"] = "Id Empresa";
	$fieldToolTipspublic_fac_cliente[""]["id_empresa"] = "";
	$placeHolderspublic_fac_cliente[""]["id_empresa"] = "";
	if (count($fieldToolTipspublic_fac_cliente[""]))
		$tdatapublic_fac_cliente[".isUseToolTips"] = true;
}


	$tdatapublic_fac_cliente[".NCSearch"] = true;



$tdatapublic_fac_cliente[".shortTableName"] = "public_fac_cliente";
$tdatapublic_fac_cliente[".nSecOptions"] = 0;
$tdatapublic_fac_cliente[".recsPerRowPrint"] = 1;
$tdatapublic_fac_cliente[".mainTableOwnerID"] = "";
$tdatapublic_fac_cliente[".moveNext"] = 0;
$tdatapublic_fac_cliente[".entityType"] = 0;

$tdatapublic_fac_cliente[".strOriginalTableName"] = "public.fac_cliente";

	



$tdatapublic_fac_cliente[".showAddInPopup"] = true;

$tdatapublic_fac_cliente[".showEditInPopup"] = true;

$tdatapublic_fac_cliente[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap";
$tdatapublic_fac_cliente[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_fac_cliente[".fieldsForRegister"] = array();

	$tdatapublic_fac_cliente[".listAjax"] = true;

	$tdatapublic_fac_cliente[".audit"] = false;

	$tdatapublic_fac_cliente[".locking"] = false;

$tdatapublic_fac_cliente[".edit"] = true;
$tdatapublic_fac_cliente[".afterEditAction"] = 1;
$tdatapublic_fac_cliente[".closePopupAfterEdit"] = 1;
$tdatapublic_fac_cliente[".afterEditActionDetTable"] = "";

$tdatapublic_fac_cliente[".add"] = true;
$tdatapublic_fac_cliente[".afterAddAction"] = 1;
$tdatapublic_fac_cliente[".closePopupAfterAdd"] = 1;
$tdatapublic_fac_cliente[".afterAddActionDetTable"] = "";

$tdatapublic_fac_cliente[".list"] = true;





$tdatapublic_fac_cliente[".exportFormatting"] = 2;
$tdatapublic_fac_cliente[".exportDelimiter"] = ",";
		
$tdatapublic_fac_cliente[".view"] = true;


$tdatapublic_fac_cliente[".exportTo"] = true;

$tdatapublic_fac_cliente[".printFriendly"] = true;

$tdatapublic_fac_cliente[".delete"] = true;

$tdatapublic_fac_cliente[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_fac_cliente[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_fac_cliente[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_fac_cliente[".searchSaving"] = false;
//

$tdatapublic_fac_cliente[".showSearchPanel"] = true;
		$tdatapublic_fac_cliente[".flexibleSearch"] = true;

$tdatapublic_fac_cliente[".isUseAjaxSuggest"] = true;

$tdatapublic_fac_cliente[".rowHighlite"] = true;





$tdatapublic_fac_cliente[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_fac_cliente[".buttonsAdded"] = false;

$tdatapublic_fac_cliente[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_fac_cliente[".isUseTimeForSearch"] = false;



$tdatapublic_fac_cliente[".badgeColor"] = "388E8E";


$tdatapublic_fac_cliente[".allSearchFields"] = array();
$tdatapublic_fac_cliente[".filterFields"] = array();
$tdatapublic_fac_cliente[".requiredSearchFields"] = array();

$tdatapublic_fac_cliente[".allSearchFields"][] = "cli_nombre";
	$tdatapublic_fac_cliente[".allSearchFields"][] = "cli_nit";
	

$tdatapublic_fac_cliente[".googleLikeFields"] = array();
$tdatapublic_fac_cliente[".googleLikeFields"][] = "id_cliente";
$tdatapublic_fac_cliente[".googleLikeFields"][] = "cli_nombre";
$tdatapublic_fac_cliente[".googleLikeFields"][] = "cli_nit";
$tdatapublic_fac_cliente[".googleLikeFields"][] = "id_empresa";


$tdatapublic_fac_cliente[".advSearchFields"] = array();
$tdatapublic_fac_cliente[".advSearchFields"][] = "cli_nombre";
$tdatapublic_fac_cliente[".advSearchFields"][] = "cli_nit";

$tdatapublic_fac_cliente[".tableType"] = "list";

$tdatapublic_fac_cliente[".printerPageOrientation"] = 0;
$tdatapublic_fac_cliente[".nPrinterPageScale"] = 100;

$tdatapublic_fac_cliente[".nPrinterSplitRecords"] = 40;

$tdatapublic_fac_cliente[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_fac_cliente[".geocodingEnabled"] = false;





$tdatapublic_fac_cliente[".listGridLayout"] = 3;

$tdatapublic_fac_cliente[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatapublic_fac_cliente[".pageSize"] = 20;

$tdatapublic_fac_cliente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_fac_cliente[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_fac_cliente[".orderindexes"] = array();

$tdatapublic_fac_cliente[".sqlHead"] = "SELECT id_cliente,  	cli_nombre,  	cli_nit,  	id_empresa";
$tdatapublic_fac_cliente[".sqlFrom"] = "FROM \"public\".fac_cliente";
$tdatapublic_fac_cliente[".sqlWhereExpr"] = "";
$tdatapublic_fac_cliente[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_fac_cliente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_fac_cliente[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_fac_cliente[".highlightSearchResults"] = true;

$tableKeyspublic_fac_cliente = array();
$tableKeyspublic_fac_cliente[] = "id_cliente";
$tdatapublic_fac_cliente[".Keys"] = $tableKeyspublic_fac_cliente;

$tdatapublic_fac_cliente[".listFields"] = array();
$tdatapublic_fac_cliente[".listFields"][] = "cli_nombre";
$tdatapublic_fac_cliente[".listFields"][] = "cli_nit";

$tdatapublic_fac_cliente[".hideMobileList"] = array();


$tdatapublic_fac_cliente[".viewFields"] = array();
$tdatapublic_fac_cliente[".viewFields"][] = "cli_nombre";
$tdatapublic_fac_cliente[".viewFields"][] = "cli_nit";

$tdatapublic_fac_cliente[".addFields"] = array();
$tdatapublic_fac_cliente[".addFields"][] = "cli_nombre";
$tdatapublic_fac_cliente[".addFields"][] = "cli_nit";

$tdatapublic_fac_cliente[".masterListFields"] = array();
$tdatapublic_fac_cliente[".masterListFields"][] = "id_cliente";
$tdatapublic_fac_cliente[".masterListFields"][] = "cli_nombre";
$tdatapublic_fac_cliente[".masterListFields"][] = "cli_nit";
$tdatapublic_fac_cliente[".masterListFields"][] = "id_empresa";

$tdatapublic_fac_cliente[".inlineAddFields"] = array();

$tdatapublic_fac_cliente[".editFields"] = array();
$tdatapublic_fac_cliente[".editFields"][] = "cli_nombre";
$tdatapublic_fac_cliente[".editFields"][] = "cli_nit";

$tdatapublic_fac_cliente[".inlineEditFields"] = array();

$tdatapublic_fac_cliente[".updateSelectedFields"] = array();
$tdatapublic_fac_cliente[".updateSelectedFields"][] = "cli_nombre";
$tdatapublic_fac_cliente[".updateSelectedFields"][] = "cli_nit";


$tdatapublic_fac_cliente[".exportFields"] = array();
$tdatapublic_fac_cliente[".exportFields"][] = "cli_nombre";
$tdatapublic_fac_cliente[".exportFields"][] = "cli_nit";

$tdatapublic_fac_cliente[".importFields"] = array();

$tdatapublic_fac_cliente[".printFields"] = array();
$tdatapublic_fac_cliente[".printFields"][] = "cli_nombre";
$tdatapublic_fac_cliente[".printFields"][] = "cli_nit";


//	id_cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cliente";
	$fdata["GoodName"] = "id_cliente";
	$fdata["ownerTable"] = "public.fac_cliente";
	$fdata["Label"] = GetFieldLabel("public_fac_cliente","id_cliente");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id_cliente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cliente";

	
	
			
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








	$tdatapublic_fac_cliente["id_cliente"] = $fdata;
//	cli_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cli_nombre";
	$fdata["GoodName"] = "cli_nombre";
	$fdata["ownerTable"] = "public.fac_cliente";
	$fdata["Label"] = GetFieldLabel("public_fac_cliente","cli_nombre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cli_nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cli_nombre";

	
	
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
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Error, intente de nuevo.!", "messageType" => "Text");

	
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




	$tdatapublic_fac_cliente["cli_nombre"] = $fdata;
//	cli_nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cli_nit";
	$fdata["GoodName"] = "cli_nit";
	$fdata["ownerTable"] = "public.fac_cliente";
	$fdata["Label"] = GetFieldLabel("public_fac_cliente","cli_nit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cli_nit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cli_nit";

	
	
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
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Error, intente de nuevo.!", "messageType" => "Text");

	
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




	$tdatapublic_fac_cliente["cli_nit"] = $fdata;
//	id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_empresa";
	$fdata["GoodName"] = "id_empresa";
	$fdata["ownerTable"] = "public.fac_cliente";
	$fdata["Label"] = GetFieldLabel("public_fac_cliente","id_empresa");
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_empresa";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_empresa";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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








	$tdatapublic_fac_cliente["id_empresa"] = $fdata;


$tables_data["public.fac_cliente"]=&$tdatapublic_fac_cliente;
$field_labels["public_fac_cliente"] = &$fieldLabelspublic_fac_cliente;
$fieldToolTips["public_fac_cliente"] = &$fieldToolTipspublic_fac_cliente;
$placeHolders["public_fac_cliente"] = &$placeHolderspublic_fac_cliente;
$page_titles["public_fac_cliente"] = &$pageTitlespublic_fac_cliente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.fac_cliente"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.fac_cliente"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_fac_cliente()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "id_cliente,  	cli_nombre,  	cli_nit,  	id_empresa";
$proto3["m_strFrom"] = "FROM \"public\".fac_cliente";
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
	"m_strName" => "id_cliente",
	"m_strTable" => "public.fac_cliente",
	"m_srcTableName" => "public.fac_cliente"
));

$proto9["m_sql"] = "id_cliente";
$proto9["m_srcTableName"] = "public.fac_cliente";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cli_nombre",
	"m_strTable" => "public.fac_cliente",
	"m_srcTableName" => "public.fac_cliente"
));

$proto11["m_sql"] = "cli_nombre";
$proto11["m_srcTableName"] = "public.fac_cliente";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cli_nit",
	"m_strTable" => "public.fac_cliente",
	"m_srcTableName" => "public.fac_cliente"
));

$proto13["m_sql"] = "cli_nit";
$proto13["m_srcTableName"] = "public.fac_cliente";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "id_empresa",
	"m_strTable" => "public.fac_cliente",
	"m_srcTableName" => "public.fac_cliente"
));

$proto15["m_sql"] = "id_empresa";
$proto15["m_srcTableName"] = "public.fac_cliente";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "public.fac_cliente";
$proto18["m_srcTableName"] = "public.fac_cliente";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id_cliente";
$proto18["m_columns"][] = "cli_nombre";
$proto18["m_columns"][] = "cli_nit";
$proto18["m_columns"][] = "id_empresa";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "\"public\".fac_cliente";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "public.fac_cliente";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="public.fac_cliente";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_public_fac_cliente = createSqlQuery_public_fac_cliente();


	
		;

				

$tdatapublic_fac_cliente[".sqlquery"] = $queryData_public_fac_cliente;

include_once(getabspath("include/public_fac_cliente_events.php"));
$tableEvents["public.fac_cliente"] = new eventclass_public_fac_cliente;
$tdatapublic_fac_cliente[".hasEvents"] = true;

?>