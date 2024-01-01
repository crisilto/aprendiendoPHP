# ACTIVIDADES TEMA 5: DESARROLLO DE APLICACIONES WEB UTILIZANDO CÓDIGO EMBEBIDO

## Ejercicio 1

Crear una cookie que almacene el nombre del visitante en el sitio y cada vez que entremos al sitio nos de la bienvenida imprimiendo el nombre. Para introducir el nombre, crear un formulario con un control de tipo text.

## Ejercicio 2

Para borrar una cookie se debe llamar a la función setcookie con una fecha anterior a la actual. Crear una web que nos permita introducir utilizando un control de tipo text una dirección web y mediante un checkbox indicaremos que queremos que recuerde la dirección o que no la recuerde. Al pulsar Enviar accederemos a otra página que nos mostrará la dirección de correo si se marcó la opción recordar.

## Ejercicio 3

Crear una página de un periódico que permita configurar el tipo de noticias que deseamos mostrar al visitarla, pudiendo ser: Noticia política, Noticia económica o Noticia deportiva. Mediante un SELECT debemos permitir seleccionar que titular debe mostrar el periódico. Almacenar en una cookie el tipo de titular que desea ver el cliente. La primera vez que visita el sitio deben aparecer los tres titulares.

## Ejercicio 4

Para crear una cookie que sólo tenga existencia mientras no cerremos la ventana del navegador, pasaremos como fecha de expiración de la cookie, el valor cero. Una vez que la instancia del navegador se cierra, dicha cookie desaparecerá.

Este tipo de cookie puede ser muy útil para validar un usuario en un conjunto de páginas, si previamente introdujo correctamente su nombre de usuario y clave. Es decir, una vez validado el usuario, se verifica en páginas sucesivas si existe la cookie. Una vez que el usuario cierra el navegador, no hay posibilidad de solicitar las páginas recorridas sin previa validación nuevamente de clave y usuario.

Crear una página principal en la que se introduzca el usuario y contraseña. Si son válidos accederemos a una página con un menú Empresa, Servicios y Contacto que me permite navegar por sus páginas hasta que cierre el navegador.

## Ejercicio 5

Crear una Cookie que almacene el color seleccionado de un desplegable. Al pulsar en el botón Enviar lo aplique al fondo de la página. Además, la página dispondrá de un enlace a otra página en la que mostrará el color de fondo seleccionado y un enlace de volver a la página inicial. Por último, la página inicial dispone de un botón que permite eliminar la cookie y por tanto el color de fondo.

## Ejercicio 6

Crear una variable de sesión que almacene la hora de entrada en una página. Al pulsar SALIR, que almacene la hora actual e indique el tiempo que ha estado accediendo a esa página.

## Ejercicio 7

Las variables de Sesión es otro método para hacer que variables estén disponibles en múltiples páginas sin tener que pasarlas como parámetro. A diferencia de las cookies, las variables de sesión se almacenan en el servidor y tienen un tiempo limitado de existencia.

Para identificar al usuario que generó las variables de sesión, el servidor genera una clave única que es enviada al navegador y almacenada en una cookie. Luego, cada vez que el navegador solicita otra página al mismo sitio, envía esta clave única, con la cual el servidor identifica de qué navegador proviene la petición y puede rescatar de un archivo de texto las variables de sesión que se han creado.

Cuando han pasado un tiempo sin peticiones por parte de un cliente (navegador) las variables de sesión son eliminadas automáticamente. Una variable de sesión es más segura que una cookie ya que se almacena en el servidor.

Crear una página con un formulario que nos pida el nombre de usuario y clave. En una segunda página crearemos las dos variables de sesión y en una tercera página recuperaremos los valores almacenados en las variables de sesión.
