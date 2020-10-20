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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<form method="post" name="form1" action="/cropDetails" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Farmer Name</label>
            <div class="col-sm-5">
                <select name="farmer_id" id="farmer_id" class="form-control">
                  <option selected value="none">--Select Name--</option>
                   @foreach ($farmer as $farmers)
                      <option value='{{ $farmers->id }}'>{{ $farmers->firstName }} {{ $farmers->lastName }}</option>   
                   @endforeach  
                </select>
                <input type="hidden" id="land_id" name="land_id">
               
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Seasson(Yala/Maha)</label>
            <div class="col-sm-5">
            <select class="form-control" name="season">
                  <option>--Select Season--</option>
                  <option>Yala</option>
                  <option>Maha</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Crop Category</label>
            <div class="col-sm-5">
               <!--<input name="category_id" type="text" class="form-control" id="titleid" placeholder="Crop-Category">-->
                <select name="category_id" class="form-control dynamic" data-dependent="crop_categories">
                  <option selected value="none">--Select Crop Category--</option>
                    @foreach ($CropCategory as $crop_categories)
                      <option value='{{ $crop_categories->id }}'>{{ $crop_categories->name }}</option>   
                    @endforeach                              
                 </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Crop Name</label>
            <div class="col-sm-5">
            <select name="crop_id" class="form-control" data-dependent="crops">
              <option selected value="none">--Select Crop-Name--</option>
             @foreach ($crop as $crops)
                <option value='{{ $crops->id }}'>{{ $crops->name }}</option>
             @endforeach 
           </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Variety</label>
            <div class="col-sm-5">
            <select name="variety_id" class="form-control" data-dependent="varieties">
              <option selected value="none">--Select Variety--</option>
              @foreach ($variety as $varieties)
                <option value='{{ $varieties->id }}'>{{ $varieties->name }}</option>
             @endforeach 
            </select>
        </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Cultivation Start Date</label>
            <div class="col-sm-5">
                <input name="startDate" type="date" class="form-control" id="startDate" placeholder="select Date">
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Estimated Harvest Date</label>
            <div class="col-sm-5">
                <input name="endDate" type="date" class="form-control" id="endDate">
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">Province</label>
            <div class="col-sm-5">
            <select name="province_id" class="form-control">
            <!--  <option selected value="none">--Select Province--</option>-->
              @foreach ($province as $provinces)
                  <option value='{{ $provinces->id }}'>{{ $provinces->name }}</option>
              @endforeach
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">District</label>
            <div class="col-sm-5">
            <select name="district_id" class="form-control">
             <!-- <option selected value="none">--Select District--</option>-->
               @foreach ($district as $districts)
                  <option value='{{ $districts->id }}'>{{ $districts->name }}</option>
              @endforeach
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Region</label>
            <div class="col-sm-5">
            <select name="region_id" class="form-control">
              <!--<option selected value="none">--Select Region--</option>-->
               @foreach ($region as $regions)
                  <option value='{{ $regions->id }}'>{{ $regions->name }}</option>
              @endforeach
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Estimated Harvest Amount</label>
            <div class="col-sm-5">
                <input name="harvestedAmount" type="text" class="form-control input-sm text-left amount" id="harvestedAmount" placeholder="XXX (kg)">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Cultivated Land(acres)</label>
            <div class="col-sm-5">
                <input name="cultivatedLand" type="text" class="form-control input-sm text-left amount" id="releasedateid" placeholder="XXX (acres)">
            </div>
        </div>
        <hr>
          <div class="form-group form-check">
             <input type="checkbox" class="form-check-input" id="confirmCheck">
             <label class="form-check-label" for="confirmCheck">. . .I confirm all of the above provided information is accurate and valid with no false/incorrect data. </label>
          </div>
          <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" name ='submit' class="btn btn-primary submitButton" id="submitButton" disabled data-toggle="tooltip" data-placement="right" title="Submit Details"> <i class="fa fa mr-9" aria-hidden="true"></i> Submit Details</button>
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
<!-- function to enable submit button after confirmation checkbox -->
  <script>
    $("#confirmCheck").click(function() {
    $(".submitButton").attr("disabled", !this.checked);
    });
  </script>
<!-- function to validate only decimal numbers are allowed in harvest amount field-->

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<!--date validation jquary function-->
<!-- <script>
    $(document).ready(function(){
      // $("#startDate").datePicker({
      $("#startDate").datepicker({
        showAnim: 'drop',
        numberOfMonth:1,
        dateFormat:'dd-MM-yy',
        // minDate: "2020-11-09"
        minDate: new Date()
        // onClose:function(selectedDate){
        //   $('#endDate').datePicker("option","minDate",selectedDate);
        // }
      });
    });
  </script>-->
  <!-- Animations -->
<script type="text/javascript">

ScrollReveal().reveal('.container', {
  duration:2000,
  origin:'bottom',
  distance: '200px',
  delay:100
});
</script>
<script type="text/javascript">
$(function() {
  $('.amount').mask('######',{reverse : true});

});
</script>
<!-- ajax data view change -->
<script>
$(document).ready(function(){
  $('#farmer_id').change(function(){
    if($(this).val() != '')
    {
      var farmer_id = $(this).val();
      
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url:'/farmer_id',
        method:"GET",
        data:{farmer_id:farmer_id, _token:_token},
        success:function(result)
        {
          console.log(result); 
          $('#land_id').val(result['id']);
        }
      })
    }
    
  });
});
</script>

</html>