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
<body>
<!-- header begins -->
@include('layouts.header')
<!--header end-->

<!-- nav bar begins -->
@include('layouts.navbar')
<!-- nav bar ends -->
<div class="container">
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Cultivation List</h1>      
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Farmer Name</td>
          <td>Land Area</td>
          <td>Land Address</td>
          <td>Estimated Harvest Amount(Kg)</td>
          <td>Cultivated Land (acres)</td>
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
            $farmer = App\farmer::where('id', $contact->farmer_id)->first();
          @endphp
          @php
            $land = App\land::where('id', $contact->land_id)->first();
          @endphp
        <tr>
            <td>{{$contact->id}}</td>
            @if($farmer!==null)
            <td>{{$farmer->firstName}} {{$farmer->lastName}}</td> 
            @endif
            <td>{{$land->farmer->firstName}} {{$land->farmer->lastName}}</td>
            <td>{{$land->town}}</td> 
            <td>{{$land->addressNo}}</td> 
            <td>{{$contact->harvestedAmount}}     
            <td>{{$contact->cultivatedLand}}</td>
            <td>
                <a href="/Entry-harvest-data/{{$contact->id}}" class="btn btn-warning">Add Harvest Details</a>
                <a href="{{ route('crop-data.show',$contact->id)}}" class="btn btn-primary">View</a>
            
            
                <form action="{{ route('crop-data.destroy', $contact->id)}}" method="post">
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


<!-- footer begins -->
@include('layouts.footer')
<!-- footer ends -->
  </div>
  </div>
  </body>

</html>