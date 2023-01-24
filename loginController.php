<?php
session_start();
require_once("bd/modeloUsuario.php");


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
    header("Location: frontoffice.php?msg=".$msg."&tipo=primary");
}
else
{
    $_SESSION['usuario'] = null;
    // volver a login.php
    $msg = "Por favor intentelo de nuevo";
    header("Location: login.php?msg=".$msg."&tipo=warning");
}


?>