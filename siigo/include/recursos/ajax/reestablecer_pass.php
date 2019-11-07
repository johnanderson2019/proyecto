<?php 
	include("../../dbcommon.php");
	global $conn;


	$id_usuario=$_GET["id_usuario"];
	
	

if($id_usuario!=""){

	$sql_per="select * from seg_usuarios where id_usuario='".$id_usuario."' limit 1";
	$res_per=db_query($sql_per,$conn);
	$num_per=pg_num_rows($res_per);
	$row_per=db_fetch_array($res_per);

	if($row_per["usu_identificacion"]!=""){
		$opciones=[
		 'cost'=>12,
	];
	$pass=password_hash($row_per["usu_identificacion"], PASSWORD_BCRYPT, $opciones);	

	$sql = "UPDATE seg_usuarios set usu_contrasena='".$pass."' where id_usuario='".$id_usuario."'";
	CustomQuery($sql);

	echo "ok";
	
	}else{
		echo "error";
	}

}else{
	echo "error";
}
?>