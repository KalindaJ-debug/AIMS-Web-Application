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
                                     VEGETABLE SUMMARY</h4>
                            </div>                           
                            
                            <div class="card-body ">
                                <div class="dropdown">
                                    <button class="btn btn-success dropdown-toggle" type="button" id="Dropdown" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="vegDropdownFn()">
                                      Select a vegetable
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="myDropdown" id="myDropdown" >
                                      <i class="fas fa-search" aria-hidden="true"></i>
                                      <input type="text" placeholder="Search" id="myInput" onkeyup="filterFunction()">            
                                      <a class="dropdown-item" href="#" onclick="VegChartGeneration('Brinjal');return false;">Brinjal</a>
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

                                    <button class="btn btn-outline-success" type="button" id="print" data-toggle="modal" data-target="#printModal">
                                        Print
                                    </button>
                                    <button class="btn btn-outline-success" type="button" id="export" data-toggle="modal" data-target="#exportModal">
                                        Export
                                    </button>

                                </div>


                                <!-- Print Modal-->
                                <div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header bg-light">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Print Report</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Getting things ready to print</p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                                        
                                      </div>
                                      </div>
                                    </div>
                                </div>

                                <!-- Export Modal-->
                                <div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header bg-light">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Export As</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">

                                          <form>
                                            <div class="form-group">
                                              <label for="file-name" class="col-form-label">File name:</label>
                                              <input type="text" class="form-control" id="file-name">
                                            </div>
                                            <div class="form-group">
                                              <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Choose file type</option>
                                                <option value="1">PDF</option>
                                                <option value="2">EXCEL</option>
                                                <option value="3">IMAGE</option>
                                              </select>
                                              
                                            </div>
                                          </form>

                                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-secondary">Export</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>





                                <div class="container">  
                                    <img id="vegBg" class="vegBgImage rounded mx-auto shadow p-3 mb-5 bg-white rounded " src="{{ ('assets/img/vegbg.jpg') }}">
                                    <canvas id="myVegChart"></canvas>                                 
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