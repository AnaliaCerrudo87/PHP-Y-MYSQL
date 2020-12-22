<?php
session_start();
header ("Content-type: image/jpeg");

$img=imagecreate(130,40);
$color_fondo=imagecolorallocate($img, 174, 232, 189);
$color_texto=imagecolorallocate($img, 107, 14, 2);
$color_linea= imagecolorallocate($img, 6, 15, 38);
imageline($img, 140, 30,0, 10, $color_linea);
imagestring($img, 6, 40, 8,$_SESSION['capcha'],$color_texto);
imagejpeg($img);
?>