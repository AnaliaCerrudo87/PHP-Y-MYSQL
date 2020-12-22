<?php

require 'clases/basededatos.php';
require 'clases/carrito.php';
require 'define.php';

$base = new BasedeDatos(SERVIDOR,USUARIO,PASSWORD,BASE);
$producto = new Carrito($base);

$producto->insertProducto($_POST['codigo'],$_POST['nombre'], $_POST['descripcion'],$_POST['precio']);


header("Location: unidad7.php?ok");
?>