# PHP_CRUD

Projecto PHP para aprender ha ralizar un CRUD contra una base datos de MySQL.

## Entorno

- XAMP se puede descargar de [enlace](https://www.apachefriends.org/es/index.html)
- Windows

## Pasos de Instalación

1. Descagar el proyecto en formato .ZIP desde el botón verde "CODE" de esta misma página
2. Descomprimir el proyecto en la carpeta **C:\xampp\htdocs**
3. Renombrar el nombre de proyecto de **php_crud-master** a **php_crud**, si quieres usar otro nombre de proyecto hay que cambiar la variable **$URL_WEB** en el fichero **/view/includes/cabecera.php**
```
    $URL_WEB = "/php_crud/";
```
CUIDADO: todos los enlaces de las vistas es mejor que comiencen con esta varibale, ejempplo:
```
<a href="<?php echo $URL_WEB ?>view/ejercicios/ejercicio1.php">ejemplo</a>
```

4. [Abrir PHPMyAdmin](http://localhost/phpmyadmin) y crear la base de datos **uf1845**
5. si quieres usar otro nombre de base datos o usuarios puedes cambiarlo en el fichero **modelo/conexion.php**

```
// parametros conexion
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uf1845";
```

6. Importar el Script **/script_bbdd.sql** para crear las tablas y datos necesarios.
7. Ejecuta la Aplicacion en un navegador [Ejecutar App](http://localhost/php_crud)

## Estructura de carpetas

El proyecto se divide en tres carpetas princiales, para seguir el patrón MVC

### Modelo

Contiene los ficheros php que se encargan de comunicarse con la base de datos.

### Controller

Contiene los ficheros php que se encargan hacer de intermediarios entre las vistas y l modelo. Es donde se aplica la logica del negocio, normalmente recibe los parametros enviados mediante formulario.

### View

Contiene los ficheros php que se encargan de la interfaz grafica para el usuario. No tienen logica de negocio, su función principal es renderizar el HTML.

### Resources

Contiene los recursos estáticos que necesita este proyecto web: css, js, imagenes,etc.