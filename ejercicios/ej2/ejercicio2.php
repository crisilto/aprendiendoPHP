<?php
    if(isset($_POST["recordar"])){
        $direccion = $_POST["gmail"];
        setcookie("cookie_gmail", $direccion);
        
        header("Location: ejercicio2-1.php");
    }else{
        header("Location: ejercicio2-2.php");
    }
?>