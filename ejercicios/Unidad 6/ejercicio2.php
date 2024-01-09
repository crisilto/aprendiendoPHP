<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 6 - Actividad 2 - Ejercicio 2</title>
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
    <h1>Copia de archivo</h1>

    <div class="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Verificamos si los índices existen en el array $_POST antes de intentar acceder a ellos para evitar errores
            $archivoOriginal = isset($_POST["archivo_original"]) ? $_POST["archivo_original"] : null;
            $archivoCopia = isset($_POST["archivo_copia"]) ? $_POST["archivo_copia"] : null;

            if ($archivoOriginal !== null && $archivoCopia !== null) {
                try {
                    //Si el archivo original existe
                    if (file_exists($archivoOriginal)) {
                        //Comprobamos primero si el nombre de la copia ya existe
                        if (file_exists($archivoCopia)) {
                            echo "<p>· El archivo de copia ya existe.</p>";
                        } else {
                            //Si no, hacemos la copia
                            if (copy($archivoOriginal, $archivoCopia)) {
                                echo "<p>· Copia exitosa del archivo.</p>";
                            } else {
                                echo "<p>· Error al intentar copiar el archivo.</p>";
                            }
                        }
                    } else {
                        echo "<p>· El archivo original no existe.</p>";
                    }
                } catch (Exception $e) {
                    echo "<p>· Error: " . $e->getMessage() . "</p>";
                }
            } else {
                echo "<p>· Por favor, completa ambos campos.</p>";
            }
        }
        ?>
    </div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <label for="archivo_original">Nombre del archivo original:</label>
        <input type="text" name="archivo_original" id="archivo_original" required>

        <label for="archivo_copia">Nombre para la copia:</label>
        <input type="text" name="archivo_copia" id="archivo_copia" required>

        <div class="button-container">
            <button type="submit">Realizar copia</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<script>document.querySelector(".resultado").classList.add("mostrar");</script>';
    }
    ?>
</body>

</html>
