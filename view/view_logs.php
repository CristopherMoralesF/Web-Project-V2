<?php 
  include 'componentes.php';
  include '../controller/logsController.php';
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

</head>

<body>

    <div class="d-flex" id="wrapper">

        <?php MostrarMenu();?>
        <?php MostrarNav();?>
        <?php
        $IDuser = $_SESSION["IDuser"]
        ?>



        <h2 class="text-secondary" style="padding: 15px"> Administración de usuarios </h2>

        <div class="container-fluid">

            <table id="tUsuarios" class="table">
                <thead class="text-center bg-dark text-white">
                    <th>Usuario</th>
                    <th>Descripción</th>
                    <th>Typo</th>
                    <th>Fecha</th>
                </thead>
                <tbody>
                    <?php
                    cargarLogsController($IDuser);
                    ?>
                </tbody>
            </table>
        </div>

    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/simple-sidebar.js"></script>
    <script src="../vendor/sweetAlert/sweetAlert.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="../js/usuarios.js"></script>
    


</body>

</html>