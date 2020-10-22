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
          <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('feedback')}}">Contact Us</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('cropInformation') }}">Crop List</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('publicMainCrops') }}">Main Crops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Feedback</a>
        </li>
        @guest
          @else
            @if (Auth::user()->role == 'Admin')
              <li class="nav-item">
              <a class="nav-link" href="{{url('admindash')}}">Admin Dashboard</a>
              </li>
            @endif
        @endguest
        
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Crops</a>
          <div class="dropdown-menu z-index-dropdown" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Main Crops</a>
            <a class="dropdown-item" href="#">Paddy</a>
            <a class="dropdown-item" href="#">Other Field Crops</a>
          </div>
        </li> -->
      </ul>
      <form class="form-inline my-2 my-lg-1" style="width:630px;">
        <input class="form-control mr-sm-2" style="width:500px;" type="text" placeholder="Search AIMS" aria-label="Search" data-toggle="tooltip" data-placement="top" title="Enter To Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit" data-toggle="tooltip" data-placement="top" title="Search Crops"> <i class="fas fa-search mr-3"> </i> Search </button>
      </form>
    </div>
  </nav>

  <!-- nav bar ends -->