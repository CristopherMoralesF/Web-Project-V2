<?php

include_once '../model/Mensajes.php';
include_once 'ComponentesController.php';


function TraerCantMensajesController($IDusuario)
{ 
    $Mensajes = ContarMensajes($IDusuario);
    $item = mysqli_fetch_array($Mensajes);

    $ContMensajes = $item["CANTIDAD_MENSAJES"];

    return $ContMensajes;
}

function ConsultarMensajesController($IDusuario)
{ 
    $listaMensajes = ConsultarMensajesModel($IDusuario);
    while ($item = mysqli_fetch_array($listaMensajes)) 
    {
        echo "<tr>";
        echo '<td style = "width: 300px"><div class="alert alert-primary" style = "width: 300px" role="alert">' . $item["NOMBRE_HILO"]."</div> </td>";
        echo '<td style = "width: 300px"><div class="alert alert-info" role="alert">' . $item["MENSAJE"]."</div> </td>";
        echo "</tr>";
    }
}

//Validate if the ajax request has perform to recover the resume of the users
if(isset($_GET['ResumenMensajes'])){

    session_start(); 

    $idUsuario = $_SESSION["IDuser"];
    $listaMensajes = ResumenMensajesModel($idUsuario); 
    $i = 0; 
    
    //Load the messages and create an array list. 
    while ($mensaje = mysqli_fetch_array($listaMensajes)){

        $listaCompleta[$i]['Mensaje'] = $mensaje['MESSAGE_MONTH'];
        $listaCompleta[$i]['Total'] = $mensaje['TOTAL_MESSAGES'];
        $i = $i + 1;
        
    }
    
    //Conver the list to JSON and return it to the JS file. 
    echo (json_encode($listaCompleta));

}


?>