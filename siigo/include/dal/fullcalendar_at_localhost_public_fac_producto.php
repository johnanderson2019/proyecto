<?php
$dalTablefac_producto = array();
$dalTablefac_producto["id_producto"] = array("type"=>3,"varname"=>"id_producto", "name" => "id_producto");
$dalTablefac_producto["id_empresa"] = array("type"=>20,"varname"=>"id_empresa", "name" => "id_empresa");
$dalTablefac_producto["pro_nombre"] = array("type"=>200,"varname"=>"pro_nombre", "name" => "pro_nombre");
$dalTablefac_producto["pro_descripcion"] = array("type"=>200,"varname"=>"pro_descripcion", "name" => "pro_descripcion");
$dalTablefac_producto["pro_valor"] = array("type"=>14,"varname"=>"pro_valor", "name" => "pro_valor");
	$dalTablefac_producto["id_producto"]["key"]=true;

$dal_info["fullcalendar_at_localhost_public_fac_producto"] = &$dalTablefac_producto;
?>