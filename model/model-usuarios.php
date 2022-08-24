<?php

    include 'conexion.php';

    //función para traer la información de todos los usuarios
    function ConsultarUsuario($Username, $password){ 

        $instancia = AbrirDB();
        $usuario = $instancia -> query("CALL CONSULTAR_USUARIO('$Username', '$password')");
        CerrarDB($instancia);  

        return $usuario;
    
    }

    function consultarUsurios(){

        try {
            
            $instancia = AbrirDB(); 
            $procedimiento = 'CALL VALIDATE_USUARIO;';
            $listaUsuarios = $instancia -> query($procedimiento);
            CerrarDB($instancia);

            return $listaUsuarios;

        } catch (Exception $ex) {

            echo 'Se genero un error al conectar con la base de datos';
        }

    }

    function eliminarUsuario($idUsuario){

        $instancia = AbrirDB(); 
        $eliminarUsuario = $instancia -> query("CALL ELIMINAR_USUARIO($idUsuario);");
        CerrarDB($instancia);
        
    }

    function ActualizarUsuarioModel($idUsuario,$nombreUsuario,$password,$role,$estado,$passwordRequerido){
        
        $instancia = AbrirDB(); 
        $eliminarUsuario = $instancia -> query("CALL ACTUALIZAR_USUARIO($idUsuario,'$nombreUsuario','$password','$role',$estado,$passwordRequerido); ");
        CerrarDB($instancia);
        
    }
    
?>