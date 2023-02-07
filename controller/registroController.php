<?php

/**
 * Controlador para registrar un nuevo usuario 
 */

session_start();
require_once("../modelo/modeloUsuario.php");

// recoger parametros del formulario
$nombre    = $_POST['nom'];
$apellidos = $_POST['apes'];
$nick      = $_POST['nick'];
$pass1     = $_POST['pass1'];
$pass2     = $_POST['pass2'];

// Logica de negocio, validar que los campos sean correctos

// todos los campos rellenos
if ( $nombre == "" || $apellidos == "" || $nick == "" || $pass1 == "" || $pass2 == "" ) {
    
    $msg = "Por favor rellena todos los campos";
    $tipo = "warning";
    $viewToGo = "../view/registro.php";

// comprobar que escriba el mismo password    
}else if ( $pass1 != $pass2 ){
   
    $msg = "Las contraseñas no coinciden";
    $tipo = "warning";
    $viewToGo = "../view/registro.php";

// llamar al modelo para hacer la insert
}else {

   // insert OK
   if ( ModeloUsuario::insert($nombre, $apellidos, $nick, $pass1 ) ){
        $msg = "Zorionak, te has registrado con exito, ya puedes acceder con tu <b>nick</b> y <b>contraseña</b>";
        $tipo = "primary";
        $viewToGo = "../view/login.php";
   
   // Errores al realizar la insert
   }else{
        $msg = "El nick ".$nick." ya está registrado";
        $tipo = "danger";
        $viewToGo = "../view/registro.php";
   }
    
}

// ir a la vista 
require_once($viewToGo);

?>