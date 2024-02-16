<?php

require_once "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function envoi_mail($nom, $email, $message) {
    $message = "nom : " . $nom . "\n"." Email : " . $email . "\n" . " message : " . $message;
    
    $mail = new PHPMailer(true);

    try{
        $mail->IsSMTP();
        // $mail->SMTPDebug = 2;

        $mail->Host = 'smtp.gmail.com';  //le serveur smtp de gmail            
        $mail->SMTPAuth = true;
        $mail->Username = 'hanenwechteti27@gmail.com';  //mail: permet d'acceder a attriburt user name de l'object creer
        $mail->Password = 'ztsy naxp xvvj wcos'; // le mot de passe que je viens de le creer
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;  

        //recipients
        $mail->setFrom('hanenwechtetii12@gmail.com');
        $mail->addAddress($email);

        //content
        $mail->isHTML(true);
        $mail->Subject = 'here is the subject';
        $mail->Body = $message;
        $mail->send();

        // echo "message has been sent";
    } catch (Exception $e) {
        echo "message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
