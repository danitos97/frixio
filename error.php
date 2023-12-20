<?php include("version.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            margin:0;
            border:0;
            padding:0;
        }
        main{
            width: 100%;
            max-width: 800px;
            margin:0 auto;
            overflow: hidden;
            aspect-ratio: 5/4;
        }
        img{
            width:100%;
        }
    </style>
    <main>
        <img src="public/<?php echo $version?>/imgs/error.jpg" alt=""><
    </main>
</body>
</html>