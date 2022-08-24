<?php

include_once '../model/model-usuarios.php';
include_once 'ComponentesController.php';

    if(isset($_POST['btnLogin']))
    {
        $cedula = $_POST["txtUsername"];
        $password = $_POST["txtPassword"];

        $usuario = ConsultarUsuario($cedula, $password);

        if($usuario -> num_rows > 0)
        {
            session_start();

            $item = mysqli_fetch_array($usuario);

            $_SESSION["NombreUsuario"] = $item["NOMBRE_USUARIO"];
            $_SESSION["RolUsuario"] = $item["TIPO_ROLE"];
            $_SESSION["FechaCreacion"] = $item["CDATE"];
            $_SESSION["IDuser"] = $item["ID_USUARIO"];

            //Validate the status of the user and save it in the session variable
            if($item["ESTADO"] == 1) {
                $_SESSION["EstadoUsuario"] = 'Activo';
            } else {
                $_SESSION["EstadoUsuario"] = 'Inactivo';
            }
            
            Header("Location: ../view/main.php");
        }       
    }

    if(isset($_POST['btnCerrarSesion']))
    {
        session_start();
        session_destroy();
        Header("Location: ../index.php");
    }

?>