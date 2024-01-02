<?php
    session_start();
    if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
        $username = $_SESSION["username"];
        $password = $_SESSION["password"];
    }else{
        header("Location: ejercicio7.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 5 - Ejercicio 6</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Recuperar Sesión</h1>
    <p>Usuario: <?php echo $username; ?></p>
    <p>Contraseña: <?php echo $password; ?></p>
    <a href="ejercicio7.php">Volver</a>
</body>
</html>