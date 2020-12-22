<?php
$unidad=$_POST ['unidad'];
$fecha=$_POST ['fecha'];

include("conexion.php");



mysqli_query($bd,"INSERT INTO clases VALUES (DEFAULT, '$unidad','$fecha')");

header("Location:ver_clases.php");

?>