<?php
 
	if(isset($_POST["registrar"])){
 
		$cedula=$_POST['cedula'];
		$nombre=$_POST['nombre'];
		$telefono=$_POST['telefono'];
		$password=$_POST['pass'];
		//conexion: 
		$link = mysqli_connect("localhost","root","","videojuegos") or die("Error de conexion" . mysqli_error($link)); 
		$consulta=mysqli_query($link, "SELECT * FROM cliente WHERE cedula='".$cedula."'") or die("Error en la consulta.." . mysqli_error($link));
		$numrows=mysqli_num_rows($consulta);
 
		if($numrows==0){
			$insert="INSERT INTO cliente (cedula, nombre, telefono, password) VALUES('$cedula','$nombre', '$telefono', '$password')";
			echo "$insert";
			$result=mysqli_query($link,$insert)or die("Error en la conexion.." . mysqli_error($link));
 
			if($result){
				$mensaje="Cuenta Correctamente Creada";
			} 
			else {
				$mensaje = "Error al ingresar datos de la informacion!";
				echo"$mensaje";
			}
		} 
		else {
			$mensaje = "El Numero de Cedula ya existe! Por favor, verifica o Inicia Sesion";
			echo"$mensaje";
		}	
		echo"$mensaje";
		header("Location: aplicacion.php");
	}
?>
