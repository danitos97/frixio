<?php 

defined('tasks') || die('Direct access not permitted');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


function sendMail($to, $subject, $body){
    $mail = new PHPMailer(true);

    try{
        $mail -> isSMTP();                                          
        $mail -> Host       = 'smtp.hostinger.com';                    
        $mail -> SMTPAuth   = true;                               
        $mail -> Username   = getenv("SMTP_USER");        
        $mail -> Password   = getenv("SMTP_PASS");                    
        $mail -> SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;      
        $mail -> Port       = getenv("SMTP_PORT");      
        
        $mail -> setFrom(getenv("SMTP_USER"), 'FRIXIO');   
        $mail -> addAddress($to);            
    
        $mail -> isHTML(true);                                 
        $mail -> Subject = $subject;
        $mail -> Body    = $body;
        $mail -> AltBody = 'Favor de visualizar este correo desde otro gestor';
    
        $mail -> CharSet = 'UTF-8';
    
        $mail -> send();
    
        return true;
    
    } catch (Exception $e) {
        send(500, "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
    }
}



?> 