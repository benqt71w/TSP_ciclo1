<!DOCTYPE html>

<?php
	session_start();
	if(isset($_SESSION["session_username"])){
		header("Location: aplicacionlogin.php");
	}
?>

<html lang="es">

	<head>
		<title>VideoGames</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="estilos.css" />
	</head>

	<body>
		<form method="post" action="login.php" autocomplete="on">
			<header name="superior" title="Ikaros - Anime: Sora no Otoshimono">
				<div id="login">		
					<fieldset>
						<legend>Datos de Contacto</legend>
						<ul>
							<li>
								<label for="cedula">Cedula</label>
								<input type="number" name="cedula" id="cedula" placeholder="123456" autofocus="autofocus" required="required" min="1" maxlength="40" />
							</li>
							<li>
								<label for="pass">Password</label>
								<input type="password" name="pass" id="pass" placeholder="****"  required="required"  min="1" maxlength="15" />
							</li>
							<input type="submit" name="login" value="LOGIN" />
							<input type="reset" name="reiniciar" value="Reiniciar">
							<p>Eres nuevo? <a href="registrar.php" >Registrate Aquí</a>!</p>
						</ul>
					</fieldset>	
				</div>
			</header>
	
			<aside name="izquierdo">
			
				<?php
					//conexion: 
					$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); 
					//consulta: 
					$query = "SELECT * FROM categoria" or die("Error in the consult.." . mysqli_error($link)); 
					//ejecutar consulta:
					$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
					//display information: 
					$i=0;
					
					echo "<ul><h2>CATEGORIA <h2>";			
					
					while($row = mysqli_fetch_array($result)) { 
						$nombrecate=$row["nombre"];
						$idcate=$row["id_categoria"];
						echo "							
							<li>
								<a href='aplicacionfiltro.php' name=categoria value='$idcate'>$nombrecate</a>
								<!--<href='aplicacionfiltro.php' input='submit' name=categoria value='$idcate'>-->
							</li>
							";
						$i++;
					}
					echo " <li><a href='aplicacionlogin.php' method='post' name=categoria value='' >VISTA GENERAL</a> </li>";
					echo "</ul>";
				?>			
				
			</aside>
		
			<section> 
				<?php
					//conexion: 
					$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); 
					//consulta: 
					$query = "SELECT * FROM videogame" or die("Error in the consult.." . mysqli_error($link)); 
					//ejecutar consulta:
					$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
					//display information: 
					$i=0;
					while($row = mysqli_fetch_array($result)) { 
						echo "
							<article name='vg".($i+1)."' title='".$row["descripcion"]."    Stock:".$row["stock"]."'>
								<img height=80% width=100% src='".$row["imagen"]."'/>
								Precio por Día: ".$row["precio_dia"]."<br/>
								Consola: ".$row["consola"]."<br/>
								Nombre: ".$row["nombre"]."
							</article>  ";
						$i++;
					}	 	
				?>
		
		
		<!-- <article name="vg2">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg2" type="checkbox" value="vg2" >VideoGame 2</input>
		</article>
		
		<article name="vg3">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg3" type="checkbox" value="vg3" >VideoGame 3</input>
		</article>
		
		<article name="vg4">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg4" type="checkbox" value="vg4" >VideoGame 4</input>
		</article>
		
		<article name="vg5">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg5" type="checkbox" value="vg5" >VideoGame 5</input>
		</article>
		
		<article name="vg6">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg6" type="checkbox" value="vg6" >VideoGame 6</input>
		</article>
		
		<article name="vg7">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg7" type="checkbox" value="vg7" >VideoGame 7</input>
		</article>
		
		<article name="vg8">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg8" type="checkbox" value="vg8" >VideoGame 8</input>
		</article>
		
		<article name="vg9">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg9" type="checkbox" value="vg9" >VideoGame 9</input>
		</article>
		
		<article name="vg10">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg10" type="checkbox" value="vg10" >VideoGame 10</input>
		</article>
		
		<article name="vg11">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg11" type="checkbox" value="vg11" >VideoGame 11</input>
		</article>
		
		<article name="vg12">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg12" type="checkbox" value="vg12" >VideoGame 12</input>
		</article>
		
		<article name="vg13">
           <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg13" type="checkbox" value="vg13" >VideoGame 13</input>
		</article>
		
		<article name="vg14">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg14" type="checkbox" value="vg14" >VideoGame 14</input>
		</article>
		
		<article name="vg15">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg15" type="checkbox" value="vg15" >VideoGame 15</input>
		</article>
		
		<article name="vg16">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			Precio por Día:<br/>
			Consola:<br/>
			<input name="vg16" type="checkbox" value="vg16" >VideoGame 16</input>
		</article>
		
		-->
			   
			</section>
			
			<aside name="derecho"> </aside>
	
			<footer name="pie">	</footer>

		</form>

	</body>

</html>