<?php session_start(); ?>
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
		<?php 
		 include("botonera.php");

		function contenido_capcha(){

			$clave="0123456789-*+aeiou";
			$llave= '';

			for($i=0; $i<6; $i++){
				$llave .= $clave{rand(0,17)};
			}
			return $llave;
		}

		$_SESSION['capcha']=contenido_capcha();
		 ?>
	</nav>
	</header>
	<section>
		<h2>Consultas</h2>
		<form action="cargar.php" method="post">
			
			<label>Ingrese Nombre: </label><input type="text" name="nombre" placeholder="Nombre">
			 </br>
		
			<br> <label>Ingrese Apellido: </label><input type="text" name="apellido" placeholder="Apellido"> </br>
		
			<br> <label>Ingrese Email: </label><input type="email" name="email" placeholder="Email"> </br>
	
			<br> <label>Ingrese su Consulta:</label><input type="textarea" name="consulta" placeholder="Consulta" row="5"> </br>
			<br> <img src="capcha.php"></br>
			<input type="text" name="codigo">
			<input type="submit" value="Enviar">
			<?php
			if(isset($_GET['ok'])){

				echo "<p> Consulta enviada correctamente!!</p>";
			}
			if(isset($_GET['error'])){

				echo "<p> Codigo incorrecto </p>";
			}
			?>
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