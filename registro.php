<?php

    /*
     * Recoleccion de las variables previamente enviadas por el formulario HTML (Metodo POST)
     */
    $documento = $_POST['documento'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $carrera = $_POST['carrera'];
    $matricula = $_POST['matricula'];
    $correo = $_POST['correo'];
    $edad = $_POST['apellidos'];

    include("conexiones/login_bd.php");

    /*
     * Se buscan todos los registros para evitar cuentas repetidas
     */
    $userrepetido = "select * from usuario where documento='$documento'";
    $busquedauser = mysqli_query($conexion,$userrepetido) or die("Error al ejecutar la consulta");
    $validacionuser = mysqli_num_rows($busquedauser);


    /*
     * Acciona tomar segun la cantidad de registros con la misma cedula [1 o 0]
     */
    if($validacionuser == 0){
        $registro = "insert into usuario values(
          '$documento','$nombres','$apellidos','$carrera','$matricula','$correo','$edad')";
        $ingresodatos = mysqli_query ($conexion,$registro);
        echo "";//TODO: Mostrar la pagina de "Se ha enviado un email de verificacion"
    }else{
        echo "";//TODO: Mostrar la pagina de "EL usuario registrado con ese documento ya existe"
    }

    include("conexiones/logout_bd.php");