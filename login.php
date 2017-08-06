<?php

    /*
     * Recoleccion de las variables previamente enviadas por el formulario HTML (Metodo POST)
     */

    //TODO: Con que datos se iniciara sesion?, por ahora correo y documento

    $documento = $_POST['documento'];
    $correo = $_POST['correo'];


    include ('conexiones/login_bd.php');

    /*
     * Confirmacion de los datos de conexion
     */
    $UsuarioExiste = "select * from usuario where documento='$documento' and correo='$correo'";
    $ConsultaUsuario = mysqli_query($conexion,$UsuarioExiste)
        or die ("Error al ejecutar la consulta");
    $filas = mysqli_num_rows($ConsultaUsuario);

    /*
     * Decisionea a partir de la existencia o no del usuario
     */
    if($filas==1){
        session_start();
        $_SESSION["usuario"] = $documento;
        $_SESSION["autentificado"] = "SI";
        header ("Location: ../home.php");//TODO: a que direccion redirigir??
    }else{
        header("Location: ../index.php?errorusuario=si");
        //TODO: dar un mensaje de error de autentificacion
    }

    include ('conexiones/logout_bd.php');
