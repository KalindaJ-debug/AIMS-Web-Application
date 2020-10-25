<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8">

  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!--Font css Link-->
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

<div class="container">
<h1>Enter Cultivation Details</h1>
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
            <label for="titleid" class="col-sm-3 col-form-label">land Address</label>
            <div class="col-sm-5">
            <select name="land_id" id="landId" class="lAddress form-control"  onchange='landChange()'>
            <option selected value="none">--Select Address--</option>
                <!--<input name="" type="text" class="form-control input-sm text-left amount" id="" placeholder="Land ID">-->
                @foreach ($land as $lands)
                  <option value='{{ $lands->id }}'>{{ $lands->addressNo }}</option>
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
             <label class="form-check-label" for="confirmCheck">. . .I confirm all of the above provided information is accurate and valid with no false/incorrect data. </label>
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
  }      
</script>

<script>
$(document).ready(function(){
  $('#farmer_id').change(function(){

    console.log("working");
    if($(this).val() != '')
    {
      var farmer_id = $(this).val();
      
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url:'/farmer_land',
        method:"GET",
        data:{farmer_id:farmer_id, _token:_token},
        
        success:function(data)
        {

          // console.log(data);
          
         var options = ""; 
         $.each(data, function(i,r){

          console.log(data);
          options+="<option value="+r['id']+">"+r['addressNo']+"</option>";
          // options+="<option value="+r['id']+">"+r['province_id']+"</option>";
         });
         // console.log("farmer_land");console.log(result); 
          $('#landId').html(options);
          //$('#province_id').html(options);
        }
      })
    }
    
  });
});
</script>

<script type="text/javascript">

$(document).ready(function(){
  $('#farmer_id').change(function(){

    console.log("working");
    if($(this).val() != '')
    {
      var farmer_id = $(this).val();
      
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url:'/farmer_land',
        method:"GET",
        data:{farmer_id:farmer_id, _token:_token},
        
        success:function(data)
        {

          // console.log(data);
          
         var options = ""; 
         $.each(data, function(i,r){

          console.log(data);
          options+="<option value="+r['id']+">"+r['province_id']+"</option>";
          // options+="<option value="+r['id']+">"+r['province_id']+"</option>";
         });
         // console.log("farmer_land");console.log(result); 
          $('#provinceid').html(options);
          //$('#province_id').html(options);
        }
      })
    }
    
  });
});
// $(document).ready(function(){
//   $('#landId').change(function(){

//     console.log("working2");
//     if($(this).val() != '')
//     {
//       var landId = $(this).val();

//       console.log(landId);
      
//       var _token = $('input[name="_token"]').val();
//       $.ajax({
//         url:'/farmer_address',
//         method:"GET",
//         data:{addressNo:landId, _token:_token},
//         success:function(data)
//         {

//           console.log(data);
//          var options = ""; 
//          $.each(data, function(i,r){
//           options+="<option value="+r['id']+">"+r['province_id']+"</option>";
//           //options+="<option value="+r['id']+">"+r['province_id']+"</option>";
//          });
//          // console.log("farmer_land");console.log(result); 
//           $('#province_id').html(options);
//           //$('#province_id').html(options);
//         }
//       })
//     }
    
//   });
// });

// $(document).ready(function(){

//   $(document).on('change','.lAddress', function(){

//     console.log("working");

//     var addresId =$(this).val();

//     console.log(addresId);
//     var div=$(this).parent().parent();
//     var op= "";

//     $.ajax({

//       type:'get',
//       url:'/farmer_land',
//       data: {'id':addresId},
//       success.function($data){

//         console.log('success');
//         console.log(data);
//         console.log(data.length);
//       }

//     });


//   });
// });


</script>


            
          
        
// $(document).ready(function(){
//   $('#landId').change(function(){

//     console.log("working");
//     if($(this).val() != '')
//     {
//       var farmer_id = $(this).val();
      
//       var _token = $('input[name="_token"]').val();
//       $.ajax({
//         url:'/farmer_land',
//         method:"GET",
//         data:{farmer_id:farmer_id, _token:_token},
        
//         success:function(data)
//         {

//           // console.log(data);
          
//          var options = ""; 
//          $.each(data, function(i,r){

//           console.log(data);
//           options+="<option value="+r['id']+">"+r['district_id']+"</option>";
//           // options+="<option value="+r['id']+">"+r['province_id']+"</option>";
//          });
//          // console.log("farmer_land");console.log(result); 
//           $('#district_id').html(options);
//           //$('#province_id').html(options);
//         }
//       })
//     }
    
//   });
// });


</html>