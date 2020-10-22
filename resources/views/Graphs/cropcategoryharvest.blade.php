<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="assets/css/dataSummaryStyle.css">
    <script src="assets/js/dataSummaryScript.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    
    

    <title>Data Summary | AIMS</title>
</head>
<body class="white-bg-color" >
    <!-- header begins -->
    @include('layouts.header')
    <!-- header ends -->

    <!-- nav bar begins -->
    @include('layouts.navbar')

    <!-- nav bar ends -->
    <div class="container-fluid wrapper d-flex align-items-stretch ">
    <!-- Sidebar begins -->
    @include('layouts.dataSummaryNav') 
    <!-- Sidebar ends -->

        <div class="main-panel container-fluid">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header text-white bg-success">
                                <h4 class="card-title" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                     Crop Categories</h4>
                            </div>    
                            <br>  
                            <form method="POST" action="{{ route('graph.load') }}">
                                @csrf
                                <div class="row" >
                                    <div class="input-group-prepend col-md-1 ml-5">
                                        <label class="input-group-text" for="selectDistrict" style="width:90px;">District</label>
                                    </div>
                                    <select class="custom-select col-md-3" id="selectDistrict" name="district" required>
        
                                        @if($district != null)
                                        
                                        @foreach ($district as $item)
                                            <option value="{{$item->id}}"> {{$item->name}}</option>
                                        @endforeach
        
                                        @endif
        
                                    </select>    
                                    
                                    <!-- Season -->
                                    <div class="input-group-prepend col-md-1">
                                        <label class="input-group-text" for="selectSeason" style="width:90px;">Season</label>
                                    </div>
                                    <select class="custom-select col-md-3" id="selectSeason" name="season" required>
                                        <option value="Yala"> Yala </option>
                                        <option value="Maha"> Maha </option>
                                    </select>  

                                    <button type="submit" class="btn btn-primary">Generate Graph</button>
                                </div>
                            </form>

                            <div class="card-body ">
                                <div class="container">
                                    <canvas id="cropCategoryChart"></canvas>
                                </div>
                                                        
                            </div> 
                        </div>
                    </div>
                </div> 
            </div>
        </div>    
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    
</body>
<!-- footer begins -->
@include('layouts.footer')
     <!-- footer ends -->

</html>

<script>
    var category = {!! json_encode($categoryAmount)!!};
    console.log(category);
    var densityData = {
    label: 'Land Harvested in the specified time',
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