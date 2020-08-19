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

    <title>Contact Us | AIMS </title>
  </head>
  <body style="font-family: 'Raleway', sans-serif; background-color: white;">
    <!-- header begins -->
    
    <!-- header ends -->

    <!-- nav bar begins -->
    
    <!-- nav bar ends -->

     <!-- body begins -->
     <div class="content">

       <!-- feedback form begins -->
       <!--Section: Contact v.2-->
       <section class="mb-4">

    <!--Section heading-->
    <h1 class="h1-responsive text-center my-4">Contact Us</h1>
    <!--Section description-->
    <p class="w-responsive mb-5 text-center">Do you have any questions or inquiries? Please do not hesitate to contact us directly via sending a message below. We will respond to you as soon as possible.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-10 mb-md-0 mb-5 ml-5 mx-auto">
            <form id="contact-form" name="contact-form" action="{{action('FeedbackController@store')}}" method="POST">
            @csrf
            @include('inc.messages')
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">

                            <label for="name" class="">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="row">
                          <div class="col-6">
                            <label for="email" class="">Your email </label>
                          </div>
                          <div class="col-6">
                            <small id="emailHelp" class="form-text text-muted"> <i class="fa fa-user-secret mr-2" aria-hidden="true"></i>We'll never share your email with anyone else.</small>
                          </div>

                            <input type="text" id="email" name="email" class="form-control" placeholder="name@email.com" required>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
                <br>
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>
                            <small id="emailHelp" class="form-text text-muted"><i class="fa fa-info-circle mr-2" aria-hidden="true"></i>Please inform us the nature of your inquiry. (Eg. Request to Register etc.)</small>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <br>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                          <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" style="height:120px;" required></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <small id="landExtent" class="form-text text-muted" style="margin-top:15px;"> <i class="fa fa-check-square" aria-hidden="true" style="color:#2980B9;"></i> <font class="ml-2" style="color:#2980B9">Please fill all the fields above.</font></small>
            </form>
            <br>
            <div class="text-center mx-auto" style="width:300px;">
                <a class="btn btn-success btn-lg btn-block" onclick="document.getElementById('contact-form').submit();"> <i class="fa fa-paper-plane mr-3" aria-hidden="true" style="color:white;"></i> <font style="color:white;">Send </font></a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

    </div>

</section>
  <!--Section: Contact v.2-->
       <!-- feedback form ends -->
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
