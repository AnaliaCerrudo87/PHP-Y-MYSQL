<?php
session_start();
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['email'];
$mensaje=$_POST['consulta'];
$codigo=$_POST['codigo'];

include("conexion.php");

if($codigo==$_SESSION['capcha']){

	mysqli_query($bd,"INSERT INTO consultas VALUES ('$nombre','$apellido','$correo','$mensaje', DEFAULT)");
	header('Location: unidad5.php?ok');
	//echo '<p class="alert alert-success agileits" role="alert">Consulta enviada correctamente!!</p>';
}
else{

	header('Location: unidad5.php?error');
}
?>