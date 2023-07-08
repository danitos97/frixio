<?php 

session_start();
if(!isset($_SESSION["frixio-user"]))
    header("Location: login/");

include "../version.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="../favicon.svg">
    <link rel="stylesheet" href="../public/<?php echo $version?>/css/clients.css">
</head>
<body>
    <script src="../public/<?php echo $version?>/js/dQuery.js" defer></script>
    <script src="../public/<?php echo $version?>/js/clients.js" defer type="module"></script>
    <main>
        <header>
            <div id="logout">Cerrar Sesión</div>
        </header>
        <section class="center">
            <form>
                <label for="frixio-card">Numero de Tarjeta</label><br>
                <input id="frixio-card" name="frixio-card" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" value="4111111111111111">
                <br><br>
                <label for="frixio-exp">Fecha de Caducidad</label><br>
                <input name="frixio-exp" id="frixio-exp" type="tel" value="1223">
                <br><br>
                <label for="frixio-code">Codigo de Seguridad</label><br>
                <input name="frixio-code" id="frixio-code" type="tel" value="015">
                <br><br>
                <label for="fixio-amount">Cantidad</label><br>
                <input name="frixio-amount" id="frixio-amount" type="tel" value ="1.00">
                <br><br><br>
                <button>Procesar</button>
            </form>
            
            <div id="output">
                Resultado
            </div>
        </section>
        
    </main>
    
</body>
</html>