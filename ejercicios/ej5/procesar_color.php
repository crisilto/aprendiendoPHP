<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["color"])) {
    $color_seleccionado = $_POST["color"];
    setcookie("color_fondo", $color_seleccionado, 0);
    header("Location: ejercicio5.php");
    exit();
}
