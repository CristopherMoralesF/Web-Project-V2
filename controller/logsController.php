<?php

include_once '../model/logs.php';

function cargarLogsController(){

    $listaLogs = cargarLogsModel(); 

    while ($log = mysqli_fetch_array($listaLogs)){

        echo "<tr>";
        echo "<td>" . $log["EXECUTOR"] . "</td>";
        echo "<td>" . $log["LOG_DESCRIPTION"] . "</td>";
        echo "<td class='text-center'>" . $log["LOG_TYPE"] . "</td>";
        echo "<td class='text-center'>" . $log["FECHA"] . "</td>";
        echo "</tr>";

    }
}

?>