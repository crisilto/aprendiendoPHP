<?php
if (isset($_GET['id'])) {
    $id_usuario = $_GET['id'];
    $archivo = "registro/usuario_$id_usuario.txt";
    $foto = "registro/fotos/img_$id_usuario.jpg";

    if (file_exists($archivo) && file_exists($foto)) {
        //Leemos los datos del archivo
        $datos_usuario = file_get_contents($archivo);

        //Obtenemos la fecha de nacimiento y calculamos la edad
        preg_match('/Fecha de Nacimiento: (\d{4}-\d{2}-\d{2})/', $datos_usuario, $matches);
        $fecha_nacimiento_str = isset($matches[1]) ? $matches[1] : 'Fecha no encontrada';
        $fecha_nacimiento = new DateTime($fecha_nacimiento_str);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nacimiento)->y;

        //Reemplazamos la fecha de nacimiento por la edad
        $datos_usuario = str_replace("Fecha de Nacimiento: $fecha_nacimiento_str", "Edad: $edad", $datos_usuario);

        //Formateamos el teléfono
        $datos_usuario = preg_replace('/(\d{3})(\d{3})(\d{3})/', '$1-$2-$3', $datos_usuario);

        //Obtenemos el código del país del archivo de datos
        $codigo_pais = substr($datos_usuario, strpos($datos_usuario, 'País:') + 6, 2);
        $nombre_pais = ($codigo_pais === 'es') ? 'España' : (($codigo_pais === 'pt') ? 'Portugal' : 'Desconocido');
        $datos_usuario = str_replace("País: $codigo_pais", "País: $nombre_pais", $datos_usuario);

        //Mostramos la información en formato de ficha
        echo "<!DOCTYPE html>";
        echo "<html lang='es'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<title>Datos de Registro</title>";
        echo "<link rel='stylesheet' href='styles.css'>"; //Le metemos los estilos
        echo "</head>";
        echo "<body>";

        echo "<div id='datos-usuario'>";
        echo "<h1>Datos Registro de Usuario</h1>";

        echo nl2br($datos_usuario); //Con nl2br convertimos los saltos de línea en <br>

        //Mostramos la imagen
        echo "<img src='$foto' alt='Foto de perfil'>";
        echo "</div>";

        echo "</body>";
        echo "</html>";
    } else {
        echo "No se encontraron datos para el usuario con ID $id_usuario.";
    }
} else {
    echo "No se proporcionó un ID de usuario válido.";
}
?>
