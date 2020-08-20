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
<form method="post" action="/cropDetails" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Seasson(Yala/Maha)</label>
            <div class="col-sm-9">
            <select class="form-control" name="seasson">
                  <option></option>
                  <option>Yala</option>
                  <option>Maha</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Crop Name</label>
            <div class="col-sm-9">
                <input name="name" type="text" class="form-control" id="titleid" >
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label"> Variety</label>
            <div class="col-sm-9">
                <input name="variety" type="text" class="form-control" id="titleid" >
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Start Date</label>
            <div class="col-sm-9">
                <input name="sDate" type="date" class="form-control" id="sdate">
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">End Date</label>
            <div class="col-sm-9">
                <input name="eDate" type="date" class="form-control" id="edate">
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">Province</label>
            <div class="col-sm-9">
            <select class="form-control" name="province">
                  <option></option>
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
            <select class="form-control" name="district">
                  <option></option>
                  <option>Colombo</option>
                  <option>Gampaha</option>
                  <option>Kaluthara</option>
                  
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Region</label>
            <div class="col-sm-9">
                <input name="region" type="text" class="form-control" id="titleid">
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Harvest Amount</label>
            <div class="col-sm-9">
                <input name="amount" type="text" class="form-control" id="titleid">
            </div>
        </div>
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Cultivated Land(Hect)</label>
            <div class="col-sm-9">
                <input name="hect" type="text" class="form-control" id="releasedateid"
                       >
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit Details</button>
            </div>
        </div>
    </form>
</div>


<!-- footer begins -->
@include('layouts.footer')
<!-- footer ends -->
  </div>
  </div>
  </body>
</html>