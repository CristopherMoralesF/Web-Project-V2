<?php 
    include_once 'componentes.php';
    include_once "../Controller/CasasController.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mantenimiento</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/simple-sidebar.css" rel="stylesheet">
    
</head>

<body style="background-image: url('../img/fondo.png')">
    <div class="d-flex" id="wrapper">
        <?php MostrarMenu();?>
        <?php MostrarNav();?>
        <div id="page-content-wrapper">
        <form action="" method="POST">
            <div class="container-fluid">

                <h2 class="text-secondary" style="padding: 15px"> Asignación de Vendedores </h2>
                <div class="row">

                            <div class="col-sm-6">
                                    <label><b>Casas</b></label>
                                    <select id="txtCasa" name="txtCasa" class="form-control" required select="consultarPrecio_AJAX();">  
                                    <?php
                                        Consulta_CasasSinV_ModelController();
                                    ?>
                                    </select>
                                    </div>
                            <div class="col-sm-6">
                                    <label><b>Vendedor</b></label>
                                    <input type="text" id="txtVendedor" name="txtVendedor" required Value="<?php ?>">
                            </div>      
                </div>
                <div class="row">
                    <div class="col-sm-6">
                            <label><b>Precio</b></label>
                            <input type="text" id="txtPrecio" name="txtPrecio">
                    </div> 
                </div>
                <input type="submit" name="btnActualizar" Value="Asignar" class="btn btn-info">
            </div>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../simple-sidebar.js"></script>
    </form>
</body>

</html>



