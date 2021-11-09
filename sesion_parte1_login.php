<?php
//https://diego.com.es/sesiones-en-php

session_start();
// Guardar datos de sesión
$_SESSION["usuario"] = "Peter";

echo "Sesión iniciada y establecido nombre de usuario!" . "<br>";
?>
<a href="sesion_parte2_mantener.php">Segundo!</a>