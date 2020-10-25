<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!--Font css Link-->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">

  <!-- Bootstrap -->

  <title>Harvest Details Entry</title>
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" type="text/css" media="all">
  
</head>
<body> 
<!-- header begins -->
@include('layouts.header')
<!--header end-->

<!-- nav bar begins -->
@include('layouts.navbar')
<!-- nav bar ends -->

<div class="container">
<h3 class="display-5">Enter Harvest Details</h3>
<form method="post" action="/harvestDetails" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Farmer Name</label>
            <div class="col-sm-5">
                <select name="farmer_id" type="text" class="form-control">
            <!-- <option selected value="none">--Select Name--</option>-->
                   @foreach ($farmer as $farmers)
                      <option value='{{ $farmers->id }}' @if( $farmers->id == $land->farmer_id) selected @endif >{{ $farmers->firstName }} {{ $farmers->lastName }}</option>   
                   @endforeach  
                </select>
                <input type="hidden" id="land_id" name="land_id" value="{{$cultivation->land_id}}">
                <input type="hidden" id="cultivation_id" name="cultivation_id" value="{{$cultivation->id}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Seasson(Yala/Maha)</label>
            <div class="col-sm-5">
            <select class="form-control" name="season">
                <!--<option>--Select Season--</option>-->
                <!--  <option>Yala</option>-->
                  <option>Maha</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Crop Category</label>
            <div class="col-sm-5">
               <!--<input name="category_id" type="text" class="form-control" id="titleid" placeholder="Crop-Category">-->
                <select name="category_id" class="form-control">
               <!--   <option selected value="none">--Select Crop-Category--</option>-->
                    @foreach ($CropCategory as $crop_categories)
                      <option value='{{ $crop_categories->id }}'>{{ $crop_categories->name }}</option>   
                    @endforeach                              
                 </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Crop Name</label>
            <div class="col-sm-5">
            <select name="crop_id" class="form-control">
      <!--   <option selected value="none">--Select Crop-Name--</option>-->
             @foreach ($crop as $crops)
                <option value='{{ $crops->id }}'>{{ $crops->name }}</option>
             @endforeach 
           </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Variety</label>
            <div class="col-sm-5">
            <select name="variety_id" class="form-control">
        <!--      <option selected value="none">--Select Variety--</option> -->
              @foreach ($variety as $varieties)
                <option value='{{ $varieties->id }}'>{{ $varieties->name }}</option>
             @endforeach 
            </select>
        </div>
        </div>
        <div class="form-group row">
            <label for="startDate" class="col-sm-3 col-form-label">Harvest Date</label>
            <div class="col-sm-5">
                <input name="endDate" type="date" class="form-control" id="calendar123">
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">Province</label>
            <div class="col-sm-5">
            <select name="province_id" class="form-control">
            <!--  <option selected value="none">--Select Province--</option> -->
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
         <!--     <option selected value="none">--Select District--</option>-->
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
           <!--   <option selected value="none">--Select Region--</option>-->
               @foreach ($region as $regions)
                  <option value='{{ $regions->id }}'>{{ $regions->name }}</option>
              @endforeach
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label"> Harvest Amount</label>
            <div class="col-sm-5">
                <input name="harvestedAmount" type="text" class="form-control input-sm text-left amount" id="harvestedAmount" placeholder="XXX (kg)">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Harvested Land(ha)</label>
            <div class="col-sm-5">
                <input name="cultivatedLand" type="text" class="form-control input-sm text-left amount" id="releasedateid" placeholder="XXX (ha)">
            </div>
        </div>
        <hr/>
        <input type ="checkbox" id="chkddl" onlick="Enableddl(this)"/>
        Accept the Checkbox, if there any External Factor to reduced Harvest
        <hr/>
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">External Factor</label>
            <div class="col-sm-5">
            <select name="external_id" id ="DDL" disabled="disabled" class="form-control">
            <option selected value="none" >--Select External Factor--</option>
                <!--<input name="" type="text" class="form-control input-sm text-left amount" id="" placeholder="Land ID">-->
                @foreach ($external_factors as $external_factors)
                  <option value='{{ $external_factors->id }}'>{{ $external_factors->reason }}</option>
              @endforeach
            </select>
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
    
</body>
   
<!-- function to enable submit button after confirmation checkbox -->
  <script>
    $("#confirmCheck").click(function() {
    $(".submitButton").attr("disabled", !this.checked);
    });
  </script>

<!-- function to validate only decimal numbers are allowed in harvest amount field-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<!--date validation jquary function-->
  <script>
  var dateToday = new Date();
  var dates = $("#startDate, #endDate").datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 3,
    minDate: dateToday,
    onSelect: function(selectedDate) {
        var option = this.id == "startDate" ? "minDate" : "maxDate",
            instance = $(this).data("datepicker"),
            date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
    }
});
</script>

<!--js function for enable external factor etnry-->
<script>
    function Enableddl(chkddl){
      var ddl = document.getElementById("DDL");
      ddl.disabled=chkddl.checked ? false : true;
      if(!ddl.disabled){
        ddl.focus();
      }
    }
</script>
</html>
 