<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- header links -->

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/landRegistration.css') }}">

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

    <title>Land Registration | AIMS </title>
  </head>
  <body style="font-family: 'Raleway', sans-serif;">
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

            <h5 class="card-title" style="color:white;margin-right:80px;"> <i class="fa fa-unlock-alt mr-3" aria-hidden="true"></i> ADMIN</h5>
            <p class="card-text" style="color:white;margin-right:80px;"><i class="fas fa-exchange-alt mr-3"></i>Change Language</p>
            <!-- buttons -->

              <a href="#" class="btn btn-light" style="background-color:#10391C;color:white;width:300px;" data-toggle="tooltip" data-placement="top" title="Login to AIMS"><i class="fas fa-sign-in-alt mr-3"></i>Sign Out</a>
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
          <li class="nav-item">
            <a class="nav-link" href="#"> Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">User Management</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Crop Management</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Device Management</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Statistics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Data Entry Management</a>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-1" style="width:630px;">
          <input class="form-control mr-sm-2" style="width:500px;" type="text" placeholder="Search AIMS" aria-label="Search" data-toggle="tooltip" data-placement="top" title="Enter To Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit" data-toggle="tooltip" data-placement="top" title="Search Crops"> <i class="fas fa-search mr-3"> </i> Search </button>
        </form>
      </div>
    </nav>

    <!-- nav bar ends -->

    <!-- body begins -->

    <div class="container" style="margin-left:50px;height:1500px;" id="formID">
      <div class="row no-gutters">
        <!-- land registration form container -->
        <div class="col">

          <div class="land-register">
            <br><br>
            <!-- title -->
            <h1> Land Registration </h1>
            <!-- form -->
            <div class="land-form">
              <div class="card" style="width: 85rem;border-radius: 10px;">
                <div class="card-body">
                  <h5 class="card-title">Enter Land Registration Details here</h5>
                  <br>
                  <!-- form begins here -->
                  <form id="form-land" class="landForm" action="test.php" method="post">
                    <p class="card-text"> Land Owner's Name </p>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Full Name</span>
                      </div>
                      <input type="text" aria-label="First name" class="form-control" placeholder="First Name" disabled='true'>
                      <input type="text" aria-label="Middle name" class="form-control" placeholder="Middle Name" disabled='true'>
                      <input type="text" aria-label="Last name" class="form-control" placeholder="Last Name" disabled='true'>
                    </div>
                    <br>
                    <button href="https://www.google.com/" class="btn btn-success"  data-toggle="tooltip" data-placement="right" title="Go to User Information">Change</button> <br> <hr>
                    <!-- end of change/save button group -->

                    <!-- enter land information -->
                    <p class="card-text">Enter land location details </p>
                    <div class="input-group" aria-describedby="address">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Location</span>
                      </div>
                      <input type="text" aria-label="AssessmentNo" class="form-control col-2" placeholder="Address No" aria-describedby="addressNo" name="addressNumber" required>
                      <input type="text" aria-label="Street" class="form-control col-10" placeholder="Street Name" style="max-width:610px;" name="street" required>

                    </div>
                    <input type="text" aria-label="Lane" name="lane" class="form-control" placeholder="Lane Name" style="margin-left:88px;width:830px;">
                    <input type="text" aria-label="Town" name="town" class="form-control" placeholder="Town" style="margin-left:88px;width:830px;">
                    <small id="address" class="form-text text-muted">Enter location details according to the availability of each section of the original land location address</small>
                    <br>

                    <!-- city -->
                    <div class="input-group mb-3" style="width:1250px;">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="selectCity" style="width:90px;">City</label>
                      </div>
                      <select class="custom-select" id="selectCity" name="city" required>
                        <option selected value="none">Select City...</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Boralesgamuwa">Boralesgamuwa</option>
                        <option value="Kollonnawa">Kollonnawa</option>
                      </select>

                      <!-- district -->
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="selectDistrict" style="width:90px;">District</label>
                      </div>
                      <select class="custom-select" id="selectDistrict" name="district" required>
                        <option selected value="none">Select District...</option>
                        <option value="Ampara">Ampara</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Batticaloa">Batticaloa</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Galle">Galle</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Hambantota">Hambantota</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Kalutara">Kalutara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Kegalle">Kegalle</option>
                        <option value="Kilinochchi">Kilinochchi</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="Mannar">Mannar</option>
                        <option value="Matale">Matale</option>
                        <option value="Matara">Matara</option>
                        <option value="Monaragala">Monaragala</option>
                        <option value="Mullaitivu">Mullaitivu</option>
                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                        <option value="Polonnaruwa">Polonnaruwa</option>
                        <option value="Puttalam">Puttalam</option>
                        <option value="Ratnapura">Ratnapura</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Vavuniya">Vavuniya</option>

                      </select>

                      <!-- province -->
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="selectProvince" style="width:90px;">Province</label>
                      </div>
                      <select class="custom-select" id="selectProvince" name="province" required>
                        <option selected value="none">Select Province...</option>
                        <option value="Central">Central Province</option>
                        <option value="Eastern">Eastern Province</option>
                        <option value="Nothern">Nothern Province</option>
                        <option value="Southern">Southern Province</option>
                        <option value="Western">Western Province</option>
                        <option value="North-Western">North-Western Province</option>
                        <option value="North-Central">North-Central Province</option>
                        <option value="Uva">Uva Province</option>
                        <option value="Sabaragumawa">Sabaragumawa Province</option>
                      </select>

                    </div>

                    <!-- grama niladari division -->
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="selectGN" style="width:200px;">Grama Niladhari Division</label>
                      </div>
                      <select class="custom-select" id="selectGN" name="grama" required>
                        <option selected value="none">Select Grama Niladhari Division...</option>
                        <option value="1">Attanagalla</option>
                        <option value="2">Avissawella</option>
                        <option value="3">Badulla</option>
                        <option value="4">Balapitiya Grama Niladhari Division</option>
                        <option value="5">Banduragoda Grama Niladhari Division</option>
                        <option value="6">Beliatta</option>
                        <option value="7">Bogambara (Kandy Four Gravets & Gangawata Korale) Grama Niladhari Division</option>
                        <option value="8">Grama Niladhari Divisions of Colombo Divisional Secretariat</option>
                        <option value="9">Dambulla</option>
                        <option value="10">Dehiwala East Grama Niladhari Division</option>
                        <option value="11">Dehiwala West Grama Niladhari Division</option>
                        <option value="12">Dewalapola</option>
                        <option value="13">Hakmana, Kandy</option>
                        <option value="14">Hurikaduwa South Grama Niladhari Division</option>
                        <option value="15">Jaffna Town East Grama Niladhari Division</option>
                        <option value="16">Kalawana</option>
                        <option value="17">Labuduwa</option>
                        <option value="18">Mabodale</option>
                        <option value="19">Mahanuwara Grama Niladhari Division</option>
                        <option value="20">Mahawatta South Grama Niladhari Division</option>
                        <option value="21">Mount Lavinia Grama Niladhari Division</option>
                        <option value="22">Narammala</option>
                        <option value="23">Nawala</option>
                        <option value="24">Ninthavur 21 Grama Niladhari Division</option>
                        <option value="25">Padeniya</option>
                        <option value="26">Pothuhera</option>
                        <option value="27">Rikillagaskada</option>
                        <option value="28">Grama Niladhari Divisions of Kotte Divisional Secretariat‎ </option>
                        <option value="29">Sigiriya</option>
                        <option value="30">Sirimalwatte Pallegama Grama Niladhari Division</option>
                        <option value="31">Grama Niladhari Divisions of Thimbirigasyaya Divisional Secretariat‎ </option>
                        <option value="32">Thanthirimale</option>
                        <option value="33">Udugampola</option>
                        <option value="34">Ukuwela</option>
                        <option value="35">Urapola</option>
                        <option value="36">Wadumulla</option>
                        <option value="37">Yakkala</option>
                      </select>

                      <div class="input-group-prepend ml-3">
                        <label class="input-group-text" for="selectGN" style="width:110px;">Postal Code</label>
                      </div>
                      <input type="text" name="postal" aria-label="PostalCode" class="form-control" placeholder="Postal Code" id="postalc" required>
                    </div>
                    <div class="row">
                      <div class="col-9">

                      </div>
                      <div class="col-3">
                        <small id="postalc" class="form-text text-muted"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#2980B9;"></i> <font class="ml-2" style="color:#2980B9">Please insert a valid Sri Lankan postal code</font></small>
                      </div>
                    </div>

                    <hr>

                    <!-- land extent information -->
                    <p class="card-text" id="landExtent"> Enter land extent details
                      <small id="landExtent" class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#2980B9;"></i> <font class="ml-2" style="color:#2980B9">Preferred in hectares (ha)</font></small>
                    </p>


                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Land Extent in Hectares (ha) </span>

                      </div>
                      <input id="hec" name="hectares" type="text" aria-label="Hectares" class="form-control field-hectares" placeholder="XXX (ha)" required>

                      <div class="input-group-prepend">
                        <span class="input-group-text">Planning Number </span>
                      </div>

                      <input type="text" name="planNo" aria-label="PlanningNo" class="form-control" placeholder="Planning No" required>

                    </div>
                    <br>

                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="extentCheck">
                      <label class="form-check-label" for="extentCheck">Or use ARP (Acres | Rood | Perch) measurements </label>
                    </div>

                    <!-- ARP -->
                    <!-- achre -->
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Acres</span>
                      </div>
                      <input id="acre" type="text" name="acre" aria-label="Acres" class="form-control field-achre" placeholder="XXX (acre)" disabled="true">

                      <!-- convert button - achre -->
                      <div class="input-group-append">
                        <button class="btn btn-secondary button-achre" type="button" id="button-acre" onclick="convertAcre()" disabled> <i class="fa fa-check-square" aria-hidden="true"></i> </button>
                      </div>

                      <script>
                        function convertAcre(){
                          //varaibles
                          var h = 0.0;
                          var a = 0.0;
                          a = document.getElementById('acre').value; //fetch value
                          //calculate
                          h = a * 0.4046856422;
                          //display value
                          document.getElementById('hec').value = h;
                          //empty other filled fields
                          if(document.getElementById('rood').value != '' || document.getElementById('perch').value != ''){
                            var rood = document.getElementById('rood');
                            var perch = document.getElementById('perch');
                            rood.value = 0;
                            perch.value = 0;
                          }//end of if
                        } //end of functions
                      </script>

                      <!-- rood -->
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rood </span>
                      </div>
                      <input type="text" id="rood" name="rood" aria-label="Rood" class="form-control field-rood" placeholder="XXX rood (unit)" disabled="true">

                      <!-- convert to rood -->
                      <div class="input-group-append">
                        <button class="btn btn-secondary button-rood" onclick="convertRood()" type="button" id="button-rood" disabled> <i class="fa fa-check-square" aria-hidden="true"></i> </button>
                      </div>

                      <!-- convert rood to hectares -->
                      <script type="text/javascript">
                        function convertRood(){
                          //variables
                          var r = 0.0;
                          var h = 0.0;
                          r = document.getElementById('rood').value; //assign Rood value
                          //calculate
                          h = r * 0.1011714106;
                          document.getElementById('hec').value = h;
                          //set other fields to zero
                          if(document.getElementById('acre').value != '' || document.getElementById('perch').value != ''){
                            var acre = document.getElementById('acre');
                            var perch = document.getElementById('perch');
                            acre.value = 0;
                            perch.value = 0;
                          }//end of if
                        }//end of fucntion
                      </script>

                      <!-- perches -->
                      <div class="input-group-prepend">
                        <span class="input-group-text">Perch </span>
                      </div>
                      <input type="text" name="perch" id="perch" aria-label="perch" class="form-control field-perch" placeholder="XXX (perch)" disabled="true">

                      <!-- convert perches -->
                      <div class="input-group-append">
                        <button class="btn btn-secondary button-perch" onclick="convertPerch()" type="button" id="button-perch" disabled> <i class="fa fa-check-square" aria-hidden="true"></i> </button>
                      </div>

                      <!-- convert perch to hectares -->
                      <script type="text/javascript">
                        function convertPerch(){
                          var p = 0.0;
                          var h = 0.0;
                          p = document.getElementById('perch').value;
                          //calculate
                          h = p * 0.002529285264;
                          document.getElementById('hec').value = h; //display

                          //set other fields
                          if(document.getElementById('acre').value != '' || document.getElementById('rood').value != ''){
                            var acre = document.getElementById('acre');
                            var rood = document.getElementById('rood');
                            acre.value = 0;
                            rood.value = 0;
                          }//end of if

                        }//end of fucntion
                      </script>
                    </div>
                    <hr>
                    <!-- upload image of land registeration doc -->
                    <p class="card-text">Upload Image of the Land Registration</p>

                    <!-- referenced code -->
                    <main class="main_full">
                      <div class="container-full" id="divChange">
                        <div class="panel-full">
                          <div class="button_outer">
                            <div class="btn_upload">
                              <input type="file" id="upload_file" name="">
                              <i class="fa fa-upload mr-3" aria-hidden="true"></i> Upload Image
                            </div>
                            <div class="processing_bar"></div>
                            <div class="success_box"></div>
                          </div>
                        </div>
                        <div class="error_msg"></div>
                        <div class="uploaded_file_view" id="uploaded_view">
                          <span class="file_remove">X</span>
                        </div>
                      </div>
                    </main>

                    <!-- end of referenced code -->

                    <!-- confirm accountability -->
                    <hr>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="confirmCheck">
                      <label class="form-check-label" for="confirmCheck">I confirm all of the above provided information is accurate and valid with no false/incorrect data. </label>
                    </div>
                    <!-- end of confirmation -->
                    <div class="btn-submit">
                      <a href="landFormSubmitted.php"> <button type="button" class="btn btn-primary submitButton" id="submitButton" disabled data-toggle="tooltip" data-placement="right" title="Submit & Register Land Information"> <i class="fa fa-arrow-circle-right mr-3" aria-hidden="true"></i> Submit</button> </a>
                    </div>

                  </form>
                  <!-- end of form -->

                </div> <!-- end of card body -->

              </div> <!-- end of card -->

            </div> <!-- end of land form div -->

          </div> <!-- end of land register -->

        </div>
        <!-- end of land registration form container -->

        <!-- form navigation and other options aka side bar -->
        <!-- <div class="col-4">
          One of three columns
        </div> -->

      </div> <!-- end of row -->

    </div> <!-- end of container -->

    <!-- bode ends here -->

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
    <!-- footer ends here -->

    <!-- jquery validation links -->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
    {{-- <script src="js/land_form.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/js/land_form.js') }}"></script>

  </body>

  <!-- jQuery functions -->
  <!-- function to enable submit button after confirmation checkbox -->
  <script>
    $("#confirmCheck").click(function() {
    $(".submitButton").attr("disabled", !this.checked);
    });
  </script>

  <!-- function to enable the ARP measurements -->
  <script type="text/javascript">
    $("#extentCheck").click(function() {
      // enable fields
      $(".field-achre").attr("disabled", !this.checked);
      $(".field-rood").attr("disabled", !this.checked);
      $(".field-perch").attr("disabled", !this.checked);

      //enable buttons
      $(".button-achre").attr("disabled", !this.checked);
      $(".button-rood").attr("disabled", !this.checked);
      $(".button-perch").attr("disabled", !this.checked);

      //dsibale hectares
      $(".field-hectares").attr("disabled", this.checked);
    });
  </script>

  <!-- referenced script for upload button -->
  <script type="text/javascript">

  var j = document.getElementById('uploaded_view').offsetHeight;

  var btnUpload = $("#upload_file"),
    btnOuter = $(".button_outer");
  btnUpload.on("change", function(e){
    var ext = btnUpload.val().split('.').pop().toLowerCase();
    if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
      $(".error_msg").text("Please upload an image.");
    } else {
      $(".error_msg").text("");
      btnOuter.addClass("file_uploading");
      setTimeout(function(){
        btnOuter.addClass("file_uploaded");
      },3000);
      var uploadedFile = URL.createObjectURL(e.target.files[0]);
      setTimeout(function(){
        $("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
      },3500);
      setTimeout(function(){
        var h = document.getElementById('uploaded_view').offsetHeight;
        var meow = h - j;
        var correct = meow + 1500;
        document.getElementById('formID').setAttribute("style", "height:"+correct+"px;margin-left:50px");
      }, 4000);
    }

  });

  $(".file_remove").on("click", function(e){
    $("#uploaded_view").removeClass("show");
    $("#uploaded_view").find("img").remove();
    btnOuter.removeClass("file_uploading");
    btnOuter.removeClass("file_uploaded");
    document.getElementById('formID').setAttribute("style", "height:1500px;margin-left:50px");
});

  </script>

  <!-- Animations -->
  <script type="text/javascript">

  ScrollReveal().reveal('.container', {
    duration:2000,
    origin:'bottom',
    distance: '200px',
    delay:100
  });

  </script>
</html>