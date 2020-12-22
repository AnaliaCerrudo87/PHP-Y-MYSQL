<?php
require 'clases/BasedeDatosmysqli.php';
//require 'clases/Stock.php';
require 'carrito.php';
require 'define.php';

$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
$producto = new Carrito($base);
//$productomodif = $producto->getProducto($_GET['codigo']);

$producto->agregarCarrito($_GET['codigo'],$_GET['producto'], $_GET['descripcion'],$_GET['precio']);


header("Location: unidad7.php?ok");
?>