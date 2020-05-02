<?php 

//Correo de destino; donde se enviará el correo.
$correoDestino = "mauriciocontrerasmantilla@gmail.com";

	/*$name = $_POST['name'];*/
	$name = strip_tags($_POST['name']);
  	/*$email = $_POST['email'];*/
	$email = strip_tags($_POST['email']);
	/*$subjet = $_POST['subject'];*/
	$subjet = strip_tags($_POST['subjet']);
	/*$message = $_POST['message'];*/
	$message = strip_tags($_POST['message']);
	$fecha = time();
	$fechaFormateada = date("j/n/Y", $fecha);

	/*mail('mauriciocontrerasmantilla@gmail.com', $name, $email, $subjet, $message);*/
	//Formateo el asunto del correo
	$asunto = "Contacto WEB_$name";

	//Formateo el cuerpo del correo

	$cuerpo = "<b>Enviado por:</b> " . $name . ", a las " . $fechaFormateada . "<br />";
	/*$cuerpo .= "<b>Empresa:</b> " . $empresa . ", <b>en el cargo/departamento de</b> " . $departamento . "<br />";*/
	/*$cuerpo .= "<b>Teléfono de contacto: </b>" . $telefono . "<br />";*/
	$cuerpo .= "<b>E-mail:</b> " . $email . "<br />";
	$cuerpo .= "<b>Mensaje:</b> " . $message;

	// Envío el mensaje
	mail( $correoDestino, $asunto, $cuerpo);

 ?>
