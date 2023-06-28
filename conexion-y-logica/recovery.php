<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

include("conexion.php");
$email = $_SESSION['email'];


$consultaRecovery="SELECT*FROM usuario WHERE correo='$email'";
$resultadoRecovery=mysqli_query($conection, $consultaRecovery);

if (mysqli_num_rows($resultadoRecovery) > 0) {
    $mail = new PHPMailer(true);

try {
    
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gaes1@sirim.online';                     //SMTP username
    $mail->Password   = 'Gaes1-123456789';                               //SMTP password
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('gaes1@sirim.online', 'Gaes1');
    $mail->addAddress('danardila08@gmail.com', 'Daniela Ardila');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperación de contraseña';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
} else {
    header("Location: ../index.php");
}
?>
