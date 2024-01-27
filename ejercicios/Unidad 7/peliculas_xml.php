<?php
    //Mismo código que en el ejercicio anterior
    $peliculas = [
        [
            "codigo" => 100,
            "titulo" => "Casper",
            "tema" => "Aventuras",
            "duracion" => 124,
            "precio" => 2.50,
            "cmoral" => "Todos los Públicos"
        ],
        [
            "codigo" => 115,
            "titulo" => "El Libro de la Selva",
            "tema" => "Aventuras",
            "duracion" => 132,
            "precio" => 2.75,
            "cmoral" => "Todos los Públicos"
        ],
        [
            "codigo" => 123,
            "titulo" => "Batman Forever",
            "tema" => "Acción",
            "duracion" => 98,
            "precio" => 3.25,
            "cmoral" => "Mayores de 7 años"
        ],
    ];

    $parametros = $_GET;

    $resultado = [];

    foreach ($peliculas as $pelicula) {
        $coincide = true;
        foreach ($parametros as $parametro => $valor) {
            if(strtolower($pelicula[$parametro]) !== strtolower($valor)){
                $coincide = false;
                break;
            }
        }
        if($coincide){
            $resultado[] = $pelicula;
        }
    }

    //Ahora, si se encuentra la película, devolvemos los datos en formato XML
    if(!empty($resultado)){
        header('Content-Type: text/xml');
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<peliculas>';
        foreach ($resultado as $pelicula) {
            echo '<pelicula>';
            foreach ($pelicula as $campo => $valor) {
                echo "<$campo>$valor</$campo>";
            }
            echo '</pelicula>';
        }
        echo '</peliculas>';
    }else{
        //Si no, devolvemos un mensaje de error
        http_response_code(404);
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<error>Película no encontrada</error>';
    }
?>