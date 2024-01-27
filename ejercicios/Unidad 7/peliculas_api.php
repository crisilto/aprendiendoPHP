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

    //Obtenemos el código de la película de la URL
    $codigo = isset($_GET['codigo']) ? (int)$_GET['codigo'] : 0;

    //Buscamos la película por código
    $resultado = array_filter($peliculas, function($pelicula) use ($codigo) {
        return $pelicula['codigo'] === $codigo;
    });

    //Si se encuentra la película, devolvemos los datos en JSON
    if (!empty($resultado)) {
        header('Content-Type: application/json');
        echo json_encode(array_values($resultado)[0]);
    } else {
        //Si no, devolvemos un mensaje de error
        http_response_code(404);
        echo json_encode(['error' => 'Película no encontrada']);
    }
?>
