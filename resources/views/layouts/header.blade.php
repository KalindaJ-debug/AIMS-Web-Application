{{-- CSS links  --}}
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/home.css') }}">

<!-- Font CSS -->
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">

<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!-- header begins -->
<div class="header" style="height:150px;background-color:#08260E;">
    <div class="row">
      <!-- logo and description -->
      <div class="col-6">
        <!-- horizontal card -->
        <div class="card mb-3" style="max-width:60%;background-color:#08260E;border:none;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="assets/img/DOA emblem.png" class="card-img" alt="headerLogo" style="width:120px;height:120px;margin-left:20px;margin-top:10px;margin-bottom:10px;">
          </div>
          <div class="col-md-8">
            <div class="card-body text-center" style="padding:30px;color:white;">
              <h5 class="card-title">Agriculture Information Management System | AIMS </h5>
              <p class="card-text">Department of Agriculture.</p>
            </div>
          </div>
        </div>
      </div>

      </div>
      <!-- return to language and login buttons -->
      <div class="col-6" style="height:150px;">

        <div class="card text-right" style="background-color:#08260E;margin-right:20px;border:none;">
        <div class="card-body">
        @guest
        <h5 class="card-title" style="color:white;margin-right:80px;"><i class="fas fa-globe mr-3"></i>Public</h5>
          @else
          <h5 class="card-title" style="color:white;margin-right:80px;"><i class="fas fa-globe mr-3"></i>{{ Auth::user()->role }}</h5>
        @endguest
          <p class="card-text" style="color:white;margin-right:80px;"><i class="fas fa-exchange-alt mr-3"></i>Change Language</p>
          <!-- buttons -->
          @guest
          <a href="{{ route('login') }}" class="btn btn-light" style="background-color:#10391C;color:white;width:300px;" data-toggle="tooltip" data-placement="top" title="Login to AIMS"><i class="fas fa-sign-in-alt mr-3"></i>Log In</a>
          @else
            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-light" style="background-color:#10391C;color:white;width:300px;" data-toggle="tooltip" data-placement="top" title="Logout from AIMS"><i class="fas fa-sign-in-alt mr-3"></i>Log Out</a>
          @endguest<!-- buttons end -->
        <a href="{{url('index')}}" class="btn btn-light" style="background-color:#10391C;color:white;width:300px;" data-toggle="tooltip" data-placement="top" title="Return to Language Options"><i class="fas fa-language mr-3"></i>Language</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </div>

      </div>
    </div>
  </div>
  <!-- header ends -->