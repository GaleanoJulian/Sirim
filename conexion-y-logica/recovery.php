<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once('conexion.php');
$email = $_POST['email'];


$consultaRecovery="SELECT*FROM usuario WHERE correo='$email'";
$resultadoRecovery=mysqli_query($conection, $consultaRecovery);
$row=mysqli_fetch_assoc($resultadoRecovery);

if (mysqli_num_rows($resultadoRecovery) > 0) {
    $mail = new PHPMailer(true);

try {
    
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'danardila16@hotmail.com';                     //SMTP username
    $mail->Password   = '201111455Da.';                               //SMTP password
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('danardila16@hotmail.com', 'Gaes1');
    $mail->addAddress('danardila08@gmail.com', 'Daniela Ardila');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperacion de contrasena';
    $mail->Body    = 'Hola, este es un correo generado para solicitar la recuperación de tu contraseña, por favor, 
    visita la página <a href="sirim.online/change_password.php?id='.$row['id'].'">Recuperación de contraseña</a>';

    $mail->send();
    echo '<script>
    window.location.href="../index.php?message=ok";
    alert("Correo para recuperación de contraseña enviado con exito, por favor revise su correo y siga las instrucciones") 
    </script>';
} catch (Exception $e) {
    echo '<script>
    window.location.href="../index.php?message=error";
    alert("Algo salió mal por favor intenta de nuevo") 
    </script>';
}
} else {
    echo '<script>
    window.location.href="../index.php=message?not_found";
    alert("No se encuentra registrado el correo ingresado") 
    </script>';
}
?>
