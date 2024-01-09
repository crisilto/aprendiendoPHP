<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 6 - Actividad 2 - Ejercicio 3</title>
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
    <h1>Renombrar archivo</h1>

    <div class="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $archivoOriginal = isset($_POST["archivo_original"]) ? $_POST["archivo_original"] : null;
            $nuevoNombre = isset($_POST["nuevo_nombre"]) ? $_POST["nuevo_nombre"] : null;

            if ($archivoOriginal !== null && $nuevoNombre !== null) {
                try {
                    if (file_exists($archivoOriginal)) {
                        // Verificar que el archivo original exista

                        // Construir la ruta para el nuevo nombre
                        $rutaNueva = pathinfo($archivoOriginal)['dirname'] . '/' . $nuevoNombre;

                        // Verificar si ya existe un archivo con el nuevo nombre
                        if (file_exists($rutaNueva)) {
                            echo "<p>· Ya existe un archivo con el nuevo nombre.</p>";
                        } else {
                            // Intentar realizar el cambio de nombre
                            if (rename($archivoOriginal, $rutaNueva)) {
                                echo "<p>· Cambio de nombre exitoso del archivo.</p>";
                            } else {
                                echo "<p>· Error al intentar cambiar el nombre del archivo.</p>";
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

        <label for="nuevo_nombre">Nuevo nombre:</label>
        <input type="text" name="nuevo_nombre" id="nuevo_nombre" required>

        <div class="button-container">
            <button type="submit">Renombrar archivo</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<script>document.querySelector(".resultado").classList.add("mostrar");</script>';
    }
    ?>
</body>

</html>
