<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opciones = ["politica", "economica", "deportiva"];
    if (isset($_POST["noticia"]) && in_array($_POST["noticia"], $opciones)) {
        $opcion_seleccionada = $_POST["noticia"];
    } else {
        $opcion_seleccionada = "todas";
    }
}

$noticias = [
    "politica" => ["Noticia sobre política 1", "Noticia sobre política 2", "Noticia sobre política 3"],
    "economica" => ["Noticia sobre economía 1", "Noticia sobre economía 2", "Noticia sobre economía 3"],
    "deportiva" => ["Noticia sobre deporte 1", "Noticia sobre deporte 2", "Noticia sobre deporte 3"],
];

if ($opcion_seleccionada === "todas") {
    $titulares_mostrados = array_merge($noticias["politica"], $noticias['economica'], $noticias['deportiva']);
} else {
    $titulares_mostrados = $noticias[$opcion_seleccionada];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 5 - Ejercicio 3</title>
    <link rel="stylesheet" href="ejercicio3.css">
</head>
<body>
    <h1>Periódico</h1>
    <form action="ejercicio3.php" method="post">
        <label for="noticia">Selecciona el tipo de noticia:</label>
        <select name="noticia" id="noticia">
            <option value="todas" <?php echo ($opcion_seleccionada === "todas") ? "selected" : ""; ?>>Todas</option>
            <option value="politica" <?php echo ($opcion_seleccionada === "politica") ? "selected" : ""; ?>>Política</option>
            <option value="economica" <?php echo ($opcion_seleccionada === "economica") ? "selected" : ""; ?>>Económica</option>
            <option value="deportiva" <?php echo ($opcion_seleccionada === "deportiva") ? "selected" : ""; ?>>Deportiva</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <h2>Titulares:</h2>
    <ul>
        <?php
        foreach ($titulares_mostrados as $titular) {
            echo "<li>$titular</li>";
        }
        ?>
    </ul>
</body>

</html>