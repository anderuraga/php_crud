<?php


// recoger parametros del formulario
$nom = $_POST['nom'];
$pwd = $_POST['pwd'];

// echo $nom." ".$pwd;

if( "admin" == $nom && "123" == $pwd )
{

    // guardar el usuario en session    
    session_start();
    $_SESSION['usuario'] = "Administrador";

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