<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/dataSummaryStyle.css">


    <title>Crop Variety Summary | AIMS</title>
</head>
<body class="white-bg-color" >
    <!-- header begins -->
    @include('layouts.header')
    <!-- header ends -->

    <!-- nav bar begins -->
    @include('layouts.navbar')

    <!-- nav bar ends -->
    <div class="container-fluid wrapper d-flex align-items-stretch">
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
                                     CROP VARIETY SUMMARY</h4>
                            </div>                           
                            
                            <div class="card-body "> 

                                <div class="container">
                                    <!-- Return to previous page -->
                                    <a href="{{ url('/crop_variety_chart')}}" class="btn btn-success"><i class="fa fa-caret-left mr-2" style="color:white;" aria-hidden="true"></i>Return</a>
                                

                                <form name="districtDropdown" method="get" action="{{action('CropVarietyReportController@generatePDF')}}" enctype="multipart/form-data">
                                @csrf
                                
                                    <!--  Export buttons -->                                    

                                    <button name="districtname" class="float-right btn btn-dark col-3" type="submit" value="{{$districtname}}">
                                    <i class="fa fa-download mr-2" style="color:white;" aria-hidden="true"></i>
                                        Export as PDF
                                    </button>

                                    <input type="hidden" id="districtId" value="{{ $districtname }}"></text>
                                        
                                 
                                </form> 
                                </div>   
                                <br><br>
                                <div class="container text-center">
                                    <h4>Cultivation Extent(in Ha.) vs Crop Variety</h4>
                                    <canvas id="bar-chart" width="800" height="450"></canvas>
                                </div>

                                <hr>
                                <div class="container text-center"> 
                                <h4>Harvest Extent(in Ha.) vs Crop Variety</h4>
                                    <canvas id="bar-chart2" width="800" height="450"></canvas>
                                </div>  
                                

                            </div>

                            <script>

                                new Chart(document.getElementById("bar-chart"), {
                                type: 'bar',
                                data: {
                                labels: [
                                    @foreach ($cultivations as $cultivation)
                                        '{{$cultivation -> name}}', 
                                    @endforeach
                                ],
                                datasets: [
                                    {
                                    label: "Cultivated Land (in Hectares)",
                                    backgroundColor: "#e8c3b9",
                                    data: [
                                        @foreach ($cultivations as $cultivation)
                                            '{{$cultivation -> sum}}',
                                        @endforeach
                                        ]
                                    }
                                ]
                                },
                                options: {
                                legend: { display: true },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                },
                                // title: {
                                //     display: true,
                                //     text: 'Cultivated Land (in Hectares)'
                                // }
                                }
                            });


                            new Chart(document.getElementById("bar-chart2"), {
                                type: 'bar',
                                data: {
                                labels: [
                                    @foreach ($harvests as $harvest)
                                        '{{$harvest -> name}}', 
                                    @endforeach
                                ],
                                datasets: [
                                    {
                                    label: "Harvested Land (in Hectares)",
                                    backgroundColor: "#3cba9f",
                                    data: [
                                        @foreach ($harvests as $harvest)
                                            '{{$harvest -> sum}}',
                                        @endforeach
                                        ]
                                    }
                                ]
                                },
                                options: {
                                legend: { display: true },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                },
                                // title: {
                                //     display: true,
                                //     text: 'Harvested Land (in Hectares)'
                                // }
                                }
                            });
                            </script>                               
                                                                                     
                                         
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
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}
    <script src="assets/js/dataSummaryScript.js"></script>

    

    <!-- Data Table -->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
        <script type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css"></script>
    
</body>

<!-- footer begins -->
@include('layouts.footer')
<!-- footer ends -->

</html>