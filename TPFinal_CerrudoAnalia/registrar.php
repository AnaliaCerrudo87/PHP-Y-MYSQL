<?php

require ("includes/class.phpmailer.php");
require ("includes/class.smtp.php");	

$password = password_hash($_POST['password'], PASSWORD_DEFAULT, array('cost'=> 4));

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['email'];

$bd=mysqli_connect("localhost", "root", "", "curso") or die ("Error al conectar con la base de datos");

mysqli_query($bd, "INSERT INTO usuarios_sitio VALUES ('$nombre', '$apellido','$correo','$password')");

$mail = new PHPMailer();
		
		$mail->Mailer = "smtp";
		$mail->SMTPAuth = true;

		$mail->SMTPSecure = "tls"; 
		$mail->Host = "smtp.gmail.com"; 
		$mail->Port = 587; // si seteamos SMTPSecure = "ssl"; tenemos que setear Port = 465;
		$mail->Username = "cerrudoanalia@gmail.com"; // GMAIL username
		$mail->Password = "micontraseña"; // GMAIL password	paso imagen del correo recibido

		$mail->IsHTML(true);
		$mail->From = $_POST['email'];
		$mail->FromName = $_POST['email'];
		$mail->AddAddress("cerrudoanalia@gmail.com");
		$mail->Subject = "Registro de usuario";
		$mail->Body ="<p>".$_POST['nombre']." gracias por registrarte "."</p><p>Tu usuario es: ".$_POST['email']."</p><p>Tu contraseña ".$_POST['password']."</p>";
	    $exito=$mail->send();
	
 		if ($exito){	 
			print("<h2>Gracias por contactarnos.  </h2>");
 		}
 		else{
 			print("<h2>Error al enviar el mensaje. Por favor intentelo nuevamente.  </h2>");
 		}
		

header("Location: unidad8.php?ok");
?>