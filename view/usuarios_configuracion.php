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
    <link href="../css/simple-sidebar.css" rel="stylesheet">


</head>

<style>
.btnSize {
    width: 250px;
    height: 50px;
}

.divSize {
    height: 250px;
}
</style>

<body>

    <div class="d-flex" id="wrapper">

        <?php MostrarMenu();?>
        <?php MostrarNav();?>

        <?php
            //Bring use information to the screen
            $NombreUsuario = $_SESSION["NombreUsuario"];
            $RolUsuario = $_SESSION["RolUsuario"];
            $FechaC = $_SESSION["FechaCreacion"];
            $ConteoMensajes = TraerCantMensajesController($_SESSION["IDuser"]);
            $Estadousuario = $_SESSION["EstadoUsuario"];
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

                        <a href="../view/main.php" class="btn btn-secondary">Perfil</a>

                    </div>

                </div>

                <div class="col-9">

                    <div class="container d-flex align-items-center justify-content-center" style='margin-top: 75px'>

                        <form action="">
                            <div class="form-group">
                                <label for="nombreUsuario">Nombre Usuario</label>
                                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario"
                                    aria-describedby="nombreUsuario" value="<?php echo $NombreUsuario?>" requried>
                            </div>

                            <div class="form-group">
                                <label for="nombreUsuario">Rol Usuario</label>
                                <input type="email" class="form-control" id="roleUsuario" name="roleUsuario"
                                    aria-describedby="nombreUsuario" value="<?php echo $RolUsuario?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="estadoUsuario">Estado Usuario</label>
                                <input type="email" class="form-control" id="estadoUsuario" name="estadoUsuario"
                                    aria-describedby="estadoUsuario" value="<?php echo $Estadousuario?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="passwordUsuario">Contraseña</label>
                                <input type="password" class="form-control" id="passwordUsuario" name="passwordUsuario"
                                    aria-describedby="nombreUsuario" placeholder="Introduzca su contraseña">
                            </div>

                            <div class="form-group">
                                <label for="passwordUsuario">Confirme su contraseña</label>
                                <input type="password" class="form-control" id="passwordConfirmation"
                                    name="passwordConfirmation" aria-describedby="nombreUsuario"
                                    placeholder="Introduzca su contraseña nuevamente">
                            </div>

                            <button type="button" class="btn btn-outline-info btnSize"
                                onclick=actualizarUsuario()>Guardar Cambios</button>
                            <button type="button" class="btn btn-outline-info btnSize"
                                onclick="deleteUser()">Eliminar Cuenta</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../vendor/sweetAlert/sweetAlert.js"></script>
        <script src="sweetalert2.all.min.js"></script>
        <script src="../js/simple-sidebar.js"></script>
        <script src="../js/usuarios.js"></script>

</body>

</html>