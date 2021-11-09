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
    $_SESSION['Nombre']  = "Farri";

    function cabeceraWapa()
    {
        echo "<table border = 2>";
        echo "<th>Nombre Función</th>";
        echo "<th>Descripción</th>";
        echo "<th>Valores</th>";
    }

    cabeceraWapa();

    echo "<tr>";
    echo "<td>session.use_cookies</td>";
    echo "<td>Especifica si el módulo usará cookies para almacenar el id de sesión en la parte del cliente.</td>";
    echo "<td>bool - por defecto 1 (habilitado)</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>session.use_only_cookies</td>";
    echo "<td>Especifica si el módulo sólo usará cookies para almacenar el id de sesión en la parte del cliente. Habilitar este ajuste previene ataques que implican pasar el id de sesión en la URL.</td>";
    echo "<td>bool - por defecto 1 (habilitado)</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>session.save_handler</td>";
    echo "<td>Especifica el tiempo de vida en segundos de la cookie que es enviada al navegador. El valor 0 significa hasta que el navegador se cierre.</td>";
    echo "<td>string</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>session.name</td>";
    echo "<td>Especifica el nombre de la sesión que se usa como nombre de cookie. Sólo debería contener caracteres alfanuméricos.
    </td>";
    echo "<td>string - por defecto PHPSESSID</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>session.auto_start</td>";
    echo "<td>Especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición.</td>";
    echo "<td>bool - por defecto 0 (deshabilitado)</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>session.cookie_lifetime</td>";
    echo "<td>Especifica el tiempo de vida en segundos de la cookie que es enviada al navegador. El valor 0 significa hasta que el navegador se cierre.</td>";
    echo "<td>integer - por defecto 0</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>session.gc_maxlifetime</td>";
    echo "<td>Especifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada. La recolección de basura puede suceder durante el inicio de sesiones (dependiendo de session.gc_probability y session.gc_divisor).</td>";
    echo "<td>integer</td>";
    echo "</tr>";

    echo "</table>";

    ?>
</body>

<style>
td {
    background-color: gray;
}

th {
    background-color:steelblue;
}
</style>

</html>