<?php 

session_start();

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

        $id = $row["id"];
        $rol = $row["row"];

        $_SESSION["frixio-user"] = ["id" => $id, "rol" => $rol];

        send(200, $rol);


    case "logout":

        unset($_SESSION["frixio-user"]);
        send();


    case "pay":
        include "payworks.php";
        
}

?>