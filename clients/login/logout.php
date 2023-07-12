<?php 

session_start();
unset($_SESSION["frixio-user"]);
header("Location: .");

?>