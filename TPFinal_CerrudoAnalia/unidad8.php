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
		<h2>Registro</h2>
		
			<form action="registrar.php" method="POST">
			<label>Ingrese Nombre: </label><input type="text" name="nombre" placeholder="Nombre">
			 </br>
		
			<br> <label>Ingrese Apellido: </label><input type="text" name="apellido" placeholder="Apellido"> </br>
		
			<br> <label>Ingrese Email: </label><input type="email" name="email" placeholder="Email"> </br>
	
			<br> <label>Ingrese su Contraseña:</label><input type="password" name="password" placeholder="Contraseña" > </br>
			<br><input type="submit" value="Registrarse"> </br>
			<h3>
        <?php if(isset($_GET['ok'])) {
            echo "Usuario registrado";
            }  ?>
   		 </h3>
			</form>
		<form action="ingreso.php" method="POST">
				<br> <label>Ingrese Email: </label><input type="email" name="email" placeholder="Email"> </br>
	
			<br> <label>Ingrese su Contraseña:</label><input type="password" name="password" placeholder="Contraseña" > </br>
			<br><input type="submit" value="Ingresar"> </br>
			<h3>
        <?php if(isset($_GET['error'])) {
            echo "Contraseña incorrecta";
            }  
            if(isset($_GET['verificado'])) {
            echo "Contraseña verificada!";
            } ?>
    </h3>
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