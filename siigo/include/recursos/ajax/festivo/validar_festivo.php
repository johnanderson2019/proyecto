<?php
	include("festivo.php");

	$fes = new Festivos();
	
	
	$_POST["fecha"]="2019-11-4";
	if(isset($_POST["fecha"])){
		$partes=explode("-",$_POST["fecha"]);

		if (isset($fes->festivos[(int)$partes[0]][(int)$partes[1]][(int)$partes[2]])) {
      		echo "es_festivo";
   		}else{
    		echo "no_festivo";
    	}

	}else{
		echo "ni_idea";
	}
	$la_fecha = "2019-11-2";
	$el_dia=date('w', strtotime($la_fecha));

	echo "<br>";
	echo "el dia: ".$el_dia;
?>