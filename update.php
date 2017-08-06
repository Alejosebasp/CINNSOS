<?php

    include ("seguridad.php");

    /*
     * Recoleccion de las variables previamente enviadas por el formulario HTML (Metodo POST)
     */
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $carrera = $_POST['carrera'];
    $matricula = $_POST['matricula'];
    $correo = $_POST['correo'];
    $edad = $_POST['apellidos'];

    //TODO: mejorar y preguntar
    $campos = ["nombres","apellidos","carrera","matricula","correo","edad"];
    $posiblesCambios = [$nombres, $apellidos, $carrera, $matricula, $correo, $edad];

    include ('conexiones/login_bd.php');

    for($i = 0; $i < 6; $i++){
        if($posiblesCambios[$i] != ""){
            $sentencia = "update usuario set '$campos[$i]' = '$posiblesCambios[$i]'";//TODO: revisar
        }
    }


    include ('conexiones/logout_bd.php');