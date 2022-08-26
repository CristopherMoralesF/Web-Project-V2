<?php 
    include_once 'componentes.php';
    include_once '../controller/LoginController.php'; 
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log in</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/simple-sidebar.css" rel="stylesheet">
    <link href="../css/log-in.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign Up</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fa fa-ravelry"></i></span>
                            <span><i class="fa fa-superpowers"></i></span>
                            <span><i class="fa fa-space-shuttle"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user fa-2x"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="username" id="txtUsername" name="txtUsername">
                            </div>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key fa-2x"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="password" id="txtPassword" name="txtPassword">
                            </div>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key fa-2x"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="password confirmation" id="txtPasswordConfirmation" name="txtPasswordConfirmation">
                            </div>
                        
                        </form>

                        <div class="form-group">
                                <input type="submit" value="Create" class="btn login_btn" id="btnCrear" name="btnCrear" onclick = "crearUsuario();">
                            </div>
                            
                        <p id = "errorMessage" class = "text-danger"></p>

                    </div>
                </div>
            </div>
        </div>

        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../vendor/sweetAlert/sweetAlert.js"></script>
        <script src="sweetalert2.all.min.js"></script>
        <script src="../js/createUser.js"></script>

    </form>
</body>

</html>