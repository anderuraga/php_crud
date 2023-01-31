<?php
session_start();
require_once("bd/modeloUsuario.php");

/**
 * Controlador para cambiar la datos del usuario* 
 */



// recoger parametros del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];

echo $apellidos.",".$nombre;

?>