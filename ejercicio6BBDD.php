<?php
// crear bd antes
$servidor = "localhost";
$baseDatos = "Tema5";
$user = "developer";
$pass = "developer";

function getUser ($nombreUsuario) {
    try {
        $conexion = new PDO('mysql:host=' . $GLOBALS["servidor"] . ';dbname=' . $GLOBALS["baseDatos"], $GLOBALS["user"], $GLOBALS["pass"]);

        $sql = $conexion -> prepare ("SELECT * FROM banco WHERE NombreUsuario=?");
        $sql->bindParam(1, $nombreUsuario);
        $sql -> execute();
        
        $elemento = $sql->fetch(PDO::FETCH_ASSOC);
        return $elemento;

    } catch (Exception $e) {
        echo 'Excepción error: ',  $e->getMessage(), "\n";
        return false;
    }
    $conexion = null;
}
?>