<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- scroll reveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <!-- confirm-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/plant.css">
    <style media="screen">
      .parallax-window {
        height: 55vh;
        background: transparent;
      }
      .admin h1{
        font-size: 7vw;
        color: white;
        font-family: 'Raleway', sans-serif;
      }
    </style>
  </head>
  <body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">AIMS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Harvest</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Users
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Register</a>
              <a class="dropdown-item" href="#">Manage</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Farmer Registration</a>
              <a class="dropdown-item" href="#">Farmers</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Devices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Content</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Report</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- end of nav bar -->
    <div class="wrapper">
      <div class="parallax" style="height: 18vh; width: 100%">
        <div class="parallax-window" data-parallax="scroll" data-image-src="assets/img/rice.jpg"></div>
      </div>
    </div>

    <div class="heading d-flex justify-content-center" style="margin:0 auto; height: 28vh;">
      <span class="admin"><h1>Hello Admin</h1></span>
    </div>
    <!-- table -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-8" style="wdith: 100%;">
          <div class="card shadow p-3 mb-5 bg-white rounded">
            <ul class="nav nav-pills mb-3" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Direct</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Farmers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Pending Requests</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Harvest No</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Crop</th>
                      <th scope="col">Area</th>
                      <th scope="col">Date Added</th>
                      <th scope="col">Added By</th>
                      <th scope="col">Other</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Sanath</td>
                      <td>Big Onion</td>
                      <td>20ha</td>
                      <td>26/10/2019</td>
                      <td>Weerasooriya</td>
                      <td class="d-flex justify-content-center"><button type="button" class="btn btn-outline-primary m-1">Edit</button>
                        <button type="button" class="btn btn-outline-danger m-1 delete">Delete</button></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Sanath</td>
                      <td>Big Onion</td>
                      <td>20ha</td>
                      <td>26/10/2019</td>
                      <td>Weerasooriya</td>
                      <td class="d-flex justify-content-center"><button type="button" class="btn btn-outline-primary m-1">Edit</button>
                        <button type="button" class="btn btn-outline-danger m-1 delete">Delete</button></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Sanath</td>
                      <td>Big Onion</td>
                      <td>20ha</td>
                      <td>26/10/2019</td>
                      <td>Weerasooriya</td>
                      <td class="d-flex justify-content-center"><button type="button" class="btn btn-outline-primary m-1">Edit</button>
                        <button type="button" class="btn btn-outline-danger m-1 delete">Delete</button></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Sanath</td>
                      <td>Big Onion</td>
                      <td>20ha</td>
                      <td>26/10/2019</td>
                      <td>Weerasooriya</td>
                      <td class="d-flex justify-content-center"><button type="button" class="btn btn-outline-primary m-1">Edit</button>
                        <button type="button" class="btn btn-outline-danger m-1 delete">Delete</button></td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Sanath</td>
                      <td>Big Onion</td>
                      <td>20ha</td>
                      <td>26/10/2019</td>
                      <td>Weerasooriya</td>
                      <td class="d-flex justify-content-center"><button type="button" class="btn btn-outline-primary m-1">Edit</button>
                        <button type="button" class="btn btn-outline-danger m-1 delete">Delete</button></td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Sanath</td>
                      <td>Big Onion</td>
                      <td>20ha</td>
                      <td>26/10/2019</td>
                      <td>Weerasooriya</td>
                      <td class="d-flex justify-content-center"><button type="button" class="btn btn-outline-primary m-1">Edit</button>
                        <button type="button" class="btn btn-outline-danger m-1 delete">Delete</button></td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Sanath</td>
                      <td>Big Onion</td>
                      <td>20ha</td>
                      <td>26/10/2019</td>
                      <td>Weerasooriya</td>
                      <td class="d-flex justify-content-center"><button type="button" class="btn btn-outline-primary m-1">Edit</button>
                        <button type="button" class="btn btn-outline-danger m-1 delete">Delete</button></td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>Sanath</td>
                      <td>Big Onion</td>
                      <td>20ha</td>
                      <td>26/10/2019</td>
                      <td>Weerasooriya</td>
                      <td class="d-flex justify-content-center"><button type="button" class="btn btn-outline-primary m-1">Edit</button>
                        <button type="button" class="btn btn-outline-danger m-1 delete">Delete</button></td>
                    </tr>
                    <tr>
                      <th scope="row">9</th>
                      <td>Sanath</td>
                      <td>Big Onion</td>
                      <td>20ha</td>
                      <td>26/10/2019</td>
                      <td>Weerasooriya</td>
                      <td class="d-flex justify-content-center"><button type="button" class="btn btn-outline-primary m-1">Edit</button>
                        <button type="button" class="btn btn-outline-danger m-1 delete">Delete</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 h-33">
          <div class="card shadow p-3 mb-5 bg-white rounded">
            <h3>User Activity</h3>
            <canvas id="myChart2"></canvas>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->


    <script src="assets/js/pie.js"></script>
    <!-- bootstrap CDN and jQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    <script type="text/javascript">
      $('.delete').confirm({
          title: 'Confirm!',
          content: 'Are you sure?',
          buttons: {
              confirm: function () {
                  $.alert('Deleted!');
              },
              cancel: function () {
                  $.alert('Canceled!');
              },
          }
      });

    </script>
  </body>
</html>
