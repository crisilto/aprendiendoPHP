<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 6 - Actividad 2 - Ejercicio 1</title>
    <style>
        body {
            font-family: monospace;
            margin: 20px;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 50px;
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
            text-align: center;
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .button-container {
            display: flex;
            justify-content: center;
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

        .resultado {
            display: none;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .resultado.mostrar {
            display: block; 
        }
    </style>
</head>

<body>
    <h1>Verificación de archivo/carpeta</h1>

    <div class="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ruta = $_POST["ruta"];
            echo "<p>Ruta completa: " . realpath($ruta) . "</p>";

            try {
                if (is_readable($ruta)) {
                    echo "<p>· La ruta es legible.</p>";

                    if (file_exists($ruta)) {
                        echo "<p>· El fichero o carpeta existe.</p>";

                        if (is_file($ruta)) {
                            echo "<p>· Es un archivo.</p>";
                            echo "<p>· Última modificación: " . date("Y-m-d H:i:s", filemtime($ruta)) . "</p>";
                            echo "<p>· Tamaño del archivo: " . number_format(filesize($ruta), 0, ',', '.') . " bytes</p>";
                        } elseif (is_dir($ruta)) {
                            echo "<p>· Es un directorio.</p>";
                        } else {
                            echo "<p>· No se puede determinar si es un archivo o un directorio.</p>";
                        }
                    } else {
                        echo "<p>· El archivo o carpeta no existe.</p>";
                    }
                } else {
                    echo "<p>· No se puede leer la ruta proporcionada.</p>";
                }
            } catch (Exception $e) {
                echo "<p>· Error al intentar acceder al archivo o carpeta: " . $e->getMessage() . "</p>";
            }
        }
        ?>
    </div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <label for="ruta">Introduce el nombre de archivo o carpeta:</label>
        <input type="text" name="ruta" id="ruta" required>
        <div class="button-container">
            <button type="submit">Verificación</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<script>document.querySelector(".resultado").classList.add("mostrar");</script>';
    }
    ?>
</body>

</html>
