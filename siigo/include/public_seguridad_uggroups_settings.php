<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_seguridad_uggroups = array();
	$tdatapublic_seguridad_uggroups[".truncateText"] = true;
	$tdatapublic_seguridad_uggroups[".NumberOfChars"] = 80;
	$tdatapublic_seguridad_uggroups[".ShortName"] = "public_seguridad_uggroups";
	$tdatapublic_seguridad_uggroups[".OwnerID"] = "";
	$tdatapublic_seguridad_uggroups[".OriginalTable"] = "public.seguridad_uggroups";

//	field labels
$fieldLabelspublic_seguridad_uggroups = array();
$fieldToolTipspublic_seguridad_uggroups = array();
$pageTitlespublic_seguridad_uggroups = array();
$placeHolderspublic_seguridad_uggroups = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_seguridad_uggroups["Spanish"] = array();
	$fieldToolTipspublic_seguridad_uggroups["Spanish"] = array();
	$placeHolderspublic_seguridad_uggroups["Spanish"] = array();
	$pageTitlespublic_seguridad_uggroups["Spanish"] = array();
	$fieldLabelspublic_seguridad_uggroups["Spanish"]["GroupID"] = "Grupo";
	$fieldToolTipspublic_seguridad_uggroups["Spanish"]["GroupID"] = "";
	$placeHolderspublic_seguridad_uggroups["Spanish"]["GroupID"] = "";
	$fieldLabelspublic_seguridad_uggroups["Spanish"]["Label"] = "ID Grupo";
	$fieldToolTipspublic_seguridad_uggroups["Spanish"]["Label"] = "";
	$placeHolderspublic_seguridad_uggroups["Spanish"]["Label"] = "";
	if (count($fieldToolTipspublic_seguridad_uggroups["Spanish"]))
		$tdatapublic_seguridad_uggroups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_seguridad_uggroups[""] = array();
	$fieldToolTipspublic_seguridad_uggroups[""] = array();
	$placeHolderspublic_seguridad_uggroups[""] = array();
	$pageTitlespublic_seguridad_uggroups[""] = array();
	$fieldLabelspublic_seguridad_uggroups[""]["GroupID"] = "Group ID";
	$fieldToolTipspublic_seguridad_uggroups[""]["GroupID"] = "";
	$placeHolderspublic_seguridad_uggroups[""]["GroupID"] = "";
	$fieldLabelspublic_seguridad_uggroups[""]["Label"] = "Label";
	$fieldToolTipspublic_seguridad_uggroups[""]["Label"] = "";
	$placeHolderspublic_seguridad_uggroups[""]["Label"] = "";
	if (count($fieldToolTipspublic_seguridad_uggroups[""]))
		$tdatapublic_seguridad_uggroups[".isUseToolTips"] = true;
}


	$tdatapublic_seguridad_uggroups[".NCSearch"] = true;



$tdatapublic_seguridad_uggroups[".shortTableName"] = "public_seguridad_uggroups";
$tdatapublic_seguridad_uggroups[".nSecOptions"] = 0;
$tdatapublic_seguridad_uggroups[".recsPerRowPrint"] = 1;
$tdatapublic_seguridad_uggroups[".mainTableOwnerID"] = "";
$tdatapublic_seguridad_uggroups[".moveNext"] = 1;
$tdatapublic_seguridad_uggroups[".entityType"] = 0;

$tdatapublic_seguridad_uggroups[".strOriginalTableName"] = "public.seguridad_uggroups";

	



$tdatapublic_seguridad_uggroups[".showAddInPopup"] = false;

$tdatapublic_seguridad_uggroups[".showEditInPopup"] = false;

$tdatapublic_seguridad_uggroups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_seguridad_uggroups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_seguridad_uggroups[".fieldsForRegister"] = array();

$tdatapublic_seguridad_uggroups[".listAjax"] = false;

	$tdatapublic_seguridad_uggroups[".audit"] = false;

	$tdatapublic_seguridad_uggroups[".locking"] = false;






$tdatapublic_seguridad_uggroups[".reorderRecordsByHeader"] = true;








$tdatapublic_seguridad_uggroups[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_seguridad_uggroups[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_seguridad_uggroups[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_seguridad_uggroups[".searchSaving"] = false;
//

$tdatapublic_seguridad_uggroups[".showSearchPanel"] = true;
		$tdatapublic_seguridad_uggroups[".flexibleSearch"] = true;

$tdatapublic_seguridad_uggroups[".isUseAjaxSuggest"] = true;

$tdatapublic_seguridad_uggroups[".rowHighlite"] = true;





$tdatapublic_seguridad_uggroups[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_seguridad_uggroups[".buttonsAdded"] = false;

$tdatapublic_seguridad_uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_seguridad_uggroups[".isUseTimeForSearch"] = false;



$tdatapublic_seguridad_uggroups[".badgeColor"] = "4169E1";


$tdatapublic_seguridad_uggroups[".allSearchFields"] = array();
$tdatapublic_seguridad_uggroups[".filterFields"] = array();
$tdatapublic_seguridad_uggroups[".requiredSearchFields"] = array();



$tdatapublic_seguridad_uggroups[".googleLikeFields"] = array();
$tdatapublic_seguridad_uggroups[".googleLikeFields"][] = "GroupID";
$tdatapublic_seguridad_uggroups[".googleLikeFields"][] = "Label";



$tdatapublic_seguridad_uggroups[".tableType"] = "list";

$tdatapublic_seguridad_uggroups[".printerPageOrientation"] = 0;
$tdatapublic_seguridad_uggroups[".nPrinterPageScale"] = 100;

$tdatapublic_seguridad_uggroups[".nPrinterSplitRecords"] = 40;

$tdatapublic_seguridad_uggroups[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_seguridad_uggroups[".geocodingEnabled"] = false;





$tdatapublic_seguridad_uggroups[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapublic_seguridad_uggroups[".pageSize"] = 20;

$tdatapublic_seguridad_uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_seguridad_uggroups[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_seguridad_uggroups[".orderindexes"] = array();

$tdatapublic_seguridad_uggroups[".sqlHead"] = "SELECT \"GroupID\",  	\"Label\"";
$tdatapublic_seguridad_uggroups[".sqlFrom"] = "FROM \"public\".seguridad_uggroups";
$tdatapublic_seguridad_uggroups[".sqlWhereExpr"] = "";
$tdatapublic_seguridad_uggroups[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_seguridad_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_seguridad_uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_seguridad_uggroups[".highlightSearchResults"] = true;

$tableKeyspublic_seguridad_uggroups = array();
$tableKeyspublic_seguridad_uggroups[] = "GroupID";
$tdatapublic_seguridad_uggroups[".Keys"] = $tableKeyspublic_seguridad_uggroups;

$tdatapublic_seguridad_uggroups[".listFields"] = array();

$tdatapublic_seguridad_uggroups[".hideMobileList"] = array();


$tdatapublic_seguridad_uggroups[".viewFields"] = array();

$tdatapublic_seguridad_uggroups[".addFields"] = array();

$tdatapublic_seguridad_uggroups[".masterListFields"] = array();
$tdatapublic_seguridad_uggroups[".masterListFields"][] = "GroupID";
$tdatapublic_seguridad_uggroups[".masterListFields"][] = "Label";

$tdatapublic_seguridad_uggroups[".inlineAddFields"] = array();

$tdatapublic_seguridad_uggroups[".editFields"] = array();

$tdatapublic_seguridad_uggroups[".inlineEditFields"] = array();

$tdatapublic_seguridad_uggroups[".updateSelectedFields"] = array();


$tdatapublic_seguridad_uggroups[".exportFields"] = array();

$tdatapublic_seguridad_uggroups[".importFields"] = array();

$tdatapublic_seguridad_uggroups[".printFields"] = array();


//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "public.seguridad_uggroups";
	$fdata["Label"] = GetFieldLabel("public_seguridad_uggroups","GroupID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "GroupID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"GroupID\"";

	
	
			
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








	$tdatapublic_seguridad_uggroups["GroupID"] = $fdata;
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "public.seguridad_uggroups";
	$fdata["Label"] = GetFieldLabel("public_seguridad_uggroups","Label");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Label\"";

	
	
			
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








	$tdatapublic_seguridad_uggroups["Label"] = $fdata;


$tables_data["public.seguridad_uggroups"]=&$tdatapublic_seguridad_uggroups;
$field_labels["public_seguridad_uggroups"] = &$fieldLabelspublic_seguridad_uggroups;
$fieldToolTips["public_seguridad_uggroups"] = &$fieldToolTipspublic_seguridad_uggroups;
$placeHolders["public_seguridad_uggroups"] = &$placeHolderspublic_seguridad_uggroups;
$page_titles["public_seguridad_uggroups"] = &$pageTitlespublic_seguridad_uggroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.seguridad_uggroups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.seguridad_uggroups"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_seguridad_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"GroupID\",  	\"Label\"";
$proto0["m_strFrom"] = "FROM \"public\".seguridad_uggroups";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strName" => "GroupID",
	"m_strTable" => "public.seguridad_uggroups",
	"m_srcTableName" => "public.seguridad_uggroups"
));

$proto6["m_sql"] = "\"GroupID\"";
$proto6["m_srcTableName"] = "public.seguridad_uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "public.seguridad_uggroups",
	"m_srcTableName" => "public.seguridad_uggroups"
));

$proto8["m_sql"] = "\"Label\"";
$proto8["m_srcTableName"] = "public.seguridad_uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.seguridad_uggroups";
$proto11["m_srcTableName"] = "public.seguridad_uggroups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "GroupID";
$proto11["m_columns"][] = "Label";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".seguridad_uggroups";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.seguridad_uggroups";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.seguridad_uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_seguridad_uggroups = createSqlQuery_public_seguridad_uggroups();


	
		;

		

$tdatapublic_seguridad_uggroups[".sqlquery"] = $queryData_public_seguridad_uggroups;

$tableEvents["public.seguridad_uggroups"] = new eventsBase;
$tdatapublic_seguridad_uggroups[".hasEvents"] = false;

?>