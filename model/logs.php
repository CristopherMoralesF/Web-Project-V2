<?php 
    include 'conexion.php'; 

    function cargarLogsModel(){

        $instancia = AbrirDB();
        $listaLogs = $instancia -> query("CALL VER_LOGS();");
        CerrarDB($instancia);  
    
        return $listaLogs;
    }

?>