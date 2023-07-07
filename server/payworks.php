<?php 

include "connection.php";

$user = [
    "card" => "4102342353453450",
    "exp"  => "1223",
    "code" => "015"
];

$data = [
    "MERCHANT_ID"    => getenv("PAYWORKS_MERCHANT_ID"),
    "USER"           => getenv("PAYWORKS_USER"),
    "PASSWORD"       => getenv("PAYWORKS_PASS"),
    "CMD_TRANS"      => "VENTA",
    "TERMINAL_ID"    => "1", // ?????
    "AMOUNT"         => "1",
    "MODE"           => "AUT",
    //REFERENCE : NO SE OCUPA EN VENTAS
    "CARD_NUMBER"    => $user["card"],
    "CARD_EXP"       => $user["exp"],
    "SECURITY_CODE"  => $user["code"],
    "ENTRY_MODE"     => "MANUAL",
    "RESPONSE_LANGUAGE" => "EN",
    "CONTROL_NUMBER" => "0001"
    //STATUS_3D



];
// send(200, $data);

$url = "https://via.pagosbanorte.com/payw2";
$url = "https://via.banorte.com/payw2";

$res = postRequest($url,$data);

send(200, $res);
// echo getenv("PAYWORKS_PASS");




function postRequest($url,$data){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

?>