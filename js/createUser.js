function crearUsuario() {

    var userPassword = document.getElementById("txtPassword").value
    var passwordConfirmation = document.getElementById("txtPasswordConfirmation").value
    var userName = document.getElementById("txtUsername").value

    if(userPassword == null || userPassword == "" || passwordConfirmation == null || passwordConfirmation == ""
        |userName == null || userName == "") {
        
        document.getElementById("errorMessage").innerHTML = "Pending Information";
        return;

    }

    if(userPassword != passwordConfirmation) {
        
        document.getElementById("errorMessage").innerHTML = "Password mistmatch";
        return;

    }

    $.ajax({
        type: 'POST',
        url: '../controller/UsuariosController.php',
        data: {
            "userName": userName,
            "password": userPassword, 
            "userCreation":"userCreation"
        }, success: function (data){
            window.location.replace('http://localhost/view/log-in.php');
        }, error: function(data){

            document.getElementById("errorMessage").innerHTML = "error during user creation";

        }
    })



}