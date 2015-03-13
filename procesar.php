<?php
	session_start();

	//conexion: 
	$link = mysqli_connect("localhost","root","","videojuegos") or die("Error en la conexion. " . mysqli_error($link)); 
	//consulta: 
	$query = "SELECT * FROM videogame"; 
	//ejecutar consulta. 
	$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
	
	$i=0;
	$fecha_inicio=date('Y-m-j');
	while($row = mysqli_fetch_array($result)) {	
		if (isset($_REQUEST["vg".($i+1).""])) {
			$update = "UPDATE videogame set stock='".(($row["stock"])-1)."' WHERE nombre='".$row["nombre"]."'";
			mysqli_query($link, $update) or die("La actualización falló: " . mysqli_error($link));
			$insert_prestamo = "INSERT INTO prestamo (id_cliente, id_videojuego,fecha) VALUES('".$_SESSION['session_cedula']."', '".$row["id_vj"]."','$fecha_inicio')";
			mysqli_query($link, $insert_prestamo) or die("La inserción de prestamo falló: " . mysqli_error($link));
		}
		$i++;
	}
	header("Location: aplicacion.php");
?>