//Delete user from admin table
function deleteUserAdmin($userID){

    $dataBody = {
      'funcionEliminarUsuario': 'funcionEliminarUsuario',
      'idUsuario': $userID
    };

    deleteUserConfirmation($dataBody,false);

}

//Delete user from user settings. 
function deleteUser(){
    
    $dataBody = {
      'funcionEliminarUsuario': 'funcionEliminarUsuario'
    };

    deleteUserConfirmation($dataBody,true);
}

function deleteUserConfirmation($dataBody,$logout){

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {

        if (result.isConfirmed) {

            //if user confirm, perform an AJAX request to the server, to delete the user.
            $.ajax({
                type: 'POST',
                url: '../controller/UsuariosController.php',
                data: $dataBody, 
                success: function (data){

                    if($logout) {

                        Swal.fire({
                          title: 'Deleted!',
                          text: "Your user has been deleted!",
                          footer:"You will be logout soon",
                          icon: 'success',
                          confirmButtonText: 'Ok!'
                        }).then((result) => {
                          if (result.isConfirmed) {
                            window.location.replace('http://localhost/view/log-in.php');
                          }
                        })

                    } else {

                      Swal.fire({
                          title: 'Deleted!',
                          text: "Your user has been deleted!",
                          icon: 'success',
                          confirmButtonText: 'Ok!'
                        }).then((result) => {
                          if (result.isConfirmed) {
                            window.location.reload(true);
                          }
                        })

                    }
                    
                }, error: function (){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                      })
                }
            })

        } else if (
          result.dismiss === Swal.DismissReason.cancel
        ) 
        
        {
          swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your user is safe :)',
            'error'
          )
        }
      })

}

function actualizarUsuario() {

    var userPassword = document.getElementById("passwordUsuario").value;
    var passwordConfirmation = document.getElementById("passwordConfirmation").value; 
    var userName = document.getElementById("nombreUsuario").value;
    var userRole = document.getElementById("roleUsuario").value;
    var userStatus = document.getElementById("estadoUsuario").value; 
    var passwordRequired;

    //It's not required that the user change the password, in case a change, the password and the confirmation
    //needs to match
    if(userPassword != passwordConfirmation) {

      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Your password is not matching with the confirmation!'
      })

      return

    }

    if (userName == "" || userName == null || userRole == "" || userRole == null || userStatus == "" || userStatus == null){
      
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'User information is pending to complete!'
      })

        return 

    }

    //Change the value of the userStatus variable to a boolean
    if(userStatus == "Activo"){
        userStatus = 1; 
    } else {
      userStatus = 0; 
    }

    //Validate if a change in the password is required
    if (userPassword == null || userPassword == "") {
        passwordRequired = 0; 
    } else {
        passwordRequired = 1; 
    }

    //Perform the AJAX request
    $.ajax({
      type: 'POST',
      url: '../controller/UsuariosController.php',
      data: {
        "functionActualizarUsuario": "functionActualizarUsuario",
        "userName": userName,
        "userRole": userRole,
        "userStatus": userStatus,
        "password":userPassword,
        "passwordRequired": passwordRequired,
        "changeUserSessionInfo":"changeUserSessionInfo"
      },
      success: function (data){

        Swal.fire({
          title: 'Updated!',
          text: "Your user has been updated!",
          icon: 'success',
          confirmButtonText: 'Ok!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.reload(true)
          }
        })

      }, error: function(data){
        alert("error");
      }

    })

}

/* --------- Modal to update users ---------*/
function changeValues(obj){
  
  var tabla = document.getElementById('tUsuarios');
  var posicion = obj.parentNode.parentNode.rowIndex; 
  var selectEstado = document.getElementById('estadoUsuario');
  var selectRole = document.getElementById('roleUsuario');

  let userID = tabla.rows[posicion].cells[0].innerHTML; 
  let userName = tabla.rows[posicion].cells[1].innerHTML; 
  let userRole = tabla.rows[posicion].cells[2].innerHTML; 
  let userEstado = tabla.rows[posicion].cells[3].innerHTML; 
  

  document.getElementById("idUsuario").value = userID; 
  document.getElementById("nombreUsuario").value = userName;

  //Set the default to the status dropdown
  for(var i, j = 0; i = selectEstado.options[j]; j++){
    if(i.innerHTML == userEstado){
      selectEstado.selectedIndex = j;
    }
  }

  //Set the default to the role dropdown
  for(var i, j = 0; i = selectRole.options[j]; j ++) {
    if(i.innerHTML == userRole){
      selectRole.selectedIndex = j; 
    }
  }

}

function actualizarUsuarioModal() {

  var selectEstado = document.getElementById('estadoUsuario');
  var selectRole = document.getElementById('roleUsuario');

  var userPassword = document.getElementById("passwordUsuario").value;
  var passwordConfirmation = document.getElementById("passwordConfirmation").value; 
  var userName = document.getElementById("nombreUsuario").value;
  var userRole = selectRole.options[selectRole.selectedIndex].text;
  var userStatus = selectEstado.options[selectEstado.selectedIndex].text;
  var userID = document.getElementById("idUsuario").value; 
  var passwordRequired;

  //It's not required that the user change the password, in case a change, the password and the confirmation
  //needs to match
  if(userPassword != passwordConfirmation) {

    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Your password is not matching with the confirmation!'
    })

    return

  }

  if (userName == "" || userName == null || userRole == "" || userRole == null || userStatus == "" || userStatus == null){
    
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'User information is pending to complete!'
    })

      return 

  }

  //Change the value of the userStatus variable to a boolean
  if(userStatus == "Activo"){
      userStatus = 1; 
  } else {
    userStatus = 0; 
  }

  //Validate if a change in the password is required
  if (userPassword == null || userPassword == "") {
      passwordRequired = 0; 
  } else {
      passwordRequired = 1; 
  }

  //Perform the AJAX request
  $.ajax({
    type: 'POST',
    url: '../controller/UsuariosController.php',
    data: {
      "functionActualizarUsuario": "functionActualizarUsuario",
      "userName": userName,
      "userRole": userRole,
      "userStatus": userStatus,
      "password":userPassword,
      "passwordRequired": passwordRequired,
      "idUsuario": userID
    },
    success: function (data){

      Swal.fire({
        title: 'Updated!',
        text: "Your user has been updated!",
        icon: 'success',
        confirmButtonText: 'Ok!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.reload(true)
        }
      })

    }, error: function(data){
      alert("error");
    }

  })

}