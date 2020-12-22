<?php
include("password.php");
$clave = $_POST['password'];
$correo = $_POST['email'];
$bd=mysqli_connect("localhost", "root", "", "curso") or die ("Error al conectar con la base de datos");

$consulta=mysqli_query($bd, "SELECT password FROM usuarios_sitio WHERE correo='$correo'");


$codificado = mysqli_fetch_array($consulta);
echo "q hay detrp de $codificado";

$iguales = password_verify($clave, $codificado['password']);
if ($iguales) {
 header("Location: unidad8.php?verificado");
} else {
 header("Location: unidad8.php?error");
}