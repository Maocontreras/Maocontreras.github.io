<?php 
	$name = $_POST['name'];
  	$email = $_POST['email'];
	$subjet = $_POST['subject'];
	$message = $_POST['message'];

	mail('mauriciocontrerasmantilla@gmail.com', $name, $email, $subjet, $message);
 ?>
