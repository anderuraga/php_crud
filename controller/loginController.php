<?php
session_start();
require_once("../modelo/modeloUsuario.php");


// recoger parametros del formulario
$nom = $_POST['nom'];
$pwd = $_POST['pwd'];

$usuario = ModeloUsuario::login( $nom, $pwd );
if ( $usuario != null )
{
    // guardar el usuario en session        
    $_SESSION['usuario'] = $usuario;

    // Ir al index.php
    $msg = "Ongi Etorri";
    header("Location: ".base_url()."view/frontoffice.php?msg=".$msg."&tipo=primary");
}
else
{
    $_SESSION['usuario'] = null;
    // volver a login.php
    $msg = "Por favor intentelo de nuevo";
    header("Location: ".base_url()."view/login.php?msg=".$msg."&tipo=warning");
}


?>