<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        {{-- CSS --}}
        <link rel="stylesheet" type="text/css" href="{{ url('assets/css/home.css') }}">

        <!-- Font CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
        <title>Crop</title>
    </head>
    <body style="font-family: 'Raleway', sans-serif; background-color: white;">

        @include('layouts.header')
        @include('layouts.navbar')
    <!-- style="background-color:#2E933C;" -->
        <script>
            $(document).ready( function () {
                $('#farmerTable').DataTable();
            });
        </script>
        
        <div class="container" style="background-color:white;">
            @error('email') 
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> Email already exists
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror

            @error('username') 
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> Username already exists
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror

            <h2 class="display-4">Farmer</h2>
            
            </br>

            <button type="button" class="btn btn-success" onclick='addFarmer()'><i class="fas fa-plus"></i> Add</button>

            <table class="table" id="farmerTable"> 
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Farmer ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Telephone Number</th>
                        <th scope="col">NIC</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($farmer as $farmers)
                    <tr>
                        <th scope="row">{{ $farmers->id }}</th>
                        <td>{{ $farmers->firstName }}</td>
                        <td>{{ $farmers->lastName }}</td>
                        <td>{{ $farmers->email }}</td>
                        <td>{{ $farmers->userName }}</td>
                        <td>{{ $farmers->telephoneNo }}</td>
                        <td>{{ $farmers->nic }}</td>
                        <td>
                            @if ($farmers->device)
                                <button type="button" class="btn btn-dark" onclick='deviceEdit(@json($farmers->id), @json($farmers->device->id), @json($farmers->device->macAddress))'><i class="fas fa-mobile"></i> Edit Device</button>
                            @else
                                <button type="button" class="btn btn-dark" onclick='deviceAdd(@json($farmers->id))'><i class="fas fa-mobile"></i> Add Device</button>
                            @endif
                            <button type="button" class="btn btn-primary" onclick='landFarmer(@json($farmers->id))'><i class="fas fa-landmark"></i> Land Details</button>
                            <button type="button" class="btn btn-warning" onclick='editFarmer(@json($farmers->id), @json($farmers->firstName), @json($farmers->otherName), @json($farmers->lastName), @json($farmers->email), @json($farmers->telephoneNo), @json($farmers->nic), @json($farmers->userName))'><i class="fas fa-edit"></i> Edit</button>
                            <button type="button" class="btn btn-danger" onclick='deleteFarmer(@json($farmers->id))'><i class="fas fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Display Error Message --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="button" class="btn bg-dark text-white" onclick="location.href='{{url('farmersReport')}}';">
                <i class="fas fa-file-pdf"></i> Download Report
            </button>
            <button type="button" class="btn btn-warning" onclick="location.href='{{url('sendFarmersReport')}}';">
                <i class="fas fa-file-pdf"></i> Email Report
            </button>

            {{-- Land Records Report - 20205283 --}}
            <button type="button" class="btn bg-dark text-white" data-toggle="modal" data-target="#landReport">
                <i class="fas fa-file-pdf"></i> Download Land Report 
              </button>

            {{-- Land Record Report Modal  --}}
            <div id="landReport" class="modal fade">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                  <form action="{{ url('exportFilteredLandPDF') }}" method="get" name="landReport">
                      {{ csrf_field() }}
                      <div class="modal-header">
                        <h4 class="modal-title col-12 text-center"> Download Land Records </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                          <div class="form-row">
                              <div class="col-2">
                                <img src="{{ url('assets/img/pdf.png') }}" alt="delete" style="margin-left:100px;margin-top:10px;margin-bottom:10px;">
                              </div>
                              <div class="col-6">
                                <p class="font-weight-bold" style="font-size:20px;margin-top:25px;margin-left:120px;">Export Land Records with ...</p>
                              </div>
                          </div>
                        <hr>
                        {{-- District row --}}
                        <div class="form-row">
                            <div class="col-4 text-center">
                                <div class="custom-control custom-radio" style="margin-left:40px;">
                                    <input onclick="document.getElementById('selectDistrict').disabled = false; document.getElementById('selectProvince').disabled=true;" type="radio" id="district" name="landRadio" class="custom-control-input" value="district">
                                    <label class="custom-control-label" for="district">District</label>
                                  </div>
                            </div>
                            <div class="col-7">
                                <select class="custom-select" id="selectDistrict" name="district" disabled>
                                    <option selected value="none">Select District...</option>
                                    
                                    @if($district != null)
            
                                      @foreach($district as $item)
                                                  
                                          <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                        
                                      @endforeach
                                      
                                    @endif
                                  </select>
                            </div>
                        </div>
                        <br>
                        {{-- Province Row --}}
                        <div class="form-row">
                            <div class="col-4 text-center">
                                <div class="custom-control custom-radio" style="margin-left:50px;">
                                    <input onclick="document.getElementById('selectDistrict').disabled=true;document.getElementById('selectProvince').disabled=false;" type="radio" id="province" name="landRadio" class="custom-control-input" value="province">
                                    <label class="custom-control-label" for="province">Province</label>
                                  </div>
                            </div>
                            <div class="col-7">
                                <select class="custom-select" id="selectProvince" name="province" disabled>
                                    <option selected value="none">Select Province...</option>
                                    
                                    @if($province != null)
            
                                      @foreach($province as $item)
                                                  
                                          <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                        
                                      @endforeach
                                      
                                    @endif
                                  </select>
                            </div>
                        </div>
                        <br>
                        {{-- All Row --}}
                        <div class="form-row">
                            <div class="col-4 text-center">
                                <div class="custom-control custom-radio" style="margin-left:5px;">
                                    <input onclick="document.getElementById('selectDistrict').disabled=true;document.getElementById('selectProvince').disabled=true;" type="radio" id="all" name="landRadio" class="custom-control-input" value="all">
                                    <label class="custom-control-label" for="all">All</label>
                                  </div>
                            </div>
                            <div class="col-7">
                                <p class="text-dark font-weight-light font-italic" style="font-size:17px;"> All registered land records will be selected.</p>
                            </div>
                        </div>
                        <hr>
                        {{-- Land Type Row --}}
                        <div class="form-row">
                            <div class="col-4 text-center">
                                <div class="custom-control custom-checkbox" style="margin-left:50px;">
                                    <input type="checkbox" class="custom-control-input" id="landType">
                                    <label class="custom-control-label" for="landType">Land Type</label>
                                </div>
                            </div>
                            <div class="col-7">
                                <select class="custom-select" id="selectLandType" name="landType" disabled>
                                    <option selected value="none">Select Land Type...</option>
                                    
                                    @if($landType != null)
            
                                      @foreach($landType as $item)
                                                  
                                          <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                        
                                      @endforeach
                                      
                                    @endif
                                  </select>
                            </div>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="submit" class="btn btn-dark" value="Delete"> <i class="fas fa-file-pdf mr-2"></i> Download </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            <!-- Add Modal -->

            <div class="modal" tabindex="-1" role="dialog" id="addFarmer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Farmer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('FarmerController@store')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="function" value="add">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">First and Last name</span>
                                    </div>
                                    <input name="firstName" type="text" aria-label="First name" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only. ')" class="form-control" placeholder="First name" required>
                                    <input name="lastName" type="text" aria-label="Last name" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only. ')" class="form-control" placeholder="Last name" required>
                                </div>

                                <div class="form-group">
                                    <label for="otherName">Other Names</label>
                                    <input name="otherName" type="text" class="form-control" id="otherName" placeholder="Other name">
                                </div>

                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">Your email will be secure.</small>
                                </div>

                                <div class="form-group">
                                    <label for="otherName">Username</label>
                                    <input name="username" type="text" class="form-control" placeholder="Username" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only and enter only 12 characters. ')" required>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required>
                                    <small id="emailHelp" class="form-text text-muted">Minimum eight characters, at least one letter and one number.</small>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="telephoneNo">Telephone Number</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+94</span>
                                            </div>
                                            <input name="telephoneNo" type="number" class="form-control" aria-label="Telephone Number" minlength="1" maxlength="9" placeholder="7XXXXXXXXX" required>
                                        </div>
                                        <small id="emailHelp" class="form-text text-muted">eg.7XXXXXXXXX.</small>
                                    </div>
                                                
                                    <div class="form-group col-md-6">
                                        <label for="nic">NIC Number</label>
                                        <input name="nic" type="text" class="form-control" id="nic" placeholder="XXXXXXXXXv" minlength="10" minlength="11" required>
                                        <small id="emailHelp" class="form-text text-muted">eg.XXXXXXXXXv.</small>
                                    </div>
                                </div>

                                <div class="jumbotron">
                                    <div class="form-group">
                                        <label for="image">NIC Image</label>
                                        <input name="image" type="file" class="form-control-file" id="image" accept="image/*">

                                        <div class="image-preview" id="imagePreview">
                                            <img src="" alt="Image Preview" class="image-preview__image d-block w-100 img-fluid rounded">
                                            <span class="image-preview__default-text">Image Preview</span>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    $( document ).ready(function() {
                                                
                                        const inpFile = document.getElementById("image");
                                        const previewContainer = document.getElementById("imagePreview");
                                        const previewImage = previewContainer.querySelector(".image-preview__image");
                                        const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

                                        inpFile.addEventListener("change", function() {
                            
                                            const file = this.files[0];

                                            if (file)
                                            {
                                                const reader = new FileReader();

                                                previewDefaultText.style.display = "none";
                                                previewImage.style.display = "block";

                                                reader.addEventListener("load", function() {
                                                    previewImage.setAttribute("src", this.result);
                                                });

                                                reader.readAsDataURL(file);
                                            }
                                        });
                                    });
                                </script>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-primary">Continue <i class="fas fa-arrow-right"></i></button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Modal -->

            <div class="modal" tabindex="-1" role="dialog" id="deleteFramer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Farmer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('FarmerController@store')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <input type="hidden" name="function" value="delete">
                                <input type="hidden" name="id" id="farmerId">

                                <p>Are are you sure you want to delete</p>  
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-danger">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Modal  -->

            <div class="modal" tabindex="-1" role="dialog" id="editFarmer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('FarmerController@store')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <input type="hidden" name="function" value="edit">
                                <input type="hidden" id="editFarmerId" name="id">
                                
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" id="editFarmerFirstName" name="firstName" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only. ')">
                                </div>

                                </br>

                                <div class="form-group">
                                    <label>Other Name</label>
                                    <input class="form-control" type="text" id="editFarmerOtherName" name="otherName" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only. ')">
                                </div>

                                </br>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" id="editFarmerLastName" name="lastName" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only. ')">
                                </div>

                                </br>

                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" id="editFarmerEmail">
                                    <small id="emailHelp" class="form-text text-muted">Your email will be secure.</small>
                                </div>

                                </br>

                                <div class="form-group">
                                    <label for="otherName">Username</label>
                                    <input name="username" type="text" class="form-control" id="farmerUsername" placeholder="Username" pattern="[a-zA-Z]+" oninvalid="setCustomValidity('Please enter on alphabets only and enter only 12 characters. ')" maxlength="12" required>
                                </div>

                                </br>

                                <div class="form-group">
                                    <label for="telephoneNo">Telephone Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+94</span>
                                        </div>
                                        <input name="telephoneNo" type="number" class="form-control" aria-label="Telephone Number" minlength="1" maxlength="9" placeholder="7XXXXXXXXX" required id="editFarmerTelephone">
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted">eg.7XXXXXXXXX.</small>
                                </div>

                                </br>

                                <div class="form-group">
                                    <label for="nic">NIC Number</label>
                                    <input name="nic" type="text" class="form-control" minlength="10" minlength="11" required id="editFarmerNIC">
                                    <small id="emailHelp" class="form-text text-muted">eg.XXXXXXXXXv.</small>
                                </div>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-dark">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>                            


            <!-- Land Modal -->

            <div class="modal" tabindex="-1" role="dialog" id="landFarmer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Land</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('FarmerController@store')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <input type="hidden" name="function" value="land">
                                <input type="hidden" name="id" id="farmerIdLand">

                                <p>Click Continue to go to land details</p>  
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-primary">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Device Modal -->

        <div class="modal" tabindex="-1" role="dialog" id="deviceAdd">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Device Add</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('DeviceController@addFarmerManagement')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <input type="hidden" name="farmerId" id="farmerDeviceId">

                                <div class="form-group">
                                    <label for="otherName">Mac Address</label>
                                    <input name="address" type="text" class="form-control" placeholder="Mac Address">
                                </div> 
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-primary">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                            <h5 class="modal-title">Device Add</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('DeviceController@editFarmerManagement')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <input type="hidden" name="deviceId" id="deviceId">
                                <input type="hidden" name="farmerId" id="farmerEditDeviceId">

                                <div class="form-group">
                                    <label for="otherName">Mac Address</label>
                                    <input name="address" type="text" id="addressFarmer" class="form-control" placeholder="Mac Address">
                                </div> 
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-primary">Continue</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')

    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        function addFarmer()
        {
            $('#addFarmer').modal('show');
        } 

        function deleteFarmer(id)
        {
            $('#deleteFramer').modal('show');
            document.getElementById("farmerId").value = id;
        } 

        function editFarmer(id, firstName, otherName, lastName, email, telephone, nic, username)
        {
            $('#editFarmer').modal('show');
            document.getElementById("editFarmerId").value = id;
            document.getElementById("editFarmerFirstName").value = firstName;
            document.getElementById("editFarmerOtherName").value = otherName;
            document.getElementById("editFarmerLastName").value = lastName;
            document.getElementById("editFarmerEmail").value = email;
            document.getElementById("editFarmerTelephone").value = telephone;
            document.getElementById("editFarmerNIC").value = nic;
            document.getElementById("farmerUsername").value = username;
        } 

        function landFarmer(id)
        {
            $('#landFarmer').modal('show');
            document.getElementById("farmerIdLand").value = id;
        } 

        function deviceAdd(farmerId)
        {
            $('#deviceAdd').modal('show');
            document.getElementById("farmerDeviceId").value = farmerId;
        }

        function deviceEdit(farmerId, deviceID, macAddress)
        {
            $('#deviceEdit').modal('show');
            document.getElementById("farmerEditDeviceId").value = farmerId;
            document.getElementById("deviceId").value = deviceID;
            document.getElementById("addressFarmer").value = macAddress;
        }
    </script>

    <script>
        $('#landType').click(function(){
            $('#selectLandType').attr('disabled', !this.checked);
        });
    </script>
</html>