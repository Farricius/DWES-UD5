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

    //$_SESSION['name']  = "farri";

    echo session_id(); //muestra la id
    echo "<br>";
    echo "Archivos ubicados en: " . session_save_path();
    echo "<br>";
    echo "Archivos ubicados en: " . sys_get_temp_dir();

    ?>
</body>

</html>