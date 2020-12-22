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
		<h2>Imágenes con PHP</h2>
		<?php
		$original="imagenes/unidad4.jpg";

		$copia=imagecreatefromjpeg($original);

		$img_ancho=imagesx($copia);
		$img_alto=imagesy($copia);

		$ancho=150;
		$alto=150;

		$imagen=imagecreate($ancho, $alto);

		imagecopyresized($imagen, $copia, 0, 0, 0, 0, $ancho, $alto, $img_ancho, $img_alto);

		imagejpeg($imagen,"imagenes/unidad4_thumb.jpg");

		?>
		<h4>Imagen Original</h4>
		<img src="imagenes/unidad4.jpg">
		<h4>Imagen Generada</h4>
		<img src="imagenes/unidad4_thumb.jpg">
		<h3> Marca de agua</h3>
		<img src="imagenes/marcadeagua.php">
		

	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>