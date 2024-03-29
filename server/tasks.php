<?php 

session_start();

define("tasks", true);

include "connection.php";

$option = safePOST("option");

if(!$option) send(400);

$link = connection();

switch($option){

    case "login":

        $user = safePOST("user");
        $pass = safePOST("pass");

        $data = getAllFromTable("users","email='$user'");

        if(!$data) send(401);

        $row = $data[0];
        
        
        if($row["active"] == 0 || !password_verify($pass, $row["pass"]))
            send(401);


        $_SESSION["frixio-user"] = [
            "id"   => $row["id"], 
            "name" => $row["name"],
            "rol"  => $row["rol"]
        ];

        send();



    case "pay":

        checkSession();
        include "payworks.php";



    case "recoveryMail":
        $to = safePOST("to");
        if(!$to) send(401);


        $user = getAllFromTable("users","email = '$to'");
        if(!$user) send(401);

        $user = $user[0];
        $idUser = $user["id"];

        $token = bin2hex(random_bytes(32));
        $tokenEncrypted = password_hash($token,PASSWORD_DEFAULT);
        
        $expiration = date('Y-m-d H:i:s');
        $sql = "INSERT into recovery_tokens (idUser, tokenEncrypted, expiration) 
                       value ($idUser, '$tokenEncrypted', DATE_ADD(now(),interval 2 hour))";

        $link -> query($sql);

        $idToken = $link -> insert_id;

        
        $link = getenv("URL")."server/recovery.php?idToken=$idToken&token=$token";
        
        include "email.php";
        include 'templates/recovery.php';

        $subject = "Restablecer Contraseña";

        $name = $user["name"];

        $body = recoveryTemplate($name, $link);

        $mail = sendMail($to, $subject, $body);
                
        send();


        
    case "changePass":

        $user = checkSession()["id"];

        $pass = safePOST("pass");
        if(!$pass) send(401);

        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET pass = '$pass' where id = $user";
        $link -> query($sql);

        send();
        
        
        
}

function checkSession(){
    if(!isset($_SESSION["frixio-user"]))
        send(401);
    return $_SESSION["frixio-user"];
}

?>