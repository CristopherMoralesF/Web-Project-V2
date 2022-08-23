window.onload = loadCantidadPost(); 


function loadCantidadPost(){

    $.ajax({
      type: 'GET',
      url: '../controller/MensajesController.php',
      data: {
        'ResumenMensajes': 'ResumenMensajes'
      }, success: function(data){
          
          let list = $.parseJSON(data);

          
          let Months  = [];
          let Totals = [];

          for (var i = 0; i < list.length; i++){

              Months[i] = list[i]['Mensaje'];
              Totals[i] = list[i]['Total'];

          }

          drawChart(Months,Totals);
      
      }, error: function(data){
        alert("Error in the call of the number of messages")
      }
    })

}

function drawChart(labels, Monthsdata) {
  

  const data = {
      labels: labels,
      datasets: [{
          label: 'Cantidad de post',
          backgroundColor: '#009688',
          borderColor: '#32A89C',
          data: Monthsdata,
          pointStyle: 'circle',
          pointRadius: 10,
          pointHoverRadius: 15
      }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {
      maintainAspectRatio: false,
      responsive: true,
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },
      plugins: {
        title: {
          display: false
        }
      },
      
    }
  };

  const myChart = new Chart(
      document.getElementById('myChart'),
      config
  );

}