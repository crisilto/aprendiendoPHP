<?php include 'header.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexion = new mysqli("localhost", "root", "", "CONCESIONARIO");
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    //Obtenemos la matrícula del coche a dar de baja
    $matricula = $_POST["matricula"];

    $consulta = "DELETE FROM COCHES WHERE matricula = '$matricula'";

    if ($conexion->query($consulta) === TRUE) {
        echo "Coche dado de baja correctamente.";
    } else {
        echo "Error al dar de baja el coche: " . $conexion->error;
    }

    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja de Coche</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h2>Baja de Coche</h2>
    <form action="baja.php" method="post">
        <label for="matricula">Matrícula:</label>
        <input type="text" name="matricula" required><br>

        <input type="submit" value="Dar de Baja">
    </form>
</body>
</html>
