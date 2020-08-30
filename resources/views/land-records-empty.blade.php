<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- header links -->

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

       <!-- view table begins -->
       <div class="container-xl">
      	<div class="table-responsive">
      		<div class="table-wrapper">
      			<div class="table-title" style="background:#457d43;">
      				<div class="row">
      					<div class="col-sm-6">
      						<h2>All Registered Land Records</b></h2>
                </div>

                @php
                  $farmer_id = Request::segment(2); //fetch farmer ID
                @endphp
                {{-- redirect to land registration page with farmer id --}}
              
      					<div class="col-sm-6">
                <form action="{{ route('registration.show', $farmer_id) }}" method="get">
      						<button type="submit" class="btn btn-success"><i class="fa fa-plus mr-3" aria-hidden="true"></i> <span>Register</span></button>
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
                      <th>No</th>
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
      				</tbody>
                  </table>
                  <br>
                  <div style="margin-left:300px;">
                    <div class="row">
                        <div class="col-1">
                            <img src="{{ url('assets/img/empty.png') }}" alt="empty" style="height:30px;"> 
                        </div>
                        
                        <div class="col-10">
                            <h5> Sorry there are no land records to be found </h5>
                        </div>
                      
                    </div>
                    
                </div> 
      		</div>
      	</div>
      </div>
       <!-- view table ends -->

     </div>

    
     <!-- body ends -->

     <!-- footer begins -->
    @include('layouts.footer')
     <!-- footer ends -->

     <!-- jquery validation links -->
     <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
     <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
     <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
     <!-- <script src="js/checkbox.js"></script> -->


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
