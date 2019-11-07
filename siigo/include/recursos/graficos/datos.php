<?php

header('Content-Type: application/json');

include("../../dbcommon.php");
$conn=db_connect();


date_default_timezone_set("America/Bogota");


$totalData=200;
$datos = array();

$sen_key=0;
if(!isset($_GET['sen_key'])){
	$sen_key=0;
}else{
	$sen_key=$_GET['sen_key'];	
}

switch ($_GET['Consultar']) {
	//ultimo dato tipo minutos
    case 1:
	    if(isset($_GET['data']) and $_GET['data']=="tem"){
			$con="select * FROM pro_datos where sen_key='".$sen_key."' ORDER BY id_dato DESC LIMIT 1";
			$res_con=db_query($con,$conn);
			$num_con=pg_num_rows($res_con);
			for ($i=0; $i<$num_con; $i++) { 
				$row_con=db_fetch_array($res_con,$i);

				date_default_timezone_set("America/Bogota");
				//echo strtotime("2019-05-09 11:23:10");
				//echo date('Y-m-d  H:i:s', 1557418990);

				$long=date("Y-m-d H:i:s",strtotime($row_con["dat_momento"]));
				
				//$long=gmdate('r', $long);
				$long = strtotime($long);
				$long=date('D M d Y H:i:s',$long);
				$long=$long." GMT";

				$misDatos[]=array('id_dato'=>$row_con["id_dato"],'x'=>$long,'y'=>$row_con["dat_temp"],'dat_hum'=>$row_con["dat_hum"],'dat_hora'=>$row_con["dat_hora"],
					'dat_fecha'=>$row_con["dat_fecha"]);
			}

			$json=json_encode($misDatos);
			echo $json;
		}
		
		if(isset($_GET['data']) and $_GET['data']=="hum"){
			$con="select * from pro_datos where sen_key='".$sen_key."' ORDER BY id_dato DESC LIMIT 1";
			$res_con=db_query($con,$conn);
			$num_con=pg_num_rows($res_con);
			for ($i=0; $i<$num_con; $i++) { 
				$row_con=db_fetch_array($res_con,$i);

				date_default_timezone_set("America/Bogota");
				//echo strtotime("2019-05-09 11:23:10");
				//echo date('Y-m-d  H:i:s', 1557418990);

				$long=date("Y-m-d H:i:s",strtotime($row_con["dat_momento"]));
				
				//$long=gmdate('r', $long);
				$long = strtotime($long);
				$long=date('D M d Y H:i:s',$long);
				$long=$long." GMT";

				$misDatos[]=array('id_dato'=>$row_con["id_dato"],'x'=>$long,'dat_tem'=>$row_con["dat_temp"],'y'=>$row_con["dat_hum"],'dat_hora'=>$row_con["dat_hora"],
					'dat_fecha'=>$row_con["dat_fecha"]);
			}

			$json=json_encode($misDatos);
			echo $json;
		}	
        break;
    
    default:
	    if(isset($_GET['data']) and $_GET['data']=="tem"){
	    	//consulta para menos de 200 datos
	    	$con_n="SELECT count(*) as total FROM pro_datos where sen_key='".$sen_key."'";
			$res_n=db_query($con_n,$conn);
			$row_n=db_fetch_array($res_n,$i);
			$num_n=$row_n["total"];

			if($num_n<$totalData){
				$con="SELECT * FROM pro_datos where sen_key='".$sen_key."' ORDER BY id_dato ASC";
				$res_con=db_query($con,$conn);
				$num_con=pg_num_rows($res_con);	
			}else{
		    	$con="SELECT * FROM pro_datos where sen_key='".$sen_key."' ORDER BY id_dato ASC LIMIT ".$totalData." OFFSET (SELECT COUNT(*) FROM pro_datos) - ".$totalData;
				$res_con=db_query($con,$conn);
				$num_con=pg_num_rows($res_con);
			}

			for ($i=0; $i<$num_con; $i++){
				$row_con=db_fetch_array($res_con,$i);	
	 			
	 			
				
				
				date_default_timezone_set("America/Bogota");
				//echo strtotime("2019-05-09 11:23:10");
				//echo date('Y-m-d  H:i:s', 1557418990);

				$long=date("Y-m-d H:i:s",strtotime($row_con["dat_momento"]));
				
				//$long=gmdate('r', $long);
				$long = strtotime($long);
				$long=date('D M d Y H:i:s',$long);
				$long=$long." GMT";




				$misDatos[]=array('id_dato'=>$row_con["id_dato"],'x'=>$long,'y'=>$row_con["dat_temp"],'dat_hum'=>$row_con["dat_hum"],'dat_hora'=>$row_con["dat_hora"],
					'dat_fecha'=>$row_con["dat_fecha"]);
			}
			
			$json=json_encode($misDatos);
			echo $json;
		}

		if(isset($_GET['data']) and $_GET['data']=="hum"){
	    	//consulta para menos de 200 datos
	    	$con_n="SELECT count(*) as total FROM pro_datos where sen_key='".$sen_key."'";
			$res_n=db_query($con_n,$conn);
			$row_n=db_fetch_array($res_n,$i);
			$num_n=$row_n["total"];

			if($num_n<$totalData){
				$con="SELECT * FROM pro_datos where sen_key='".$sen_key."' ORDER BY id_dato ASC";
				$res_con=db_query($con,$conn);
				$num_con=pg_num_rows($res_con);	
			}else{
		    	$con="SELECT * FROM pro_datos where sen_key='".$sen_key."' ORDER BY id_dato ASC LIMIT ".$totalData." 
		    		OFFSET (SELECT COUNT(*) FROM pro_datos) - ".$totalData;
				$res_con=db_query($con,$conn);
				$num_con=pg_num_rows($res_con);
			}

			for ($i=0; $i<$num_con; $i++){
				$row_con=db_fetch_array($res_con,$i);	
	 			
	 			
				
				
				date_default_timezone_set("America/Bogota");
				//echo strtotime("2019-05-09 11:23:10");
				//echo date('Y-m-d  H:i:s', 1557418990);

				$long=date("Y-m-d H:i:s",strtotime($row_con["dat_momento"]));
				
				//$long=gmdate('r', $long);
				$long = strtotime($long);
				$long=date('D M d Y H:i:s',$long);
				$long=$long." GMT";




				$misDatos[]=array('id_dato'=>$row_con["id_dato"],'x'=>$long,'data_tem'=>$row_con["dat_temp"],'y'=>$row_con["dat_hum"],'dat_hora'=>$row_con["dat_hora"],
					'dat_fecha'=>$row_con["dat_fecha"]);
			}
			
			$json=json_encode($misDatos);
			echo $json;
		}
        break;
}