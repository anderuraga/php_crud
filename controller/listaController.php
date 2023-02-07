<?php
session_start();
require_once("../modelo/modeloUsuario.php");


// recoger parametros del formulario

//logica de negocio

    //Validar parametros

    //llamada al modelo
    $usuarios = ModeloUsuario::listar();


    //Ir a una vista
    require('../view/listaUsuarios.php');



?>