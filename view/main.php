<?php 
  include_once 'componentes.php';
  include_once '../controller/MensajesController.php';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/simple-sidebar.css" rel="stylesheet">


</head>

<body>

    <div class="d-flex" id="wrapper">

        <?php MostrarMenu();?>
        <?php MostrarNav();?>
        <?php
        $NombreUsuario = $_SESSION["NombreUsuario"];
        $RolUsuario = $_SESSION["RolUsuario"];
        $FechaC = $_SESSION["FechaCreacion"];
        $statusUsuario = $_SESSION["EstadoUsuario"];
        $ConteoMensajes = TraerCantMensajesController($_SESSION["IDuser"]);
        ?>
        <div class="container-fluid">
            <br>
            <div class="row">

                <div class="col-3" style='margin-top: auto; margin-bottom: auto; padding-top: 8px'>

                    <div class="container-fluid"
                        style="background-color: #ececec; border-radius: 25px; height: 800px;  text-align: center;">

                        <h2 style='padding: 15px'>Perfil</h2>

                        <picture>
                            <source srcset="../componentes/img/sample_profile.jpg" type="image/svg+xml">
                            <img src="../componentes/img/sample_profile.jpg" class="img-circle" alt="profile"
                                style="height: 150px; width: 150px; border-radius: 50%">
                        </picture>

                        <p style='padding: 25px'>
                            <b>Nombre de Usuario:</b><br><?php {echo $NombreUsuario;} ?><br><br>
                            <b>Tipo de Accesso:</b><br><?php  {echo $RolUsuario;}?><br>
                        </p>

                        <a href="../view/usuarios_configuracion.php" class="btn btn-secondary">Configuración</a>
                    </div>

                </div>

                <div class="col-9">

                    <div class="row">

                        <div class="col-4">
                            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Inicio</div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td><i class="fa fa-clock-o fa-2x" style="display: inline;"></i></td>
                                            <td style="padding-left: 10px">
                                            <p class="card-text">Usuario activo desde:<br><?php {echo $FechaC;}?></p>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Role</div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td><i class="fa fa-user fa-2x" style="display: inline;"></i></td>
                                            <td style="padding-left: 10px">
                                                <p class="card-text">El usuario esta <br> <?php  {echo $statusUsuario ;}?></p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Cantidad Mensajes enviados:</div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td><i class="fa fa-commenting fa-2x" style="display: inline;"></i></td>
                                            <td style="padding-left: 10px">
                                                <p class="card-text">El usuario ha posteado un total de <?php {echo $ConteoMensajes;}?> mensajes
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>

                    <div class="row" style="width: 100%; height: 600px">
                        </>
                        <canvas id="myChart" canvas>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/simple-sidebar.js"></script>
    <script src="..\vendor\chartJS\charts.js"></script>
    <script src="..\js\charts.js"></script>

</body>

</html>