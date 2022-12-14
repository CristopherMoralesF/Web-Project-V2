<?php 
  include 'componentes.php';
  include '../controller/MensajesController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Start Bootstrap Template</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<style>
    td {
        justify-content: center;  
    }
</style>
<body>

    <div class="d-flex" id="wrapper">

        <?php MostrarMenu();?>
        <?php MostrarNav();?>
        <?php
        $IDuser = $_SESSION["IDuser"]
        ?>
        
        <div class="container-fluid">

            <h2 class="text-secondary" style="padding: 15px"> Mis Mensajes </h2>

            <?php
                    ConsultarMensajesController($IDuser);
            ?>
            
        </div>

    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="../vendor/sweetAlert/sweetAlert.js"></script>
    <script src="sweetalert2.all.min.js"></script>

    <script src="../js/simple-sidebar.js"></script>
    <script src="../js/mensajes.js"></script>


</body>

</html>