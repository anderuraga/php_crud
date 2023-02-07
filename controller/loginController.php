<?php
session_start();
require_once("../modelo/modeloUsuario.php");


// recoger parametros del formulario
$nick = $_POST['nom'];
$pwd = $_POST['pwd'];

$usuario = ModeloUsuario::login( $nick, $pwd );
if ( $usuario != null )
{
    // guardar el usuario en session        
    $_SESSION['usuario'] = $usuario;

    // Ir al index.php
    $msg = "Ongi Etorri";
    $tipo = "primary";
    require('../view/frontoffice.php');
   
}
else
{
    $_SESSION['usuario'] = null;

    // volver a login.php
    $msg = "Por favor intentelo de nuevo";
    $tipo = "warning";
    require('../view/login.php');
}


?>