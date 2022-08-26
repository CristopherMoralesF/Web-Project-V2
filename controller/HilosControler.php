<?php

include_once '../model/Hilos.php';
include_once 'ComponentesController.php';


function ConsultarMensajesPorHiloController($IDHilo)
{ 
    
    $listaMensajes = ConsultarMensajesPorHiloModel($IDHilo);
    while ($item = mysqli_fetch_array($listaMensajes)) {
        

        echo "<tr>";
        echo '<td style = "width: 300px"><div class="bg-white border mt-2">
                <div>
                    <div
                        class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
                        <div class="d-flex flex-row align-items-center feed-text px-2">
                            <img class="rounded-circle" src="https://i.imgur.com/aoKusnD.jpg" width="45">
                            <div class="d-flex flex-column flex-wrap ml-2">
                                <span class="font-weight-bold">' . $item["NOMBRE_USUARIO"] . '</span>
                                <span class="text-black-50 time">' . $item["FECHA"] . '</span>
                            </div>
                        </div>
                        <div class="feed-icon px-2"><i class="fa fa-ellipsis-v text-black-50"></i>
                        </div>
                    </div>
                </div>
                <div class="p-2 px-3">
                    <span>' . $item["MENSAJE"] . '</span>
                </div>
                <div class="d-flex justify-content-end socials p-2 py-3">
            </div> </td>';
        echo "</tr>";
    }
}

if(isset($_POST['btnGuardarComentario']))
{    
    $Mensaje = $_POST["TxtMensaje"];
    $IdUsuario = $_POST["TxtIDuser"];
    $IdHilo = $_POST["TxtIDFeed"];
    
    session_start(); 
    $executor = $_SESSION["NombreUsuario"]; 

    CrearMensajeModel($executor,$Mensaje, $IdUsuario, $IdHilo);
    header('Location: '.$_SERVER['REQUEST_URI']);

}


?>