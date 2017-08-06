<?php

    /*
     * Este archivo verifica que halla una sesion activa e indica que usuario es el que lo hizo
     */

    session_start();

    //COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
    if ($_SESSION["autentificado"] != "SI") {
        //si no existe, envio a la página de autentificacion
        header("Location: index.php");
        exit(); //Salida del script
    }

    //Esta variable se podra usar en los archivos que requieran saber cual el el usuario activo
    $UsuarioActivo = $_SESSION["usuario"];
