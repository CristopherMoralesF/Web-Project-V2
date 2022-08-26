<?php

include_once '../model/model-usuarios.php';
        
function ConsultarUsuariosController()
{ 


    $listaUsuarios = consultarUsuarios();
    $estado = ""; 
    $idUsuario = $_SESSION["IDuser"];

    while ($item = mysqli_fetch_array($listaUsuarios)) {

        //Show up only other users. 
        if($idUsuario != $item['ID_USUARIO']){

            if($item["ESTADO"] == 1) {
                $estado = "Activo";
            } else {
                $estado = "Inactivo";
            }

            echo "<tr>";
            echo "<td>" . $item["ID_USUARIO"] . "</td>";
            echo "<td>" . $item["NOMBRE_USUARIO"] . "</td>";
            echo "<td>" . $item["TIPO_ROLE"] . "</td>";
            echo "<td>" . $estado . "</td>";
            echo '<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter" onclick = "changeValues(this)">Actualizar</button>';
            echo '<input type="button" style = "margin-left: 15px;" class = "btn btn-info" onclick="deleteUserAdmin(' . $item["ID_USUARIO"] . ');" value="Eliminar" class="btn"></td>';
            echo "</tr>";

        }
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
        echo "<option value=" . $item["ID_ROLE"] . ">" . $item["TIPO_ROLE"] . "</option>";
    }
}

//Function to eliminate the user
if(isset($_POST['funcionEliminarUsuario'])) {

    $idUsuario = ""; 
    session_start();
    $executor = $_SESSION["NombreUsuario"]; 

    if(isset($_POST['idUsuario'])){
        $idUsuario = $_POST['idUsuario'];    
    } else {
        $idUsuario = $_SESSION["IDuser"];
    }

    eliminarUsuario($executor,$idUsuario);
}

//Function to update user information
if(isset($_POST['functionActualizarUsuario'])) {

    session_start();
    $idUsuario = ""; 
    $executor = $_SESSION["NombreUsuario"]; 

    //Validate from where the change is comming
    if(isset($_POST['idUsuario'])){
        $idUsuario = $_POST['idUsuario'];
    } else {
        
        $idUsuario = $_SESSION["IDuser"]; 
    }


    //Create all the variables
    $nombreUsuario = $_POST["userName"];
    $password = $_POST["password"];
    $role = $_POST["userRole"];
    $estado = $_POST["userStatus"];
    $passwordRequerido = $_POST["passwordRequired"];

    ActualizarUsuarioModel($executor,$idUsuario,$nombreUsuario,$password,$role,$estado,$passwordRequerido);

    if(isset($_POST['changeUserSessionInfo'])){
        //Change the session variables with the new values. 
        $_SESSION["NombreUsuario"] = $nombreUsuario;
        $_SESSION["RolUsuario"] = $role;
    }

}

//Option to create a new user
if(isset($_POST['userCreation']))
{
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    crearUsuario($userName, $password);
}

?>
