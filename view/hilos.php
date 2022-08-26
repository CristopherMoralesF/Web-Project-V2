<?php 
  include_once 'componentes.php';
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

    <style>
    .oscurecer-img {
        filter: brightness(25%);
        height: 500px
    }
    </style>

</head>

<body>

    <div class="d-flex" id="wrapper">

        <?php MostrarMenu();?>
        <?php MostrarNav();?>

        <div class="container-fluid">

            <h2 class="text-secondary" style="padding: 15px"> Visitadas Frecuentemente </h2>
            <div id="Frecuentes" style="width: 1000px; padding: 50px; margin-left: auto; margin-right: auto">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 oscurecer-img" src="..\componentes\img\Hilos - Peliculas.jpg"
                                alt="First slide">
                            <div class="carousel-caption">
                                <h3>Peliculas</h3>
                                <a href="../view/hilos_feed.php?FeedID=1" class="btn btn-secondary" style='margin: 10px'>Entrar</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 oscurecer-img" src="..\componentes\img\Hilos - Musica.jpg"
                                alt="Second slide">
                            <div class="carousel-caption">
                                <h3>Musica</h3>
                                <a href="../view/hilos_feed.php?FeedID=2" class="btn btn-secondary" style='margin: 10px'>Entrar</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 oscurecer-img" src="..\componentes\img\Hilos - Videojuegos.jpg"
                                alt="Third slide">
                            <div class="carousel-caption">
                                <h3>Videojuegos</h3>
                                <a href="../view/hilos_feed.php?FeedID=3" class="btn btn-secondary" style='margin: 10px'>Entrar</a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>



            <h2 class="text-secondary" style="padding: 15px"> Otras categorias de Interes </h2>
            <div id="Frecuentes" style="width: 1000px; padding: 50px; margin-left: auto; margin-right: auto">

                <div id="caruselCategoriaOtras" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img class="d-block w-100 oscurecer-img" id = 1 src="..\componentes\img\Hilos - Mascotas.jpg"
                                alt="First slide">
                            <div class="carousel-caption">
                                <h3>Mascotas</h3>
                                <a href="../view/hilos_feed.php?FeedID=9" class="btn btn-secondary" style='margin: 10px'>Entrar</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100 oscurecer-img" src="..\componentes\img\Hilos - Comida.jpg"
                                alt="Second slide">
                            <div class="carousel-caption">
                                <h3>Comida</h3>
                                <a href="../view/hilos_feed.php?FeedID=4" class="btn btn-secondary" style='margin: 10px'>Entrar</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100 oscurecer-img" src="..\componentes\img\Hilos - Jardineria.jpg"
                                alt="Third slide">
                            <div class="carousel-caption">
                                <h3>Jardineria</h3>
                                <a href="../view/hilos_feed.php?FeedID=5" class="btn btn-secondary" style='margin: 10px'>Entrar</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100 oscurecer-img" src="..\componentes\img\Hilos - Viajes.jpg"
                                alt="Third slide">
                            <div class="carousel-caption">
                                <h3>Viajes</h3>
                                <a href="../view/hilos_feed.php?FeedID=6" class="btn btn-secondary" style='margin: 10px'>Entrar</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100 oscurecer-img" src="..\componentes\img\Hilos - Economia.jpg"
                                alt="Third slide">
                            <div class="carousel-caption">
                                <h3>Economia</h3>
                                <a href="../view/hilos_feed.php?FeedID=7" class="btn btn-secondary" style='margin: 10px'>Entrar</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100 oscurecer-img" src="..\componentes\img\Hilos - Ciencia.jpg"
                                alt="Third slide">
                            <div class="carousel-caption">
                                <h3>Ciencia</h3>
                                <a href="../view/hilos_feed.php?FeedID=8" class="btn btn-secondary" style='margin: 10px'>Entrar</a>
                            </div>
                        </div>
                        
                    </div>


                    <a class="carousel-control-prev" href="#caruselCategoriaOtras" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#caruselCategoriaOtras" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
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