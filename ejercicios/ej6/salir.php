<?php
session_start();

if (isset($_SESSION['hora_entrada'])) {
    $hora_entrada = $_SESSION['hora_entrada'];
    $hora_salida = time(); 
    $tiempo_transcurrido = $hora_salida - $hora_entrada;

    $horas = floor($tiempo_transcurrido / 3600);
    $minutos = floor(($tiempo_transcurrido % 3600) / 60);
    $segundos = $tiempo_transcurrido % 60;

    $tiempo_formato = sprintf("%02d:%02d:%02d", $horas, $minutos, $segundos);

    echo "<p>Has estado en la página durante: $tiempo_formato</p>";

    unset($_SESSION['hora_entrada']);
} else {
    echo "<p>No se ha registrado la hora de entrada.</p>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salir</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <a href="ejercicio6.php" class="volver">Volver</a>
</body>

</html>
