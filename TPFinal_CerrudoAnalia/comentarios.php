<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha=date("d-m-Y");
$hora=date("h:m:i");
$archivo="comentarios.txt";


$nomAp=$_POST ['nomAp'];
$correo=$_POST ['correo'];
$comentario=$_POST ['comentario'];

$mensaje=false;




$f = fopen($archivo,"a") or die("Error al abrir el archivo: $archivo");




fwrite($f, $fecha."\n".$hora."\n"."Nombre y Apellido:".$nomAp." Email:".$correo."\n".$comentario."\n"."................................"."\n");
fclose($f);




/*$f = fopen($archivo,"r");

while (!feof($f)){
    $caja = fgets($f);
  
    echo "\n".$caja."\n";
}
fclose($f);
echo "hola MUNOF $caja";*/

header("Location:unidad3.php");


?>