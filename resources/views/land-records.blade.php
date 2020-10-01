<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- header links here-->

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/feedbackTable.css')}}">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- scrool reveal api-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Land Information | AIMS</title>
  </head>
  <body style="font-family: 'Raleway', sans-serif; background-color: white;">
    <!-- header begins -->
    @include('layouts.header')
    <!-- header ends -->

    <!-- nav bar begins -->
    @include('layouts.navbar')

    <!-- nav bar ends -->

     <!-- body begins -->
     <div class="content">
       <!-- feedback Management Public View  -->
     <h1 class="display-5" style="margin-left:200px;margin-top:40px;">{{ $firstName }} {{ $lastName }} </h1>

       <!-- view table begins -->
       <div class="container-xl">
      	<div class="table-responsive">
      		<div class="table-wrapper">
      			<div class="table-title" style="background:#457d43;">
      				<div class="row">
      					<div class="col-sm-6">
      						<h2>All Registered Land Records</b></h2>
      					</div>
      					<div class="col-sm-6">
                  {{-- <a class="btn btn-success"><i class="fa fa-sort mr-3" aria-hidden="true"></i> <span>Sort</span></a> --}}
                  @php
                       $farmer_id = Request::segment(2); //fetch farmer ID
                  @endphp
                  <form action="{{ route('registration.show', $farmer_id) }}" method="get">
                    <button type="submit" class="btn btn-success"><i class="fa fa-plus mr-3" aria-hidden="true"></i> <span>Register</span></button>
                  </form>
                  <a href="#deleteFeedback" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash mr-3" aria-hidden="true"></i> <span>Delete All Records</span></a>
                  <form action="{{ url('exportAllLandRecordsPDF', $farmer_id)}}" method="get">
                    <button type="submit" class="btn btn-dark"><i class="fa fa-print mr-3" aria-hidden="true"></i> <span>Export to PDF</span></button>
                  </form>
      					</div>
      				</div>
      			</div>
      			<table class="table table-striped table-hover">
      				<thead>
      					<tr>
      						<th>
      							{{-- <span class="custom-checkbox">
      								<input type="checkbox" id="selectAll" class="selectAll">
      								<label for="selectAll"></label>
                    </span> --}}
                    
      						</th>
                      <th>Land ID</th>
                      <th>Address No</th>  
                      <th>Lane</th>
                      <th>City</th>  
                      <th>District</th>
                      <th>Province</th>
                      <th>Land Extent (ha)</th>
                      <th>Actions</th>
      					</tr>
      				</thead>
      				<tbody>

                @php
                    $i = 0;
                @endphp

                @if ($count <= 0)
                  {{"$count Records Found"}}

                @elseif($count > 0)
                  {{ "$count Records Found" }}
                  {{-- row begins --}}
                  @foreach ($landRecords as $item)
                  
                  <form action="{{$item->id}}/edit" method="get" name="edit">
                    <input type="hidden" name="landId" value="{{$item->id}}">
                      {{ csrf_field() }}
                      <tr>
                        <td>
                          {{-- <span class="custom-checkbox">
                          <input type="checkbox" name="options[]" value="{{ $i++ }}">
                            <label for="checkbox1"></label>
                          </span> --}}
                          
                        </td>
                        <td> {{ $item->id }} </td>
                        <td>{{ $item->addressNo }}</td>  
                        <td>{{$item->laneName}}</td>
                        <td>{{$item->city}}</td>
                        <td>{{$item->districts->name}}</td>
                        <td>{{$item->provinces->name}}</td>
                        <td class="font-italic">{{$item->landExtend}}</td>
                        <td>
                        <a> <button type="submit" style="border: none;background:transparent;width:35px;"><i class="fa fa-eye" data-toggle="tooltip" title="Edit" aria-hidden="true"></i> </button> </a>
                          <a href="#deleteSelectedFeedback" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>
                  </form>
                  @endforeach
                {{-- row ends  --}}
                @endif

      				</tbody>
      			</table>
      			<div class="clearfix">
            <div class="hint-text">Showing <b>{{ $count }}</b> out of <b> {{ $landRecords->total() }} </b> entries</div>
      				<ul class="pagination">
              <li class="page-item">{{ $landRecords->links() }}</li>
      				</ul>
      			</div>
      		</div>
      	</div>
      </div>
       <!-- view table ends -->

       <!-- feedback Management Public View -->

     </div>

     <!-- Modals -->

     <!-- Delete Selected Modal begins -->
     <div id="deleteSelectedFeedback" class="modal fade">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form action="{{$item->id}}" method="post" name="delete">
            @method('delete')
            {{ csrf_field() }}
            <div class="modal-header">
              <h4 class="modal-title">Delete Registered Land Records</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
            <img src="{{ url('assets/img/delete.png') }}" alt="delete" style="margin-left:350px;margin-top:20px;">
              <p class="text-center font-weight-bold" style="font-size:20px;margin-top:20px;">Are you sure you want to delete these registered land record(s)?</p>
              <p class="text-danger text-center font-weight-normal" style="font-size:17px;"> <i class="fa fa-exclamation-triangle mr-3" aria-hidden="true"></i>This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <button type="submit" class="btn btn-danger" value="Delete">Delete </button>
            </div>
          </form>
        </div>
      </div>
    </div>
     <!-- Delete Selected Modal ends -->

     {{-- Delete All Records Modal begins  --}}
     <div id="deleteFeedback" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          <form action="{{ route('land-records.store') }}" method="POST" name="deleteAll">
              {{ csrf_field() }}
            <input type="hidden" name="farmerid" value="{{$farmerID}}">
              <div class="modal-header">
                <h4 class="modal-title">Delete All Registered Land Records</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
              <img src="{{ url('assets/img/quit.png') }}" alt="delete" style="margin-left:350px;margin-top:20px;">
                <p class="text-center font-weight-bold" style="font-size:20px;margin-top:20px;">Are you sure you want to delete all the registered land records?</p>
                <p class="text-danger text-center font-weight-normal" style="font-size:17px;"> <i class="fa fa-exclamation-triangle mr-3" aria-hidden="true"></i>This action cannot be undone.</p>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <button type="submit" class="btn btn-danger" value="Delete">Delete </button>
              </div>
            </form>
          </div>
        </div>
      </div>
     {{-- Delete All Records modal ends  --}}

     <!-- body ends -->

     <!-- footer begins -->
    @include('layouts.footer')
     <!-- footer ends -->

     <!-- jquery validation links -->
     <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
     <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
     <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
     <!-- <script src="js/checkbox.js"></script> -->

     <script type="text/javascript">
     // Checkbox scripting
     $(document).ready(function(){
      // Select
      $(document).ready(function() {
        $('.selectAll').click(function() {
          $('input[type="checkbox"]').prop('checked', this.checked);
        })
      });

      });

     </script>

     <!-- Animations -->
     <script type="text/javascript">

       ScrollReveal().reveal('.content', {
         duration:2000,
         origin:'bottom',
         distance: '200px',
         delay:100
       });

     </script>

  </body>
