<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nombre = "Farri";
    $edad = 24;
    
    //$elementos = $nombre . $edad;
    //setcookie("cookie1", $elementos, time() + 10800, "/");

    setcookie("Nombre", $nombre, time() + 10800);
    setcookie("Edad", $edad, time() + 108000);


    print_r($_COOKIE);
    ?>
</body>

</html>