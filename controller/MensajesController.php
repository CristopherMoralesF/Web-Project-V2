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

        echo '<div class="card" style = "margin: 25px">
                <div class="card-header bg-dark text-white">
                    <a class="btn btn-info" style = "margin-right: 10px" onclick = "deleteMessage('. $item["ID_COMENTARIO"] . ')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    <div class="alert alert-info" role="alert" style = "display: inline; margin-right: 10px;">
                        '. $item["NOMBRE_HILO"]. '
                    </div> 
                </div>
                <div class="card-body">
                    <p class="card-text">'. $item["MENSAJE"]. '</p>
                    <div class="d-flex justify-content-center">
                    
                    </div>
                </div>
            </div>';

    }
}

function ConsultarTotalMensajesController($IDusuario)
{ 
    $listaMensajes = ConsultarTotalMensajesModel($IDusuario);
    while ($item = mysqli_fetch_array($listaMensajes)) 
    {

        echo '<div class="card" style = "margin: 25px">
                <div class="card-header bg-dark text-white">
                    <a class="btn btn-info" style = "margin-right: 10px" onclick = "deleteMessage('. $item["ID_COMENTARIO"] . ')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    <div class="alert alert-info" role="alert" style = "display: inline; margin-right: 10px;">
                        '. $item["NOMBRE_USUARIO"]. '
                    </div>
                    <div class="alert alert-info" role="alert" style = "display: inline; margin-right: 10px;">
                        '. $item["NOMBRE_HILO"]. '
                    </div> 
                </div>
                <div class="card-body">
                    <p class="card-text">'. $item["MENSAJE"]. '</p>
                    <div class="d-flex justify-content-center">
                    
                    </div>
                </div>
            </div>';

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

//Delete the message from the user list. 
if(isset($_POST['functionEliminarMensaje'])){

    session_start(); 
    $executor = $_SESSION["NombreUsuario"];  

    $idComentario = $_POST['idComentario'];
    eliminarMensajeModel($executor,$idComentario);

}

?>