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
  <!--Font css Link-->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">

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
  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" type="text/css" media="all">
  
  <!--<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>-->
</head>
<body> <!-- onload='document.form1.seasson.focus()'>-->
<!-- header begins -->
@include('layouts.header')
<!--header end-->

<!-- nav bar begins -->
@include('layouts.navbar')
<!-- nav bar ends -->

<div class="container">
<h2 class="display-3">External Factors</h2> 
<form method="post" action="/externalFactors" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Harvest ID</label>
            <div class="col-sm-5">
                <select name="harvest_id" type="text" class="form-control">
               <!--   <option selected value="none">--Select ID--</option> -->
                 @foreach ($harvest as $harvests)
                      <option value='{{ $harvests->id }}' @if( $harvests->id == $harvests->id) selected @endif >{{ $harvests->id }}</option>   
                    @endforeach 
                </select> 
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Reason</label>
            <div class="col-sm-5">
            <select name="reason" type="text" class="form-control">
           <option selected value="none">--Select Reason--</option>
                     @foreach ($external_factors as $external_factors)
                      <option value='{{ $external_factors->id }}'>{{ $external_factors->reason }}</option>   
                    @endforeach 
                </select>
          </div>
          </div>
          <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Add a new External Factor</label>
            <div class="col-sm-5">
                <input name="externalFac" type="text" class="form-control" id="releasedateid" placeholder="Reason">
            </div>
        </div>
      <!--  <input type="radio" id="male" name="gender" value="male">
            <label for="male">No External Factors</label><br>
        <div class="form-group row">-->
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" name ='submit' class="btn btn-primary submitButton" id="submitButton"  data-placement="right" title="Submit Details"> <i class="fa fa mr-9" aria-hidden="true"></i> Submit </button>
            </div>
        </div>
        


</form>
</div>

<!-- footer begins -->
@include('layouts.footer')
<!-- footer ends -->
    
</body>
</html>
 