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
    @include('/layouts.header')
    <!-- header ends -->

    <!-- nav bar begins -->
    @include('/layouts.navbar')

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
                <form id="form-land" class="landForm" method="POST" enctype="multipart/form-data" action="{{ action('RegistrationController@store') }}" >
                  
                  {{ csrf_field() }}  

                  <input type="hidden" name="type" value="land">
                  <input type="hidden" name="fid" value="{{Request::segment(2)}}">
                    <p class="card-text"> Land Owner's Name </p>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Full Name</span>
                      </div>
                      <input name="firstName" type="text" aria-label="First name" class="form-control" placeholder="First Name" disabled='true' value="{{ $firstName }}">
                      <input name="middleName" type="text" aria-label="Middle name" class="form-control" placeholder="Middle Name" disabled='true' value="{{ $otherName }}">
                      <input name="lastName" type="text" aria-label="Last name" class="form-control" placeholder="Last Name" disabled='true' value="{{ $lastName }}">
                    </div>
                    <br>
                    <button href="{{'farmerRegistration'}}" class="btn btn-success"  data-toggle="tooltip" data-placement="right" title="Go to User Information">Change</button> <br> <hr>
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

                        @if($districtsList != null)
                          
                          @foreach ($districtsList as $item)
                            <option value="{{$item->id}}"> {{$item->name}}</option>
                          @endforeach

                        @endif

                      </select>

                      <!-- province -->
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="selectProvince" style="width:90px;">Province</label>
                      </div>
 
                      <select class="custom-select" id="selectProvince" name="province" required>
                        <option selected value="none">Select Province...</option>

                        @if($provincesList != null)
                          
                          @foreach ($provincesList as $item)
                            <option value="{{$item->id}}"> {{$item->name}}</option>
                          @endforeach

                        @endif

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
                    <input type="text" name="postal" aria-label="PostalCode" class="form-control" id="postalc" required>
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
                      <input id="hec" name="hectares" type="text" aria-label="Hectares" class="form-control field-hectares" required>

                      <div class="input-group-prepend">
                        <span class="input-group-text">Planning Number </span>
                      </div>

                      <input type="text" name="planNo" aria-label="PlanningNo" class="form-control" required>

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
                    <p class="card-text">Upload New Image of the Land Registration</p>

                    <!-- referenced code -->
                    <main class="main_full">
                      <div class="container-full" id="divChange">
                        <div class="panel-full">
                          <div class="button_outer">
                            <div class="btn_upload">
                              <input type="file" id="upload_file" name="landImage">
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
                      <button type="submit" name="submit" class="btn btn-primary submitButton" id="submitButton" disabled data-toggle="tooltip" data-placement="right" title="Submit & Register Land Information"> <i class="fa fa-arrow-circle-right mr-3" aria-hidden="true"></i> Submit</button> 
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
    @include('/layouts.footer')
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
