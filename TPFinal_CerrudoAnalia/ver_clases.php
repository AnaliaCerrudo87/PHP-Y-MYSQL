<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Ejercicio Unidad 1</h2>
		<?php
			include("conexion.php");
			
			$consulta=mysqli_query($bd,"SELECT * FROM clases");

			while ($mostrar=mysqli_fetch_assoc($consulta))
		{
			
			?>
			
			
		 
		

	 
		 <table align="center" border="1">

		 	  <tr>
    			<td>Unidad</td>
    			<td><?php echo $mostrar['unidad'];?></td>
    			
  			</tr>
 			 <tr>
    			<td>Fecha</td>
    			<td><?php echo $mostrar['fecha'];?></td>
  				
 			 </tr>
		</table>
			
			

		<?php
			}
		?>
			
		
		
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>