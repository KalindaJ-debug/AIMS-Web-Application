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
    <div class="header" style="height:150px;background-color:#08260E;">
      <div class="row">
        <!-- logo and description -->
        <div class="col-6">
          <!-- horizontal card -->
          <div class="card mb-3" style="max-width:60%;background-color:#08260E;border:none;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="assets/img/DOA emblem.png" class="card-img" alt="headerLogo" style="width:120px;height:120px;margin-left:20px;margin-top:10px;margin-bottom:10px;">
            </div>
            <div class="col-md-8">
              <div class="card-body text-center" style="padding:30px;color:white;">
                <h5 class="card-title">Agriculture Information Management System | AIMS </h5>
                <p class="card-text">Department of Agriculture.</p>
              </div>
            </div>
          </div>
        </div>

        </div>
        <!-- return to language and login buttons -->
        <div class="col-6" style="height:150px;">

          <div class="card text-right" style="background-color:#08260E;margin-right:20px;border:none;">
          <div class="card-body">

            <h5 class="card-title" style="color:white;margin-right:80px;"><i class="fas fa-globe mr-3"></i>PUBLIC</h5>
            <p class="card-text" style="color:white;margin-right:80px;"><i class="fas fa-exchange-alt mr-3"></i>Change Language</p>
            <!-- buttons -->

              <a href="#" class="btn btn-light" style="background-color:#10391C;color:white;width:300px;" data-toggle="tooltip" data-placement="top" title="Login to AIMS"><i class="fas fa-sign-in-alt mr-3"></i>Sign In</a>
                <a href="#" class="btn btn-light" style="background-color:#10391C;color:white;width:300px;" data-toggle="tooltip" data-placement="top" title="Return to Language Options"><i class="fas fa-language mr-3"></i>Language</a>
            <!-- buttons end -->
          </div>
        </div>

        </div>
      </div>
    </div>
    <!-- header ends -->

    <!-- nav bar begins -->
    <nav class="navbar navbar-expand-md navbar-dark">
      <!-- <a class="navbar-brand" href="#">Home</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Main Crops</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Paddy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Other Field Crops</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Crops</a>
            <div class="dropdown-menu z-index-dropdown" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Main Crops</a>
              <a class="dropdown-item" href="#">Paddy</a>
              <a class="dropdown-item" href="#">Other Field Crops</a>
            </div>
          </li> -->
        </ul>
        <form class="form-inline my-2 my-lg-1" style="width:630px;">
          <input class="form-control mr-sm-2" style="width:500px;" type="text" placeholder="Search AIMS" aria-label="Search" data-toggle="tooltip" data-placement="top" title="Enter To Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit" data-toggle="tooltip" data-placement="top" title="Search Crops"> <i class="fas fa-search mr-3"> </i> Search </button>
        </form>
      </div>
    </nav>

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
            <h5>Paddy</h5>
            <p>Explore paddy field statistics</p>
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
                <a href="https://www.google.com/" style="text-decoration:none;"> <button type="button" class="btn btn-success btn-lg btn-block" style="background-color:#10391C;" data-toggle="tooltip" data-placement="top" title="Go To Main Crops Page"> Main Crops</button> </a>
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
             <h5 class="card-title">Paddy</h5>
             <p class="card-text">View all paddy fields' details regarding production and demand.</p>
             <p class="card-text"><small class="text-muted">Last updated 30 mins ago</small></p>
             <div class="btn-container text-center" style="width:300px;height:30px;padding:50px;margin-left:200px;">
               <a href="https://www.google.com/" style="text-decoration:none;"> <button type="button" class="btn btn-success btn-lg btn-block" style="background-color:#10391C;" data-toggle="tooltip" data-placement="top" title="Go To Paddy Statistics Page"> Paddy </button> </a>
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
     <div class="mt-5 pt-5 pb-5 footer">
       <div class="container">
         <div class="row">

           <div class="col-lg-5 col-xs-12 about-company">
             <h2>AIMS</h2>
             <p class="pr-5 text-white-50">Agriculture Information Management System     Department of Agriculture, Kandy </p>
             <img src="assets/img/Department of Agriculture.png" alt="logo" style="width:50px;height:50px;">
           </div>

           <div class="col-lg-3 col-xs-12 links">
             <h4 class="mt-lg-0 mt-sm-3">Other Sites</h4>
               <ul class="m-0 p-0">
                 <li>- <a href="http://www.croplook.net/">Crop Look</a></li>
                 <li>- <a href="https://www.doa.gov.lk/index.php/en/">Department of Agriculture</a></li>
                 <li>- <a href="http://agri.pdn.ac.lk/">Faculty of Agriculture</a></li>
                 <li>- <a href="http://agri.pdn.ac.lk/agen/">Department of Agricultural Engineering</a></li>
                 <li>- <a href="http://www.gic.gov.lk/gic/index.php?option=com_org&Itemid=4&id=40&task=org&lang=en">Government Information Centre | Faculty of Agriculture</a></li>
                 <li>- <a href="http://www.agrimin.gov.lk/web/index.php/about-us-3">Ministry of Agriculture</a></li>
               </ul>
           </div>

           <div class="col-lg-4 col-xs-12 location">
             <h4 class="mt-lg-0 mt-sm-4">Location</h4>
             <p>No 25, Labuduwa Sri Damma Mawatha, Peradeniya 20400</p>
             <p class="mb-0"><i class="fa fa-phone mr-3"></i>(0812) 388 331</p>
             <p><i class="fas fa-envelope mr-3"></i>headagbiol@pdn.ac.lk</p>

           </div>
         </div>

         <div class="row mt-5">
           <div class="col copyright">
             <p class=""><small class="text-white-50">Copyright © 2020. All Rights Reserved.</small></p>
           </div>
         </div>
       </div>
     </div>
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
