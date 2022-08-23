<?php

    function MostrarMenu(){

    echo '
        <div class="bg-secondary border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-white">Virtual Chat </div>
                <div class="list-group list-group-flush">
                    <a href="main.php" class="list-group-item list-group-item-action bg-secondary text-light">Usuario</a>
                    <a href="hilos.php" class="list-group-item list-group-item-action bg-secondary text-light">Hilos</a>
                    <a href="misMensajes.php" class="list-group-item list-group-item-action bg-secondary text-light">Mis Mensajes</a>
                    <a href="#" class="list-group-item list-group-item-action bg-secondary text-light">About</a>
                </div>
        </div>
    ';

    }    
?>

<?php

    function MostrarNav(){
        echo '
        <div id="page-content-wrapper">
    
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
            <button class="btn btn-info" id="menu-toggle">Virtual Chat</button>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" style = "color:white" href="../index.php">Salir</a>
                </li>
              </ul>
            </div>
          </nav>
        ';
    }

?>