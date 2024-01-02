<?php
if (isset($_COOKIE["color_fondo"])) {
    $color_seleccionado = $_COOKIE["color_fondo"];
    echo "<style>body { background-color: $color_seleccionado; }</style>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 5 - Ejercicio 5</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Ejercicio 5</h1>
    <form action="procesar_color.php" method="post">
        <label for="color">Color:</label>
        <select name="color" id="color">
            <option value="#ff0000">Rojo</option>
            <option value="#0000ff">Azul</option>
            <option value="#00ff00">Verde</option>
            <option value="#fffb00">Amarillo</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <a href="ver_color.php">Ver color seleccionado</a>
    <form action="eliminar_cookie.php" method="post">
        <input type="submit" value="Eliminar Color">
    </form>
</body>

</html>
