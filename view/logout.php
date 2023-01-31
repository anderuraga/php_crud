<?php

    // cerramos la session del usuario     
    session_start();
    session_destroy();

    // volvemos al index.php
    $msg = "Hasta la vista";
    header("Location: index.php?msg=".$msg."&tipo=primary");
?>