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
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- scrool reveal api-->

  <script src="https://unpkg.com/scrollreveal"></script>
  <title>Agriculture Information Management System | AIMS </title>
</head>
<body>
<!-- header begins -->
@include('layouts.header')
<!--header end-->

<!-- nav bar begins -->
@include('layouts.navbar')
<!-- nav bar ends -->
<div class="container">
    <h1>District Summary Cultivation Data for Crop Category</h1>
    <div class="input-group-prepend">
    <form method="POST" action="{{ route('graph.load') }}">
                               @csrf
                                <div class="row" >
                                    <div class="input-group-prepend col-md-3 ml-5">
                                       <!-- <label class="input-group-text" for="selectDistrict" style="width:90px;">District</label>-->
                                    </div>
                                    <select class="custom-select col-md-3" id="selectDistrict" name="district" required>
        
                                        @if($district != null)
                                        
                                        @foreach ($district as $item)
                                            <option value="{{$item->id}}"> {{$item->name}}</option>
                                        @endforeach
        
                                        @endif
        
                                    </select>    
     </form>  
     </div>                             
    <!--</div>
         <select class="col-sm-3 custom-select" id="selectDistrict" name="district" required>
            <option selected value="none">Select District...</option>
            <option>Western</option>
            <option>Central</option>
            <option>North-Western</option>
         </select>-->
    <div class ="card-body">
        <canvas id="cropCategoryChart" width="500" height="200"></canvas>
    </div>
</div>
<!-- footer begins -->
@include('layouts.footer')
<!-- footer ends -->
  </div>
  </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <!--<script>
  new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Vegitables", "Paddy", "Leafy-Vegitables", "Root & Tubes", "Fruits", "Other Field Crops"],
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
      title: {
        display: true,
        text: 'Crop Category Cultivation Extend per Districts'
      }
    }
});
</script>-->
<script>
    var category = {!! json_encode($categoryAmount)!!};
    console.log(category);
    var densityData = {
    label: 'Land cultivated in the specified time',
    data: category,
    };

    console.log(densityData);

    var barChart = new Chart(cropCategoryChart, {
        type: 'bar',
        data: {
            labels: {!! json_encode($cropCategory) !!},
            datasets: [densityData]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }

    });
</script>
</html>