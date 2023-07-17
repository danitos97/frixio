<?php 
// http://localhost/frixio/server/templates/recovery.php

//echo recoveryTemplate("Daniel Rivera", "a");

function recoveryTemplate($name, $link){
    return "
        <html>
            <head>
                <style>
                    *{
                        margin:0;
                        padding:0;
                        border:0;
                        box-sizing:border-box;
                        font-family:Arial;
                    }
                    button{
                        background-color:darkgreen;
                        color:white;
                        cursor:pointer;
                        font-weight:bolder;
                        padding: 1em;
                        font-size:16px;
                    }
                    button:hover{
                        cursor:pointer;
                        background-color: #008000;
                    }
                    body > div{
                        max-width:800px;
                        margin-left:1em;
                    }
                </style>
            </head>
            <body>
                <div>
                    <br>
                    <p>Hola $name.</p>
                    <br>
                    <p>
                        Alguien inicio el proceso de recuperación de contraseña para tu cuenta en la plataforma <b>frixio.com.mx</b>.
                    </p> 
                    <br>
                    <p>
                        Si necesitas restablecer tu contraseña, presiona el siguiente botón.
                    </p>
                    <br>
                    <a href='$link'>
                        <button>Restablecer Contraseña</button>
                    </a>
                    <br><br>
                    <p>De lo contrario, favor de ignorar este correo. El enlace caducara despues de 2 horas de haber sido generado.</p>
                </div>
            </body>
        </html>";
    
}
?>

