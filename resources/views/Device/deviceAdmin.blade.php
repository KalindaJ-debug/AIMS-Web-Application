<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
        <title>Device Management</title>
    </head>
    <body>

        @include('layouts.header')
        @include('layouts.navbar')
    <!-- style="background-color:#2E933C;" -->
        <script>
            $(document).ready( function () {
                $('#userTable').DataTable();
                $('#farmerTable').DataTable();
            });
        </script>
        
        <div class="container" style="background-color:white;">
            <h2 class="display-4">User Device Management</h2>
            
            </br>

            <button type="button" class="btn btn-success" onclick='addUserDevice()'><i class="fas fa-plus"></i> Add</button>

            <table class="table" id="userTable"> 
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Device ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Mac Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deviceUser as $deviceUsers)
                    <tr>
                        <th scope="row">{{ $deviceUsers->id }}</th>
                        <td>{{ $deviceUsers->user->name }}</td>
                        <td>{{ $deviceUsers->user->lastname }}</td>
                        <td>{{ $deviceUsers->macAddress }}</td>
                        <td>
                            <button type="button" class="btn btn-warning" onclick='editUserDevice(@json($deviceUsers->id), @json($deviceUsers->macAddress), @json($deviceUsers->user_id))'><i class="fas fa-edit"></i> Edit</button>
                            <button type="button" class="btn btn-danger" onclick='deleteUserDevice(@json($deviceUsers->id))'><i class="fas fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            </br>

            <h2 class="display-4">Farmer Device Management</h2>
            
            </br>

            <button type="button" class="btn btn-success" onclick='addFarmerDevice()'><i class="fas fa-plus"></i> Add</button>

            <table class="table" id="farmerTable"> 
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Device ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Mac Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deviceFarmer as $deviceFarmers)
                    <tr>
                        <th scope="row">{{ $deviceFarmers->id }}</th>
                        <td>{{ $deviceFarmers->farmer->firstName }}</td>
                        <td>{{ $deviceFarmers->farmer->lastName }}</td>
                        <td>{{ $deviceFarmers->macAddress }}</td>
                        <td>
                            <button type="button" class="btn btn-warning" onclick='editFarmerDevice(@json($deviceFarmers->id), @json($deviceFarmers->macAddress), @json($deviceFarmers->farmer_id))'><i class="fas fa-edit"></i> Edit</button>
                            <button type="button" class="btn btn-danger" onclick='deleteDevice(@json($deviceFarmers->id))'><i class="fas fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Add Modal -->

            <div class="modal" tabindex="-1" role="dialog" id="addUserDevice">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Farmer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('DeviceController@addUserDevice')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
                                <div class="form-group">
                                    <label>User Details</label>
                                    <select name="userId" class="form-control">
                                        @foreach ($userAdd as $user)
                                            <option value='{{ $user->id }}'>{{ $user->name }} {{ $user->lastname }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                </br>

                                <div class="form-group">
                                    <label for="otherName">Mac Address</label>
                                    <input name="address" type="text" class="form-control" placeholder="Mac Address">
                                </div>

                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-primary">Continue <i class="fas fa-arrow-right"></i></button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" role="dialog" id="addFarmerDevice">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Farmer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('DeviceController@addFarmerDevice')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
    
                                <div class="form-group">
                                    <label>Farmer Details</label>
                                    <select name="farmerId" class="form-control">
                                        @foreach ($farmerAdd as $farmer)
                                            <option value='{{ $farmer->id }}'>{{ $farmer->firstName }} {{ $farmer->lastName }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                </br>

                                <div class="form-group">
                                    <label for="otherName">Mac Address</label>
                                    <input name="address" type="text" class="form-control" placeholder="Mac Address">
                                </div>

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

            <div class="modal" tabindex="-1" role="dialog" id="deleteDevice">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Device</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('DeviceController@deleteDevice')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <input type="hidden" name="id" id="deviceId">

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

            <div class="modal" tabindex="-1" role="dialog" id="editUserDevice">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Device</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('DeviceController@editUserDevice')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" id="editUserDeviceId" name="id">

                                <div class="form-group">
                                    <label>User Details</label>
                                    <select name="farmerId" id="userEditSelect" class="form-control">
                                        @foreach ($farmerEdit as $farmer)
                                            <option value='{{ $farmer->id }}'>{{ $farmer->firstName }} {{ $farmer->lastName }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                </br>

                                <div class="form-group">
                                    <label for="otherName">Mac Address</label>
                                    <input name="address" type="text" id="deviceUserEdit" class="form-control" placeholder="Mac Address">
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

            <div class="modal" tabindex="-1" role="dialog" id="editFarmerDevice">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Device</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{action('DeviceController@editFarmerDevice')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" id="editFarmerDeviceId" name="id">

                                <div class="form-group">
                                    <label>Farmer Details</label>
                                    <select name="farmerId" id="farmerEditSelect" class="form-control">
                                        @foreach ($farmerEdit as $farmer)
                                            <option value='{{ $farmer->id }}'>{{ $farmer->firstName }} {{ $farmer->lastName }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                </br>

                                <div class="form-group">
                                    <label for="otherName">Mac Address</label>
                                    <input name="address" type="text" id="deviceFarmerEdit" class="form-control" placeholder="Mac Address">
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
        @include('layouts.footer')

    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        function addUserDevice()
        {
            $('#addUserDevice').modal('show');
        } 

        function deleteDevice(id)
        {
            $('#deleteDevice').modal('show');
            document.getElementById("deviceId").value = id;
        } 

        function editUserDevice(id, macAddress, userId)
        {
            $('#editUserDevice').modal('show');
            document.getElementById("editUserDeviceId").value = id;
            document.getElementById("deviceUserEdit").value = macAddress;
            document.getElementById("userEditSelect").value = userId;
        } 

        function addFarmerDevice()
        {
            $('#addFarmerDevice').modal('show');
        } 

        function editFarmerDevice(id, macAddress, farmerId)
        {
            $('#editFarmerDevice').modal('show');
            document.getElementById("editFarmerDeviceId").value = id;
            document.getElementById("deviceFarmerEdit").value = macAddress;
            document.getElementById("farmerEditSelect").value = farmerId;
        }  

    </script>
</html>