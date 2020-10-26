<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8">

  <!--<meta name="viewport"
  content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <title>External Factors | Data Visualization</title>
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
<!-- header begins -->
@include('layouts.header')
<!--header end-->

<!-- nav bar begins -->
@include('layouts.navbar')
<!-- nav bar ends -->

<div class="row">
  <div class="col-2">
    @include('layouts.dataSummaryNav')
  </div>
  <div class="col-10">
    <div class="container">
      <br> 
        <h1>External Factors</h1>
    
        <div class ="card-body">
        <canvas id="bar-chart" width="500" height="200"></canvas>
        </div>
    
        </div>
  </div>
</div>

<!-- footer begins -->
@include('layouts.footer')
<!-- footer ends -->

  </div>
  </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <script>
  new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Insects Attacks", "Rainfalls", "Others"],
      datasets: [
        {
          label: "crops (Category)",
          backgroundColor: ["#0489B1", "#088A08","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          },
      title: {
        display: true,
        text: 'External Factor affected to land extend'
      }
    }
});
</script>
</html>