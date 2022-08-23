<?php 
    include 'componentes.php';
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
                        <h3>Sign In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fa fa-ravelry"></i></span>
                            <span><i class="fa fa-superpowers"></i></span>
                            <span><i class="fa fa-space-shuttle"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
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
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn float-right login_btn" id="btnLogin" name="btnLogin">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Don't have an account?<a href="#">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../js/simple-sidebar.js"></script>
    </form>
</body>

</html>