<?php
// Escribe un programa que imprima los números del 1 al 100, pero salte los números múltiplos de 5.
for($i = 1; $i <= 100; $i++){
    if($i % 5 == 0){
        continue;
    }
    echo $i . " ";
}

// Escribe un programa que imprima la siguiente secuencia hasta llegar a 10:
// 1
// 1 2
// 1 2 3
// ...
for($j = 0; $j <= 10; $j++){
    for($z = 1; $z <= $j; $z++){
        echo $z . " ";
    }
    echo "<br>";
}

// Escribe un programa que imprima la siguiente secuencia:
// 1
// 2 2
// 3 3 3
// ...
$n = 1;
for ($a = 1; $a <= 10; $a++) {
    for ($b = 1; $b <= $a; $b++) {
        echo $n . " ";
    }
    $n++;
    echo "<br>";
}
