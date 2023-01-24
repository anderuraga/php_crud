<?php

require_once("conexion.php");

class ModeloUsuario {

    /**
     * comprueba si el nombre de usuario y contraseña existen en la tabla de "usuarios"
     * Retorna una fila con los datos del usuario [id, nombre, apellidos] si existe
     * Retorna null si no existe
     */
    public static function login( $nombre, $password ){

        $sql = "SELECT id, nombre, apellidos FROM `usuarios` WHERE nick = '".$nombre."' AND pass= '".$password."'; ";

        // ejecuta la SQL y obtenermos resultados
       // 
// TODO mirar porque falla el include 
            // parametros conexion
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "uf1845";


            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
// TODO mirar porque falla el include 

        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            // Retorna una fila con los datos del usuario [id, nombre, apellidos]
            return $result->fetch_assoc();            
        }else{
            return null;
        }    
        
    }


}
?>