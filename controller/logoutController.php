<?php

    // cerramos la session del usuario     
    session_start();
    session_destroy();

     // Ir al index.php
     $msg = "Agur, hasta el proximo dia";
     $tipo = "primary";
     require('../index.php');
?>