<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Unidad 8</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $routerIP = $_POST['routerIP'];
        $numEquipos = $_POST['numEquipos'];
        $ipPrivada = isset($_POST['ipPrivada']) ? true : false;
        $correoAdmin = $_POST['correoAdmin'];

        //Validamos la dirección IP del router
        if (!filter_var($routerIP, FILTER_VALIDATE_IP)) {
            echo "La dirección IP del router no es válida.<br>";
        }

        //Validamos el número de equipos (debe ser un entero)
        if (!filter_var($numEquipos, FILTER_VALIDATE_INT)) {
            echo "El número de equipos debe ser un número entero.<br>";
        }

        //(La IP privada está validada por la naturaleza del checkbox)

        //Validamos el correo del administrador
        if (!filter_var($correoAdmin, FILTER_VALIDATE_EMAIL)) {
            echo "La dirección de correo no es válida.<br>";
        }
    }
    ?>
</body>

</html>