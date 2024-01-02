<?php
session_start();

if (!isset($_SESSION['hora_entrada'])) {
    $_SESSION['hora_entrada'] = time(); 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 5 - Ejercicio 6</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Ejercicio 6</h1>
    <h3>Bienvenido/a</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut varius elit. Duis at quam elementum, fringilla ipsum at, sodales lacus. Sed imperdiet nibh ac dignissim congue. In vitae diam non arcu commodo faucibus vitae at purus. Ut nec purus dictum, sollicitudin nunc at, gravida mi. Cras quam neque, euismod et massa non, aliquet lobortis ligula. Aliquam tincidunt sapien eu fermentum hendrerit. Aliquam risus sem, sodales ac pretium ut, ornare vitae purus. Aenean nibh lectus, malesuada et ex eget, tincidunt sodales orci. Nulla facilisi. Ut sodales pellentesque orci, sed consectetur orci accumsan vel. Phasellus lobortis, mauris eget fermentum posuere, sapien lacus eleifend orci, ut dictum ipsum ipsum id dui. Vestibulum sodales leo orci, vitae egestas arcu commodo ac. Etiam hendrerit vehicula sapien a interdum. Sed quis leo nisi.</p>
    <p>Mauris eu magna sodales augue sodales pretium vitae in enim. Morbi mollis, nunc id ultrices condimentum, nisi nisi malesuada orci, id interdum ex diam eu purus. Etiam sodales velit ac felis tempus interdum. Sed mattis lorem in massa placerat blandit. Cras suscipit enim a magna viverra dictum. Quisque sodales sit amet metus sit amet vehicula. Curabitur nisi dui, fermentum quis blandit vitae, egestas vel sem. Fusce molestie tristique tellus. Pellentesque vitae mi sit amet neque pellentesque rhoncus. Duis tempor maximus enim sit amet pharetra. Nullam maximus arcu vel aliquet cursus. Etiam quis quam id nulla feugiat congue vitae ac erat. Fusce ornare tincidunt nisi, at consequat ante.</p>
    <form action="salir.php" method="post">
        <input type="submit" value="SALIR">
    </form>
</body>
</html>