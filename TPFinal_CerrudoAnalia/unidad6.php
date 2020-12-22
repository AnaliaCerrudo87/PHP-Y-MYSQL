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
		<h2>POO</h2>

 <form action="caract_usuarios.php" method="POST">
 	
 	<label>Ingrese Nombre: </label><input type="text" name="nombre" placeholder="Nombre">
			 </br>
		
			<br> <label>Ingrese Apellido: </label><input type="text" name="apellido" placeholder="Apellido"> </br>
		
			<br> <label>Ingrese Fecha de nacimiento: </label><input type="date" name="fecha" required placeholder="Fecha"> </br>
	
			
			<input type="submit" value="Enviar">

			
 </form>

		
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>