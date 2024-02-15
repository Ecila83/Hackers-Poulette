<?php

$nom = $_POST['nom'];
$email= $_POST['mail'];
$message= $_POST['description'];

$message = "nom : ".$nom."\n"." Email : ".$email."\n"." message : ".$message;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
 
    $mail = new PHPMailer(true);
    try{
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';  //le serveur smtp de gmail            
$mail->SMTPAuth = true;
$mail->Username = 'hanenwechteti27@gmail.com';  //mail: permet d'acceder a attriburt user name de l'object creer
$mail->Password = 'ztsy naxp xvvj wcos'; // le mot de passe que je viens de le creer
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;                       

//content
$mail->isHTML(true);
$mail->Subject ='here is the subject';
$mail->Body    =$message;
$mail->AltBody ='this is the body in the plain text for non-HTML mail clients';

$mail->send();
echo'message has been sent';
    } catch (Exception $e) {
        echo "message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>
