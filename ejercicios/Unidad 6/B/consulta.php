<?php include 'header.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexion = new mysqli("localhost", "root", "", "CONCESIONARIO");
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    //Obtenemos la matrícula del coche a consultar
    $matricula = $_POST["matricula"];

    $consulta = "SELECT * FROM COCHES WHERE matricula = '$matricula'";

    $resultado = $conexion->query($consulta);

    //Mostramos los resultados
    if ($resultado->num_rows > 0) {
        $coche = $resultado->fetch_assoc();
        echo "Matrícula: " . $coche["matricula"] . "<br>";
        echo "Marca: " . $coche["marca"] . "<br>";
        echo "Modelo: " . $coche["modelo"] . "<br>";
        echo "Tipo: " . $coche["tipo"] . "<br>";
        echo "Motor: " . $coche["motor"] . "<br>";
        echo "Color: " . $coche["color"] . "<br>";
        echo "Cilindrada: " . $coche["cilindrada"] . "<br>";
        echo "Precio: " . $coche["precio"] . "<br>";
        echo "Extras: " . $coche["extras"] . "<br>";
    } else {
        echo "Coche no encontrado.";
    }

    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Coche</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h2>Consulta de Coche</h2>
    <form action="consulta.php" method="post">
        <label for="matricula">Matrícula:</label>
        <input type="text" name="matricula" required><br>

        <input type="submit" value="Consultar">
    </form>
</body>
</html>
