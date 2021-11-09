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

    //$_SESSION['nameotro']  = "farriii";

    echo session_id(); //muestra la id pero es la misma de la anterior (no cerrada)
    echo "<br>";
    echo "Archivos ubicados en: " . session_save_path();
    echo "<br>";
    echo "Archivos ubicados en: " . sys_get_temp_dir();

    //phpinfo();

    ?>
</body>

</html>