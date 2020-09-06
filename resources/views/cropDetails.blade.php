<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8">

  <!--<meta name="viewport"
  content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- scrool reveal api-->

  <script src="https://unpkg.com/scrollreveal"></script>

  <title>Agriculture Information Management System | AIMS </title>
</head>
<!-- header begins -->
@include('layouts.header')
<!--header end-->

<!-- nav bar begins -->
@include('layouts.navbar')
<!-- nav bar ends -->

<div class="container">
<form method="post" name="form1" action="/cropDetails" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Seasson(Yala/Maha)</label>
            <div class="col-sm-9">
            <select class="form-control" name="season">
                  <option>--Select--</option>
                  <option>Yala</option>
                  <option>Maha</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Crop Category</label>
            <div class="col-sm-9">
               <select class="form-control" name="category_id">
                  <option>--Select--</option>
                  <option>Coconut</option>
                  <option>Rise</option>
                  <option>Tea</option>
                  <option>Rubber</option>
                  <option>Potato</option>
                  <option>Grapes</option>
                  <option>Cocoa</option>
                  <option>Cardamom</option>
                  
                </select>
                <!--<input name="" type="text" class="form-control" id="titleid">-->
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Crop Name</label>
            <div class="col-sm-9">
              <select class="form-control" name="name">
                  <option>--Select--</option>
                  <option>Red Rise</option>
                  <option>White Rise</option>
                   <option>Others</option>
                </select>
                <!--<input name="name" type="text" class="form-control" id="titleid" >-->
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label"> Variety</label>
            <div class="col-sm-9">
               <select class="form-control" name="variety">
                  <option>--Select--</option>
                  <option>Suwandel</option>
                  <option>Kalu heenati</option>
                  <option>Maa-Wee</option>
                  <option>Pachchaperumal</option>
                  <option>Kaluruthuda</option>
                  <option>Others</option>
                  
                </select>
                <!--<input name="variety" type="text" class="form-control" id="titleid" placeholder="variety">-->
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Start Date</label>
            <div class="col-sm-9">
                <input name="startDate" type="date" class="form-control" id="startDate">
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">End Date</label>
            <div class="col-sm-9">
                <input name="endDate" type="date" class="form-control" id="endDate">
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">Province</label>
            <div class="col-sm-9">
            <select class="form-control" name="province_id">
                  <option>--Select--</option>
                  <option>Western Province</option>
                  <option>Central Province</option>
                  <option>Eastern Province</option>
                  <option>Northern Province</option>
                  <option>Uva Province</option>
                  <option>Sabaragamuwa Province</option>
                  <option>Southern Province</option>
                  <option>North Western Province</option>
                  <option>North Central Province</option>

                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">District</label>
            <div class="col-sm-9">
            <select class="form-control" name="district_id">
                  <option>--Select--</option>
                  <option>Colombo</option>
                  <option>Gampaha</option>
                  <option>Kaluthara</option>
                  
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Region</label>
            <div class="col-sm-9">
               <select class="form-control" name="region_id">
                  <option>--Select--</option>
                  <option>Attanagalla</option>
                  <option>Biyagama</option>
                  <option>Divulapitiya</option>
                  <option>Dompe</option>
                  <option>Gampaha</option>
                  <option>Ja-ela</option>
                  <option>Katana</option>
                  <option>Kelaniya</option>
                  <option>Mahara</option>
                </select>
                <!--<input name="region" type="text" class="form-control" id="titleid">-->
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Harvest Amount</label>
            <div class="col-sm-9">
                <input name="harvestedAmount" type="text" class="form-control" id="harvestedAmount" placeholder="XXX (kg)">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Cultivated Land(Hectares)</label>
            <div class="col-sm-9">
                <input name="cultivatedLand" type="text" class="form-control" id="releasedateid" placeholder="XXX (ha)">
            </div>
        </div>

          <hr>
             <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="confirmCheck">
                      <label class="form-check-label" for="confirmCheck">. . .I confirm all of the above provided information is accurate and valid with no false/incorrect data. </label>
                    </div>
                    <!-- end of confirmation -->
                    <div class="btn-submit">
                      <button type="submit" name="submit" class="btn btn-primary submitButton" id="submitButton" disabled data-toggle="tooltip" data-placement="right" title="Submit Details"> <i class="fa fa-arrow-circle-right mr-3" aria-hidden="true"></i>Submit Details</button> 
                    </div>

                  </form>
              </form>
          </div>


<!-- footer begins -->
@include('layouts.footer')
<!-- footer ends -->
  </div>
  </div>
  </body>
  <!-- function to enable submit button after confirmation checkbox -->
  <script>
    $("#confirmCheck").click(function() {
    $(".submitButton").attr("disabled", !this.checked);
    });
    </script>
</html>