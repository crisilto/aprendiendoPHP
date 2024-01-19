<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
    <style>
        body {
            font-family: monospace;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1,
        h2 {
            text-align: center;
            color: #333;
        }

        form,
        #datos-usuario {
            max-width: 400px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="radio"] {
            margin-top: 5px;
            /* Ajusta según sea necesario */
            margin-bottom: 5px;
            /* Ajusta según sea necesario */
            display: inline-block;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <h1>Formulario de Registro</h1>

    <form action="procesar_registro.php" method="post" enctype="multipart/form-data">
        <label for="id_usuario">ID Usuario:</label>
        <input type="text" id="id_usuario" name="id_usuario" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="YYYY-MM-DD" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br>

        <label>Sexo:</label>
        <label for="hombre">Hombre</label>
        <input type="radio" id="hombre" name="sexo" value="Hombre" required>
        <label for="mujer">Mujer</label>
        <input type="radio" id="mujer" name="sexo" value="Mujer" required>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br>

        <label for="poblacion">Población:</label>
        <input type="text" id="poblacion" name="poblacion" required><br>

        <label for="pais">País:</label>
        <select id="pais" name="pais">
            <option value="es">España</option>
            <option value="pt">Portugal</option>
            <option value="fr">Francia</option>
            <option value="mx">México</option>
        </select><br>

        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required><br>

        <input type="submit" value="Registrarse">
    </form>

</body>

</html>