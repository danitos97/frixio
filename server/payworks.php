<?php 

include "connection.php";

$user = [
   "card" => "4111111111111111",
   "exp"  => "1223",
   "code" => "111"
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



$url = "https://via.banorte.com/payw2";
$url = "https://via.pagosbanorte.com/payw2";

$res = postRequest($url,$data);
// $res = callAPI("POST",$url,$data);

send(200, $res);
// echo getenv("PAYWORKS_PASS");




function postRequest($url,$data){
   $curl = curl_init($url);
   curl_setopt($curl, CURLOPT_VERBOSE,true);
   curl_setopt($curl, CURLOPT_HEADER, 1);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_POST, 1);
   curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query($data));
   // curl_setopt($curl, CURLOPT_POSTFIELDS,$data);
   curl_setopt($curl, CURLOPT_CONNECTTIMEOUT,60);
   curl_setopt($curl, CURLOPT_TIMEOUT,60);


   $response = curl_exec($curl);

   if(curl_error($curl) || !$response){
      send(500,curl_error($curl));
   }
   curl_close($curl);
   return $response;
}


function callAPI($method, $url, $data = false){
    $curl = curl_init();
    switch ($method){
       case "POST":
          curl_setopt($curl, CURLOPT_POST, 1);
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
       case "PUT":
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
          break;
       default:
          if ($data)
             $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl,  CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'accept: application/json',
      'content-type: application/json'
   ));
    // EXECUTE:
    $result = curl_exec($curl);
    if(!$result){
        send(500,"conection fail");
    }
    curl_close($curl);
    return $result;
 }
?>