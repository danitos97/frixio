
<style>  
body{ 
    background-color:#111;
    color:white;
    display:grid;
    place-items:center;
 }
 div{
    font-family:Arial;
    font-size:18px;
    text-align:center;
    color:#ccc;
 }
 a{
    color:white;
 }
 </style>
<?php 

session_start();

include "connection.php";

$idToken = safeGET("idToken");
$token   = safeGET("token");

if(!$idToken || !$token) expired();

$link = connection();

$dbToken = getAllFromTable("recovery_tokens","id = $idToken AND expiration > now()");

if(!$dbToken) expired();

$dbToken = $dbToken[0];

if(!password_verify($token, $dbToken["tokenEncrypted"]))
    expired();    

$idUser = $dbToken["idUser"];

$user = getAllFromTable("users","id=$idUser")[0];

$_SESSION["frixio-user"] = [
    "id"   => $user["id"], 
    "name" => $user["name"],
    "rol"  => $uuser["rol"]
];

header("Location: ../clients/change-pass/");


function expired(){ 
    include "../version.php";
    ?>
    <div>
        <img src="../public/<?php echo $version?>/imgs/logos/frixio.svg" alt="" width="128">
        <br><br><br>
        <p> El enlace ha expirado, favor de <a href="../clients/">generar uno nuevo</a></p>
        <br><br>
    </div>
<?php
    exit;
}

?>

