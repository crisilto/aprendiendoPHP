<?php
// Escribe un programa que imprima los números del 1 al 10.
for($i = 1; $i <= 10; $i++){
    echo $i . "<br>";
}
// Escribe un programa que imprima los elementos del siguiente array:
$frutas = ["manzana", "pera", "naranja", "fresa", "kiwi"];
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

// Escribe un programa que calcule la suma de los números del 1 al 100.
$suma = 0;
for($j = 1; $j <= 100; $j++){
    $suma+= $j;
}
echo "La suma de los números del 1 al 100 es " . $suma;

// Escribe un programa que imprima el número de letras de cada elemento del siguiente array:
$palabras = ["hola", "mundo", "perro", "gato", "casa"];
foreach ($palabras as $palabra) {
    echo "La palabra " . $palabra . " tiene " . strlen($palabra) . " letras.<br>";
}

// Escribe un programa que imprima los números pares del 1 a ese número.
$num = 21;
echo "Los números pares desde 1 hasta " . $num . " son: <br>";
for($n = 1; $n <= $num; $n++){
    if($n % 2 == 0){
        echo $n . "<br>";
    }
}

// Escribe un programa que reciba un número y luego imprima la tabla de multiplicar de ese número.
$numerin = 3;
echo "Tabla de multiplicar del " . $numerin . ": <br>";
for($nn = 0; $nn <= 10; $nn++){
    echo $numerin . " x " . $nn . " = " . $numerin * $nn . "<br>";
}

// Usar foreach usando tres datos ($array as $index => $valor)
$nombres = ["Lucas", "Chiara", "Paul"];
echo "Mi top de OT es: <br>";
foreach ($nombres as $indice => $nombre) {
    echo ($indice + 1) . ": " . $nombre . "<br>";
}