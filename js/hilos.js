window.onload = checkUserStatus(); 

function checkUserStatus() {

    var userStatus = document.getElementById("TxtUserRole").value;

    if(userStatus != "Activo"){
        
        document.getElementById("formActive").style.display = "none";
        document.getElementById("formInactive").style.display = "inline";


    } else {

        document.getElementById("formActive").style.display = "inline";
        document.getElementById("formInactive").style.display = "none";

    }

}

function errroMessageStatus(){

    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Your user is inactive, you cannot add comments!',
        confirmButtonText: 'Ok!'
      }).then((result) => {

            if(result.isConfirmed){
                window.location.reload(true);
            }
      })


}