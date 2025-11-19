# Mi Sitio web personal con formulario PHP   

Link del hosting - https://webangelsarango.infinityfree.me/

## Descripcion
Este proyecto es una pagina web personal que incluye:

- Pagina principal con informacion del usuario.
- Formulario de contacto que guarda los datos en una base de datos.
- Estilos con CSS.
- Proyecto subido a hosting gratuito.

## Tecnologias
- HTML5
- CSS3
- PHP
- MySQL
- Hosting gratuito (000webhost o InfinityFree)

## Estructura del proyecto
- index.php - Pagina principal
- contacto.php - Formulario
- procesar.php - Procesa y guarda datos
- conexion.php - Conexion a base de datos
- style.css - Estilos

## Base de datos
Crear una BD llamada `desarrollo_web` y ejecutar el siguiente :
Nota: Se creo la tabla dentro de la misma bd que se utilizo para la primera practica.

```sql
CREATE TABLE mensajes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  correo VARCHAR(150),
  mensaje TEXT,
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);