<?php

$fecha_actual=date("Y-m-d");
$fecha_i_dia=$_POST ['dia'];
$fecha_i_mes=$_POST ['mes'];
$fecha_i_anio=$_POST ['anio'];

$fecha_ingresada=$fecha_i_anio.$fecha_i_mes.$fecha_i_dia;
$fechaDateTime = DateTime::createFromFormat('Ymd', $fecha_ingresada);
$fecha_final=$fechaDateTime->format('d-m-Y');


	
$fecha_a = strtotime(date("d-m-Y"));
$fecha_e = strtotime($fecha_ingresada);

if($fecha_e<=$fecha_a){
	

	header('Location: unidad2.php?error');
}


else{
$s = strtotime($fecha_ingresada)-strtotime($fecha_actual);
$d = intval($s/86400);

echo "<p>Días restantes hasta la fecha $fecha_final: $d.</p>";


}


?>