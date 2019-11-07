<?php
$dalTableseg_usuarios = array();
$dalTableseg_usuarios["id_usuario"] = array("type"=>3,"varname"=>"id_usuario", "name" => "id_usuario");
$dalTableseg_usuarios["usu_identificacion"] = array("type"=>200,"varname"=>"usu_identificacion", "name" => "usu_identificacion");
$dalTableseg_usuarios["usu_nombres"] = array("type"=>200,"varname"=>"usu_nombres", "name" => "usu_nombres");
$dalTableseg_usuarios["usu_contrasena"] = array("type"=>200,"varname"=>"usu_contrasena", "name" => "usu_contrasena");
$dalTableseg_usuarios["usu_correo"] = array("type"=>200,"varname"=>"usu_correo", "name" => "usu_correo");
$dalTableseg_usuarios["usu_estado"] = array("type"=>20,"varname"=>"usu_estado", "name" => "usu_estado");
$dalTableseg_usuarios["reset_token"] = array("type"=>200,"varname"=>"reset_token", "name" => "reset_token");
$dalTableseg_usuarios["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date");
$dalTableseg_usuarios["id_perfil"] = array("type"=>20,"varname"=>"id_perfil", "name" => "id_perfil");
$dalTableseg_usuarios["id_empresa"] = array("type"=>20,"varname"=>"id_empresa", "name" => "id_empresa");
	$dalTableseg_usuarios["id_usuario"]["key"]=true;

$dal_info["fullcalendar_at_localhost_public_seg_usuarios"] = &$dalTableseg_usuarios;
?>