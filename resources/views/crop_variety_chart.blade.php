<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}
    
    <link rel="stylesheet" href="assets/css/dataSummaryStyle.css">
    <script src="assets/js/dataSummaryScript.js"></script>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    
    

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
                              <h6>Select a district from the list below to view the cultivation extent and the harvest extent for each crop variety</h6>
                                
                              
                                  <br>
                                  <form name="districtDropdown" method="post" action="{{action('DVCropVarietyController@generateChart')}}" enctype="multipart/form-data">
                                  @csrf
                                  <div class="form-row">
                                      
                                      <div class="col-4">
                                        <select name="districtname" class="form-control">
                                          <option selected value="none">Select a district</option>
                                          @foreach ($districtlist as $districts)
                                            <option value='{{ $districts->id }}'>{{ $districts->name }}</option>
                                          @endforeach 
                                        </select>
                                      </div>

                                      <div class="col">
                                        <button class="col-3 btn btn-dark" type="submit" id="ViewChart" name="ViewChart"><i class="fa fa-chart-pie mr-3" style="color:white;" aria-hidden="true"></i>VIEW</button>
                                      </div>
                                  </div> 
                                  </form>   
                              

                                </div>                               
                              
                                <div class="container text-center">  
                                  <!-- <img id="image1" class="vegBgImage rounded mx-auto shadow p-3 mb-5 bg-white rounded " src="{{ ('assets/img/image1.jpg') }}"> -->
                                    <!-- <canvas id="cropVarietyCultExtent"></canvas>  -->
                                    <!-- <canvas id="cropVarietyHarvExtent"></canvas>   -->
                                    <img id="image1" class="sample-gif rounded mx-auto shadow p-3 mb-5 bg-white rounded " src="{{ ('assets/img/analytics.png') }}">
                                </div>
                                <br>
                                <hr>
                                <br>
                                    
                                
                                                        
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
</body>
<!-- footer begins -->
@include('layouts.footer')
<!-- footer ends -->

</html>