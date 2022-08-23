<?php 
/* 
    El simbolo de dolar en php significa que se esta declarando una variable. 
*/

    function AbrirDB(){
        $databaseName = 'Chat_Proyecto'; 
        return mysqli_connect('127.0.0.1:3306','root','',$databaseName); 
    }

    function CerrarDB($instancia){
        mysqli_close($instancia);
    }

?>