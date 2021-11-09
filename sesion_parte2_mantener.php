<?php
// Continuamos la sesión
session_start();
// Devolver los valores de sesión
echo "Nombre de usuario: " . $_SESSION["usuario"] . "<br>";
?>

<a href="sesion_parte3_destruir.php">Destruir!</a>