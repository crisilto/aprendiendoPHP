<?php include 'header.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Procesamos el formulario de alta de coche

    //Conectamos a la base de datos
    $conexion = new mysqli("localhost", "root", "", "CONCESIONARIO");

    //Verificamos la conexión
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

    //Preparamos la consulta SQL
    $consulta = "INSERT INTO COCHES (matricula, marca, modelo, tipo, motor, color, cilindrada, precio, extras) 
                 VALUES ('$matricula', '$marca', '$modelo', '$tipo', '$motor', '$color', $cilindrada, $precio, '$extras')";

    //Ejecutamos la consulta
    if ($conexion->query($consulta) === TRUE) {
        echo "Coche dado de alta correctamente.";
    } else {
        echo "Error al dar de alta el coche: " . $conexion->error;
    }

    //Cerramos la conexión
    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Coche</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h2>Alta de Coche</h2>
    <form action="alta.php" method="post">
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

        <input type="submit" value="Dar de Alta">
    </form>
</body>
</html>
