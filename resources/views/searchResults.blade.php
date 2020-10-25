<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- header links -->

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

    <!-- scrool reveal api-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Agriculture Information Management System | AIMS </title>
  </head>
  <body style="font-family: 'Raleway', sans-serif; background-color: #FFFAF0;">
    
    <!-- header begins -->
    @include('layouts.header')
    <!-- header ends -->

    <!-- nav bar begins -->
    @include('layouts.navbar')

    <!-- nav bar ends -->

     <!-- body begins -->
     <div class="content">

     <h2 style="margin-top:50px;margin-left:50px;">Search Results for "{{$term}}"...</h2>
        <hr>
        {{-- search results  --}}
        <div class="search-results">
            @php
                $count = 1;
            @endphp
        {{-- <p>{{$result}}</p> --}}

        <div class="card" style="width:60%; margin-left:300px;">
            <div class="card-header">
              Search Results #{{$count}}
            </div>
            <div class="card-body">
                {{-- home  --}}
                @if ($result == "home")
                    <h5 class="card-title">Home</h5>
                    <p class="card-text">Home page for AIMS website</p>
                    <a href="{{ url('home') }}" class="btn btn-primary"> <i class="fa fa-globe mr-3" aria-hidden="true"></i> Visit Page</a>   
                @endif

                {{-- farmer  --}}
                @if ($result == "farmer")
                    <h5 class="card-title">Farmer Management</h5>
                    <p class="card-text">Farmer management page for AIMS website</p>
                    <a href="{{ url('farmer') }}" class="btn btn-primary"> <i class="fa fa-globe mr-3" aria-hidden="true"></i> Visit Page</a>   
                @endif

                {{-- land  --}}
                @if ($result == "land")
                    <h5 class="card-title">Land Management</h5>
                    <p class="card-text">Land information management for AIMS website. This must be accessed via farmer details.</p>
                    <a href="{{ url('farmer') }}" class="btn btn-primary"> <i class="fa fa-globe mr-3" aria-hidden="true"></i> Visit Page</a>   
                @endif

                {{-- harvest  --}}
                @if ($result == "harvest")
                    <h5 class="card-title">Harvest Management</h5>
                    <p class="card-text">Harvest information management for AIMS website.</p>
                    <a href="{{ url('harvest-data') }}" class="btn btn-primary"> <i class="fa fa-globe mr-3" aria-hidden="true"></i> Visit Page</a>   
                @endif

                {{-- cultivation  --}}
                @if ($result == "cultivation")
                    <h5 class="card-title">Cultivation of Crops</h5>
                    <p class="card-text">Cultivated Crop information management for AIMS website.</p>
                    <a href="{{ url('crop-data') }}" class="btn btn-primary"> <i class="fa fa-globe mr-3" aria-hidden="true"></i> Visit Page</a>   
                @endif
            
                {{-- crops  --}}
                @if ($result == "crops")
                    <h5 class="card-title">Crop Management</h5>
                    <p class="card-text">Crop information management for AIMS website. This must be accessed via farmer details.</p>
                    <a href="{{ url('crop') }}" class="btn btn-primary"> <i class="fa fa-globe mr-3" aria-hidden="true"></i> Visit Page</a>   
                @endif

                {{-- feedback  --}}
                @if ($result == "feedback")
                    <h5 class="card-title">Send Feedback</h5>
                    <p class="card-text">Send Feedback to AIMS regarding any system issue.</p>
                    <a href="{{ url('feedback') }}" class="btn btn-primary"> <i class="fa fa-globe mr-3" aria-hidden="true"></i> Visit Page</a>   
                @endif

                {{-- user  --}}
                @if ($result == "user")
                    <h5 class="card-title">User Management</h5>
                    <p class="card-text">User information management for AIMS website. </p>
                    <a href="{{ url('adminuser') }}" class="btn btn-primary"> <i class="fa fa-globe mr-3" aria-hidden="true"></i> Visit Page</a>   
                @endif

                {{-- approval --}}
                @if ($result == "approval")
                    <h5 class="card-title">Cultivation Data Approval</h5>
                    <p class="card-text">Cultivated Crop Data information management for AIMS website</p>
                    <a href="{{ url('approval') }}" class="btn btn-primary"> <i class="fa fa-globe mr-3" aria-hidden="true"></i> Visit Page</a>   
                @endif

                {{-- device  --}}
                @if ($result == "device")
                    <h5 class="card-title">Device Management</h5>
                    <p class="card-text">Device information management for AIMS website</p>
                    <a href="{{ url('device') }}" class="btn btn-primary"> <i class="fa fa-globe mr-3" aria-hidden="true"></i> Visit Page</a>   
                @endif

                {{-- not found  --}}
                @if ($result == "not found")
                    <h5 class="card-title text-center font-weight-bold">Search Result Not Found</h5>
                    <img src="{{ url('assets/img/not-found.png') }}" alt="Not Found" style="width:100px;height:100px;margin-left:400px;margin-top:20px;margin-bottom:30px;">
                    <p class="card-text text-center">Sorry, we could not find the page that you are looking for. Please try again. </p>
                       
                @endif
              
            </div>
          </div>


        </div>

     </div>
     <!-- body ends -->

     <!-- footer begins -->
     @include('layouts.footer')
     <!-- footer ends -->

     <!-- Bootstrap JS links -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

     <!-- Animations -->
     <script type="text/javascript">

       ScrollReveal().reveal('.main',{
         duration:2000,
         origin: 'left',
         distance: '300px'
       });

       ScrollReveal().reveal('.mainIn',{
         delay:1000,
         duration:2500,
         origin: 'top'
       });

       ScrollReveal().reveal('.paddy',{
         duration:2000,
         origin: 'right',
         distance: '300px',
         delay:500
       });

       ScrollReveal().reveal('.paddyIn',{
         delay:1500,
         duration:2500,
         origin: 'top'
       });

       ScrollReveal().reveal('.harvest',{
         duration:2000,
         origin: 'left',
         distance: '300px',
         delay:1000
       });

       ScrollReveal().reveal('.harvestIn',{
         delay:2000,
         duration:2500,
         origin: 'top'
       });

       ScrollReveal().reveal('.carousel', {
         duration:2000,
         origin:'bottom',
         distance: '200px',
         delay:100
       });

     </script>

  </body>

</html>
