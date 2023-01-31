# PHP_CRUD

Projecto PHP para aprender ha ralizar un CRUD contra una base datos de MySQL.

## Entorno

- XAMP se puede descargar de [enlace](https://www.apachefriends.org/es/index.html)
- Windows

## Pasos de Instalación

1. Descagar el proyecto en formato .ZIP desde el botón verde "CODE" de esta misma página
2. Descomprimir el proyecto en la carpeta **C:\xampp\htdocs**
3. Renombrar el nombre de proyecto de **php_crud-master** a **php_crud**
4. Abrir PHPMyAdmin y crear la base de datos **uf1845**
5. si quieres usar otro nombre de base datos o usuarios puedes cambiarlo en el fichero **bd/conexion.php**

```
// parametros conexion
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uf1845";
```

6. Importar el Script **bd/script_bbdd.sql** para crear las tablas y datos necesarios.
