<?php

session_start();

require_once('bd/modeloUsuario.php');


// recoger parametros del formulario
$nom = $_POST['nom'];
$pwd = $_POST['pwd'];

// if( "admin" == $nom && "123" == $pwd )
if ( ModeloUsuario::login($nom, $pwd) )
{

    // guardar el usuario en session    
    
    $_SESSION['usuario'] = "Manolo";

    // Ir al index.php
    $msg = "Ongi Etorri";
    header("Location: index.php?msg=".$msg."&tipo=primary");
}
else
{
    $_SESSION['usuario'] = null;
    // volver a login.php
    $msg = "Por favor intentelo de nuevo";
    header("Location: login.php?msg=".$msg."&tipo=warning");
}


?>