<!DOCTYPE html>

<html lang="es">

	<head>
		<title>VideoGames</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="registroCSS.css" />
	</head>

	<body>		
			<header name="superior" title="Sakura - Anime: Sakura Card Captor">	</header>
			<aside name="izquierdo"></aside>
		
			<section> 			
			<form method="post" action="registroSQL.php" autocomplete="on">			
				<div id="registro">		
					<fieldset>
						<legend>Datos de Contacto</legend>
						<ul>
							<li>
								<label for="nombre">Nombre</label>
								<input type="text" name="nombre" id="nombre" placeholder="Pepito" autofocus="autofocus" required="required" maxlength="40" />
							</li>
							<li>
								<label for="cedula">Cedula</label>
								<input type="number" name="cedula" id="cedula" placeholder="1111111" required="required"  min="1" maxlength="15" />
							</li>
							<li>
								<label for="pass">Password</label>
								<input type="password" name="pass" id="pass" placeholder="****"  required="required"  min="6" maxlength="15" />
							</li>
							<li>
								<label for="telefono">Teléfono</label>
								<input type="number" name="telefono" id="telefono" placeholder="5555555"  required="required"  min="1" maxlength="15" />
							</li>
							<p></p>
							<input type="submit" name="registrar" value="Registrar" />
							<input type="reset" name="reiniciar" value="Reiniciar">
							<a href='aplicacion.php'><p>Home Page</p></a>
						</ul>
					</fieldset>		
				</div>				
			</form>
			
			</section>
			
			<aside name="derecho"> </aside>	
			<footer name="pie">	</footer>
	</body>
</html>