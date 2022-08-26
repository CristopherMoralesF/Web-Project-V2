<?php 
  include_once 'componentes.php';
  include_once '../controller/HilosControler.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chat</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/simple-sidebar.css" rel="stylesheet">
    <link href="../css/hilos_feed.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div class="d-flex" id="wrapper">
        <?php $FeedID = $_GET['FeedID'];?>
        <?php MostrarMenu();?>
        <?php MostrarNav();?>
        <?php
        $UserID = $_SESSION["IDuser"];
        $UserRole = $_SESSION["EstadoUsuario"];
        ?>
        <div class="container-fluid">

            <div class="container mt-4 mb-5">
                <div class="d-flex justify-content-center row">

                    <div class="col-md-8">

                        <div class="feed p-2">

                            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white border">

                                <div class="feed-text px-2" id = "formActive">
                                    <form action="" method="POST">

                                        <div class="row">
                                            <div class="col-10">
                                                <textarea name="TxtMensaje" id="TxtMensaje" cols="80" rows="3"
                                                    placeholder='Qué piensas?' class='form-control' required></textarea>
                                                <input type="hidden" name="TxtIDuser" id="TxtIDuser" cols="80" rows="3"
                                                    value=<?php {echo $UserID;}?>>
                                                <input type="hidden" name="TxtIDFeed" id="TxtIDuser" cols="80" rows="3"
                                                    value=<?php {echo $FeedID;}?>>
                                                <input type="hidden" name="TxtUserRole" id="TxtUserRole" cols="80"
                                                    rows="3" value=<?php {echo $UserRole;}?>>
                                            </div>
                                            <div class="col-2">

                                                <button class='btn btn-primary' id='btnGuardarComentario'
                                                    name='btnGuardarComentario' style="margin-top: 25px;"><i
                                                        class="fa fa-space-shuttle text-white-50"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                                <div class="feed-text px-2" id ="formInactive">

                                        <div class="row">
                                            <div class="col-10">
                                                <textarea name="TxtMensaje" id="TxtMensaje" cols="80" rows="3"
                                                    placeholder='Ooop! Tu usuario esta bloqueado, no puedes comentar' class='form-control' readOnly></textarea>
                                                <input type="hidden" name="TxtIDuser" id="TxtIDuser" cols="80" rows="3"
                                                    value=<?php {echo $UserID;}?>>
                                                <input type="hidden" name="TxtIDFeed" id="TxtIDuser" cols="80" rows="3"
                                                    value=<?php {echo $FeedID;}?>>
                                                <input type="hidden" name="TxtUserRole" id="TxtUserRole" cols="80"
                                                    rows="3" value=<?php {echo $UserRole;}?>>
                                            </div>
                                            <div class="col-2">

                                                <button class='btn btn-danger' id='btnBloqueado' name='btnBloqueado'
                                                    style="margin-top: 25px;"><i class="fa fa-times text-white-50"
                                                        onclick="errroMessageStatus();"></i></button>
                                            </div>
                                        </div>
                           
                                </div>

                            </div>
                            <table id="tMensajes" class="table">
                                <thead>
                                </thead>
                                <tbody>
                                    <?php
                                        ConsultarMensajesPorHiloController($FeedID);
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/simple-sidebar.js"></script>
    <script src="../vendor/sweetAlert/sweetAlert.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="../js/hilos.js"></script>


</body>

</html>