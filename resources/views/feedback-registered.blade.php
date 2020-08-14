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
    @include('layouts.headerfo')
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
            <a class="nav-link" href="#">Contact Us</a>
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
     <div class="content" style="margin-left:70px;">

       <!-- feedback form begins -->
       <!--Section: Contact v.2-->
       <section class="mb-4">

    <!--Section heading-->
    <h1 class="h1-responsive my-4 ml-5">Administrative Assistance</h1>
    <!--Section description-->
    <p class="w-responsive mb-5 ml-5">Do you have any questions or inquiries? Request for administrative assistance via sending a message below for help.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-10 mb-md-0 mb-5 ml-5">
            <form id="contact-form" name="contact-form" action="{{action('FeedbackController@adminAdd')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

                <input type="hidden" name="userID" value="{{ $userID }}">
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">

                            <label for="name" class="">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="John Smith" value="{{ $name }}" readonly required>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="row">
                          <div class="col-6">
                            <label for="email" class="">Your email </label>
                          </div>
                          <div class="col-6">
                            <small id="emailHelp" class="form-text text-muted"> <i class="fa fa-user-secret mr-2" aria-hidden="true"></i>This data is protected under confidentiality.</small>
                          </div>

                            <input type="text" id="email" name="email" class="form-control" placeholder="name@email.com" value="{{ $email }}" required readonly>
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
                            <label for="subject" class="">Specify inquiry below</label>
                            <br>
                            <!-- list group -->
                            <div class="row">
                              <div class="col-4">
                                <div class="list-group" id="myList" role="tablist">
                                  <a class="list-group-item list-group-item-action active" id="list-dataApproval-list" data-toggle="list" href="#dataApproval" role="tab" aria-controls="dataApproval">Data Approval Failure</a>
                                  <a class="list-group-item list-group-item-action" id="list-dataEntry-list" data-toggle="list" href="#dataEntry" role="tab" aria-controls="dataEntry">Data Entry Failure</a>
                                  <a class="list-group-item list-group-item-action" id="list-login-list" data-toggle="list" href="#login" role="tab" aria-controls="login">Login Credentials</a>
                                  <a class="list-group-item list-group-item-action" id="list-dataReports-list" data-toggle="list" href="#dataReports" role="tab" aria-controls="dataReports">Data Reports</a>
                                </div>
                              </div>

                              <!-- list ends -->

                              <!-- list content begins -->
                              <div class="col-8">
                                <div class="tab-content">
                                  <!-- data approval options -->
                                  <div class="tab-pane fade show active" id="dataApproval" role="tabpanel" aria-labelledby="list-dataApproval-list">
                                    <div class="row">
                                      <!-- first set of options -->
                                      <div class="col-6">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="dataApproval1" id="da1" value="Re-assess recently processed data entry" checked>
                                          <label class="form-check-label ml-3" for="da1">
                                            Re-assess recently processed data entry
                                          </label>
                                        </div>
                                        <br>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="dataApproval2" id="da2" value="Error message when approving data entry">
                                          <label class="form-check-label ml-3" for="da2">
                                            Error message when approving data entry
                                          </label>
                                        </div>
                                        <br>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="dataApproval3" id="da3" value="Error message when rejecting data entry">
                                          <label class="form-check-label ml-3" for="da3">
                                            Error message when rejecting data entry
                                          </label>
                                        </div>
                                        <br>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="dataApproval4" id="da4" value="Does not process data entry approval">
                                          <label class="form-check-label ml-3" for="da4">
                                            Does not process data entry approval
                                          </label>
                                        </div>
                                        <br>
                                      </div>
                                      <!-- second set of options -->
                                      <div class="col-6">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="dataApproval5" id="da5" value="Does not process data entry rejection">
                                          <label class="form-check-label ml-3" for="da5">
                                            Does not process data entry rejection
                                          </label>
                                        </div>
                                        <br>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="dataApproval6" id="da6" value="Cannot enter feedback comments with data entry">
                                          <label class="form-check-label ml-3" for="da6">
                                            Cannot enter feedback comments with data entry
                                          </label>
                                        </div>
                                        <br>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="dataApproval7" id="da7" value="Cannot save processed data entry">
                                          <label class="form-check-label ml-3" for="da7">
                                            Cannot save processed data entry
                                          </label>
                                        </div>
                                        <br>

                                      </div>
                                    </div>

                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">
                                          <input name="dataApprovalOther" type="radio" aria-label="Radio button for following text input">
                                        </div>
                                      </div>
                                      <input type="text" class="form-control" name="dataApprovalOtherText" aria-label="Text input with radio button" value="" placeholder="Other">
                                    </div>

                                  </div>
                                  <!-- data entry options -->
                                  <div class="tab-pane fade" id="dataEntry" role="tabpanel" aria-labelledby="list-dataEntry-list">

                                    <div class="row">
                                      <div class="col-6">
                                        <!-- first set of options -->
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="dataEntry1" id="de1" value="Permission denied to modify/enter data">
                                          <label class="form-check-label ml-3" for="de1">
                                            Permission denied to modify/enter data.
                                          </label>
                                        </div>
                                        <br>

                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="dataEntry2" id="de3" value="Error removing data.">
                                          <label class="form-check-label ml-3" for="de3">
                                            Error removing data.
                                          </label>
                                        </div>
                                        <br>

                                      </div>
                                      <div class="col-6">
                                        <!-- second set of options -->
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="dataEntry3" id="de2" value="Error processing data entry">
                                          <label class="form-check-label ml-3" for="de2">
                                            Error processing data entry.
                                          </label>
                                        </div>
                                        <br>

                                      </div>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <input name="dataEntryOther" type="radio" aria-label="Radio button for following text input">
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" name="dataEntryOtherText" aria-label="Text input with radio button" value="" placeholder="Other">
                                      </div>

                                    </div>

                                  </div>

                                  <!-- login credentials options -->
                                  <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="list-login-list">
                                    <div class="row">
                                      <div class="col-6">
                                        <!-- first set of options -->
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="login1" id="lc1" value="Change/Reset Password">
                                          <label class="form-check-label ml-3" for="lc1">
                                            Change/Reset Password.
                                          </label>
                                        </div>
                                        <br>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="login2" id="lc3" value="Remove Profile">
                                          <label class="form-check-label ml-3" for="lc3">
                                            Remove Profile.
                                          </label>
                                        </div>
                                        <br>
                                      </div>
                                      <div class="col-6">
                                        <!-- second set of options -->
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="login3" id="lc2" value="Change/Reset Device Authentication">
                                          <label class="form-check-label ml-3" for="lc2">
                                            Change/Reset Device Authentication.
                                          </label>
                                        </div>
                                        <br>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="login4" id="lc4" value="Change/Modify User Profile Details">
                                          <label class="form-check-label ml-3" for="lc4">
                                            Change/Modify User Profile Details.
                                          </label>
                                        </div>
                                        <br>
                                      </div>
                                    </div>
                                    <!-- other option -->
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">
                                          <input name="loginOther" type="radio" aria-label="Radio button for following text input">
                                        </div>
                                      </div>
                                      <input type="text" class="form-control" name="loginOtherText" aria-label="Text input with radio button" value="" placeholder="Other">
                                    </div>

                                  </div>

                                  <!-- data report options -->
                                  <div class="tab-pane fade" id="dataReports" role="tabpanel" aria-labelledby="list-dataReports-list">
                                    <div class="row">
                                      <div class="col-6">
                                        <!-- first set of options -->
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="report1" id="dr1" value="Error interacting/processing the charts/graphs">
                                          <label class="form-check-label ml-3" for="dr1">
                                            Error interacting/processing the charts/graphs.
                                          </label>
                                        </div>
                                        <br>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="report2" id="dr3" value="Error exporting/printing reports.">
                                          <label class="form-check-label ml-3" for="dr3">
                                            Error exporting/printing reports.
                                          </label>
                                        </div>
                                        <br>
                                      </div>
                                      <div class="col-6">
                                        <!-- second set of options -->
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="report3" id="dr2" value="Error processing reports.">
                                          <label class="form-check-label ml-3" for="dr2">
                                            Error processing reports.
                                          </label>
                                        </div>
                                        <br>
                                      </div>
                                      <!-- other option -->
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <input name="reportOther" type="radio" aria-label="Radio button for following text input">
                                          </div>
                                        </div>
                                        <input type="text" class="form-control" name="reportOtherText" aria-label="Text input with radio button" value="" placeholder="Other">
                                      </div>
                                    </div>
                                  </div>
                                  <!-- end of data report options -->
                                </div>
                              </div>
                            </div>
                            <!-- list content ends -->

                            <!-- javascript show  -->
                            <script>
                              $(function () {
                                $('#myList a:last-child').tab('show')
                              })
                            </script>

                            <!-- list group ends -->
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
                          <div class="row">
                            <div class="col-7">
                              <label for="message">Please describe your issues below.</label>
                            </div>
                            <div class="col-5">
                              <small id="emailHelp" class="form-text text-muted"> <i class="fa fa-info mr-2" aria-hidden="true"></i>Enter specific details regarding the inquiring issue and provide required details.</small>
                            </div>
                          </div>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" style="height:120px;" required></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <small id="landExtent" class="form-text text-muted" style="margin-top:15px;"> <i class="fa fa-check-square" aria-hidden="true" style="color:#2980B9;"></i> <font class="ml-2" style="color:#2980B9">Please fill all the fields above.</font></small>
            </form>
            <br>
            <div class="text-center" style="width:200px;margin-left:1000px;">
                <a class="btn btn-success btn-lg btn-block" onclick="document.getElementById('contact-form').submit();"> <i class="fa fa-envelope-o mr-3" aria-hidden="true" style="color:white;"></i> <font style="color:white;">Submit </font></a>
            </div>

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
