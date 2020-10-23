<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="assets/css/dataSummaryStyle.css">
    <script src="assets/js/dataSummaryScript.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
    

<div class="sidebar" style="width: 280px; height: inherit; ">

        <ul class="nav flex-column" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

            <div class="card-header text-white bg-success">
                <h4 class="card-title" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    DATA SUMMARY</h4>
            </div>

            
            <li class="nav-item" style="margin-bottom: 20px;">
                <a class="nav-link"  href="/DvCropCat">Crop Category Summary</a>
            <li class="nav-item dropdown" style="margin-bottom: 20px;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="myFunction()">
                    Crop Category Summary
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="display: block;
                  position: fixed;
                  z-index: 2147483647">
                    <a class="dropdown-item" href="{{url('crop-cat-harvest')}}">Harvest Extent</a>
                    <a class="dropdown-item" href="#">Cultivation Extent</a>
                  </div>
            </li>
            <li class="nav-item" style="margin-bottom: 20px;">
                <a class="nav-link" href="/">Crop Summary</a>
            </li>
            <li class="nav-item" style="margin-bottom: 20px;">
                <a class="nav-link" href="/crop_variety_dv">Crop Variety Summary</a>
            </li>
            <li class="nav-item dropdown" style="margin-bottom: 20px;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    District Summary
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="display: block;
                  position: fixed;
                  z-index: 2147483647">
                    <a class="dropdown-item" href="{{url('crop-cat-district-variety')}}">Crop Variety</a>
                    <a class="dropdown-item" href="{{url('crop-cat-district-crop')}}">Crop</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('crop-cat-district')}}">Crop Category</a>
                  </div>
            </li>
            <li class="nav-item" style="margin-bottom: 20px;">
                <a class="nav-link" href="/DvExternalFac">External Factors Summary</a>
            </li>
            <li class="nav-item" style="margin-bottom: 20px;">
                <a class="nav-link" href="/">Land Summary</a>
            </li>

        </ul>
</div>

