<?php include 'header.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexion = new mysqli("localhost", "root", "", "CONCESIONARIO");
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    //Obtenemos los datos del formulario
    $matricula = $_POST["matricula"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $tipo = $_POST["tipo"];
    $motor = $_POST["motor"];
    $color = $_POST["color"];
    $cilindrada = $_POST["cilindrada"];
    $precio = $_POST["precio"];
    $extras = $_POST["extras"];

    $consulta = "UPDATE COCHES 
                 SET marca = '$marca', modelo = '$modelo', tipo = '$tipo', motor = '$motor', color = '$color',
                     cilindrada = $cilindrada, precio = $precio, extras = '$extras'
                 WHERE matricula = '$matricula'";

    //Ejecutamos la consulta
    if ($conexion->query($consulta) === TRUE) {
        echo "Información del coche actualizada correctamente.";
    } else {
        echo "Error al actualizar la información del coche: " . $conexion->error;
    }

    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización de Coche</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h2>Actualización de Coche</h2>
    <form action="actualizacion.php" method="post">
        <label for="matricula">Matrícula:</label>
        <input type="text" name="matricula" required><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" required><br>

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" required><br>

        <label for="motor">Motor:</label>
        <input type="text" name="motor" required><br>

        <label for="color">Color:</label>
        <input type="text" name="color" required><br>

        <label for="cilindrada">Cilindrada:</label>
        <input type="number" name="cilindrada" required><br>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" step="0.01" required><br>

        <label for="extras">Extras:</label>
        <textarea name="extras"></textarea><br>
        <input type="submit" value="Actualizar">
    </form>
</body>

</html>