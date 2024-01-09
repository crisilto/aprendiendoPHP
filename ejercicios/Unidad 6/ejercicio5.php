<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 6 - Actividad 2 - Ejercicio 5</title>
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
    <h1>Establecer permisos de archivo</h1>

    <div class="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $archivoPermisos = isset($_POST["archivo_permisos"]) ? $_POST["archivo_permisos"] : null;
            $permisos = isset($_POST["permisos"]) ? $_POST["permisos"] : null;

            if ($archivoPermisos !== null && $permisos !== null) {
                try {
                    if (file_exists($archivoPermisos)) {
                        //Verificamos que el archivo existe

                        //Intentamos establecer los permisos
                        if (chmod($archivoPermisos, octdec($permisos))) {
                            echo "<p>· Permisos establecidos con éxito.</p>";
                        } else {
                            echo "<p>· Error al intentar establecer los permisos.</p>";
                        }
                    } else {
                        echo "<p>· El archivo no existe.</p>";
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
        <label for="archivo_permisos">Nombre del archivo:</label>
        <input type="text" name="archivo_permisos" id="archivo_permisos" required>

        <label for="permisos">Permisos (en formato octal):</label>
        <input type="text" name="permisos" id="permisos" required>

        <div class="button-container">
            <button type="submit">Establecer permisos</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<script>document.querySelector(".resultado").classList.add("mostrar");</script>';
    }
    ?>
</body>

</html>
