<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 5 - Ejercicio 7</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Formulario</h1>
    <form action="crear_sesion.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" reqiored>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>