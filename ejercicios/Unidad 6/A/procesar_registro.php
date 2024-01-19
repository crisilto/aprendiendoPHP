<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Obtenemos los datos del formulario
    $id_usuario = $_POST["id_usuario"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $telefono = $_POST["telefono"];
    $sexo = $_POST["sexo"];
    $email = $_POST["email"];
    $poblacion = $_POST["poblacion"];
    $pais = $_POST["pais"];
    //Reemplazamos el código del país por el nombre del país
    $paises = ["es" => "España", "pt" => "Portugal"]; 
    $nombre_pais = isset($paises[$pais]) ? $paises[$pais] : 'Desconocido';
    $usuario = $_POST["usuario"]; 
    $contrasena = $_POST["contrasena"];
    //Creamos una cadena con los datos
    $datos_usuario = "Id. Usuario: $id_usuario\nNombre: $nombre\nApellidos: $apellidos\nFecha de Nacimiento: $fecha_nacimiento\nTeléfono: $telefono\nSexo: $sexo\nCorreo: $email\nPoblación: $poblacion\nPaís: $nombre_pais\nUsuario: $usuario\nContraseña: $contrasena";

    //Si no existiese, se crea la carpeta
    $carpeta_registro = 'registro/';
    if (!file_exists($carpeta_registro)) {
        mkdir($carpeta_registro, 0777, true);
    }

    $carpeta_fotos = 'registro/fotos/';
    if (!file_exists($carpeta_fotos)) {
        mkdir($carpeta_fotos, 0777, true);
    }

    //Guardamos los datos obtenidos en un archivo de texto
    $archivo = $carpeta_registro . "usuario_$id_usuario.txt";
    file_put_contents($archivo, $datos_usuario);

    //Movemos la foto a la carpeta correspondiente
    $foto_tmp = $_FILES["foto"]["tmp_name"];
    $foto_destino = $carpeta_fotos . "img_$id_usuario.jpg";
    move_uploaded_file($foto_tmp, $foto_destino);

    //Redirigimos a la página de visualización
    header("Location: mostrar_registro.php?id=$id_usuario");
    exit();
}
