<!-- External CSS -->
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/home.css') }}">

<!-- Font CSS -->
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">

<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

 <!-- nav bar begins -->
 <nav class="navbar navbar-expand-md navbar-dark">
    <!-- <a class="navbar-brand" href="#">Home</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="{{ url('home') }}"> Home <span class="sr-only">(current)</span></a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="{{url('feedback')}}">Contact Us</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Crop Information
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('cropInformation') }}">All Crop Information</a>
          <a class="dropdown-item" href="{{ url('publicMainCrops') }}">Main Crops</a>
          </div>
        </li>

        {{-- <li class="nav-item">
        <a class="nav-link" href="{{ url('cropInformation') }}">Crop List</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('publicMainCrops') }}">Main Crops</a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">Feedback</a>
        </li> --}}
        {{-- Admin Links  --}}
        @guest
          @else
            @if (Auth::user()->role == 'Admin')
              <li class="nav-item">
              <a class="nav-link" href="{{url('admindash')}}">Admin Dashboard</a>
              </li>
            @endif
        @endguest

        @guest
          @else
            @if (Auth::user()->role == 'Admin')
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Crop Management
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('crop') }}">Crop Management</a>
              <a class="dropdown-item" href="{{ url('crop-data') }}">Crop Cultivation</a>
              <a class="dropdown-item" href="{{ url('harvest-data') }}">Harvest Management</a>
              <a class="dropdown-item" href="{{ url('external-data') }}">External Factors</a>
              </div>
            </li>
            @endif
        @endguest

        @guest
          @else
            @if (Auth::user()->role == 'Admin')
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Users
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('register') }}">User Registration</a>
              <a class="dropdown-item" href="{{ url('adminuser') }}">User Management</a>
              <a class="dropdown-item" href="{{ url('farmer') }}">Farmer Management</a>
              <a class="dropdown-item" href="{{ url('device') }}">Device Management</a>
              </div>
            </li>
            @endif
        @endguest
            {{-- Data Visualization  --}}
        @guest
          @else
            @if (Auth::user()->role == 'Admin')
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Chart Summary
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('crop-cat-harvest') }}">Crop Category Summary</a>
              <a class="dropdown-item" href="{{ url('cropVisualization') }}">Crop Summary</a>
              <a class="dropdown-item" href="{{ url('crop_variety_chart') }}">Crop Variety Summary</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('crop-cat-district') }}">Crop Category District Summary</a>
              <a class="dropdown-item" href="{{ url('crop-cat-district-crop') }}">Crop District Summary</a>
              <a class="dropdown-item" href="{{ url('crop-cat-district-variety') }}">Crop Variety District Summary</a>
              </div>
            </li>
            @endif
        @endguest

        @guest
          @else
            @if (Auth::user()->role == 'Admin')
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More <i class="fa fa-ellipsis-h ml-2" aria-hidden="true"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('feedback-management') }}"> Feedback</a>
              </div>
            </li>
            @endif
        @endguest
        
        {{-- Field Officer Links  --}}

        {{-- AI Links  --}}
        
        
      </ul>
    <form class="form-inline my-2 my-lg-1" style="width:450px;" method="GET" action="{{ url('searched') }}">
        <input class="form-control mr-sm-2" name="search-bar" style="width:300px;" type="text" placeholder="Search AIMS" aria-label="Search" data-toggle="tooltip" data-placement="top" title="Enter To Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit" data-toggle="tooltip" data-placement="top" title="Search Crops"> <i class="fas fa-search mr-3"> </i> Search </button>
      </form>
    </div>
  </nav>

  <!-- nav bar ends -->