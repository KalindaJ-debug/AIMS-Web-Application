<!DOCTYPE html>
<html lang="eng">

<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}

  <title>External Factors </title>
  
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
    <h1 class="display-3">External Factors</h1>    
    <div>
    <a style="margin: 19px;" href="/Entry-external-data" class="btn btn-primary">Add External Factors</a>
    </div>  
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          {{-- <td>Harvest ID</td> --}}
          <td>Reason</td>
          <!--<td>Reason</td>
          <td>New Reason</td>-->
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>

        @foreach($contacts as $contact)
          @php
            $harvest = App\Harvest::where('id', $contact->harvest_id)->first();
          @endphp
          @php
            $external_factors = App\External_factors::where('id', $contact->external_factor)->first();
          @endphp
        <tr>
            <td>{{$contact->id}}</td>
            {{-- <td>{{$contact->harvest_id}}</td> --}}
            <td>{{$contact->reason}}</td>
            <td>
                {{-- <a href="{{ route('crop-data.show',$contact->id)}}" class="btn btn-primary">View</a> --}}

            
                <form action="{{ route('crop-data.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                  {{-- <button class="btn btn-warning" type="submit">edit</button> --}}
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