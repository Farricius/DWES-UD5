<?php
session_start();
// Eliminar el nombre de usuario:
unset($_SESSION["usuario"]);

?>

<?php
// Destruir sesión actual terminandola
//session_start();
session_destroy();

echo "Hemos aplicado session_destroy(); y el unset";
?>