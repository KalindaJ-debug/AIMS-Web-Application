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
        
        <title>Crop</title>
    </head>
    <body>

        @include('layouts.header')
        @include('layouts.navbar')
    <!-- style="background-color:#2E933C;" -->
        <script>
            $(document).ready( function () {
                $('#farmerTable').DataTable();
            });
        </script>
        
        <div class="container" style="background-color:white;">
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
                        <td>{{ $farmers->telephoneNo }}</td>
                        <td>{{ $farmers->nic }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" onclick='landFarmer(@json($farmers->id))'><i class="fas fa-landmark"></i> Land Details</button>
                            <button type="button" class="btn btn-warning" onclick='editFarmer(@json($farmers->id), @json($farmers->firstName), @json($farmers->otherName), @json($farmers->lastName), @json($farmers->email), @json($farmers->telephoneNo), @json($farmers->nic))'><i class="fas fa-edit"></i> Edit</button>
                            <button type="button" class="btn btn-danger" onclick='deleteFarmer(@json($farmers->id))'><i class="fas fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

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
                                    <input name="firstName" type="text" aria-label="First name" class="form-control" placeholder="First name" required>
                                    <input name="lastName" type="text" aria-label="Last name" class="form-control" placeholder="Last name" required>
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
                                        <input name="image" type="file" class="form-control-file" id="image" accept="image/*" required>

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
                                    <input class="form-control" type="text" id="editFarmerFirstName" name="firstName">
                                </div>

                                </br>

                                <div class="form-group">
                                    <label>Other Name</label>
                                    <input class="form-control" type="text" id="editFarmerOtherName" name="otherName">
                                </div>

                                </br>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" id="editFarmerLastName" name="lastName">
                                </div>

                                </br>

                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" id="editFarmerEmail">
                                    <small id="emailHelp" class="form-text text-muted">Your email will be secure.</small>
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
                                <button type="submit" class="btn btn-outline-danger">Continue</button>
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

        function editFarmer(id, firstName, otherName, lastName, email, telephone, nic)
        {
            $('#editFarmer').modal('show');
            document.getElementById("editFarmerId").value = id;
            document.getElementById("editFarmerFirstName").value = firstName;
            document.getElementById("editFarmerOtherName").value = otherName;
            document.getElementById("editFarmerLastName").value = lastName;
            document.getElementById("editFarmerEmail").value = email;
            document.getElementById("editFarmerTelephone").value = telephone;
            document.getElementById("editFarmerNIC").value = nic;
        } 

        function landFarmer(id)
        {
            $('#deleteFramer').modal('show');
            document.getElementById("farmerIdLand").value = id;
        } 
    </script>
</html>