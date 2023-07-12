<?php 

session_start();
if(!isset($_SESSION["frixio-user"]))
    header("Location: login/");

$relativePath = "";
include "../version.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRIXIO - Menu Principal</title>
    <link rel="icon" type="image/x-icon" href="../favicon.svg">
    <link rel="stylesheet" href="../public/<?php echo $version ?>/css/clients/index.css">
</head>
<body>
    <main>
        <?php include "header.php" ?>
        <section>
            <div class="grid">
                <a href="payments/">
                    <div class="item">
                        <div>
                            <div class="col-1">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 576 512"><path d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"/></svg>
                            </div><div class="col-2">
                                <h2>Pagos</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            </div>
                            
                        </div>
                    
                    </div>
                </a>
                <a href="products/">
                    <div class="item">
                        <div>
                            <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z"/></svg>
                            </div><div class="col-2">
                                <h2>Productos</h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum laborum debitis laboriosam, soluta voluptas, nostrum quasi </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="item">
                        <div>
                            <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 640 512"><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                            </div><div class="col-2">
                                <h2>Clientes</h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum laborum debitis laboriosam, soluta voluptas, nostrum quasi </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </main>

</body>
</html>