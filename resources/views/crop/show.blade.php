<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   --}}
    <!-- scrool reveal api-->
    <script src="https://unpkg.com/scrollreveal"></script>

  <title>Show Harvest Details</title>
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
    
<!-- header begins -->
@include('layouts.header')
<!--header end-->

<!-- nav bar begins -->
@include('layouts.navbar')
<!-- nav bar ends -->

<div class="container-fluid">

<div class="row bg-success text-white text-center" style="margin-top:50px;">
    <div class="col-lg-6">
        <h2 > Cultivation Details for Farmer</h2>
    </div>
    <div class="col-lg-6">
       <a class="btn btn-success" href="{{ route('crop-data.index') }}"> Back</a>
    </div>
</div>
          <br><br>
          
    <div class="row" style="margin-left:10px;">
        {{-- form data begins  --}}
        <div class="col-8" style="margin-left:150px;">
            {{-- row #1 begins  --}}
            <div class="row" >
                <div class="col-2">
                    <label>Farmer Name:</label>
                </div>
                <div class="col-10">
                    @foreach ($land as $item)
                        <p for="">{{ $item->farmers->firstName }} {{ $item->farmers->lastName }}</p>
                    @endforeach
                </div>
                
        </div>

        <div class="row">
            <div class="col-2">
                <label>Season :</label>
            </div>
            <div class="col-10">
                
                    <p for="">{{ $product->season }}</p>
            
            </div>
            
        </div>

        <div class="row">
            <div class="col-2">
                <label>Crop Category:</label>
            </div>
            <div class="col-10">
                @foreach ($land as $item)
                    <p for="">Example Category</p>
                @endforeach
            </div>
            
          </div>


        <div class="row">
            <div class="col-2">
                <label>Crop Name:</label>
            </div>
            <div class="col-10">
                @foreach ($crop_variety as $item)
                    <p for="">{{ $item->crops->name }}</p>
                @endforeach
            </div>
            
        </div>

        <div class="row">
            <div class="col-2">
                <label>Crop Variety:</label>
            </div>
            <div class="col-10">
                @foreach ($crop_variety as $item)
                    <p for="">{{ $item->name}}</p>
                @endforeach
            </div>
            
        </div>

        <div class="row">
            <div class="col-2">
                <label>Start Date :</label>
            </div>
            <div class="col-10">
                
                    <p for="">{{ $product->startDate }} </p>
                
            </div>
            
        </div>

        <div class="row">
            <div class="col-2">
                <label>End Date :</label>
            </div>
            <div class="col-10">
                
                    <p for="">{{ $product->endDate }} </p>
                
            </div>
            
        </div>

        <div class="row">
            <div class="col-2">
                <label>Province :</label>
            </div>
            <div class="col-10">
                @foreach ($land as $item)
                    <p for="">{{ $item->provinces->name }}</p>
                @endforeach
            </div>
            
        </div>

        <div class="row">
            <div class="col-2">
                <label>District :</label>
            </div>
            <div class="col-10">
                @foreach ($land as $item)
                    <p for="">{{ $item->districts->name }}</p>
                @endforeach
            </div>
            
        </div>

        <div class="row">
            <div class="col-2">
                <label>Region :</label>
            </div>
            <div class="col-10">
                @foreach ($land as $item)
                    <p for="">{{ $item->regions->name }}</p>
                @endforeach
            </div>
            
        </div>

        <div class="row">
            <div class="col-2">
                <label>Harvested Amount:</label>
            </div>
            <div class="col-10">
                
                    <p for="">{{ $product->harvestedAmount }} </p>
                
            </div>
            
        </div>

        <div class="row">
            <div class="col-2">
                <label>Cultivated Land :</label>
            </div>
            <div class="col-10">
                
                    <p for="">{{ $product->cultivatedLand }} </p>
                
            </div>
            
        </div>
        </div>
        {{-- image  --}}
        <div class="col-2">
            <img class="paddy" src="{{ url('assets/img/plant.png') }}" alt="Cultivated Image" style="height:200px;width:200px;margin-top:100px;">
        </div>       

    </div>
    {{-- end of row  --}}
</div>
  </div>

  <!-- footer begins -->
    @include('layouts.footer')
    <!-- footer ends -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<script>
    ScrollReveal().reveal('.paddy',{
         duration:2000,
         origin: 'right',
         distance: '300px',
         delay:500
       });
</script>  

</body>

</html>