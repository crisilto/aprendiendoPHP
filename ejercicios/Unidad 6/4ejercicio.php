<?php
$archivoCSV = 'vuelos.csv'; // Declaración de la variable
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vuelos</title>
    <style>
        body {
            font-family: monospace;
            background-color: #f5f5f5;
            margin: 20px;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Registro de Vuelos</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="origen">Origen:</label>
        <input type="text" name="origen" id="origen" required>

        <label for="destino">Destino:</label>
        <input type="text" name="destino" id="destino" required>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" step="0.01" required>

        <button type="submit">Guardar Vuelo</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $origen = $_POST["origen"];
        $destino = $_POST["destino"];
        $precio = $_POST["precio"];

        //Creamos una nueva fila de datos
        $nuevaFila = [$origen, $destino, $precio];

        //Obtenemos el contenido actual del archivo CSV
        $contenidoCSV = [];
        $archivoCSV = 'vuelos.csv';

        if (file_exists($archivoCSV)) {
            $contenidoCSV = array_map('str_getcsv', file($archivoCSV));
        }

        //Agregamos la nueva fila al contenido
        $contenidoCSV[] = $nuevaFila;

        //Guardamos el contenido actualizado en el archivo CSV
        $archivo = fopen($archivoCSV, 'w');

        foreach ($contenidoCSV as $fila) {
            fputcsv($archivo, $fila);
        }

        fclose($archivo);
    }

    //Mostramos los datos del archivo CSV en una tabla
    echo "<h1>Datos de Vuelos</h1>";
    echo "<table>";
    echo "<tr><th>Origen</th><th>Destino</th><th>Precio</th></tr>";

    if (file_exists($archivoCSV)) {
        $contenidoCSV = array_map('str_getcsv', file($archivoCSV));

        foreach ($contenidoCSV as $fila) {
            echo "<tr>";
            echo "<td>" . $fila[0] . "</td>";
            echo "<td>" . $fila[1] . "</td>";
            echo "<td>" . $fila[2] . "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
    ?>
</body>

</html>
