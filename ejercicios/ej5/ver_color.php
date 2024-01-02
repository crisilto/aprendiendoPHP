<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Seleccionado</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    if (isset($_COOKIE["color_fondo"])) {
        $color_seleccionado = $_COOKIE["color_fondo"];
        echo "<div class='color-container' style='background-color: $color_seleccionado;'>";
        echo "Color seleccionado: $color_seleccionado";
        echo "</div>";
    } else {
        echo "<div class='no-color-container'>No hay color seleccionado</div>";
    }
    ?>
    <br>
    <a href="ejercicio5.php">Volver</a>
</body>

</html>
