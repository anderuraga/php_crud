<?php

/**
 * Controlador para cambiar la datos del usuario 
 */

session_start();
require_once("../modelo/modeloUsuario.php");

// recoger parametros del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];

// Logica de negocio
if ( $nombre != "" && $apellidos != "" ) {

    // Recoger el usuario de session
    $usuario = $_SESSION['usuario'];
    $idUsuario = $usuario['id'];
    
    // llamar al modelo
    if (  ModeloUsuario::cambiarDatos($idUsuario,$nombre, $apellidos) ) {
        $msg = "Cambios guardados";
        $tipo = "primary";

        //Actualizar los datos de session para el usuario
        $usuario['nombre'] = $nombre;
        $usuario['apellidos'] = $apellidos;
        $_SESSION['usuario'] = $usuario;

    }else{
        $msg = "No se han podido cambiar los datos";
        $tipo = "danger";
    }

}else{

    $msg = "Por favor el nombre o apellidos no puede estar vacios";
    $tipo = "warning";

}

// vamos a una vista
require('../view/frontoffice.php');



?>