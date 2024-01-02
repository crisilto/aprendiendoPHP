<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;

        header("Location: recuperar_sesion.php");
        exit();
    }else{
        header("Location: ejercicio7.php");
        exit();
    }
?>