function deleteMessage($idComentario){

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      });

    
    swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    }).then((result) => {

        if(result.isConfirmed){
            $.ajax({
                type: 'POST',
                url: '../controller/MensajesController.php',
                data: {
                    'functionEliminarMensaje':'functionEliminarMensaje', 
                    'idComentario': $idComentario
                }, success: function(data){
        
                    Swal.fire({
                        title: 'Deleted!',
                        text: "Your message has been deleted!",
                        icon: 'success',
                        confirmButtonText: 'Ok!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                          window.location.reload(true);
                        }
                      })
        
                }, error: function () {
        
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
              'Your message is safe :)',
              'error'
            )
        }

    })

}

function activateDeactivateFilter(){

  $filterContainerStatus = document.getElementById("filter").style.display; 

  if($filterContainerStatus == 'none'){

    document.getElementById("filter").style.display = ""; 

  } else {
    document.getElementById("filter").style.display = "none"; 
  }

}