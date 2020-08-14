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
    

    <title>Data Summary</title>
</head>
<body class="white-bg-color">
    <div class="wrapper d-flex align-items-stretch ">
        <div class="sidebar" style="width: 280px; height: 400px; ">

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
                                <h4 class="card-title" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> PADDY SUMMARY</h4>
                            </div>
                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item active">
                                      <a class="nav-link text-white" href="#" onclick="CountryChartGeneration()">Country Summary</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="districtLink" href="#" onclick="districtSummaryGraph()">District Summary Graph</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" onclick="districtSummaryGraph()">District Summary Table</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#" onclick="IrrigationModeDistrict()">Irrigation Mode District</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#" onclick="GrainType()" >Grain Type</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#" onclick="AgeType()" >Age Type</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#" onclick="VarietyInAgeType()">Variety in Age Type</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#" onclick="PericarpColor()" >Pericarp color</a>
                                    </li>
                                      
                                </ul>

                                <div class="container-fluid" style="margin-top: 10px;">
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




                            
                            <div class="card-body ">
                                <div class="container">
                                    <canvas id="paddySummaryChart"></canvas>
                                </div>

                                <!-- Script for Country chart generation-->
                                <script>
                                    let paddySummaryChart = document.getElementById('paddySummaryChart').getContext('2d');
                                    
                                    // Global Options
                                    Chart.defaults.global.defaultFontFamily = 'Calibri';
                                    Chart.defaults.global.defaultFontSize = 12;
                                    Chart.defaults.global.defaultFontColor = '#777';
                                                                
                                    let massPopChart = new Chart(paddySummaryChart, {
                                    type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
                                        data:{
                                            labels:['Anuradhapura', 'Ampara', 'Badulla', 'Batticaloa', 'Colombo', 'Galle',
                                             'Gampaha', 'Hambantota', 'Jaffna', 'Batticaloa', 'Kalutara', 'Kandy',
                                             'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara',
                                             'Moneragala', 'Mullaitivu ', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura','Trincomalee', 'Vavuniya'],
                                            datasets:[{
                                                label:'Cultivation Extent',
                                                data:[
                                                        2.4,
                                                        11.5,
                                                        302.3,
                                                        72.4,
                                                        51.5,
                                                        102.3,
                                                        26.4,
                                                        11.5,
                                                        272.3,
                                                        142.4,
                                                        193.5,
                                                        309.3,
                                                        70.4,
                                                        212.5,
                                                        102.3,
                                                        96.4,
                                                        351.5,
                                                        82.3,
                                                        52.3,
                                                        262.4,
                                                        300.5,
                                                        19.3,
                                                        64.4,
                                                        189.5,
                                                        272.3,                        
                                                                              ],
                                                        //backgroundColor:'green',
                                                        backgroundColor:[
                                                        'rgba(255, 99, 132, 0.6)',
                                                        'rgba(54, 162, 235, 0.6)',
                                                        'rgba(255, 206, 86, 0.6)',
                                                        'rgba(75, 192, 192, 0.6)',
                                                        'rgba(153, 102, 255, 0.6)',
                                                        'rgba(255, 159, 64, 0.6)',
                                                        'rgba(255, 99, 132, 0.6)',
                                                        'rgba(255, 99, 132, 0.6)',
                                                        'rgba(54, 162, 235, 0.6)',
                                                        'rgba(255, 206, 86, 0.6)',
                                                        'rgba(75, 192, 192, 0.6)',
                                                        'rgba(153, 102, 255, 0.6)',
                                                        'rgba(255, 159, 64, 0.6)',
                                                        'rgba(255, 99, 132, 0.6)',
                                                        'rgba(255, 99, 132, 0.6)',
                                                        'rgba(54, 162, 235, 0.6)',
                                                        'rgba(255, 206, 86, 0.6)',
                                                        'rgba(75, 192, 192, 0.6)',
                                                        'rgba(153, 102, 255, 0.6)',
                                                        'rgba(255, 159, 64, 0.6)',
                                                        'rgba(255, 99, 132, 0.6)',
                                                        'rgba(255, 99, 132, 0.6)',
                                                        'rgba(54, 162, 235, 0.6)',
                                                        'rgba(255, 206, 86, 0.6)',
                                                        'rgba(75, 192, 192, 0.6)'
                                                        ],
                                                        borderWidth:1,
                                                        borderColor:'#777',
                                                        hoverBorderWidth:3,
                                                        hoverBorderColor:'#000',
                                                        fill: false
                                                        }]
                                                        },
                                                        options:{
                                                            title:{
                                                                display:true,
                                                                text:'Country Summary Graph',
                                                                fontSize:20
                                                             },
                                                            legend:{
                                                                display:true,
                                                                position:'bottom',
                                                                labels:{
                                                                fontColor:'#000'
                                                            }
                                                        },              
                                                        layout:{
                                                            padding:{
                                                              left:50,
                                                              right:0,
                                                              bottom:0,
                                                              top:0
                                                            }
                                                          },
                                                          tooltips:{
                                                            enabled:true
                                                          }
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>