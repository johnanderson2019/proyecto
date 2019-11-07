<?php
	include("festivo.php");

	$fes = new Festivos();
	
	
	if(isset($_POST["fecha"])){
		$partes=explode("-",$_POST["fecha"]);

		if (isset($fes->festivos[(int)$partes[0]][(int)$partes[1]][(int)$partes[2]])) {
      		echo "es_festivo";
   		}else{
    		echo "no_festivo";
    	}

	}else{
		echo "es_festivo";
	}

?>