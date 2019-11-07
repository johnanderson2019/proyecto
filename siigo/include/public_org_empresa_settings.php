<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_org_empresa = array();
	$tdatapublic_org_empresa[".truncateText"] = true;
	$tdatapublic_org_empresa[".NumberOfChars"] = 400;
	$tdatapublic_org_empresa[".ShortName"] = "public_org_empresa";
	$tdatapublic_org_empresa[".OwnerID"] = "";
	$tdatapublic_org_empresa[".OriginalTable"] = "public.org_empresa";

//	field labels
$fieldLabelspublic_org_empresa = array();
$fieldToolTipspublic_org_empresa = array();
$pageTitlespublic_org_empresa = array();
$placeHolderspublic_org_empresa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_org_empresa["Spanish"] = array();
	$fieldToolTipspublic_org_empresa["Spanish"] = array();
	$placeHolderspublic_org_empresa["Spanish"] = array();
	$pageTitlespublic_org_empresa["Spanish"] = array();
	$fieldLabelspublic_org_empresa["Spanish"]["id_empresa"] = "Serial Empresa";
	$fieldToolTipspublic_org_empresa["Spanish"]["id_empresa"] = "";
	$placeHolderspublic_org_empresa["Spanish"]["id_empresa"] = "";
	$fieldLabelspublic_org_empresa["Spanish"]["emp_nombre"] = "Empresa";
	$fieldToolTipspublic_org_empresa["Spanish"]["emp_nombre"] = "";
	$placeHolderspublic_org_empresa["Spanish"]["emp_nombre"] = "";
	if (count($fieldToolTipspublic_org_empresa["Spanish"]))
		$tdatapublic_org_empresa[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_org_empresa[""] = array();
	$fieldToolTipspublic_org_empresa[""] = array();
	$placeHolderspublic_org_empresa[""] = array();
	$pageTitlespublic_org_empresa[""] = array();
	$fieldLabelspublic_org_empresa[""]["id_empresa"] = "Id Empresa";
	$fieldToolTipspublic_org_empresa[""]["id_empresa"] = "";
	$placeHolderspublic_org_empresa[""]["id_empresa"] = "";
	$fieldLabelspublic_org_empresa[""]["emp_nombre"] = "Emp Nombre";
	$fieldToolTipspublic_org_empresa[""]["emp_nombre"] = "";
	$placeHolderspublic_org_empresa[""]["emp_nombre"] = "";
	if (count($fieldToolTipspublic_org_empresa[""]))
		$tdatapublic_org_empresa[".isUseToolTips"] = true;
}


	$tdatapublic_org_empresa[".NCSearch"] = true;



$tdatapublic_org_empresa[".shortTableName"] = "public_org_empresa";
$tdatapublic_org_empresa[".nSecOptions"] = 0;
$tdatapublic_org_empresa[".recsPerRowPrint"] = 1;
$tdatapublic_org_empresa[".mainTableOwnerID"] = "";
$tdatapublic_org_empresa[".moveNext"] = 0;
$tdatapublic_org_empresa[".entityType"] = 0;

$tdatapublic_org_empresa[".strOriginalTableName"] = "public.org_empresa";

	



$tdatapublic_org_empresa[".showAddInPopup"] = true;

$tdatapublic_org_empresa[".showEditInPopup"] = true;

$tdatapublic_org_empresa[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap";
$tdatapublic_org_empresa[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_org_empresa[".fieldsForRegister"] = array();

	$tdatapublic_org_empresa[".listAjax"] = true;

	$tdatapublic_org_empresa[".audit"] = false;

	$tdatapublic_org_empresa[".locking"] = false;

$tdatapublic_org_empresa[".edit"] = true;
$tdatapublic_org_empresa[".afterEditAction"] = 1;
$tdatapublic_org_empresa[".closePopupAfterEdit"] = 1;
$tdatapublic_org_empresa[".afterEditActionDetTable"] = "";

$tdatapublic_org_empresa[".add"] = true;
$tdatapublic_org_empresa[".afterAddAction"] = 1;
$tdatapublic_org_empresa[".closePopupAfterAdd"] = 1;
$tdatapublic_org_empresa[".afterAddActionDetTable"] = "";

$tdatapublic_org_empresa[".list"] = true;





$tdatapublic_org_empresa[".exportFormatting"] = 2;
$tdatapublic_org_empresa[".exportDelimiter"] = ",";
		
$tdatapublic_org_empresa[".view"] = true;


$tdatapublic_org_empresa[".exportTo"] = true;

$tdatapublic_org_empresa[".printFriendly"] = true;

$tdatapublic_org_empresa[".delete"] = true;

$tdatapublic_org_empresa[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_org_empresa[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_org_empresa[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_org_empresa[".searchSaving"] = false;
//

$tdatapublic_org_empresa[".showSearchPanel"] = true;
		$tdatapublic_org_empresa[".flexibleSearch"] = true;

$tdatapublic_org_empresa[".isUseAjaxSuggest"] = true;

$tdatapublic_org_empresa[".rowHighlite"] = true;





$tdatapublic_org_empresa[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_org_empresa[".buttonsAdded"] = false;

$tdatapublic_org_empresa[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_org_empresa[".isUseTimeForSearch"] = false;



$tdatapublic_org_empresa[".badgeColor"] = "388E8E";


$tdatapublic_org_empresa[".allSearchFields"] = array();
$tdatapublic_org_empresa[".filterFields"] = array();
$tdatapublic_org_empresa[".requiredSearchFields"] = array();

$tdatapublic_org_empresa[".allSearchFields"][] = "id_empresa";
	$tdatapublic_org_empresa[".allSearchFields"][] = "emp_nombre";
	

$tdatapublic_org_empresa[".googleLikeFields"] = array();
$tdatapublic_org_empresa[".googleLikeFields"][] = "id_empresa";
$tdatapublic_org_empresa[".googleLikeFields"][] = "emp_nombre";


$tdatapublic_org_empresa[".advSearchFields"] = array();
$tdatapublic_org_empresa[".advSearchFields"][] = "id_empresa";
$tdatapublic_org_empresa[".advSearchFields"][] = "emp_nombre";

$tdatapublic_org_empresa[".tableType"] = "list";

$tdatapublic_org_empresa[".printerPageOrientation"] = 0;
$tdatapublic_org_empresa[".nPrinterPageScale"] = 100;

$tdatapublic_org_empresa[".nPrinterSplitRecords"] = 40;

$tdatapublic_org_empresa[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_org_empresa[".geocodingEnabled"] = false;





$tdatapublic_org_empresa[".listGridLayout"] = 3;

$tdatapublic_org_empresa[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatapublic_org_empresa[".pageSize"] = 20;

$tdatapublic_org_empresa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_org_empresa[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_org_empresa[".orderindexes"] = array();

$tdatapublic_org_empresa[".sqlHead"] = "SELECT id_empresa,  	emp_nombre";
$tdatapublic_org_empresa[".sqlFrom"] = "FROM \"public\".org_empresa";
$tdatapublic_org_empresa[".sqlWhereExpr"] = "";
$tdatapublic_org_empresa[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_org_empresa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_org_empresa[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_org_empresa[".highlightSearchResults"] = true;

$tableKeyspublic_org_empresa = array();
$tableKeyspublic_org_empresa[] = "id_empresa";
$tdatapublic_org_empresa[".Keys"] = $tableKeyspublic_org_empresa;

$tdatapublic_org_empresa[".listFields"] = array();
$tdatapublic_org_empresa[".listFields"][] = "emp_nombre";

$tdatapublic_org_empresa[".hideMobileList"] = array();


$tdatapublic_org_empresa[".viewFields"] = array();
$tdatapublic_org_empresa[".viewFields"][] = "emp_nombre";

$tdatapublic_org_empresa[".addFields"] = array();
$tdatapublic_org_empresa[".addFields"][] = "emp_nombre";

$tdatapublic_org_empresa[".masterListFields"] = array();
$tdatapublic_org_empresa[".masterListFields"][] = "id_empresa";
$tdatapublic_org_empresa[".masterListFields"][] = "emp_nombre";

$tdatapublic_org_empresa[".inlineAddFields"] = array();

$tdatapublic_org_empresa[".editFields"] = array();
$tdatapublic_org_empresa[".editFields"][] = "emp_nombre";

$tdatapublic_org_empresa[".inlineEditFields"] = array();

$tdatapublic_org_empresa[".updateSelectedFields"] = array();
$tdatapublic_org_empresa[".updateSelectedFields"][] = "emp_nombre";


$tdatapublic_org_empresa[".exportFields"] = array();
$tdatapublic_org_empresa[".exportFields"][] = "emp_nombre";

$tdatapublic_org_empresa[".importFields"] = array();

$tdatapublic_org_empresa[".printFields"] = array();
$tdatapublic_org_empresa[".printFields"][] = "emp_nombre";


//	id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_empresa";
	$fdata["GoodName"] = "id_empresa";
	$fdata["ownerTable"] = "public.org_empresa";
	$fdata["Label"] = GetFieldLabel("public_org_empresa","id_empresa");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapublic_org_empresa["id_empresa"] = $fdata;
//	emp_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "emp_nombre";
	$fdata["GoodName"] = "emp_nombre";
	$fdata["ownerTable"] = "public.org_empresa";
	$fdata["Label"] = GetFieldLabel("public_org_empresa","emp_nombre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "emp_nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emp_nombre";

	
	
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
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Ya existe.!", "messageType" => "Text");

	
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




	$tdatapublic_org_empresa["emp_nombre"] = $fdata;


$tables_data["public.org_empresa"]=&$tdatapublic_org_empresa;
$field_labels["public_org_empresa"] = &$fieldLabelspublic_org_empresa;
$fieldToolTips["public_org_empresa"] = &$fieldToolTipspublic_org_empresa;
$placeHolders["public_org_empresa"] = &$placeHolderspublic_org_empresa;
$page_titles["public_org_empresa"] = &$pageTitlespublic_org_empresa;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.org_empresa"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.org_empresa"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_org_empresa()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "id_empresa,  	emp_nombre";
$proto3["m_strFrom"] = "FROM \"public\".org_empresa";
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
	"m_strName" => "id_empresa",
	"m_strTable" => "public.org_empresa",
	"m_srcTableName" => "public.org_empresa"
));

$proto9["m_sql"] = "id_empresa";
$proto9["m_srcTableName"] = "public.org_empresa";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "emp_nombre",
	"m_strTable" => "public.org_empresa",
	"m_srcTableName" => "public.org_empresa"
));

$proto11["m_sql"] = "emp_nombre";
$proto11["m_srcTableName"] = "public.org_empresa";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "public.org_empresa";
$proto14["m_srcTableName"] = "public.org_empresa";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id_empresa";
$proto14["m_columns"][] = "emp_nombre";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "\"public\".org_empresa";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "public.org_empresa";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="public.org_empresa";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_public_org_empresa = createSqlQuery_public_org_empresa();


	
		;

		

$tdatapublic_org_empresa[".sqlquery"] = $queryData_public_org_empresa;

include_once(getabspath("include/public_org_empresa_events.php"));
$tableEvents["public.org_empresa"] = new eventclass_public_org_empresa;
$tdatapublic_org_empresa[".hasEvents"] = true;

?>