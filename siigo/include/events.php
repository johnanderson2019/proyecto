<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["BeforeRegister"]=true;



		$this->events["BeforeProcessLogin"]=true;

		$this->events["BeforeShowMenu"]=true;

		$this->events["ModifyMenuItem"]=true;


//	onscreen events



		}

//	handlers

		
		
		
		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		global $conn;


$con_usu = "select * from seg_usuarios where usu_identificacion='".$_SESSION["UserID"]."'";
$res_usu = db_query($con_usu,$conn);
$row_usu=db_fetch_array($res_usu);

if($row_usu){
	$_SESSION['s_idusuario']=$row_usu['id_usuario'];
	$_SESSION['s_nombre']=$row_usu['usu_nombres'];
	$_SESSION['s_id_empresa']=$row_usu['id_empresa'];

	if($_SESSION['s_id_empresa']!=""){
		$con_suc = "select * from org_empresa where id_empresa='".$_SESSION["s_id_empresa"]."'";
		$res_suc = db_query($con_suc,$conn);
		$row_suc=db_fetch_array($res_suc);
		$_SESSION['s_nom_empresa']=$row_suc['emp_nombre'];
	}else{
		$_SESSION['s_idusuario']=0;
		$_SESSION['s_nom_empresa']="";
		$_SESSION['s_id_empresa']="-1";
	}	
}else{
	$_SESSION['s_idusuario']=0;
	$_SESSION['s_nom_empresa']="";
	$_SESSION['s_id_empresa']="-1";
}



$_SESSION['s_type_usuario']=0;



if($_SESSION['s_type_usuario']==0){
	header('Location: menu.php');
}


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				
		
				// Before registration
function BeforeRegister(&$userdata, &$message, &$pageObject)
{

		
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeRegister

		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// Login page: Before process
function BeforeProcessLogin(&$pageObject)
{

		if($_REQUEST["sucursal"]){
	$_SESSION['s_idsucursal']=$_REQUEST["sucursal"];
}else{
	$_SESSION['s_idsucursal']=0;
}

$_SESSION['s_idsucursal']=$_REQUEST["sucursal"];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessLogin

		
		
		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowMenu(&$xt, &$templatefile, &$pageObject)
{

		$usu=$_SESSION["UserID"];
//el usuario no es identificable
$_SESSION['s_type_usuario']=0;
if(($_SESSION["UserRights"][$usu][".Groups"][0])==-1){
	//-1::administrador global
	$_SESSION['s_type_usuario']=-1;

}elseif(($_SESSION["UserRights"][$usu][".Groups"][0])==1){
	//1::administra una empresa y debe validar el id de la sucursal
	$_SESSION['s_type_usuario']=1;

}elseif(($_SESSION["UserRights"][$usu][".Groups"][0])==4){
	//1::administra una empresa de control de pagos
	$_SESSION['s_type_usuario']=4;

}elseif(($_SESSION["UserRights"][$usu][".Groups"][0])==5){
	//1::factura en una empresa de control de pagos
	$_SESSION['s_type_usuario']=5;

}elseif(($_SESSION["UserRights"][$usu][".Groups"][0])==3){
	//1::administra el sistema pero no puede gestionar empresa por lo que no necesita sucursal
	$_SESSION['s_type_usuario']=3;

}


$pageObject->setProxyValue("sucursal", $_SESSION['s_sucursal']);
$pageObject->setProxyValue("type_usuario", $_SESSION['s_type_usuario']);


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowMenu

		
		
		
		

		
		
		
		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		//if ($menuItem->getTable() == 'Cars' && isMobile()){{
//$_SESSION['s_tipocp']

//  3. independiente asociado

/*if($_SESSION['s_tipocp']=="3"){
	if($menuItem->getTable()=='public.cpa_empresa' or $menuItem->getTable()=='public.cpa_filial'
		or $menuItem->getTable()=='public.cpa_ayudante' or $menuItem->getTable()=='public.cpa_novedades'
		or $menuItem->getTable()=='public.fac_ayudante' or $menuItem->getTable()=='public.fac_ayucontable'
		or $menuItem->getTable()=='public.vw_libro_persona_ayu' or $menuItem->getTable()=='public.vw_libro_general_ayu'
		or $menuItem->getTable()=='public.vw_libro_consig_ayu'
		){
		return false;
	}
}

//  3. empresa
if($_SESSION['s_tipocp']=="1"){
	if($menuItem->getTable()=='public.org_iasociado' or $menuItem->getTable()=='public.org_iasociado'
	or $menuItem->getTable()=='public.fac_iasociado' or $menuItem->getTable()=='public.org_novedades'
	or $menuItem->getTable()=='public.fac_iacontable' or $menuItem->getTable()=='public.vw_reporte_pago_rep'
	or $menuItem->getTable()=='public.vw_libro_persona_per' or $menuItem->getTable()=='public.vw_libro_general_rep'
	or $menuItem->getTable()=='public.vw_libro_consig' or $menuItem->getTable()=='public.con_centros'
	or $menuItem->getTable()=='public.fac_iacontable_ingresos' or $menuItem->getTable()=='public.fac_iacontable_gastos'
	or $menuItem->getTable()=='public.vw_libro_diario'){
	
		return false;
	}
}//fin validar sesion
*/
return true;
;		
} // function ModifyMenuItem

		

//	onscreen events

}
?>
