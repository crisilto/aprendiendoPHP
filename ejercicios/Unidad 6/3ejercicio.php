<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 6 - Actividad 3</title>
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
            width: 80%;
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
    </style>
</head>

<body>
    <?php
        //Cargamos el contenido del fichero XML
        $xmlFile = 'datos_coches.xml'; 
        $xml = simplexml_load_file($xmlFile); //Interpreta el archivo XML como un objeto

        if ($xml) {
            //Mostramos los datos en formato de tabla
            echo "<h1>Datos de Coches</h1>";
            echo "<table>";
            echo "<tr><th>Matrícula</th><th>Marca</th><th>Modelo</th><th>Precio</th></tr>";

            foreach ($xml->coche as $coche) {
                echo "<tr>";
                echo "<td>" . $coche->matricula . "</td>";
                echo "<td>" . $coche->marca . "</td>";
                echo "<td>" . $coche->modelo . "</td>";
                echo "<td>" . $coche->precio . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Error al cargar el archivo XML.</p>";
        }
    ?>
</body>

</html>
