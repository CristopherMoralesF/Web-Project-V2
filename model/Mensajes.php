<?php 
    include 'conexion.php'; 

    function ContarMensajes($IDusuario){
        $instancia = AbrirDB();
        $Conteo = $instancia -> query("CALL TOTAL_MENSAJES_USUARIOS('$IDusuario')");
        CerrarDB($instancia);  
    
        return $Conteo;
    }
    
    function ConsultarMensajesModel($IDusuario){

        $instancia = AbrirDB();
        $Mensajes = $instancia -> query("CALL VER_MENSAJES('$IDusuario')");
        CerrarDB($instancia);  
    
        return $Mensajes;
    
    }

    function ResumenMensajesModel($IDusuario){
    
        $instancia = AbrirDB();
        $Mensajes = $instancia -> query("CALL COUNT_MENSAJES_USUARIOS($IDusuario)");
        CerrarDB($instancia);  
    
        return $Mensajes;

    }
    


?>