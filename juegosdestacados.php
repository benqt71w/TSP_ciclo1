<?php
	function dameFecha($fecha,$dia)
	{
	   list($day,$mon,$year) = explode('-',$fecha);
    	return date('Y-m-j',mktime(0,0,0,$mon,$day+$dia,$year));        
	}

	$link = mysqli_connect("localhost","root","","videojuegos") or die("Error en la conexion. " . mysqli_error($link)); 
	//consulta: 
	$fecha_fin=date('Y-m-j');
	echo $fecha_fin;
	$fecha_ini=dameFecha(date('Y-m-j'),-8);
	echo "  -----".$fecha_ini;
	$query = "SELECT * FROM videogame WHERE fecha BETWEEN '$fecha_ini' AND '$fecha_fin'"; 
	//ejecutar consulta. 
	$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
?>