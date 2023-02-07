<?php
session_start();
require_once("../modelo/modeloUsuario.php");

/**
 * Controlador para registrar un nuevo usuario 
 */

// recoger parametros del formulario
$nombre = $_POST['nom'];

// TODO Logica de negocio, validar que los campos sean correctos

// TODO llamar al modelo para hacer la insert

//mensaje para el usuario
$msg = "Estas registrado, por favor accede";
$tipo = "primary";
// ir a la vista de login
require_once("../view/login.php");

?>