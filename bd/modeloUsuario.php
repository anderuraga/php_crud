<?php


class ModeloUsuario {

    

    /**
     * comprueba si el nombre de usuario y contraseña existen en la tabla de "usuarios"
     * Retorna una fila con los datos del usuario [id, nombre, apellidos] si existe
     * Retorna null si no existe
     */
    public static function login( $nombre, $pass ){
 
        include 'conexion.php';
        $sql = "SELECT id, nombre, apellidos, nick FROM `usuarios` WHERE nick = '".$nombre."' AND pass= '".$pass."' ; ";
        $result = $conn->query($sql);        
        if ($result->num_rows == 1) {
            // Retorna una fila con los datos del usuario [id, nombre, apellidos]
            return $result->fetch_assoc();            
        }else{           
            return null;
        }    
        
    }// login

    /**
     * Actualiza la contraseña para un usuario
     * retorna true si la cambia
     * retorna false si NO la cambia
     */
    public static function cambiarPass( $idUsuario, $passOld, $passNew ){
        include 'conexion.php';
        $sql = "UPDATE usuarios 
                SET pass = '".$passNew."' 
                WHERE id = ".$idUsuario." AND pass='".$passOld."' ;
                ";

        $conn->query($sql);  

        if ( $conn->affected_rows == 1 ){
            return true;
        }else{
            return false;
        }
        
    }// cambiarPass


}
?>