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
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Harvest Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('crop-data.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
            <div class="form-group">
                <label  class="col-xs-6 col-sm-6 col-md-4">Crop Name:</label>
                <p class="col-xs-6 col-sm-6 col-md-4" for="">{{ $product->name }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
            <div class="form-group">
                <label class="col-xs-6 col-sm-6 col-md-4">Variety:</label>
                <p class="col-xs-6 col-sm-6 col-md-4" for="">{{ $product->variety }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
            <div class="form-group">
                <label class="col-xs-6 col-sm-6 col-md-4">Start Date:</label>
                <p class="col-xs-6 col-sm-6 col-md-4" for="">{{ $product->sDate }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
            <div class="form-group">
                <label class="col-xs-6 col-sm-6 col-md-4">End Date:</label>
                <p class="col-xs-6 col-sm-6 col-md-4" for="">{{ $product->eDate }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
            <div class="form-group">
                <label class="col-xs-6 col-sm-6 col-md-4">Province:</label>
                <p class="col-xs-6 col-sm-6 col-md-4" for="">{{ $product->province }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
            <div class="form-group">
                <label class="col-xs-6 col-sm-6 col-md-4">District:</label>
                <p class="col-xs-6 col-sm-6 col-md-4" for="">{{ $product->district }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
            <div class="form-group">
                <label class="col-xs-6 col-sm-6 col-md-4">Region:</label>
                <p class="col-xs-6 col-sm-6 col-md-4" for="">{{ $product->region }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
            <div class="form-group">
                <label class="col-xs-6 col-sm-6 col-md-4">Harvest Amount:</label>
                <p class="col-xs-6 col-sm-6 col-md-4" for="">{{ $product->amount }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
            <div class="form-group">
                <label class="col-xs-6 col-sm-6 col-md-4">Cultivated Land:</label>
                <p class="col-xs-6 col-sm-6 col-md-4" for="">{{ $product->hect }}</p>
            </div>
        </div>
    </div>
</div>

<!-- footer begins -->
@include('layouts.footer')
<!-- footer ends -->
  </div>
  </div>
  </body>

</html>