<?php 

session_start();
if(!isset($_SESSION["frixio-user"]))
    header("Location: ../login/");


$relativePath = "../"; //To clients folder
include "../../version.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frixio - Productos</title>
    <link rel="icon" type="image/x-icon" href="../../favicon.svg">
    <link rel="stylesheet" href="../../public/<?php echo $version?>/css/clients/products.css">
</head>
<body>
    <script src="../../public/<?php echo $version?>/js/dQuery.js" defer></script>
    <script src="../../public/<?php echo $version?>/js/clients/products.js" defer type="module"></script>
    <main>

        <?php include "../header.php" ?>

        <section class="center">
        
            <form action="">
                <input id="email" type="text" placeholder="Email" required><br><br>
                <button class="center">
                    <span>Enviar</span>
                    <div class="spinner"></div>
                </button>
                <br><br>
                <span id="success">Correo Enviado</span>
            </form>
        </section>
        
    </main>
    
</body>
</html>