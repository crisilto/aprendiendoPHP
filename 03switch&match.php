<?php
$a = 5;
$b = 6;

echo $a > $b ? "mayor" : ($a < $b ? "menor" : "igual");

switch ($a) {
    case '2':
        echo "Martes";
        break;

    case '4':
        echo "Jueves";
        break;

    case "5":
        echo "Viernes";
        break;

    default:
        echo "No sé";
        break;
};

echo match ($b) {
    1 => "Lunes",
    2 => "Martes",
    3 => "Miércoles",
    4 => "Jueves",
    5 => "Viernes",
    default => "Finde"
};