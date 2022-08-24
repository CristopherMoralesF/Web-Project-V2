<?php

include_once '../model/model-usuarios.php';
        
function ConsultarUsuariosController()
{ 
    $listaUsuarios = ConsultarUsuariosModel();
    while ($item = mysqli_fetch_array($listaUsuarios)) 
    {
        echo "<tr>";
        echo "<td>" . $item["Cedula"] . "</td>";
        echo "<td>" . $item["Nombre"] . "</td>";
        echo "<td>" . $item["Correo"] . "</td>";
        echo "<td>" . $item["NombreRol"] . "</td>";
        echo '<td><a class="btn" href="../View/ActualizarUsuarios.php?q=' . $item["Cedula"] .'">Actualizar</a> | ';
        echo '    <input type="button" onclick="Eliminar(' . $item["Cedula"] . ');" value="Eliminar" class="btn"></td>';
        echo "</tr>";
    }
}

function TraerUsuarioController($cedula)
{ 
    $Usuario = TraerUsuarioModel($cedula);
    $item = mysqli_fetch_array($Usuario);

    return $item;
}

function ConsultarRolesController()
{ 
    $listaRoles = ConsultarRolesModel();
    while ($item = mysqli_fetch_array($listaRoles)) 
    {
        echo "<option value=" . $item["IdRol"] . ">" . $item["NombreRol"] . "</option>";
    }
}

function CargarRolesUsuarioController($rolActual)
{ 
    $listaRoles = ConsultarRolesModel();
    while ($item = mysqli_fetch_array($listaRoles)) 
    {
        if($rolActual == $item["IdRol"])
        {
            echo "<option selected value=" . $item["IdRol"] . ">" . $item["NombreRol"] . "</option>";
        }
        else
        {
            echo "<option value=" . $item["IdRol"] . ">" . $item["NombreRol"] . "</option>";
        }
    }
}

//Function to eliminate the user
if(isset($_POST['funcionEliminarUsuario']))
{
    session_start();
    $cedula = $_SESSION["IDuser"];
    eliminarUsuario($cedula);
}

//Function to update user information
if(isset($_POST['functionActualizarUsuario'])) {

    session_start();
    $idUsuario = ""; 

    //Validate from where the change is comming
    if(isset($_POST['idUsuario'])){
        $idUsuario = $_POST['idUsuario'];
    } else {
        
        $idUsuario = $_SESSION["IDuser"]; 
    }


    //Create all the variables
    $nombreUsuario = $_POST["userName"];
    $password = $_POST["userPassword"];
    $role = $_POST["userRole"];
    $estado = $_POST["userStatus"];
    $passwordRequerido = $_POST["passwordRequired"];

    ActualizarUsuarioModel($idUsuario,$nombreUsuario,$password,$role,$estado,$passwordRequerido);

    //Change the session variables with the new values. 
    $_SESSION["NombreUsuario"] = $nombreUsuario;
    $_SESSION["RolUsuario"] = $role;

}

//Option to create a new user
if(isset($_POST['btnRegistrarUsuario']))
{
    $cedula = $_POST["txtIdentificacion"];
    $password = $_POST["txtPassword"];
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $rol = $_POST["txtRol"];

    RegistrarUsuarioModel($cedula, $password, $nombre, $correo, $rol);
    Header("Location: ../View/usuarios.php");
}

?>
