<?php
require 'clases/BasedeDatosmysqli.php';
require 'carrito.php';
require 'define.php';

$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
$producto = new Carrito($base);

$producto->deleteCarrito($_GET['codigo']);

header("Location: ver.php");
?>