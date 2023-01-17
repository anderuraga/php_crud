<?php

session_start();

// recoger parametros del formulario
$nom = $_POST['nom'];
$pwd = $_POST['pwd'];

// echo $nom." ".$pwd;
// TODO validar contra la bbdd,ya no vale "admin" y "123"
if( "admin" == $nom && "123" == $pwd )
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