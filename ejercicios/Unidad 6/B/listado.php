<?php include 'header.php'; ?>

<?php

    $conexion = new mysqli("localhost", "root", "", "CONCESIONARIO");
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $consulta = "SELECT * FROM COCHES";

    $resultado = $conexion->query($consulta);

    //Mostramos los resultados
    if ($resultado->num_rows > 0) {
        echo "<h2>Listado de Coches</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Matrícula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Motor</th>
                <th>Color</th>
                <th>Cilindrada</th>
                <th>Precio</th>
                <th>Extras</th>
            </tr>";

        while ($coche = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>{$coche['matricula']}</td>
                    <td>{$coche['marca']}</td>
                    <td>{$coche['modelo']}</td>
                    <td>{$coche['tipo']}</td>
                    <td>{$coche['motor']}</td>
                    <td>{$coche['color']}</td>
                    <td>{$coche['cilindrada']}</td>
                    <td>{$coche['precio']}</td>
                    <td>{$coche['extras']}</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No hay coches en la base de datos.";
    }

    $conexion->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
</body>

</html>