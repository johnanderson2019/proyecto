<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["public.seguridad_uggroups"]["public_seg_usuarios.id_perfil"]["edit"] = array("table" => "public.seg_usuarios", "field" => "id_perfil", "page" => "edit");
	$lookupTableLinks["public.org_empresa"]["public_seg_usuarios.id_empresa"]["edit"] = array("table" => "public.seg_usuarios", "field" => "id_empresa", "page" => "edit");
	$lookupTableLinks[""]["admin_members.id_perfil"]["register"] = array("table" => "admin_members", "field" => "id_perfil", "page" => "register");
	$lookupTableLinks[""]["admin_members.id_perfil"]["add"] = array("table" => "admin_members", "field" => "id_perfil", "page" => "add");
	$lookupTableLinks[""]["admin_members.id_perfil"]["search"] = array("table" => "admin_members", "field" => "id_perfil", "page" => "search");
	$lookupTableLinks[""]["admin_users.id_perfil"]["register"] = array("table" => "admin_users", "field" => "id_perfil", "page" => "register");
	$lookupTableLinks[""]["admin_users.id_perfil"]["add"] = array("table" => "admin_users", "field" => "id_perfil", "page" => "add");
	$lookupTableLinks[""]["admin_users.id_perfil"]["search"] = array("table" => "admin_users", "field" => "id_perfil", "page" => "search");
	$lookupTableLinks["public.org_empresa"]["public_fac_cliente.id_empresa"]["edit"] = array("table" => "public.fac_cliente", "field" => "id_empresa", "page" => "edit");
	$lookupTableLinks["public.org_empresa"]["public_fac_producto.id_empresa"]["edit"] = array("table" => "public.fac_producto", "field" => "id_empresa", "page" => "edit");
}

?>