<section>
	<?php

		$link = mysqli_connect("localhost","root","","videojuegos") or die("Error en la conexion. " . mysqli_error($link)); 
		//consulta: 
		$fecha_fin=date('Y-m-j');
	
		$fecha_ini=strtotime ( '-8 day' , strtotime ( $fecha_fin ) ) ;
		$fecha_ini= date ( 'Y-m-j' , $fecha_ini);

	
		$query = "SELECT imagen FROM prestamo,videogame WHERE fecha BETWEEN '$fecha_ini' AND '$fecha_fin'"; 
			
		//ejecutar consulta. 
		$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
		$i=1;
		while($row = mysqli_fetch_array($result)) { 
			echo "
				<article name='vg".$i."'>
				<a href='vg_individual.php?juegos=$i'><img name='juegos' value='".$i."' src='".$row["imagen"]."' height=240px width=240px /></a>
				</article>  ";
				$i++;
					}
?>
</section>