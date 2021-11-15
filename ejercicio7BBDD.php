<?php 

// $servidor = "localhost";
// $baseDatos = "Tema5";
// $user = "developer";
// $pass = "developer";

function getUser($usuario){
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=Tema5","developer","developer");
        $sql = $conexion->prepare("SELECT * FROM banco WHERE NombreUsuario=?");
        $sql->bindParam(1,$usuario);
        $sql->execute();
        $return = $sql->fetch(PDO::FETCH_ASSOC);

        $conexion=null;
        return $return;
    } catch (PDOException $e) {
        return false;
    }
}
?>