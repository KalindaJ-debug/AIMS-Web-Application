

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  
  

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- scrool reveal api-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="style.css">
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
              <div class="card-body text-left" style="padding:10px;color:white;">
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
<div class="content">
            <div class="card">
              <div class="card-header">
                <h5 class="title">User Profiles</h5>
              </div>
     <div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Officer Type</th>
            <th scope="col">Officer Name</th>
            <th scope="col">Region</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
           	<td>Agriculture Inspector</td> 
            <td>Amal Perera</td>
            <td>Mihinthale</td>
            <td>077564312</td>
            <td>Nandasena@gmail.com</td>

            <td><!--<input type=button onClick="parent.location='index.html'" value='click here'>-->
              <button type="button" onclick="parent.location='user view.html'" class="btn btn-primary" style="" title="View Profile"> <i class="far fa-eye"></i></button>
              <button type="button" class="btn btn-success"style="" title="Edit Profile"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"style="" title="Delete Profile"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Field Officer</td> 
            <td>Sunil Nandasena</td>
            <td>Jaffna</td>
            <td>081324553</td>
            <td>sunily@ymail.com</td>

            <td>
              <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
              <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Agriculture Inspector</td> 
             <td>Kamal Addara</td>
            <td>Polonnaruwa</td>
            <td>081234531</td>
            <td>kamaladdara@gmail.com</td>

            <td>
              <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
              <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
      <!-- footer begins -->
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
     <!-- footer ends -->
    </div>
  </div>
</body>
</html>