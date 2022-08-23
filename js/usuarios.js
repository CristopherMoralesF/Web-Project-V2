function deleteUserConfirmation(){

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
                data: {
                    'funcionEliminarUsuario': 'funcionEliminarUsuario'
                }, success: function (data){
                    
                    window.location.replace('http://localhost/view/log-in.php');
                    
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file user been deleted.',
                        'success'
                      )
                    
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
