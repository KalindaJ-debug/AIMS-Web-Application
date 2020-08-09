<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!-- Bootstrap -->

    <link rel="stylesheet" href="style.css">
    
    <!-- scrool reveal api-->
    <script src="https://unpkg.com/scrollreveal"></script>

  <title>
    Agriculture Information Managmnet System
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<!-- header begins -->
    <div class="header" style="height:170px;background-color:#08260E;">
      <div class="row">
        <!-- logo and description -->
        <div class="col-6">
          <!-- horizontal card -->
          <div class="card mb-3" style="max-width:100%;background-color:#08260E;border:none;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/DOA emblem.png" class="card-img" alt="headerLogo" style="width:120px;height:150px;margin-left:20px;margin-top:10px;margin-bottom:10px;">
            </div>
            <div class="col-md-8">
              <div class="card-body text-center" style="padding:10px;color:white;">
                <h4 class="card-title">Agriculture Information Management System | AIMS </h4>
                <h6 class="card-text">Department of Agriculture</h6>
                <h6 class="card-text">කෘෂිකර්ම දෙපාර්තමේන්තුව</h6>
                <h6 class="card-text">விவசாய திணைக்களம்</h6>

              </div>
            </div>
          </div>
        </div>

        </div>
        <!-- return to language and login buttons -->
        <div class="col-md-6" style="height:150px;">

          <div class="card text-right" style="background-color:#08260E;margin-right:20px;border:none;">
          <div class="card-body">

            <h5 class="card-title" style="color:white;margin-right:80px;"><i class="fas fa-globe mr-3"></i>PUBLIC</h5>
            <p class="card-text" style="color:white;margin-right:80px;"><i class="fas fa-exchange-alt mr-3"></i>Change Language</p>
            <!-- buttons -->
               <a href="#" class="btn btn-light" style="background-color:#10391C;color:white;width:170px;" data-toggle="tooltip" data-placement="top" title="Return to Language Options"><i class="fas fa-language mr-3"></i>Language</a>
                <a href="#" class="btn btn-light" style="background-color:#10391C;color:white;width:170px;" data-toggle="tooltip" data-placement="top" title="Login to AIMS"><i class="fas fa-sign-in-alt mr-3"></i>Sign In</a>
            <!-- buttons end -->
          </div>
        </div>

        </div>
      </div>
    </div>
		

<object align="navbar-left">
<div class="p-3 mb-2 bg-success text-white" >
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
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Main Crops</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Paddy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Other Field Crops</a>
          </li>
         
        </ul>
       
        <form class="form-inline" style="width:400px;">
          <input class="form-control mr-sm-2" style="width:250px;" type="text" placeholder="Search" aria-label="Search" data-toggle="tooltip" data-placement="top" title="Enter To Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit" data-toggle="tooltip" data-placement="top" title="Search Crops"> <i class="fas fa-search mr-3"> </i> Search </button>
        </form>
      
      </div>
    </nav>

</div>
</object>
<section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                              <!--<a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active show"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>-->
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="pill" class="nav-link active show" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Officers</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Farmers</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>NIC</th>
                                            <th>Phone Number</th>
                                            <th>MAC Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Amal Perera</td>
                                            <td>902456123V</td>
                                            <td>077XXXXXX</td>
                                            <td>XXXXXXX</td>
                                        </tr>
                                        <tr>
                                            <td>Sunil Gawaskar</td>
                                            <td>902456123V</td>
                                            <td>077XXXXXX</td>
                                            <td>XXXXXXX</td>
                                        </tr>
                                        <tr>
                                            <td>Kamal Addara</td>
                                            <td>902456123V</td>
                                            <td>077XXXXXX</td>
                                            <td>XXXXXXX</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>NIC Number</th>
                                            <th>Mobile Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sunil Perera</td>
                                            <td>902456123V</td>
                                            <td>077XXXXXX</td>
                                        </tr>
                                        <tr>
                                            <td>Kamal gangarama</td>
                                            <td>902456123V</td>
                                            <td>077XXXXXX</td>
                                        </tr>
                                        <tr>
                                            <td>sunil mannaperuma</td>
                                            <td>902456123V</td>
                                            <td>077XXXXXX</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Contest Name</th>
                                            <th>Date</th>
                                            <th>Award Position</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Work 1</a></td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Work 2</a></td>
                                            <td>Moe</td>
                                            <td>mary@example.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Work 3</a></td>
                                            <td>Dooley</td>
                                            <td>july@example.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      <!-- footer begins -->
    <div class="footer" style="height:400px;background-color:#08260E;">
     <div class="mt-5 pt-5 pb-5 footer">
       <div class="container">
         <div class="row">

           <div class="col-lg-5 col-xs-12 about-company">
             <h2>AIMS</h2>
             <p class="pr-5 text-white-50">Agriculture Information Management System     Department of Agriculture, Kandy </p>
             <img src="images/Department of Agriculture.png" alt="logo" style="width:50px;height:50px;">
           </div>

           <div class="col-lg-3 col-xs-12 links">
             <h4 class="mt-lg-0 mt-sm-3">Other Sites</h4>
               <ul class="m-0 p-0">
                 <li>- <a href="http://www.croplook.net/">Crop Look</a></li>
                 <li>- <a href="https://www.doa.gov.lk/index.php/en/">Department of Agriculture</a></li>
                 <li>- <a href="http://agri.pdn.ac.lk/">Faculty of Agriculture</a></li>
                 <li>- <a href="http://agri.pdn.ac.lk/agen/">Department of Agricultural Engineering</a></li>
                 <li>- <a href="http://www.gic.gov.lk/gic/index.php?option=com_org&Itemid=4&id=40&task=org&lang=en">Government Information Centre | Faculty of Agriculture</a></li>
                 <li>- <a href="http://www.agrimin.gov.lk/web/index.php/about-us-3">Ministry of Agriculture</a></li>
               </ul>
           </div>

           <div class="col-lg-4 col-xs-12 location">
             <h4 class="mt-lg-0 mt-sm-4">Location</h4>
             <p>No 25, Labuduwa Sri Damma Mawatha, Peradeniya 20400</p>
             <p class="mb-0"><i class="fa fa-phone mr-3"></i>(0812) 388 331</p>
             <p><i class="fas fa-envelope mr-3"></i>headagbiol@pdn.ac.lk</p>

           </div>
         </div>

         <div class="row mt-5">
           <div class="col copyright">
             <p class=""><small class="text-white-50">Copyright © 2020. All Rights Reserved.</small></p>
           </div>
         </div>
       </div>
     </div>
</div>
     <!-- footer ends -->
    </div>
  </div>
</body>
</html>