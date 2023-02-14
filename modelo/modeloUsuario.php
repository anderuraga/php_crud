<?php


class ModeloUsuario {

    

    /**
     * comprueba si el nick del usuario y contraseña existen en la tabla de "usuarios"
     * Retorna una fila con los datos del usuario [id, nombre, apellidos] si existe
     * Retorna null si no existe
     */
    public static function login( $nick, $pass ){
 
        include 'conexion.php';
        $sql = "SELECT id, nombre, apellidos, nick FROM `usuarios` WHERE nick = '".$nick."' AND pass= '".$pass."' ; ";
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


    /**
     * Elimina un usuario de la tabla por su id
     */
    public static function eliminar( $id ){
        include 'conexion.php';
        $sql = " DELETE FROM usuarios WHERE `id` = ".$id." ; ";

        $conn->query($sql);  

        if ( $conn->affected_rows == 1 ){
            return true;
        }else{
            return false;
        }
        
    }// eliminar


    /**
     * Consulta la tabla de usuarios y retorna un array con todos ordenados por nombre y apellidos asc. 
     */
    public static function listar (){
        
        $usuarios = [];
        include 'conexion.php';
        $sql = "SELECT id, nombre, apellidos, nick FROM `usuarios` ORDER BY  nombre, apellidos ASC LIMIT 500; ";       
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // recorremos uno a uno todos los resultados de cada fila == $row
            while($row = $result->fetch_assoc()) {
                array_push($usuarios, $row);
            }
        }
        return $usuarios;
        
    }// listar

}
?>