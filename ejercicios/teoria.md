# TEORÍA TEMA 5


##  Teoría Básica sobre Cookies y Sesiones:

**Cookies:**

1.  **Definición:** Son pequeños fragmentos de datos almacenados en el navegador del usuario.
2.  **Propósito:** Permiten a los sitios web recordar información sobre la visita del usuario.
3.  **Almacenamiento:** Pueden almacenar datos como preferencias, nombres de usuario, carritos de compras, etc.
4.  **Persistencia:** Pueden ser temporales (se borran al cerrar el navegador) o permanentes (persisten después del cierre).
5.  **Acceso:** Se accede a través del objeto `document.cookie` en JavaScript.
6.  **Creación:** Se crean con la función `setcookie` en el lado del servidor o mediante JavaScript en el cliente.

**Sesiones:**

1.  **Definición:** Es un mecanismo para mantener el estado del usuario a través de múltiples páginas.
2.  **Almacenamiento:** Los datos se almacenan en el servidor, asociados a una sesión única.
3.  **Identificación:** Se utiliza una clave única, generalmente almacenada en una cookie en el navegador del usuario, para identificar la sesión.
4.  **Duración:** Tiene un tiempo de vida limitado y se puede configurar para expirar después de cierto tiempo de inactividad.
5.  **Acceso:** Se accede a través de variables de sesión en el lado del servidor.
6.  **Seguridad:** Es más seguro que las cookies ya que la información no se almacena en el lado del cliente.

**Relación y Elección:**

1.  **Elección:** La elección entre cookies y sesiones depende de la naturaleza de la información y los requisitos de seguridad.
2.  **Combinación:** A menudo, ambos se utilizan en conjunto; la cookie para identificar la sesión y la sesión para almacenar información sensible en el servidor.
3.  **Transferencia de Datos:** Las cookies son más adecuadas para datos no sensibles y de corta duración, mientras que las sesiones son ideales para datos más críticos y persistentes.

**Consideraciones Adicionales:**

1.  **Seguridad:** Es crucial proteger la información almacenada, especialmente en cookies, para evitar riesgos de seguridad.
2.  **Privacidad:** La información almacenada en cookies puede ser accesible para terceros, por lo que es esencial considerar la privacidad del usuario.
3.  **Expiración:** Configurar adecuadamente la expiración de cookies y sesiones ayuda a mantener un equilibrio entre la comodidad del usuario y la seguridad.
