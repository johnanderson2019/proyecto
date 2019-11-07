<?php
$strTableName="public.seg_usuarios";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.seg_usuarios";

$gstrOrderBy="ORDER BY orden asc,usu_nombres asc";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("public.seg_usuarios");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["public.seg_usuarios"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>