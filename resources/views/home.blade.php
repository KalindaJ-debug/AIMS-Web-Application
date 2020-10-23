<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- header links -->

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/home.css') }}">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- scrool reveal api-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Agriculture Information Management System | AIMS </title>
  </head>
  <body style="font-family: 'Raleway', sans-serif; background-color: #FFFAF0;">
    
    <!-- header begins -->
    @include('layouts.header')
    <!-- header ends -->

    <!-- nav bar begins -->
    @include('layouts.navbar')

    <!-- nav bar ends -->

     <!-- body begins -->
     <div class="content">

       <!-- carousal begins -->
       <div id="carousalMainPage" class="carousel slide carousal-fade" data-ride="carousel" style="top:0;z-index:0;">
        <ol class="carousel-indicators">
          <li data-target="#carousalMainPage" data-slide-to="0" class="active"></li>
          <li data-target="#carousalMainPage" data-slide-to="1"></li>
          <li data-target="#carousalMainPage" data-slide-to="2" class="special"></li>
        </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" id="first">
          <img src="assets/img/2.png" class="d-block w-100" alt="firstSlide" style="width:100%;height:540px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Crop Details</h5>
            <p>Explore all Crops and Crop Varieties.</p>
          </div>
        </div>
        <div class="carousel-item" id="second">
          <img src="assets/img/1.png" class="d-block w-100" alt="secondSlide" style="width:100%;height:540px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Main Crops</h5>
            <p>Explore main crop statistics and cultivation availability</p>
          </div>
        </div>
        <div class="carousel-item" id="third">
          <img src="assets/img/3.png" class="d-block w-100" alt="thirdSlide" style="width:100%;height:540px;">
          <div class="carousel-caption d-none d-md-block" style="color:#191919;">
            <h5>Harvesting Schedule</h5>
            <p>Discover the harvesting schedule for this season</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousalMainPage" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousalMainPage" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>
       <!-- carousal ends -->
       <br>
       <h4 class="text-lg-center">Validity Period : 21st of May, 2020 to 5th of June, 2020</h4>
       <br>
       <!-- card list begins -->
       <!-- card #1 -->
       <div class="card mb-3 main" style="max-width: 100%;border:none;">
        <div class="row no-gutters">
          <div class="col-md-6">
            <img src="assets/img/maincrops.png" class="card-img" alt="cardFirst" style="max-height:300px;">
          </div>
          <div class="col-md-6">
            <div class="card-body mainIn">
              <h5 class="card-title">Main Crops</h5>
              <p class="card-text">View all main crops' details regarding cultivated percentage, estimated price and more.</p>
              <p class="card-text"><small class="text-muted">Last updated 30 mins ago</small></p>
              <div class="btn-container text-center" style="width:300px;height:30px;padding:50px;margin-left:200px;">
                <a href="{{ url('publicMainCrops') }}" style="text-decoration:none;"> <button type="button" class="btn btn-success btn-lg btn-block" style="background-color:#10391C;" data-toggle="tooltip" data-placement="top" title="Go To Main Crops Page"> Main Crops</button> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- card #2 -->
      <div class="card mb-3 paddy" style="max-width: 100%;border:none;">
       <div class="row no-gutters">
         <div class="col-md-6">
           <div class="card-body text-right paddyIn">
             <h5 class="card-title">Crop Details</h5>
             <p class="card-text">View all crop information of Sri Lanka and crop varieties farmed in Sri Lanka.</p>
             <p class="card-text"><small class="text-muted">Last updated 30 mins ago</small></p>
             <div class="btn-container text-center" style="width:300px;height:30px;padding:50px;margin-left:200px;">
               <a href="{{ url('cropInformation') }}" style="text-decoration:none;"> <button type="button" class="btn btn-success btn-lg btn-block" style="background-color:#10391C;" data-toggle="tooltip" data-placement="top" title="Go To Paddy Statistics Page"> Crop Details </button> </a>
             </div>
           </div>
         </div>
         <div class="col-md-6">
           <img src="assets/img/paddy.png" class="card-img" alt="cardFirst" style="max-height:300px;">
         </div>
       </div>
      </div>
      <br>
      <!-- card #3 -->
      <div class="card mb-3 harvest" style="max-width: 100%;border:none;">
       <div class="row no-gutters">
         <div class="col-md-6">
           <img src="assets/img/harvest.png" class="card-img" alt="cardFirst" style="max-height:300px;">
         </div>
         <div class="col-md-6">
           <div class="card-body harvestIn">
             <h5 class="card-title">Harvesting</h5>
             <p class="card-text">View all harvest schedules and details regarding harvest results.</p>
             <p class="card-text"><small class="text-muted">Last updated 30 mins ago</small></p>
             <div class="btn-container text-center" style="width:300px;height:30px;padding:50px;margin-left:200px;">
               <a href="https://www.google.com/" style="text-decoration:none;"> <button type="button" class="btn btn-success btn-lg btn-block" style="background-color:#10391C;" data-toggle="tooltip" data-placement="top" title="Go To Harvest Schedule Page"> Harvest Schedule</button> </a>
             </div>
           </div>
         </div>
       </div>
      </div>

       <!-- card list ends -->

     </div>
     <!-- body ends -->

     <!-- footer begins -->
     @include('layouts.footer')
     <!-- footer ends -->

     <!-- Bootstrap JS links -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

     <!-- Animations -->
     <script type="text/javascript">

       ScrollReveal().reveal('.main',{
         duration:2000,
         origin: 'left',
         distance: '300px'
       });

       ScrollReveal().reveal('.mainIn',{
         delay:1000,
         duration:2500,
         origin: 'top'
       });

       ScrollReveal().reveal('.paddy',{
         duration:2000,
         origin: 'right',
         distance: '300px',
         delay:500
       });

       ScrollReveal().reveal('.paddyIn',{
         delay:1500,
         duration:2500,
         origin: 'top'
       });

       ScrollReveal().reveal('.harvest',{
         duration:2000,
         origin: 'left',
         distance: '300px',
         delay:1000
       });

       ScrollReveal().reveal('.harvestIn',{
         delay:2000,
         duration:2500,
         origin: 'top'
       });

       ScrollReveal().reveal('.carousel', {
         duration:2000,
         origin:'bottom',
         distance: '200px',
         delay:100
       });

     </script>

  </body>

</html>
