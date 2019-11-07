<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_con_basicas = array();
	$tdatapublic_con_basicas[".truncateText"] = true;
	$tdatapublic_con_basicas[".NumberOfChars"] = 400;
	$tdatapublic_con_basicas[".ShortName"] = "public_con_basicas";
	$tdatapublic_con_basicas[".OwnerID"] = "";
	$tdatapublic_con_basicas[".OriginalTable"] = "public.con_basicas";

//	field labels
$fieldLabelspublic_con_basicas = array();
$fieldToolTipspublic_con_basicas = array();
$pageTitlespublic_con_basicas = array();
$placeHolderspublic_con_basicas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_con_basicas["Spanish"] = array();
	$fieldToolTipspublic_con_basicas["Spanish"] = array();
	$placeHolderspublic_con_basicas["Spanish"] = array();
	$pageTitlespublic_con_basicas["Spanish"] = array();
	$fieldLabelspublic_con_basicas["Spanish"]["id_basica"] = "Serial Basica";
	$fieldToolTipspublic_con_basicas["Spanish"]["id_basica"] = "";
	$placeHolderspublic_con_basicas["Spanish"]["id_basica"] = "";
	$fieldLabelspublic_con_basicas["Spanish"]["bas_basica"] = "Basica";
	$fieldToolTipspublic_con_basicas["Spanish"]["bas_basica"] = "";
	$placeHolderspublic_con_basicas["Spanish"]["bas_basica"] = "";
	if (count($fieldToolTipspublic_con_basicas["Spanish"]))
		$tdatapublic_con_basicas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_con_basicas[""] = array();
	$fieldToolTipspublic_con_basicas[""] = array();
	$placeHolderspublic_con_basicas[""] = array();
	$pageTitlespublic_con_basicas[""] = array();
	$fieldLabelspublic_con_basicas[""]["id_basica"] = "Id Basica";
	$fieldToolTipspublic_con_basicas[""]["id_basica"] = "";
	$placeHolderspublic_con_basicas[""]["id_basica"] = "";
	$fieldLabelspublic_con_basicas[""]["bas_basica"] = "Bas Basica";
	$fieldToolTipspublic_con_basicas[""]["bas_basica"] = "";
	$placeHolderspublic_con_basicas[""]["bas_basica"] = "";
	if (count($fieldToolTipspublic_con_basicas[""]))
		$tdatapublic_con_basicas[".isUseToolTips"] = true;
}


	$tdatapublic_con_basicas[".NCSearch"] = true;



$tdatapublic_con_basicas[".shortTableName"] = "public_con_basicas";
$tdatapublic_con_basicas[".nSecOptions"] = 0;
$tdatapublic_con_basicas[".recsPerRowPrint"] = 1;
$tdatapublic_con_basicas[".mainTableOwnerID"] = "";
$tdatapublic_con_basicas[".moveNext"] = 0;
$tdatapublic_con_basicas[".entityType"] = 0;

$tdatapublic_con_basicas[".strOriginalTableName"] = "public.con_basicas";

	



$tdatapublic_con_basicas[".showAddInPopup"] = true;

$tdatapublic_con_basicas[".showEditInPopup"] = true;

$tdatapublic_con_basicas[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
					
;
$popupPagesLayoutNames["add"] = "add";
			;
$popupPagesLayoutNames["edit"] = "add";
			;
$popupPagesLayoutNames["view"] = "add";
$tdatapublic_con_basicas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_con_basicas[".fieldsForRegister"] = array();

	$tdatapublic_con_basicas[".listAjax"] = true;

	$tdatapublic_con_basicas[".audit"] = false;

	$tdatapublic_con_basicas[".locking"] = false;



$tdatapublic_con_basicas[".list"] = true;





$tdatapublic_con_basicas[".exportFormatting"] = 2;
$tdatapublic_con_basicas[".exportDelimiter"] = ",";
		


$tdatapublic_con_basicas[".exportTo"] = true;

$tdatapublic_con_basicas[".printFriendly"] = true;


$tdatapublic_con_basicas[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapublic_con_basicas[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapublic_con_basicas[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapublic_con_basicas[".searchSaving"] = false;
//

$tdatapublic_con_basicas[".showSearchPanel"] = true;
		$tdatapublic_con_basicas[".flexibleSearch"] = true;

$tdatapublic_con_basicas[".isUseAjaxSuggest"] = true;

$tdatapublic_con_basicas[".rowHighlite"] = true;





$tdatapublic_con_basicas[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_con_basicas[".buttonsAdded"] = false;

$tdatapublic_con_basicas[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapublic_con_basicas[".isUseTimeForSearch"] = false;



$tdatapublic_con_basicas[".badgeColor"] = "388E8E";


$tdatapublic_con_basicas[".allSearchFields"] = array();
$tdatapublic_con_basicas[".filterFields"] = array();
$tdatapublic_con_basicas[".requiredSearchFields"] = array();

$tdatapublic_con_basicas[".allSearchFields"][] = "id_basica";
	$tdatapublic_con_basicas[".allSearchFields"][] = "bas_basica";
	

$tdatapublic_con_basicas[".googleLikeFields"] = array();
$tdatapublic_con_basicas[".googleLikeFields"][] = "id_basica";
$tdatapublic_con_basicas[".googleLikeFields"][] = "bas_basica";


$tdatapublic_con_basicas[".advSearchFields"] = array();
$tdatapublic_con_basicas[".advSearchFields"][] = "id_basica";
$tdatapublic_con_basicas[".advSearchFields"][] = "bas_basica";

$tdatapublic_con_basicas[".tableType"] = "list";

$tdatapublic_con_basicas[".printerPageOrientation"] = 0;
$tdatapublic_con_basicas[".nPrinterPageScale"] = 100;

$tdatapublic_con_basicas[".nPrinterSplitRecords"] = 40;

$tdatapublic_con_basicas[".nPrinterPDFSplitRecords"] = 40;



$tdatapublic_con_basicas[".geocodingEnabled"] = false;





$tdatapublic_con_basicas[".listGridLayout"] = 3;

$tdatapublic_con_basicas[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatapublic_con_basicas[".pageSize"] = 20;

$tdatapublic_con_basicas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_con_basicas[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_con_basicas[".orderindexes"] = array();

$tdatapublic_con_basicas[".sqlHead"] = "SELECT id_basica,  	bas_basica";
$tdatapublic_con_basicas[".sqlFrom"] = "FROM \"public\".con_basicas";
$tdatapublic_con_basicas[".sqlWhereExpr"] = "";
$tdatapublic_con_basicas[".sqlTail"] = "";


//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'EPS1',
					   'tabName'=>"EPS",
					   'nType'=>'1',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'AFP1',
					   'tabName'=>"AFP",
					   'nType'=>'1',
					   'nOrder'=>5,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Salario_Minimo1',
					   'tabName'=>"Salario Minimo",
					   'nType'=>'1',
					   'nOrder'=>9,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Parafiscales1',
					   'tabName'=>"Parafiscales",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Prestaciones1',
					   'tabName'=>"Prestaciones",
					   'nType'=>'1',
					   'nOrder'=>14,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'Interes_Moratorio1',
					   'tabName'=>"Interes Moratorio",
					   'nType'=>'1',
					   'nOrder'=>16,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatapublic_con_basicas[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'EPS1',
					  'tabName'=>"EPS",
					  'nType'=>'1',
					  'nOrder'=>1,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'AFP1',
					  'tabName'=>"AFP",
					  'nType'=>'1',
					  'nOrder'=>5,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Salario_Minimo1',
					  'tabName'=>"Salario Minimo",
					  'nType'=>'1',
					  'nOrder'=>9,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Parafiscales1',
					  'tabName'=>"Parafiscales",
					  'nType'=>'1',
					  'nOrder'=>12,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Prestaciones1',
					  'tabName'=>"Prestaciones",
					  'nType'=>'1',
					  'nOrder'=>14,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	
$arrAddTabs[] = array('tabId'=>'Interes_Moratorio1',
					  'tabName'=>"Interes Moratorio",
					  'nType'=>'1',
					  'nOrder'=>16,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdatapublic_con_basicas[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'EPS1',
					   'tabName'=>"EPS",
					   'nType'=>'1',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'AFP1',
					   'tabName'=>"AFP",
					   'nType'=>'1',
					   'nOrder'=>5,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'Salario_Minimo1',
					   'tabName'=>"Salario Minimo",
					   'nType'=>'1',
					   'nOrder'=>9,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'Parafiscales1',
					   'tabName'=>"Parafiscales",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'Prestaciones1',
					   'tabName'=>"Prestaciones",
					   'nType'=>'1',
					   'nOrder'=>14,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'Interes_Moratorio1',
					   'tabName'=>"Interes Moratorio",
					   'nType'=>'1',
					   'nOrder'=>16,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatapublic_con_basicas[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_con_basicas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_con_basicas[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_con_basicas[".highlightSearchResults"] = true;

$tableKeyspublic_con_basicas = array();
$tdatapublic_con_basicas[".Keys"] = $tableKeyspublic_con_basicas;

$tdatapublic_con_basicas[".listFields"] = array();
$tdatapublic_con_basicas[".listFields"][] = "id_basica";
$tdatapublic_con_basicas[".listFields"][] = "bas_basica";

$tdatapublic_con_basicas[".hideMobileList"] = array();


$tdatapublic_con_basicas[".viewFields"] = array();

$tdatapublic_con_basicas[".addFields"] = array();

$tdatapublic_con_basicas[".masterListFields"] = array();
$tdatapublic_con_basicas[".masterListFields"][] = "id_basica";
$tdatapublic_con_basicas[".masterListFields"][] = "bas_basica";

$tdatapublic_con_basicas[".inlineAddFields"] = array();

$tdatapublic_con_basicas[".editFields"] = array();

$tdatapublic_con_basicas[".inlineEditFields"] = array();

$tdatapublic_con_basicas[".updateSelectedFields"] = array();


$tdatapublic_con_basicas[".exportFields"] = array();
$tdatapublic_con_basicas[".exportFields"][] = "id_basica";
$tdatapublic_con_basicas[".exportFields"][] = "bas_basica";

$tdatapublic_con_basicas[".importFields"] = array();

$tdatapublic_con_basicas[".printFields"] = array();
$tdatapublic_con_basicas[".printFields"][] = "id_basica";
$tdatapublic_con_basicas[".printFields"][] = "bas_basica";


//	id_basica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_basica";
	$fdata["GoodName"] = "id_basica";
	$fdata["ownerTable"] = "public.con_basicas";
	$fdata["Label"] = GetFieldLabel("public_con_basicas","id_basica");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id_basica";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_basica";

	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapublic_con_basicas["id_basica"] = $fdata;
//	bas_basica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "bas_basica";
	$fdata["GoodName"] = "bas_basica";
	$fdata["ownerTable"] = "public.con_basicas";
	$fdata["Label"] = GetFieldLabel("public_con_basicas","bas_basica");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bas_basica";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bas_basica";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapublic_con_basicas["bas_basica"] = $fdata;


$tables_data["public.con_basicas"]=&$tdatapublic_con_basicas;
$field_labels["public_con_basicas"] = &$fieldLabelspublic_con_basicas;
$fieldToolTips["public_con_basicas"] = &$fieldToolTipspublic_con_basicas;
$placeHolders["public_con_basicas"] = &$placeHolderspublic_con_basicas;
$page_titles["public_con_basicas"] = &$pageTitlespublic_con_basicas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.con_basicas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["public.con_basicas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_con_basicas()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "id_basica,  	bas_basica";
$proto3["m_strFrom"] = "FROM \"public\".con_basicas";
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
	"m_strName" => "id_basica",
	"m_strTable" => "public.con_basicas",
	"m_srcTableName" => "public.con_basicas"
));

$proto9["m_sql"] = "id_basica";
$proto9["m_srcTableName"] = "public.con_basicas";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "bas_basica",
	"m_strTable" => "public.con_basicas",
	"m_srcTableName" => "public.con_basicas"
));

$proto11["m_sql"] = "bas_basica";
$proto11["m_srcTableName"] = "public.con_basicas";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "public.con_basicas";
$proto14["m_srcTableName"] = "public.con_basicas";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id_basica";
$proto14["m_columns"][] = "bas_basica";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "\"public\".con_basicas";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "public.con_basicas";
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
$proto3["m_srcTableName"]="public.con_basicas";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_public_con_basicas = createSqlQuery_public_con_basicas();


	
		;

		

$tdatapublic_con_basicas[".sqlquery"] = $queryData_public_con_basicas;

include_once(getabspath("include/public_con_basicas_events.php"));
$tableEvents["public.con_basicas"] = new eventclass_public_con_basicas;
$tdatapublic_con_basicas[".hasEvents"] = true;

?>