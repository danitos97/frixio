<?php include("../version.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/<?php echo $version?>/css/clients.css">
</head>
<body>
    <script src="../public/<?php echo $version?>/js/dQuery.js" defer></script>
    <script src="../public/<?php echo $version?>/js/clients.js" defer></script>
    <main>
        <br>
        <button>Procesar</button>
        <div id="output">
            Procesando....
        </div>
    </main>
    
</body>
</html>