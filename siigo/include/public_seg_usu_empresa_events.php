<?php
class eventclass_public_seg_usu_empresa  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;


		$this->events["BeforeMoveNextList"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["BeforeDelete"]=true;




		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeShowAdd"]=true;

		$this->events["ProcessValuesAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$values["usu_estado"]=1;
$values["usu_nombres"]=mb_convert_case($values['usu_nombres'], MB_CASE_TITLE, 'UTF-8');

if($values["usu_identificacion"]!=""){
	$opciones = [
	 'cost' => 12,
	];
	$pass=password_hash($values["usu_identificacion"], PASSWORD_BCRYPT, $opciones);	
	$values["usu_contrasena"]=$pass;	
		
	return true;
}else{
	$message="Ingrese su identificación";
	return false;
}

;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		if($data["id_usuario"]=="11"){
	//$record["edit_link"]=false;
	$record["checkbox"]=false;
	//$record["view_link"]=false;	
}

$record["id_usuario"]=$data["id_usuario"];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
$sql = "INSERT INTO seguridad_ugmembers (\"UserName\",\"GroupID\") 
	values('".$values["usu_identificacion"]."','".$values["id_perfil"]."')";
CustomQuery($sql);
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where, &$deleted_values, &$message, &$pageObject)
{

		$sql = "delete from seguridad_ugmembers where \"UserName\"='".$deleted_values["usu_identificacion"]."'";
	CustomQuery($sql);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		if($values["id_usuario"]=="11"){
	$pageObject->setProxyValue("estado","quitar");
}else{
	$pageObject->setProxyValue("estado","dejar");
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		$data = $pageObject->getMasterRecord();

$planilla=-1;

if($data["id_empresa"]!=""){
	$con_emp="select * from org_empresa where id_empresa='".$data["id_empresa"]."'";
	$res_emp=db_query($con_emp,$conn);
	$row_emp=pg_fetch_array($res_emp);
	if($row_emp["id_planilla"]!=""){
		if($row_emp["id_planilla"]=="3"){
			$planilla=3;
		}
	}
}


$pageObject->setProxyValue("tplanilla_sucursal", $planilla);
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, &$pageObject)
{

		global $conn;
if($values["id_empresa"]!=""){
	$con_t="select id_planilla from org_empresa where id_empresa='".$values["id_empresa"]."'";	
	$res_t=db_query($con_t);
	$row_t=db_fetch_array($res_t);
	if($row_t["id_planilla"]!="" and $row_t["id_planilla"]=="2"){
		$values["id_perfil"]=1;
	}elseif($row_t["id_planilla"]!="" and $row_t["id_planilla"]=="3"){
		//$values["id_perfil"]=4;
	}else{
		$values["id_perfil"]="";	
	}
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
