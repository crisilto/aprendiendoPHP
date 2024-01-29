<?php
    if(isset($_POST['correo'])) {
        $correo = $_POST['correo'];
        echo compruebaCorreo($correo) ? "El usuario existe" : "El usuario no existe";
    }

    function compruebaCorreo($correo) {
        $arrayCorreos = [
            "luis@terra.es",
            "mario@ono.com",
            "sara@yahoo.es",
            "ana@gmail.com",
        ];
        return in_array($correo, $arrayCorreos);
    }
?>
