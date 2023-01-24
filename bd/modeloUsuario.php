<?php


class ModeloUsuario {

    

    /**
     * comprueba si el nombre de usuario y contraseña existen en la tabla de "usuarios"
     * Retorna una fila con los datos del usuario [id, nombre, apellidos] si existe
     * Retorna null si no existe
     */
    public static function login( $nombre, $pass ){
 
        include 'conexion.php';
        $sql = "SELECT id, nombre, apellidos FROM `usuarios` WHERE nick = '".$nombre."' AND pass= '".$pass."' ; ";
        $result = $conn->query($sql);        
        if ($result->num_rows == 1) {
            // Retorna una fila con los datos del usuario [id, nombre, apellidos]
            return $result->fetch_assoc();            
        }else{           
            return null;
        }    
        
    }// login


}
?>