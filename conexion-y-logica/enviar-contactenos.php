<?php

//Necesita correcciones

$nombre = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$apellido = filter_var($_POST["last_name"], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
$asunto = filter_var($_POST["affair"], FILTER_SANITIZE_STRING);
$mensaje = filter_var($_POST["mensaje"], FILTER_SANITIZE_STRING);

if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($phone) && !empty($asunto) && !empty($mensaje)) {

  $para = "danardila08@gmail.com";
  $cuerpo = "Nombre: $nombre\nApellido: $apellido\nCorreo electrónico: $email\nTeléfono: $phone\nAsunto: $asunto\nMensaje: $mensaje";
  $encabezados = "From: $email";

  if (mail($para, $asunto, $cuerpo, $encabezados)) {
    echo "El formulario se ha enviado correctamente.";
  } else {
    echo "Error al enviar el formulario.";
  }
}

?>