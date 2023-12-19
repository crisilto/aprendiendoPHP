DEFINICIÓN
Las constantes son tipos de datos que no varían durante la ejecución de un programa.

EJEMPLOS
PI, valor de la gravedad, temperatura de congelación del agua.

SINTAXIS
Llamar al método define y pasarle dos valores, el nombre de la constante y el valor.

CARACTERÍSTICAS
Su valor no varía.
Cuando trabajamos con una constante, simplemente hacemos referencia al nombre de la constante, sin dólar.
    define("CURSO", "PHP 8 desde 0");
    echo CURSO;

Se ponen mayúsculas y si es compuesto, uso de guión bajo.
    define("USUARIO_1", "Cristina Silvestre");
    echo USUARIO_1;

¿LA CONSTANTE ESTÁ DEFINIDA?
Para saber si una constante ha sido definida, utilizamos defined()
    if(defined("USUARIO_1")){
        echo "Sí se ha definido";
        }else{
            echo "No se ha definido";
    }

CONSTANTES PREDEFINIDAS
Existe una constante para saber qué versión de PHP estamos utilizando-> PHP_VERSION

Existe una constante para saber qué sistema operativo estamos utilizando-> PHP_OS;

Existe una constante para saber cuál es la extensión de directorios-> PHP_EXTENSION_DIR;

Existe una constante para saber la API de servidor-> PHP_SAPI

Existe una constante para saber en qué línea se ejecuta-> __LINE__

Existe una constante para saber en qué directorio me encuentro-> __FILE__