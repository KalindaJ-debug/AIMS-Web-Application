<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8">

  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <!--Font css Link--> --}}
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">

  <title>Cultivation</title>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
</head>
<body> <!-- onload='document.form1.seasson.focus()'>-->
<!-- header begins -->
@include('layouts.header')
<!--header end-->

<!-- nav bar begins -->
@include('layouts.navbar')
<!-- nav bar ends -->
<br> <br>
<h1 style="margin-left:100px;">Enter Cultivation Details</h1> <br> <br>
<div class="container">
{{-- <h1>Enter Cultivation Details</h1> --}}
<form method="post" name="form1" action="/cropDetails" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Farmer Name</label>
            <div class="col-sm-5">
                <select name="farmer_id" id="farmer_id" class="form-control" onchange="farmerChange()">
                  <option selected value="none">--Select Name--</option>
                   @foreach ($farmer as $farmers)
                      <option value='{{ $farmers->id }}'>{{ $farmers->firstName }} {{ $farmers->lastName }}</option>   
                   @endforeach  
                </select>
                <input type="hidden" id="land_id" name="land_id">  
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">land Address</label>
            <div class="col-sm-5">
            <select name="land_id" id="landId" class="lAddress form-control"  onclick='landChange()'>
            <option selected value="none">--Select Address--</option>
                <!--<input name="" type="text" class="form-control input-sm text-left amount" id="" placeholder="Land ID">-->
                @foreach ($land as $lands)
            <option value='{{ $lands->id }}'>{{ $lands->addressNo }} {{ $lands->streetName}} {{ $lands->laneName}}</option>
              @endforeach
            </select>
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
                <select name="category_id" class="form-control dynamic" data-dependent="crop_categories" id="category_id" onchange='categorychange()'>
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
            <select name="crop_id" id="crop_id" class="form-control" data-dependent="crops" onchange='cropchange()'>
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
            <select name="variety_id" id="variety_id" class="form-control" data-dependent="varieties">
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
            <select name="province_id" class="form-control" id="provinceid" onchange='provincechange()'>
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
            <select name="district_id" class="form-control" id="district_id">
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
            <select name="region_id" class="form-control" id="region_id">
              <!--<option selected value="none">--Select Region--</option>-->
               @foreach ($region as $regions)
                  <option value='{{ $regions->id }}'>{{ $regions->name }}</option>
              @endforeach
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Estimated Harvest Amount(Kg)</label>
            <div class="col-sm-5">
                <input name="harvestedAmount" type="text" maxlength="6" class="form-control input-sm text-left amount" id="harvestedAmount" placeholder="XXX (kg)">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Cultivated Land(ha)</label>
            <div class="col-sm-5">
                <input name="cultivatedLand" type="text" maxlength="4" class="form-control input-sm text-left amount" id="releasedateid" placeholder="XXX (ha)">
            </div>
        </div>
        <hr>
          <div class="form-group form-check">
             <input type="checkbox" class="form-check-input" id="confirmCheck">
             <label class="form-check-label" for="confirmCheck">I confirm all of the above provided information is accurate and valid with no false/incorrect data. </label>
          </div>
          <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" name ='submit' class="btn btn-primary submitButton" id="submitButton" disabled data-toggle="tooltip" data-placement="right" title="Submit Details"> <i class="fa fa mr-9" aria-hidden="true"></i> Submit Details</button>
            </div>
        </div>
       </form>
    </div>

      </div>
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


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<!--date validation jquary function-->

  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
        <script type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css"></script>


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
  function cropchange() {
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

  function farmerChange(){
    
    var farmer = document.getElementById('farmer_id').value;
    console.log("Farmer Changed");

    $('#landId').empty();
    var select = document.getElementById('landId');

    @foreach ($land as $lands)
    
        if ('{{$lands->farmer_id}}' == farmer) {
          var opt = document.createElement('option');
          opt.appendChild( document.createTextNode('{{$lands->addressNo}} {{$lands->streetName}} {{$lands->laneName}}') );
          opt.value = '{{$lands->id}}'; 
          select.appendChild(opt); 

        } //end of if
                    
      @endforeach

  }//end of farmer change function

  function landChange() {
    console.log("Land Changed");
    var land = document.getElementById('landId').value;

    @foreach ($land as $lands) 
      if ('{{$lands->id}}' == land) {
        $('#provinceid').empty();
        var province = document.getElementById('provinceid');

        var opt = document.createElement('option');
        opt.appendChild( document.createTextNode('{{$lands->provinces->name}}'));
        opt.value = '{{$lands->provinces->id}}';
        province.appendChild(opt);

        $('#district_id').empty();
        var district = document.getElementById('district_id');

        var opt = document.createElement('option');
        opt.appendChild( document.createTextNode('{{$lands->districts->name}}'));
        opt.value = '{{$lands->districts->id}}';
        district.appendChild(opt);

        $('#region_id').empty();
        var region = document.getElementById('region_id');

        var opt = document.createElement('option');
        opt.appendChild( document.createTextNode('{{$lands->regions->name}}'));
        opt.value = '{{$lands->regions->id}}';
        region.appendChild(opt);
      }
    @endforeach
  } //end of land change function     
</script>


</html>