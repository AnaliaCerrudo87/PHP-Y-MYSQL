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
		<?php include("botonera.php"); 
    require 'clases/BasedeDatosmysqli.php';
	require 'carrito.php';
	//require 'define.php';

	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Carrito($base);

	$productoOK = $producto->getCarrito();
	
	if ($productoOK){ 
	?>
	<section>
		<h2>Contenido Carrito</h2>
		<form method="POST">
	<table>
		<tr class="titulos">
			<td>Código</td>
			<td>Producto</td>
			<td>Descripcion</td>
			<td>Precio</td>
			<td colspan="2">Operaciones</td>
		</tr>
	<?php
	for ($i=0;$i<count($productoOK);$i++){
			echo '<tr >
					<td>'.$productoOK[$i]['codigo'].'</td>
					<td>'.$productoOK[$i]['producto'].'</td>
					<td>'.$productoOK[$i]['descripcion'].'</td>
					<td>'.$productoOK[$i]['precio'].'</td>
					
					<td><a href="eliminar.php?codigo='.$productoOK[$i]['codigo'].'"><button type="button" class="btn btn-info">Eliminar del carrito</button></a></td>
					<td><a href="unidad7.php"><button type="button" class="btn btn-info">Volver a compras</button></a></td>
					
				</tr>';

			
		}
	?>
</table>
</form>
<?php } ?>

		
		</section>
	</nav>
	</header>
	
	
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>