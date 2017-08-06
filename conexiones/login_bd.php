<?php

    $dbserver="localhost";  // servidor
    $dbuser="root"; //usuario del servidor
    $dbpass="pass"; //contraseña de ese usuario
    $db="proyecto"; //base de datos a trabajar

    /*
     * Se ingresa al host con los datos anteriormente citados
     ** or die es si la funcion devuelve falso muestra el mensaje de error y mata el proceso
     */
    $conexion =mysqli_connect($dbserver, $dbuser,$dbpass, $db)
        or die ("Error al conectarse a la base de datos");
