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
		require 'clases/basededatos.php';
		require 'clases/carrito.php';
		require 'define.php';

	$base = new BasedeDatos(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Carrito($base);
	$productomodif = $producto->getProducto($_GET['codigo']);

	?>
	<h1>Administrador de contenido</h1>
	<nav><ul>
		<li><a href="index.php">Cargar productos</a></li>
		<li><a href="ver.php">Ver productos</a></li>
	</ul></nav>
	<form action="agregarcarrito.php" method="POST">
		<input type="hidden" name="codigo" value="<?php echo $_GET['codigo']; ?>">
    	<label for="nombre">Nombre del producto</label>
    	<input type="text" placeholder="Nombre" name="nombre" value="<?php echo $productomodif[0]['producto'];?>">
   	 	<label for="descripcion">Descripcion del producto</label>
    	<textarea rows="3" name="descripcion" ><?php echo $productomodif[0]['descripcion'];?></textarea>
    	<label for="precio">Precio del producto</label>
    	<input type="text" placeholder="Precio" name="precio" value="<?php echo $productomodif[0]['precio'];?>">
  
  		<input type="submit" value="Cargar Producto">
	</form>
	

<?php if(isset($_GET['ok'])) {
		echo "<h3>Producto cargado</h3>";} ?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>