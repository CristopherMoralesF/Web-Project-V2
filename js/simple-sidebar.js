$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });

  var urlServicio = RetornarUrlServicio();
  var tabla = document.getElementById("tDatos");




function CargarInformacion(resultado, indicador)
{
  if(indicador == true)
  {
    $("#txtNombre").val(resultado.precio);
  }
  else
  {
    $("#txtNombre").val("");
  }
}
