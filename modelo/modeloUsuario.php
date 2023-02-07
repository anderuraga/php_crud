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


 /**
     * Actualiza nombre y apellidos para un usuario
     * retorna true si la cambia
     * retorna false si NO la cambia
     */
    public static function cambiarDatos( $idUsuario, $nombre, $apellidos ){
        include 'conexion.php';
        $sql = " UPDATE `usuarios` 
                 SET `nombre` = '".$nombre."', 
                     `apellidos` = '".$apellidos."' 
                 WHERE `usuarios`.`id` = ".$idUsuario.";                 
                ";
          
        $conn->query($sql);  
        if ( $conn->affected_rows == 1 ){
            return true;
        }else{
            return false;
        }
       
        
    }// cambiarDatos


    /**
     * Inserta un nuevo usuario
     * retorna true si crea nuevo usuario
     * retorna false si falla
     */
    public static function insert( $nombre, $apellidos, $nick, $pass ){
        include 'conexion.php';
        $sql = " INSERT INTO `usuarios` 
                 (`nombre`, `apellidos`, `nick`, `pass`) 
                 VALUES 
                 ('".$nombre."', '".$apellidos."', '".$nick."', '".$pass."');
               ";

        $conn->query($sql);  

        if ( $conn->affected_rows == 1 ){
            return true;
        }else{
            return false;
        }
        
    }// insert



}
?>