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

    <title>Feedback Management | AIMS </title>
  </head>
  <body style="font-family: 'Raleway', sans-serif; background-color: white;">

    <!-- header begins -->
    @include('layouts.headerAdmin')
    <!-- header ends -->

    <!-- nav bar begins -->
    @include('layouts.navbar')
    <!-- nav bar ends -->

     <!-- body begins -->
     <div class="content">

       <!-- feedback Managment Home Page begins -->
      <!-- feedback jambrotron begins -->
      <div class="jumbotron jumbotron-fluid" style="background:none;">
        <div class="container">
          <h1 class="display-5" style="margin-left:400px;">Feedback Inquiries</h1>
          <hr class="my-4">
          <!-- cards section begins -->
          <div class="row">
            <div class="col-6">
              <!-- column #1 -->
              <div class="card text-center">
                <div class="card-header">
                  <i class="fas fa-globe mr-3"></i> Public
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="color:green;"> <i class="fa fa-comment mr-2" style="color:green;" aria-hidden="true"></i> New Feedback Available!</h5>
                  <img src="assets/img/important.png" alt="email"> <br>
                  <p class="card-text" style="margin-top:10px;">View public feedback to provide fast-track responses</p>
                  <a href="#" class="btn btn-success">Read Feedback</a>
                </div>
                <div class="card-footer text-muted">
                  <i class="fa fa-envelope mr-3" aria-hidden="true"></i> 2 messages received
                </div>
              </div>

            </div>
            <!-- column #1 ends -->

            <div class="col-6">
              <!-- column #2 -->
              <div class="card text-center">
                <div class="card-header">
                  <i class="fa fa-users mr-3" aria-hidden="true"></i> Registered Users
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="color:#3090C7;"> <i class="fa fa-check-circle mr-2" style="color:#3090C7;" aria-hidden="true"></i> Completed Feedback Responses!</h5>
                  <img src="assets/img/mail.png" alt="mail">
                  <br>
                  <p class="card-text" style="margin-top:10px;">View regsitered user feedback to provide responses</p>
                  <a href="#" class="btn btn-success">Read Feedback</a>
                </div>
                <div class="card-footer text-muted">
                  <i class="fa fa-envelope mr-3" aria-hidden="true"></i> 0 messages received
                </div>
              </div>

            </div>
            <!-- column #2 ends -->
            </div>
            <hr>
          </div>
        </div>
        <!-- end of feedback jumbrtron -->
       <!-- feedback Management Home Page ends -->

     </div>
     <!-- body ends -->

     <!-- footer begins -->
     @include('layouts.footer')
     <!-- footer ends -->

     <!-- jquery validation links -->
     <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
     <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
     <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/contact_form.js') }}"></script>

     <!-- Animations -->
     <script type="text/javascript">

       ScrollReveal().reveal('.content', {
         duration:2000,
         origin:'bottom',
         distance: '200px',
         delay:100
       });

     </script>

  </body>

</html>
