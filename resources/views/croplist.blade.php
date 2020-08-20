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
<body class="white-bg-color">

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
                                     LIST OF CROPS AND PRICES</h4>
                            </div>                           
                            
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-6">
                                <!-- Table 001-->
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-white thead-newbg">
                                            <th>Name</th>                                            
                                            <th class="text-right">Current Price/kg</th>      
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Beans</td>
                                                <td class="text-right">Rs. 70.00</td>
                                            </tr>         
                                            <tr>
                                                <td>Carrot</td>
                                                <td class="text-right">Rs. 80.00</td>
                                            </tr> 
                                            <tr>
                                                <td>Brinjal</td>
                                                <td class="text-right">Rs. 100.00</td>
                                            </tr> 
                                            <tr>
                                                <td>Cucumber</td>
                                                <td class="text-right">Rs. 120.00</td>
                                            </tr> 
                                            <tr>
                                                <td>Drumstick</td>
                                                <td class="text-right">Rs. 180.00</td>
                                            </tr> 
                                            <tr>
                                                <td>Cabbage</td>
                                                <td class="text-right">Rs. 95.00</td>
                                            </tr> 
                                            <tr>
                                                <td>Spinach</td>
                                                <td class="text-right">Rs. 75.00</td>
                                            </tr> 
                                            <tr>
                                                <td>Leeks</td>
                                                <td class="text-right">Rs. 50.00</td>
                                            </tr>       
                                        </tbody>
                                    </table>
                                </div>
                                </div>   <!--div end for col-md-6-->


                                <!-- Table 002-->
                                <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-white thead-newbg">
                                            <th>Name</th>                                            
                                            <th class="text-right">Current Price/kg</th>      
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Potato</td>
                                                <td class="text-right">Rs. 180.00</td>
                                            </tr>         
                                            <tr>
                                                <td>Green garm</td>
                                                <td class="text-right">Rs. 155.00</td>
                                            </tr> 
                                            <tr>
                                                <td>Horse Gram</td>
                                                <td class="text-right">Rs. 220.00</td>
                                            </tr> 
                                            <tr>
                                                <td>Big Onion</td>
                                                <td class="text-right">Rs. 160.00</td>
                                            </tr> 
                                            <tr>
                                                <td>Ginger</td>
                                                <td class="text-right">Rs. 285.00</td>
                                            </tr> 
                                            <tr>
                                                <td>Maize</td>
                                                <td class="text-right">Rs. 250.00</td>
                                            </tr> 
                                            <tr>
                                                <td>Soya Bean</td>
                                                <td class="text-right">Rs. 97.00</td>
                                            </tr> 
                                            <tr>
                                                <td>Red Onion</td>
                                                <td class="text-right">Rs. 185.00</td>
                                            </tr>       
                                        </tbody>
                                    </table>
                                </div>
                            </div>   <!--div end for col-md-6-->

                            </div> <!--div end for row-->

                            <p class="card-title" style="margin-top: 3rem;">Submit your feedback or complaints regarding the above stated information here.</p>
                            <a href="{{ url('feedback') }}" class="btn btn-success"> Feedback page </a>
                            <!-- <button class="btn btn-success" type="button" > Feedback page</button> -->
                              
                                                        
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