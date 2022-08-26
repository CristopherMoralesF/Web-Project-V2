<?php 
  include 'componentes.php';
  include '../controller/UsuariosController.php';
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
                    <th>ID Usuario</th>
                    <th>Nombre Usuario</th>
                    <th>Role</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </thead>
                <tbody class="text-center">
                    <?php
                    ConsultarUsuariosController($IDuser);
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="idUsuario">ID Usuario</label>
                                <input type="text" class="form-control" id="idUsuario" name="idUsuario"
                                    aria-describedby="nombreUsuario" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nombreUsuario">Nombre Usuario</label>
                                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario"
                                    aria-describedby="nombreUsuario" readonly>
                            </div>

                            <div class="form-group" style = "display: none;">
                                <label for="passwordUsuario">Password</label>
                                <input type="text" class="form-control" id="passwordUsuario" name="passwordUsuario"
                                    aria-describedby="passwordUsuario" readonly>
                            </div>

                            <div class="form-group" style = "display: none;">
                                <label for="passwordConfirmation">Password Confirmation</label>
                                <input type="text" class="form-control" id="passwordConfirmation" name="passwordConfirmation"
                                    aria-describedby="passwordConfirmation" readonly>
                            </div>

                            <div class="form-group">
                                <label for="estadoUsuario">Rol Usuario</label>
                                <select name="estadoUsuario" id="estadoUsuario" class="form-control">
                                    <option value="0">Activo</option>
                                    <option value="1">Inactivo</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="roleUsuario">Estado Usuario</label>
                                <select name="roleUsuario" id="roleUsuario" class="form-control">
                                    <?php ConsultarRolesController();?>
                                </select>
                            </div>

                            <button type="button" class="btn btn-outline-info btnSize text-center"
                                onclick=actualizarUsuarioModal()>Guardar Cambios</button>

                        </form>
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
    <script src="../js/usuarios.js"></script>
    


</body>

</html>