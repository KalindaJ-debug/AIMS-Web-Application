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
    <div class="wrapper d-flex align-items-stretch ">
        <div class="sidebar" style="width: 280px; height: inherit; ">

        <ul class="nav flex-column" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

            <div class="card-header text-white bg-success">
                <h4 class="card-title" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    DATA SUMMARY</h4>
            </div>

            <li class="nav-item" style="margin-bottom: 20px;">
                <a class="nav-link active" href="/paddySummary">Paddy Summary</a>
            </li>
            <li class="nav-item" style="margin-bottom: 20px;">
                <a class="nav-link" href="/ofc">OFC Summary</a>
            </li>
            <li class="nav-item" style="margin-bottom: 20px;">
                <a class="nav-link" href="/vegetable">Vegetable Summary</a>
            </li>
            <li class="nav-item" style="margin-bottom: 20px;">
                <a class="nav-link" href="/harvest">Harvesting Schedule</a>
            </li>
            <li class="nav-item" style="margin-bottom: 20px;">
                <a class="nav-link" href="/croplist">Crop List</a>
            </li>
        </ul>
        </div>

        <div class="main-panel container-fluid">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header text-white bg-success">
                                <h4 class="card-title" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> 
                                    HARVESTING SCHEDULE</h4>
                            </div>                           
                            
                            <div class="card-body ">

                              <div class="row mx-0 container-fluid">
                                 
                                <button id="paddyBtn" class="btn" type="button" 
                                onclick="HarvestChartGeneration('Paddy');HarvestChartGeneration2('Paddy');return false;">Paddy</button>
                                
                                <!-- OFC DROPDOWN LIST-->
                                <div class="dropdown" id="ofcBtn">
                                    <button class="btn dropdown-toggle" type="button" id="Dropdown" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="vegDropdownFn()">
                                      Other Field Crops
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="myDropdown" id="myDropdown">
                                      <i class="fas fa-search" aria-hidden="true"></i>
                                      <input type="text" placeholder="Search" id="myInput" onkeyup="filterFunction()">  
                                      <a class="dropdown-item" href="" 
                                      onclick="HarvestChartGeneration('Big Onion');HarvestChartGeneration2('Big Onion');return false;">Big Onion</a>
                                      <a class="dropdown-item" href="#">CarBlack Gramrot</a>
                                      <a class="dropdown-item" href="#">Chilli</a>
                                      <a class="dropdown-item" href="#">Cowpea</a>
                                      <a class="dropdown-item" href="#">Finger Millet</a>
                                      <a class="dropdown-item" href="#">Red Onion</a>
                                      <a class="dropdown-item" href="#">Ginger</a>
                                      <a class="dropdown-item" href="#">Potato</a>
                                      <a class="dropdown-item" href="#">Ground Nut</a>
                                      <a class="dropdown-item" href="#">Maize</a>
                                      <a class="dropdown-item" href="#">Soya bean</a>
                                      <a class="dropdown-item" href="#">Green gram</a>
                                      <a class="dropdown-item" href="#">Horse gram</a>
                                    </div>
                                </div>

                                <!-- VEGETABLE DROPDOWN LIST-->
                                <div class="dropdown" id="vegBtn">
                                    <button class="btn dropdown-toggle" type="button" id="Dropdown" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="vegDropdownFn()">
                                      Vegetable
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="myDropdown" id="Dropdown">
                                      <i class="fas fa-search" aria-hidden="true"></i>
                                      <input type="text" placeholder="Search" id="myInput" onkeyup="filterFunction()">            
                                      <a class="dropdown-item" href="#" 
                                      onclick="HarvestChartGeneration('Brinjal');HarvestChartGeneration2('Brinjal');return false;">
                                        Brinjal</a>
                                      <a class="dropdown-item" href="#">Carrot</a>
                                      <a class="dropdown-item" href="#">Leeks</a>
                                      <a class="dropdown-item" href="#">Snake gourd</a>
                                      <a class="dropdown-item" href="#">Bitter gourd</a>
                                      <a class="dropdown-item" href="#">Ash plaintain</a>
                                      <a class="dropdown-item" href="#">Cucumber</a>
                                      <a class="dropdown-item" href="#">Beetroot</a>
                                      <a class="dropdown-item" href="#">Cabbage</a>
                                      <a class="dropdown-item" href="#">Raddish</a>
                                      <a class="dropdown-item" href="#">Spinach</a>
                                      <a class="dropdown-item" href="#">Beans</a>
                                      <a class="dropdown-item" href="#">Drumstick</a>
                                    </div>
                                </div> 
                                
                              </div> <!--Row end div-->

                              <!-- IMAGES -->
                              <div class="row container-fluid" id="harvestBgImage" style="margin-top: 15px;">
                                  <div class="col-md-4">  
                                    <img id="harvestbg1" class="harvestBgImage rounded  shadow p-3 mb-5 bg-white rounded" src="{{ ('assets/img/harvestbg2.jpg') }}">
                                  </div>  
                                  <div class="col-md-4">  
                                    <img id="harvestbg2" class="harvestBgImage rounded  shadow p-3 mb-5 bg-white rounded" src="{{ ('assets/img/harvestbg3.jpg') }}">
                                  </div>
                                  <div class="col-md-4">  
                                    <img id="harvestbg3" class="harvestBgImage rounded  shadow p-3 mb-5 bg-white rounded" src="{{ ('assets/img/harvestbg1.jpg') }}">
                                  </div>                              
                            </div> 

                            <div class="container" id="harvestChart">  
                                <canvas id="myHarvestChart1"></canvas>
                                <canvas id="myHarvestChart2"></canvas>
                                <canvas id="myHarvestChart3"></canvas>
                                <canvas id="myHarvestChart4"></canvas> 

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