<?php
    define("CURSO", "PHP 8 desde 0");
    define("USUARIO_1", "Cristina Silvestre");
    define("EQUIPOS", [
        "Valencia",
        "Barça",
        "Real Madrid"
    ]);
    
    echo "El usuario " . USUARIO_1 . " está estudiando el curso " . CURSO . ". Su equipo favorito es el " . EQUIPOS[2];

    if(defined("USUARIO_1")){
        echo "La constante de USUARIO_1 está definida";
    }else{
        echo "La constante de USUARIO_1 no está definida";
    }

    echo "La versión que utilizo de PHP es " . PHP_VERSION;
    echo "El sistema operativo que utilizo es " . PHP_OS;
    echo "La ruta de extensiones es " . PHP_EXTENSION_DIR;
    echo "La API de servidor es " . PHP_SAPI;
    echo "Esto está escrito en la línea " . __LINE__;
    echo "Me encuentro en el directorio " . __FILE__;
?>