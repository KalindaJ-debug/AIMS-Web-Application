<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
  <title>District Summary Cultivation Data for Crop Category</title>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <title>Agriculture Information Management System | AIMS </title>
</head>
<body>
<!-- header begins -->
@include('layouts.header')
<!--header end-->

<!-- nav bar begins -->
@include('layouts.navbar')
<!-- nav bar ends -->

<div class="row container-fluid">
    <div class="col-2 container-fluid">
        @include('layouts.dataSummaryNav')
    </div>
    <div class="col-10">
        {{-- container begins  --}}
<div class="container">
    <br>
    <h1>District Summary Cultivation Data for Crop Category</h1>
    <br> <br>
    <div class="input-group-prepend">
    <form method="POST" action="{{ route('graph.load') }}">
                               @csrf
                                <div class="row" >
                                    <div class="input-group-prepend col-md-3 ml-5">
                                       <!-- <label class="input-group-text" for="selectDistrict" style="width:90px;">District</label>-->
                                    </div>
                                    <select class="custom-select col-md-8" id="selectDistrict" name="district" required>
        
                                        @if($district != null)
                                        
                                        @foreach ($district as $item)
                                            <option value="{{$item->id}}"> {{$item->name}}</option>
                                        @endforeach
        
                                        @endif
        
                                    </select> 
                                </div>   
     </form>  
     </div>                             
    
    <div class ="card-body">
        <canvas id="cropCategoryChart" width="500" height="200"></canvas>
    </div>
</div>
{{-- container ends  --}}

    </div>
</div>
  <!-- footer begins -->
  @include('layouts.footer')
<!-- footer ends -->
  </body>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  
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
        }
    });
</script>
</html>