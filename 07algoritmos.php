<?php
// Ejemplo 1: Imprime los números del 1 al 100.
for($i = 1; $i <= 100; $i++){
    echo $i . " ";
}
echo "<br>";

// Ejemplo 2: Calcula la suma de los números del 1 al 100.
$suma = 0;
for($j = 1; $j <= 100; $j++){
    $suma += $j;
}
echo "La suma de los números del 1 al 100 es " . $suma;
echo "<br>";

// Ejemplo 3: Comprueba si un número es primo.
$numero = 23;
$esPrimo = true;

for($k = 2; $k < $numero; $k++){
    if($numero % $k == 0){
        $esPrimo = false;
        break;
    }
}

echo $esPrimo ? "El número " . $numero . " es primo. " : "El número " . $numero . " no es primo. ";