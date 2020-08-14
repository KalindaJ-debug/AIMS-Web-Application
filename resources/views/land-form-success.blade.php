<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- links -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Successful Land Registration | AIMS</title>
  </head>
  <body style="height:100%;background-color:#f8f9fa;">
    <div class="jumbotron  jumbotron-fluid container" style="background: #f8f9fa;">

      <div class="mx-auto" style="width:700px;">
        <h1 class="display-4"> Land Registration Successful!</h1> <br>
        <div class="mx-auto" style="width:64px;">
          <img src="https://img.icons8.com/cotton/64/000000/check-document.png"/>
        </div>
        <hr>
        <p class="lead"> <i class="fa fa-check-circle mr-4" aria-hidden="true" style="color:green;"></i>Farmer profile is updated.
          <br> <br> <i class="fa fa-arrow-circle-right mr-4" aria-hidden="true" style="color:green;"></i> View farmer profile for registered land information.</p>
        <hr class="my-4">
        <p class="lead font-weight-normal"> <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
          Select 'Register More' to perform more land registrations for the same user.
          <br> <br> <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>
          If not, please select 'Complete'to navigate to the main dashboard.</p>
          <br>
        <!-- button set -->
        <a href="landRegistration.php"> <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Register More Land Information"> <i class="fa fa-plus-circle mr-3" aria-hidden="true"></i> Register More</button> </a>
        <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Go To Admin Dashboard" style="margin-left:550px;"> <i class="fa fa-arrow-circle-right mr-3" aria-hidden="true"></i> Complete!</button>
      </div>
    </div>
    <div class="col copyright mx-auto" style="width:300px;">
      <p class=""><small class="text-muted">AIMS | Copyright © 2020. All Rights Reserved.</small></p>
    </div>
  </body>
  <!-- animations -->
  <script>

  ScrollReveal().reveal('.container', {
    duration:2000,
    origin:'bottom',
    distance: '200px',
    delay:100
  });

  </script>
</html>
