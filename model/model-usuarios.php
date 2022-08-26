<?php

    include 'conexion.php';

    //función para traer la información de todos los usuarios
    function ConsultarUsuario($Username, $password){ 

        $instancia = AbrirDB();
        $usuario = $instancia -> query("CALL CONSULTAR_USUARIO('$Username', '$password')");
        CerrarDB($instancia);  

        return $usuario;
    
    }

    function crearUsuario($Username, $password){

        $instancia = AbrirDB();
        $usuario = $instancia -> query("CALL CREAR_USUARIO ('$Username','$password');");
        CerrarDB($instancia); 
    
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

    function eliminarUsuario($executor, $idUsuario){

        $instancia = AbrirDB(); 
        $eliminarUsuario = $instancia -> query("CALL ELIMINAR_USUARIO('$executor',$idUsuario);");
        CerrarDB($instancia);
        
    }

    function ActualizarUsuarioModel($executor,$idUsuario,$nombreUsuario,$password,$role,$estado,$passwordRequerido){
        
        $instancia = AbrirDB(); 
        $eliminarUsuario = $instancia -> query("CALL ACTUALIZAR_USUARIO('$executor',$idUsuario,'$nombreUsuario','$password','$role',$estado,$passwordRequerido); ");
        CerrarDB($instancia);
        
    }

    function consultarUsuarios(){

        $instancia = AbrirDB(); 
        $listaUsuarios = $instancia -> query("CALL VER_USUARIOS();");
        CerrarDB($instancia);

        return $listaUsuarios; 

    }

    function ConsultarRolesModel(){

        $instancia = AbrirDB(); 
        $listaRoles = $instancia -> query("CALL CONSULTAR_ROLES();");
        CerrarDB($instancia);

        return $listaRoles; 

    }
    
?>