<?php
session_start();
require_once("bd/modeloUsuario.php");

/**
 * Controlador para cambiar la contraseña del usuario* 
 */



// recoger parametros del formulario
$pwdold = $_POST['pwdold'];
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];

// recuperar usuario de session
$usuario = $_SESSION['usuario'];
$idUsuario = $usuario['id'];


//logica de negocio
if ( $pwdold != "" && $pwd1 != "" && $pwd2 != "" )
{
    //comprobar contraseñas iguales
    if ( $pwd1 == $pwd2 ){
       

        // llamar al Modelo para cambiar en la BBDD
        if ( ModeloUsuario::cambiarPass($idUsuario,$pwdold, $pwd1 ) ){
            $msg = "Contraseña Cambiada";
            $tipo = "primary";
        }else{
            $msg = "Contraseña Antigua no es correcta";
            $tipo = "warning";
        }



    }else{
        $msg = "No coinciden las Contraseñas";
        $tipo = "danger";
    }

}
else
{
   $msg = "Por favor intentelo de nuevo, las contraseñas no son validas";
   $tipo = "danger";
    
}

header("Location: frontoffice.php?msg=".$msg."&tipo=".$tipo);

?>