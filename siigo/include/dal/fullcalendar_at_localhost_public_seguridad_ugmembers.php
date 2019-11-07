<?php
$dalTableseguridad_ugmembers = array();
$dalTableseguridad_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName");
$dalTableseguridad_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID");
	$dalTableseguridad_ugmembers["UserName"]["key"]=true;
	$dalTableseguridad_ugmembers["GroupID"]["key"]=true;

$dal_info["fullcalendar_at_localhost_public_seguridad_ugmembers"] = &$dalTableseguridad_ugmembers;
?>