<?php

    /*
     * Este archivo toma la sesion previamente creada,, la destruye y redirecciona al inicio
     */
    session_start();
    session_destroy();
    error_reporting(0);
    header ("Location: index.php");
