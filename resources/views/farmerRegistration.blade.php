<!doctype html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        {{-- External CSS --}}
        <link rel="stylesheet" href="{{ url('assets/css/home.css') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <style>
            .image-preview {
                width: 300px;
                min-height: 100px;
                border: 2px solid #dddddd;
                margin-top: 15px;

                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                color: #cccccc
            }

            .image-preview__image {
                display: none;
                width: 100%;
                height: 100%;
            }
        </style>
        <title>Farmer Registration</title>
    </head>

    <body style="width:100%;">
        
        @include('layouts.header')
        @include('layouts.navbar')

        <div class="container" style="background-color:white; border-radius: 25px; padding: 20px;">

            @error('email') 
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> Email already exists
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror

            @error('nic') 
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> Invalid NIC length
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
        
            <div class="row">
                <div class="col-9">
                    <h2 style="margin-top:30px;" class="display-4">Farmer Registration</h2>
                </div>
                <div class="col-3">
                    <img src="{{ asset('images/farmer.png') }}" class="img-fluid img-thumbnail rounded float-left" alt="Farmer" style="height:150px;margin-right:50px;width:300px;">
                </div>
            </div>
         
            <hr>
            <form method="post" action="{{action('RegistrationController@store')}}" enctype="multipart/form-data" id="farmerRegistration"> 

                {{ csrf_field() }}

                <input type="hidden" name="type" value="farmer">
                
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">First and Last name</span>
                    </div>
                    <input name="firstName" type="text" aria-label="First name" class="form-control" placeholder="First name" required>
                    <input name="lastName" type="text" aria-label="Last name" class="form-control" placeholder="Last name" required>
                </div>

                </br>

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
                        <input name="nic" type="text" class="form-control" id="nic" placeholder="XXXXXXXXXv" minlength="10" minlength="11" required pattern="[0-10]{10}[x|X|v|V]$">
                        <small id="emailHelp" class="form-text text-muted">eg.XXXXXXXXXv.</small>
                    </div>
                </div>

                <!-- <div class="jumbotron">
                    <div class="form-group">
                        <label for="image">NIC Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" id="image" accept="image/*" required>
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            </div>
                        </div>

                        <div class="image-preview" id="imagePreview">
                            <img src="" alt="Image Preview" class="image-preview__image d-block w-100 img-fluid rounded">
                            <span class="image-preview__default-text">Image Preview</span>
                        </div>
                    </div>
                </div> -->

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

                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg" data-toggle="button" aria-pressed="false">Continue <i class="fas fa-arrow-right"></i></button>
                </div>
            </form>
        </div>
        
        @include('layouts.footer')

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
    </body>
</html>