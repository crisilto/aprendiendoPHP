<?php
    //Creamos nuestro array de películas
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

    //Obtenemos los parámetros de búsqueda de la URL
    $parametros = $_GET;

    //Inicializamos el resultado con un array vacío
    $resultado = [];

    //Recorremos las películas y comparamos los parámetros con los valores de las películas
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

    //Si se encuentra la película, devolvemos los datos en JSON
    if (!empty($resultado)) {
        header('Content-Type: application/json');
        echo json_encode($resultado, JSON_UNESCAPED_UNICODE);
    } else {
        //Si no, devolvemos un mensaje de error
        http_response_code(404);
        echo json_encode(['error' => 'Película no encontrada'], JSON_UNESCAPED_UNICODE);
    }
?>
