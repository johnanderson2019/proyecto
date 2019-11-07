<?php
$dalTablefac_cliente = array();
$dalTablefac_cliente["id_cliente"] = array("type"=>3,"varname"=>"id_cliente", "name" => "id_cliente");
$dalTablefac_cliente["cli_nombre"] = array("type"=>200,"varname"=>"cli_nombre", "name" => "cli_nombre");
$dalTablefac_cliente["cli_nit"] = array("type"=>200,"varname"=>"cli_nit", "name" => "cli_nit");
$dalTablefac_cliente["id_empresa"] = array("type"=>20,"varname"=>"id_empresa", "name" => "id_empresa");
	$dalTablefac_cliente["id_cliente"]["key"]=true;

$dal_info["fullcalendar_at_localhost_public_fac_cliente"] = &$dalTablefac_cliente;
?>