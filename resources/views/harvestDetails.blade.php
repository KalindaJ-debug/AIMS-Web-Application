<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   --}}
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
<h1>Enter Harvest Details</h1>
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
                <select name="category_id" id="category_id" class="form-control" onchange='categorychange()'>
               <!--   <option selected value="none">--Select Crop-Category--</option>-->
                    @foreach ($CropCategory as $crop_categories)
                      <!-- <option value='{{ $crop_categories->id }}' @if($crop_categories->id == $land->crop_categories) selected @endif>{{ $crop_categories->name }}</option>   -->
                      <option value='{{ $crop_categories->id }}' @if( $crop_categories->id == $cultivation->category_id) selected @endif >{{$crop_categories->name }}</option> 
                    @endforeach                              
                 </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Crop Name</label>
            <div class="col-sm-5">
            <select name="crop_id" id="crop_id" class="form-control" onchange='cropchange()'>
      <!--   <option selected value="none">--Select Crop-Name--</option>-->
             @foreach ($crop as $crops)
                <!-- <option value='{{ $crops->id }}'>@if($crops->id == $land->crops) selected @endif>{{ $crops->name }}</option> -->
                <option value='{{ $crops->id }}' @if( $crops->id == $cultivation->crop_id) selected @endif >{{$crops->name }}</option> 
             @endforeach 
           </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Variety</label>
            <div class="col-sm-5">
            <select name="variety_id" id="variety_id" class="form-control">
        <!--      <option selected value="none">--Select Variety--</option> -->
              @foreach ($variety as $varieties)
                <!-- <option value='{{ $varieties->id }}'> @if( $varieties->id == $land->varieties) selected @endif > {{ $varieties->name }}</option> -->
          <option value='{{ $varieties->id }}' @if( $varieties->id == $cultivation->variety_id) selected @endif >{{$varieties->name }}</option>
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
                  <option value='{{ $provinces->id }}' @if( $provinces->id == $cultivation->province_id) selected @endif >{{ $provinces->name }}</option>
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
               <option value='{{ $districts->id }}' @if( $districts->id == $cultivation->district_id) selected @endif >{{$districts->name }}</option>

                  
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
                <input name="harvestedAmount" type="text" maxlength="6" class="form-control input-sm text-left amount" id="harvestedAmount" placeholder="XXX (kg)">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Harvested Land(ha)</label>
            <div class="col-sm-5">
                <input name="cultivatedLand" type="text" maxlength="4" onchange ="validatecultivateland()" class="form-control input-sm text-left amount" id="cultivatedLand" placeholder="XXX (ha)">
                <input type="hidden" id="cultivatedLandToCompare" name="cultivatedLandToCompare" value="{{$cultivation->cultivatedLand}}">
            </div>
        </div>
        <!--<hr/>
        <input type ="checkbox" id="chkddl" onlick="Enableddl(this)"/>
        Accept the Checkbox, if there any External Factor to reduced Harvest
        <hr/>-->
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">External Factor</label>
            <div class="col-sm-5">
            <select name="external_id" id ="DDL" disabled="disable" class="form-control">
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

{{-- Bootstrap  --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 

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
    function validatecultivateland(){
      var ddl = document.getElementById("DDL");
      var cultivatedLand = document.getElementById("cultivatedLand");
      var cultivatedLandToCompare = document.getElementById("cultivatedLandToCompare");

      if(Number(cultivatedLandToCompare.value)> Number(cultivatedLand.value) && (ddl.disabled == true)){
      ddl.disabled = false;
      
      }
    }
  
</script>
<script>
/*$(document).ready(function(){
  $('#cultivatedLand').change(function(){
  alert("test");
  /* if($(this).val() != '')
    {
      var land_id = $(this).val();
      
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url:'/validate/cultivatedLand',
        method:"GET",
        data:{land_id:land_id, _token:_token},
        success:function(result)
        {
          console.log(result); 
          $('#land_id').val(result['id']);
        }
      })
    }
  
  });
});*/
</script> 
<script>

</script>
<script>
function categorychange(){
  console.log("category change");
  var cropCategory = document.getElementById('category_id').value;

  $('#crop_id').empty();
  var sel = document.getElementById('crop_id');
  console.log(cropCategory);
  @foreach ($crop as $crops)

  if ('{{$crops->type_id}}' == cropCategory){
    var opt = document.createElement('option');
    opt.appendChild( document.createTextNode('{{$crops->name}}'));
    opt.value = '{{$crops->id}}';
    sel.appendChild(opt);

  }
  @endforeach
}
</script>
<script>
function cropchange(){
  console.log("crop change");
  var Crop = document.getElementById('crop_id').value;

  $('#variety_id').empty();
  var sel = document.getElementById('variety_id');
  console.log(Crop);
  @foreach ($variety as $varieties)

  if ('{{$varieties->crop_id}}' == Crop){
    var opt = document.createElement('option');
    opt.appendChild( document.createTextNode('{{$varieties->name}}'));
    opt.value = '{{$varieties->id}}';
    sel.appendChild(opt);

  }
  @endforeach
}
</script>
</html>
 