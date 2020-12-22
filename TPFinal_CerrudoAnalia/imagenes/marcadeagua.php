<?php
$base="godzilla.jpg";
$marca_agua="marca.png";

$imagen=imagecreatefrompng($marca_agua);

$extension=substr($base,-3);

if(strtolower($extension)=="png"){

	
	if (!$im2 = imagecreatefrompng($base)) { echo "Error al abrir  $base!";
	 exit;}
	} 

  else if(strtolower($extension)=="jpg"){


	if (!$im2 = imagecreatefromjpeg($base)) { echo "Error al abrir $base!"; 
	exit;}

} else if(strtolower($extension)=="gif"){

	if (!$im2 = imagecreatefromgif($imagen)) {echo "Error al abrir $base!";
	 exit;}
	} 



imagecopy($im2, $imagen, 120, 20, 0, 0, imagesx($imagen), imagesy($imagen));

header("Content-Type:image/jpeg");
imagejpeg($im2);


?>