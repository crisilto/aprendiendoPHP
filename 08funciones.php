<?php
//FUNCIONES PREDEFINIDAS
echo "Marca de tiempo: " . time() . "<br>";
echo "Raíz cuadrada de 9: " . sqrt(9) . "<br>";
echo "Número aleatorio entre 90 y 100: " . rand(90, 100) . "<br>";
echo "Número PI: " . pi() . "<br>";

//DEFINIENDO FUNCIONES PROPIAS

// Escribe una función llamada factorial que calcule el factorial de un número entero.
function factorial(int $numero){
    if($numero == 0){
        return 1;
    }else{
        return $numero * factorial($numero - 1);
    }
}
echo factorial(5);
echo "<br>";

// Escribe una función llamada esPrimo que compruebe si un número es primo.
function esPrimo(int $num){
    if($num < 2){
        return false;
    }
    
    for ($i = 2; $i < $num; $i++) { 
        if($num % $i == 0){
            return false;
        }
    }

    return true;
}
echo esPrimo(10) == 0 ? "No es primo" : "Es primo";
echo esPrimo(13) == 0 ? "No es primo" : "Es primo";
echo "<br>";

// Escribe una función llamada imprimirNumeros que imprima los números del 1 a un número entero dado.
function imprimirNumeros(int $n){
    for($j = 1; $j <= $n; $j++){
        echo $j . " ";
    }
}
echo imprimirNumeros(10);