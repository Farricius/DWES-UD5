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

    session_start();

    echo  "Mi nombre es: " . $_SESSION['Nombre'];
    echo "<br>";
    echo "Mi edad es: " . $_SESSION['Edad'];

    unset($_SESSION['nombre']);

    //session_unset(); // VACÍA ARCHIVO
    //session_destroy(); // DESTRUYE ARCHIVO
    ?>
</body>

</html>