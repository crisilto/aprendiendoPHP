La sentencia match en PHP es una sentencia de coincidencia que permite comprobar si una cadena coincide con un patrón determinado. 
Es una forma más concisa y eficiente de escribir las sentencias if-else tradicionales para comprobar la coincidencia de cadenas.

La sintaxis básica de la sentencia match es la siguiente:
    match ($cadena) {
    case $patron1:
        // Instrucciones a ejecutar si la cadena coincide con $patron1
        break;
    case $patron2:
        // Instrucciones a ejecutar si la cadena coincide con $patron2
        break;
    default:
        // Instrucciones a ejecutar si la cadena no coincide con ninguno de los patrones
    }

Por ejemplo, el siguiente código comprueba si la cadena $cadena coincide con uno de los siguientes patrones:
    $cadena = "hola";

    match ($cadena) {
    case "hola":
        echo "La cadena coincide con el patrón 'hola'";
        break;
    case "mundo":
        echo "La cadena coincide con el patrón 'mundo'";
        break;
    default:
        echo "La cadena no coincide con ninguno de los patrones";
    }
Este código imprimirá lo siguiente:
La cadena coincide con el patrón 'hola'

La sentencia match también puede utilizarse para comprobar la coincidencia de cadenas con patrones más complejos, como expresiones regulares. Por ejemplo, el siguiente código comprueba si la cadena $cadena es un número entero positivo:

    $cadena = "123";

    match ($cadena) {
    case /\d+$/:
        echo "La cadena es un número entero positivo";
        break;
    default:
        echo "La cadena no es un número entero positivo";
    }
Este código imprimirá lo siguiente:
La cadena es un número entero positivo

La sentencia match es una herramienta poderosa que puede utilizarse para simplificar y mejorar el rendimiento de su código PHP.