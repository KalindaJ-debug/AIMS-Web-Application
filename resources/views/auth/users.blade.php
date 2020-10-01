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
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <!-- fonts -->
    <script src="https://kit.fontawesome.com/22ef696e0b.js" crossorigin="anonymous"></script>
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
            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Harvest</a>
          </li>
          <li class="nav-item dropdown active">
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
    <div class="col-sm-12">
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}  
          </div>
        @endif
    </div>
    <div class="col-sm-12">
      @if(session()->get('error'))
        <div class="alert alert-danger">
          {{ session()->get('error') }}  
        </div>
      @endif
  </div>

    <!-- table -->
    <div class="container-fluid">
      <div class="row">
        <div class="mx-auto" style="wdith: 100%;">
          <div class="card shadow p-3 mb-5 bg-white rounded">
            <ul class="nav nav-pills mb-3" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#users" role="tab" aria-controls="home" aria-selected="true">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="profile" aria-selected="false">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#FO" role="tab" aria-controls="contact" aria-selected="false">Field Officer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#AI" role="tab" aria-controls="contact" aria-selected="false">Agricultural Inspector</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="home-tab">
                <table id="user_table" class="display table table-hover">
                  <thead>
                    <tr>
                      <th >ID</th>
                      <th >First Name</th>
                      <th >Last Name</th>
                      <th >Username</th>
                      <th >Email</th>
                      <th >Password</th>
                      <th >Role</th>
                      <th >Device</th>
                      <th >Edit</th>
                      <th >Delete</th>
                    </tr>
                  </thead>
                        
                  <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th>{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td><form id="form-reset"action="{{ route('adminuser.show', $user->id)}}" method="get">
                                @method('PATCH') 
                                @csrf
                                <button class="btn btn-primary reset">Reset Password</button>
                              </form></td>
                            <td>{{$user->role}}</td>
                            <td>
                              @if ($user->device)
                                  <button type="button" class="btn btn-dark" onclick='deviceEdit(@json($user->id), @json($user->device->id), @json($user->device->macAddress))'><i class="fas fa-mobile"></i> Edit Device</button>
                              @else
                                  <button type="button" class="btn btn-dark" onclick='deviceAdd(@json($user->id))'><i class="fas fa-mobile"></i> Add Device</button>
                              @endif
                            </td>
                            <td><a href="{{ route('adminuser.edit',$user->id)}}" class="btn btn-primary">Edit</a></td>
                            <td>
                                <form id="form-delete"action="{{ route('adminuser.destroy', $user->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger delete">Delete</button>
                                </form>
                        </tr>
                    @endforeach 
                  </tbody>
                </table>
                <!-- end of table -->
              </div>
              <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                <table class="display table table-hover" id="admin_table">
                    <thead>
                      <tr>
                        <th >ID</th>
                        <th >First Name</th>
                        <th >Last Name</th>
                        <th >Username</th>
                        <th >Email</th>
                        <th >Password</th>
                        <th >Device</th>
                        <th >Edit</th>
                        <th >Delete</th>
                      </tr>
                    </thead>
                          
                    <tbody>
                      @foreach($users as $user)

                        @if($user->role == 'Admin')
                          <tr>
                              <th>{{$user->id}}</th>
                              <td>{{$user->name}}</td>
                              <td>{{$user->lastname}}</td>
                              <td>{{$user->username}}</td>
                              <td>{{$user->email}}</td>
                              <td><form id="form-reset"action="{{ route('adminuser.show', $user->id)}}" method="get">
                                @method('PATCH') 
                                @csrf
                                <button class="btn btn-primary reset">Reset Password</button>
                              </form></td>
                              <td>
                                @if ($user->device)
                                    <button type="button" class="btn btn-dark" onclick='deviceEdit(@json($user->id), @json($user->device->id), @json($user->device->macAddress))'><i class="fas fa-mobile"></i> Edit Device</button>
                                @else
                                    <button type="button" class="btn btn-dark" onclick='deviceAdd(@json($user->id))'><i class="fas fa-mobile"></i> Add Device</button>
                                @endif
                              </td>
                              <td><a href="{{ route('adminuser.edit',$user->id)}}" class="btn btn-primary">Edit</a></td>
                              <td>
                                  <form id="form-delete"action="{{ route('adminuser.destroy', $user->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger delete" type="submit">Delete</button>
                                  </form>
                          </tr>
                        @endif
                      @endforeach 
                    </tbody>
                  </table>

              </div>
              <div class="tab-pane fade" id="FO" role="tabpanel" aria-labelledby="contact-tab">
                <table class="display table table-hover" id="FO_table">
                      <thead>
                        <tr>
                          <th >ID</th>
                          <th >First Name</th>
                          <th >Last Name</th>
                          <th >Username</th>
                          <th >Email</th>
                          <th >Password</th>
                          <th >Device</th>
                          <th >Edit</th>
                          <th >Delete</th>
                        </tr>
                      </thead>
                            
                      <tbody>
                        @foreach($users as $user)
  
                          @if($user->role == 'FO')
                            <tr>
                                <th>{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->lastname}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td><form id="form-reset"action="{{ route('adminuser.show', $user->id)}}" method="get">
                                  @method('PATCH') 
                                  @csrf
                                  <button class="btn btn-primary reset">Reset Password</button>
                                </form></td>
                                <td>
                                  @if ($user->device)
                                      <button type="button" class="btn btn-dark" onclick='deviceEdit(@json($user->id), @json($user->device->id), @json($user->device->macAddress))'><i class="fas fa-mobile"></i> Edit Device</button>
                                  @else
                                      <button type="button" class="btn btn-dark" onclick='deviceAdd(@json($user->id))'><i class="fas fa-mobile"></i> Add Device</button>
                                  @endif
                                </td>
                                <td><a href="{{ route('adminuser.edit',$user->id)}}" class="btn btn-primary">View</a></td>
                                <td>
                                    <form id="form-delete"action="{{ route('adminuser.destroy', $user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger delete" type="submit">Delete</button>
                                    </form>
                            </tr>
                          @endif
                        @endforeach 
                    </tbody>
                </table>
            </div>

                        <div class="tab-pane fade" id="AI" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="display table table-hover" id="AI_table">
                                <thead>
                                  <tr>
                                    <th >ID</th>
                                    <th >First Name</th>
                                    <th >Last Name</th>
                                    <th >Username</th>
                                    <th >Email</th>
                                    <th >Password</th>
                                    <th >Device</th>
                                    <th >Edit</th>
                                    <th >Delete</th>
                                  </tr>
                                </thead>
                                      
                                <tbody>
                                  @foreach($users as $user)
            
                                    @if($user->role == 'AI')
                                      <tr>
                                          <th>{{$user->id}}</th>
                                          <td>{{$user->name}}</td>
                                          <td>{{$user->lastname}}</td>
                                          <td>{{$user->username}}</td>
                                          <td>{{$user->email}}</td>
                                          <td><form id="form-reset"action="{{ route('adminuser.show', $user->id)}}" method="get">
                                            @method('PATCH') 
                                            @csrf
                                            <button class="btn btn-primary reset">Reset Password</button>
                                          </form></td>
                                          <td>
                                            @if ($user->device)
                                                <button type="button" class="btn btn-dark" onclick='deviceEdit(@json($user->id), @json($user->device->id), @json($user->device->macAddress))'><i class="fas fa-mobile"></i> Edit Device</button>
                                            @else
                                                <button type="button" class="btn btn-dark" onclick='deviceAdd(@json($user->id))'><i class="fas fa-mobile"></i> Add Device</button>
                                            @endif
                                          </td>
                                          <td><a href="{{ route('adminuser.edit',$user->id)}}" class="btn btn-primary">Edit</a></td>
                                          <td>
                                              <form id="form-delete"action="{{ route('adminuser.destroy', $user->id)}}" method="post">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button class="btn btn-danger delete" type="submit">Delete</button>
                                              </form>
                                      </tr>
                                    @endif
                                  @endforeach 
                        </div>
                      </tbody>
                    </table>
              </div>
              <!-- Button trigger modal -->
              <button type="button" class="btn bg-dark text-white" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-file-pdf"></i> Download Report
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <!-- modal to get pdf -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/js/pie.js"></script>
    <!-- bootstrap CDN and jQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script type="text/JavaScript">
      $(document).ready( function () {
          $('#user_table').DataTable();
          $('#admin_table').DataTable();
          $('#FO_table').DataTable();
          $('#AI_table').DataTable();
      } );
    </script>

    <script>
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })
    </script>

    <script type="text/javascript">

      $('.delete').confirm({
          title: 'Confirm!',
          content: 'Are you sure?',
          buttons: {
              confirm: function () {
                  $.alert('Deleted!');
                  document.getElementById("form-delete").submit();
              },
              cancel: function () {
                  $.alert('Canceled!');
              },
          }
      });

      $('.reset').confirm({
          title: 'Confirm!',
          content: 'Are you sure?',
          buttons: {
              confirm: function () {
                  $.alert('processing');
                  document.getElementById("form-reset").submit();
              },
              cancel: function () {
                  $.alert('Canceled!');
              },
          }
      });
  </script>

    <div class="modal" tabindex="-1" role="dialog" id="deviceAdd">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Device Add</h5>
            <button type="button" class="close" onclick='deviceAddClose()'aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{action('DeviceController@addUserManagement')}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <input type="hidden" name="userId" id="farmerDeviceId">

            <div class="form-group">
              <label for="otherName">Mac Address</label>
                <input name="address" type="text" class="form-control" placeholder="Mac Address">
                </div> 
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-primary">Continue</button>
              <button type="button" class="btn btn-secondary" onclick='deviceAddClose()'>Close</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="deviceEdit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Device Edit</h5>
            <button type="button" class="close" data-dismiss="modal" onclick='deviceEditClose()'aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{action('DeviceController@editUserManagement')}}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="deviceId" id="deviceId">
                <input type="hidden" name="userId" id="farmerEditDeviceId">

              <div class="form-group">
                <label for="otherName">Mac Address</label>
                <input name="address" type="text" id="addressFarmer" class="form-control" placeholder="Mac Address">
              </div> 
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-primary">Continue</button>
                <button type="button" class="btn btn-secondary" onclick='deviceEditClose()'>Close</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
      
  <!-- Device Functions  -->
  <script type="text/javascript">
    function deviceAdd(userId)
    {
      console.log("Test");
      $('#deviceAdd').show();
      document.getElementById("farmerDeviceId").value = userId;
    }

    function deviceEdit(userId, deviceID, macAddress)
    {
      $('#deviceEdit').show();
      document.getElementById("farmerEditDeviceId").value = userId;
      document.getElementById("deviceId").value = deviceID;
      document.getElementById("addressFarmer").value = macAddress;
    }

    function deviceEditClose()
    {
      $('#deviceEdit').hide();
    }

    function deviceAddClose()
    {
      $('#deviceAdd').hide();
    }
  </script>

</html>
