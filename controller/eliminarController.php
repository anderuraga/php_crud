<?php

/**
 * Controlador para dar de baja al usuario
 */

session_start();
require_once("../modelo/modeloUsuario.php");

// recoger parametros del formulario
$apellidos = $_POST['apellidos'];

// Recoger el usuario de session
$usuario = $_SESSION['usuario'];
$idUsuario = $usuario['id'];
$apellidosEnSession = $usuario['apellidos'];
   
// comprobar apellidos
if ( $apellidos == $apellidosEnSession ){

    // llamar al modelo para la DELETE
    ModeloUsuario::eliminar($idUsuario);

    // cerramos la session
    session_destroy();

    $msg = "Una lastima que nos abandones";
    $tipo = "danger";

    // vamos a una vista
    require('../index.php');

} else {
    $msg = "Por favor escribe bien tus apellidos para darte de baja";
    $tipo = "warning";

    // vamos a una vista
    require('../view/frontoffice.php');
}


?>