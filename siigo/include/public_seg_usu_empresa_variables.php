<?php
$strTableName="public.seg_usu_empresa";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.seg_usuarios";

$gstrOrderBy="ORDER BY usu_nombres";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("public.seg_usu_empresa");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["public.seg_usu_empresa"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>