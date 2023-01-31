<?php
session_start();
require_once("bd/modeloUsuario.php");

/**
 * Controlador para cambiar la datos del usuario* 
 */

// recoger parametros del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];

//echo $apellidos.",".$nombre;

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

header("Location: frontoffice.php?msg=".$msg."&tipo=".$tipo);


?>