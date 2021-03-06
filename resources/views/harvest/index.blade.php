<!DOCTYPE html>
<html lang="eng">

<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   --}}
  <!-- Bootstrap -->

  <title>Harvest Details</title>
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  
  <style>

  .table{
    font-family:sans-serif;
    border-collapse: collapse;
  }
  
  .table thead {
    background: #0D6319;
    color: #ffffff;

  }
  </style>
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
<div class="col-12">
  <br>
    <h1 class="display-3">Harvest Details</h1>    
    <div>
   
    <a style="margin: 19px;" href="/getPDF" class="btn btn-warning">Export to Pdf</a>
    </div>  
  <table class="table table-striped">
    <thead>
        <tr>
         <!-- <td>ID</td> -->
          <td>Farmer Name</td>
          <td>Season</td>
          <td>Category</td>
          <td>Crop Name</td>
          <td>Variety</td>
          <td>Harvest Date</td>
          <td>Province</td>
          <td>District</td>
          <td>Region</td>
          <td>Harvested Amount (Kg)</td>
          <td>Cultivated Land (ha)</td>
          <td>External Factor</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>

        @foreach($contacts as $contact)
          @php
            $category = App\CropCategory::where('id', $contact->category_id)->first();
          @endphp
           @php
             $crop = App\Crop::where('id', $contact->crop_id)->first();
          @endphp
           @php
             $variety = App\Variety::where('id', $contact->variety_id)->first();
          @endphp
           @php
             $province = App\Province::where('id', $contact->province_id)->first();
          @endphp
           @php
             $district = App\District::where('id', $contact->district_id)->first();
          @endphp
           @php
             $region = App\Region::where('id', $contact->region_id)->first();
          @endphp
          @php
            $external_factors = App\external_factors::where('id', $contact->external_id)->first();
          @endphp
          @php
            $land = App\Land::where('id', $contact->land_id)->first();
          @endphp
        <tr>
            <!--<td>{{$contact->id}}</td>-->
            <td>{{$land->farmers->firstName}} {{$land->farmers->lastName}}</td>           
            <td>{{$contact->season}}</td>
            <td>{{$category->name}}</td>
            <td>{{$crop->name}}</td>
            <td>{{$variety->name}}</td>
            <td>{{$contact->endDate}}</td>
            <td>{{$province->name}}</td>
            <td>{{$district->name}}</td>
            <td>{{$region->name}}</td>
            <td>{{$contact->harvestedAmount}}</td>
            <td>{{$contact->cultivatedLand}}</td>
            <td>@if($external_factors!==null)
            {{$external_factors->reason}} @endif</td>
            <td>
                <button class="btn btn-warning" type="submit">Edit</button>
                <!--<a href="{{ route('crop-data.show',$contact->id)}}" class="btn btn-primary">View</a>-->
            </td>
            <td>
                <form action="{{ route('harvest-data.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach 
    </tbody>
  </table>
<div>
</div>
</div>

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
  </div>
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
</html>