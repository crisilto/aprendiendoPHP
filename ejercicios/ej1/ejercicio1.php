<?php
    $nombre = $_POST["Nombre"];
    setcookie("nombre_cookie", $nombre);

    echo "Bienvenido/a " . $_COOKIE["nombre_cookie"];
?>