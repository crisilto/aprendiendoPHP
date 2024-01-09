<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 6 - Actividad 2 - Ejercicio 4</title>
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
    <h1>Eliminar archivo</h1>

    <div class="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $archivoEliminar = isset($_POST["archivo_eliminar"]) ? $_POST["archivo_eliminar"] : null;

            if ($archivoEliminar !== null) {
                try {
                    if (file_exists($archivoEliminar)) {
                        //Verificamos que el archivo existe

                        //Intentamos eliminar el archivo
                        if (unlink($archivoEliminar)) {
                            echo "<p>· Eliminación exitosa del archivo.</p>";
                        } else {
                            echo "<p>· Error al intentar eliminar el archivo.</p>";
                        }
                    } else {
                        echo "<p>· El archivo no existe.</p>";
                    }
                } catch (Exception $e) {
                    echo "<p>· Error: " . $e->getMessage() . "</p>";
                }
            } else {
                echo "<p>· Por favor, completa el campo.</p>";
            }
        }
        ?>
    </div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <label for="archivo_eliminar">Nombre del archivo a eliminar:</label>
        <input type="text" name="archivo_eliminar" id="archivo_eliminar" required>

        <div class="button-container">
            <button type="submit">Eliminar archivo</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<script>document.querySelector(".resultado").classList.add("mostrar");</script>';
    }
    ?>
</body>

</html>
