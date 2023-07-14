<?php 

defined('tasks') || die('Direct access not permitted');

$user = [
   "card" => safePOST("card"),
   "exp"  => safePOST("exp"),
   "code" => safePOST("code")
];

$data = [
   "MERCHANT_ID"    => getenv("PAYWORKS_MERCHANT_ID"),
   "USER"           => getenv("PAYWORKS_USER"),
   "PASSWORD"       => getenv("PAYWORKS_PASS"),
   "CMD_TRANS"      => "VENTA",
   "TERMINAL_ID"    => getenv("PAYWORKS_MERCHANT_ID")."1", // ?????
   "AMOUNT"         => "1",
   "MODE"           => "AUT",
   "CARD_NUMBER"    => $user["card"],
   "CARD_EXP"       => $user["exp"],
   "SECURITY_CODE"  => $user["code"],
   "ENTRY_MODE"     => "MANUAL",
   "RESPONSE_LANGUAGE" => "EN",
   "CONTROL_NUMBER" => "0001"
   // "STATUS_3D"      => "200",
   // "VERSION_3D"     => "2"
];


// send(200,$data);

// $secure3D = "https://via.banorte.com/secure3d/Solucion3DSecure.htm";

// $res = postRequest($secure3D);

// send(200, $res);

$url = "https://via.pagosbanorte.com/payw2";
$url = "https://via.banorte.com/payw2";

$res = postRequest($url,$data);

send(200, $res);




function postRequest($url,$data = false){
   $curl = curl_init($url);
   curl_setopt($curl, CURLOPT_VERBOSE,true);
   curl_setopt($curl, CURLOPT_HEADER, 1);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_POST, 1);
   if($data)
      curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query($data));
   curl_setopt($curl, CURLOPT_CONNECTTIMEOUT,60);
   curl_setopt($curl, CURLOPT_TIMEOUT,60);


   $response = curl_exec($curl);

   if(curl_error($curl) || !$response){
      send(500,curl_error($curl));
   }
   curl_close($curl);
   return $response;
}


?>