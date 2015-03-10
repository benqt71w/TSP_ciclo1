<!DOCTYPE html>

<html lang="es">
	<head>
		<title>VideoGames</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="estilos.css" />
	</head>

	<body>
		<form method="post" action="procesar.php" autocomplete="on">
			<header name="superior" title="Ikaros - Anime: Sora no Otoshimono">
				<div id="login">		
					<fieldset>
						<legend>Datos de Contacto</legend>
						
						<?php
							session_start();
							if(!isset($_SESSION["session_username"])) {
								header("location:aplicacion.php");
							} 
							else {
						?>
								<div id="bienvenido">
								<h2>Bienvenido/a, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
								<input type="submit" name="apartar" value="Apartar" href="procesar.php">
								<p><a href="logout.php">Cerrar Sesión</a></p>
								</div>
								<?php
							}
						?>				
					</fieldset>	
				</div>
			</header>
	
			<aside name="izquierdo">			
				<?php
					//conexion: 
					$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); 
					//consulta: 
					$query = "SELECT * FROM categoria"; 
					//ejecutar consulta:
					$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));

					$i=0;					
					echo "<ul><h2>CATEGORIA <h2>";					
					while($row = mysqli_fetch_array($result)) { 
						$nombrecate=$row["nombre"];
						$idcate=$row["id_categoria"];
						echo "							
							<li>
								<a href='aplicacionfiltro.php?categoria=$idcate'>$nombrecate</a>
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
					$consulta = "SELECT * FROM videogame"; 
					//ejecutar consulta:
					$result = mysqli_query($link, $consulta) or die("La consulta falló: " . mysqli_error($link));
					 
					$i=1;
					while($row = mysqli_fetch_array($result)) { 
						echo "
							<article name='vg".$i."' title='".$row["descripcion"]."    Stock:".$row["stock"]."'>
								<a href='vg_individual.php?juegos=$i'><img name='juegos' value='".$i."' src='".$row["imagen"]."' height=240px width=100% /></a>
								Precio por Día:".$row["precio_dia"]."<br/>
								Consola:".$row["consola"]."<br/>
								<input name='vg".$i."' type='checkbox' value='vg".$i."' />".$row["nombre"]."
							</article>  ";
						$i++;
					}	 	
				?>

			</section>
			
			<aside name="derecho"> </aside>
			<footer name="pie">	</footer>
		</form>
	</body>
</html>