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
		<h2>Comentarios</h2>

		<div>
			<form method="POST" action="comentarios.php">
				<p>Nombre y Apellido</p><input type="text" name="nomAp" required placeholder="NomAp" maxlength="30">
				<p>Correo Electronico</p><input type="email" name="correo">
				<p>Comentario</p><textarea name="comentario" placeholder="Comentario" rows="5"></textarea>
				<input type="submit" value="Enviar Comentario">
				<h3>Historial de Comentarios</h3>
				 <textarea name="Hcomentario" placeholder="HComentario" rows="10" cols="60">
				 	<?php $archivo="comentarios.txt";
				 					 	
				 	$f = fopen($archivo,"r");


					while (!feof($f)){
  					  $caja = fgets($f);
  
   						 echo $caja."\n";
					}
					fclose($f);?></textarea>
			</form>
		</div>
		
		
			

			
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>