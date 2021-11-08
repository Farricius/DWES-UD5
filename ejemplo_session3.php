<?php
// Mostramos la sesion
session_start();
//Distruimos la sesion
session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Cerrar Sesion</title>
</head>

<body>
    <h2>Has Cerrado Sesión correctamente</h2>
    <p><a href="ejemplo_session1.php">Ir al Login</a></p>
</body>

</html>