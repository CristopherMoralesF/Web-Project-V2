<?php

    function ValidarSesion()
    {
        if($_SESSION["NombreUsuario"] == null)
        {
            session_destroy();
            Header("Location: ../index.php");
        }
    }

?>