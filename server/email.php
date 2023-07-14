<?php 
    session_start();
    
    if(!isset($_SESSION["frixio-user"])) exit;

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "no_contestar@frixio.com.mx";
    $to = "daniel_doni@hotmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?> 