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
                            <form method="POST" action="{{ route('graphdata.load') }}">
                                @csrf
                                <div class="row" >
                                    <div class="input-group-prepend col-md-2 ml-5">
                                        <label class="input-group-text" for="selectDistrict" style="width:120px;">Crop Category</label>
                                    </div>
                                    <select class="custom-select col-md-3" id="selectDistrict" name="crop_category" required>
        
                                        @if($crop_cat != null)
                                        
                                        @foreach ($crop_cat as $item)
                                            <option value="{{$item->id}}"> {{$item->name}}</option>
                                        @endforeach
        
                                        @endif
        
                                    </select>    
                                    
                                    <!-- Season -->
                                    <div class="input-group-prepend col-md-1">
                                        <label class="input-group-text" for="selectSeason" style="width:90px;">Season</label>
                                    </div>
                                    <select class="custom-select col-md-3" id="selectSeason" name="season" required>
                                        <option value="Maha"> Maha </option>
                                        <option value="Yala"> Yala </option>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
     --}}
</body>
<!-- footer begins -->
@include('layouts.footer')
     <!-- footer ends -->

</html>


<script>
    var  harvestSum = {!! json_encode($harvestSum)!!};
    var  cultivationSum = {!! json_encode($cultivationSum)!!};
    console.log(harvestSum);
    console.log(cultivationSum);

    var barChart = new Chart(cropCategoryChart, {
        type: 'bar',
        data: {
            labels: {!! json_encode($district) !!},
            datasets: [{
            label: 'Cultivation',
            backgroundColor: "rgba(220,220,220,0.5)",
            data: cultivationSum
        }, {
            label: 'Harvest',
            backgroundColor: "rgba(151,187,205,0.5)",
            data: harvestSum
        }]
        },
        
        options: {
                scales: {
                    xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Land Harvested in Acres'
                            }
                        }],
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,
                            }
                        }]
                },
                title: {
                display: true,
                text: {!! json_encode($string)!!}
                },
                elements: {
                    rectangle: {
                    borderSkipped: 'left',
                }
  }
        }
    });
</script>