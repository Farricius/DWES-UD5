<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start() ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bienvenido</h1>
    <?php

    if (isset($_SESSION['nombre'])) {
        echo "Has iniciado sesion como: <strong>" . $_SESSION['nombre'] . "</strong>";
        echo "<p><a href='ejemplo_session3.php'>Cerrar Sesion</a></p>";
        echo "<p><a href='ejemplo_session2.php'>Ir al panel de control</a>";
    } else {
        echo "Sesión No Iniciada...";
        echo "<h2>Creando la sesion</h2>";
        echo  "<form action='ejemplo_session2.php' method='POST'>";
        echo "<p>Nombre:</p>";
        echo '<p><input type="text" placeholder="Ingrese su Nombre" name="nombre" required /></p>';
        echo ' <p><input type="submit" value="Crear Sesion" /></p>';
        echo " </form>";
    }
    ?>

</body>

</html>