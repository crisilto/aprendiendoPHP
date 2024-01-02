<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("color_fondo", "", time() - 1);
}
header("Location: ejercicio5.php");
exit();
?>
