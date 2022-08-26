<?php 
    include 'conexion.php'; 

    function ConsultarMensajesPorHiloModel($IDusuario){

        $instancia = AbrirDB();
        $Mensajes = $instancia -> query("CALL CONSULTAR_MENSAJES_HILO('$IDusuario')");
        CerrarDB($instancia);  
    
        return $Mensajes;
    }
    
    function CrearMensajeModel($executor, $Mensaje, $IdUsuario, $IdHilo){

        $instancia = AbrirDB();
        $Mensajes = $instancia -> query("CALL CREAR_MENSAJE('$executor',$IdUsuario, $IdHilo, '$Mensaje')");
        CerrarDB($instancia);  
    }

?>