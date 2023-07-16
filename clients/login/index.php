<?php 

session_start();

if(isset($_SESSION["frixio-user"]))
    header("Location: ../");

include "../../version.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRIXIO - Iniciar Sesión</title>
    <link rel="icon" type="image/x-icon" href="../../favicon.svg">
    <link rel="stylesheet" href="../../public/<?php echo $version?>/css/clients/login.css">
</head>
<body>
    <script src="../../public/<?php echo $version?>/js/dQuery.js" defer></script>
    <script src="../../public/<?php echo $version?>/js/clients/login.js" defer type="module"></script>
    <main>
        <div>

            <form>

                <h2>Iniciar Sesión</h2>
                <div class="line"> </div>

                <div class="input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#007940">
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                    </svg><input type="email" placeholder="Ingresa tu correo" name="frixio-user" id="frixio-user" required>
                </div>
                <div class="input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/>
                    </svg><input type="password" placeholder="Ingresa tu contraseña" name="frixio-pass" id="frixio-pass" required>
                </div>
                <div class="recovery-btn">¿Olvidaste tu contraseña?</div>
                <br><br><br>
                <button id="btn-login">
                    <span>Ingresar</span>
                    <div class="spinner"></div>
                </button>
                <br><br>
                <div class="center error">Datos incorrectos</div>
            </form>

            <div class="img-container">
                <img src="../../public/<?php echo $version ?>/imgs/otros/login.jpg" alt="">
                <div class="filter"></div>
                <div class="filter"></div>
                <img src="../../public/<?php echo $version ?>/imgs/logos/frixio-blanco.svg" alt="" width="260" class="logo">
                <div class="filter"></div>
            </div>
        </div>

        <div class="recovery">
            <form>
                <br><br>
                <p>Si el correo esta registrado, te enviaremos un correo para restablecer tu contraseña</p>
                <br>
                <div>
                    <input id="input-recovery" type="text" placeholder="Correo Electronico" required
                    ><button>
                        <span>Enviar Correo</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>