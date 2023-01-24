<?php

/**
 * Controlador para cambiar la contraseña del usuario* 
 */


$pwdold = $_POST['pwdold'];
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];

//echo "pwdold=".$pwdold." pwd1=".$pwd1." pwd2=".$pwd2; 

if ( $pwdold != "" && $pwd1 != "" && $pwd2 != "" )
{
    //comprobar contraseñas iguales
    if ( $pwd1 == $pwd2 ){
        $msg = "Contraseña Cambiada";
        $tipo = "primary";

        // llamar al Modelo para cambiar en la BBDD


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