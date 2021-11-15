<?php

$servidor = "localhost";
$baseDatos = "Tema5";
$user = "developer";
$pass = "developer";


function insertaElemento($NombreUsuario, $Contrasenia, $CuentaBancaria)
{
    try {
        $conexion = new PDO('mysql:host=' . $GLOBALS["servidor"] . ';dbname=' . $GLOBALS["baseDatos"], $GLOBALS["user"], $GLOBALS["pass"]);
        $sql = $conexion->prepare("INSERT INTO banco (NombreUsuario, Contrasenia, CuentaBancaria) VALUES (?,?,?)");
        $sql->bindParam(1, $NombreUsuario);
        $sql->bindParam(2, $Contrasenia);
        $sql->bindParam(3, $CuentaBancaria);
        $sql->execute();
        $last_id = $conexion -> lastInsertId();
        return $last_id;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    $conexion = null;
}
