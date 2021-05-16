<?php
	$destinatario  = 'francisco_2710_javier@hotmail.com';
	$nombre = $_POST['nombre'];	
	$email = $_POST['email'];	
	$asunto = $_POST['asunto'];	
	$mensaje = $_POST['mensaje'];	

	$mensajecompleto = $mensaje . "\nAtentamente: ". $nombre;

	mail($destinatario, $asunto, $mensajecompleto);
	echo "<script>alert('correo enviado')</script>";
	echo "<script>setTimeout(\"location.href='../index.html'\",1000)</script>";
?>