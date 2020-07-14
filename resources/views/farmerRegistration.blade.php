<!doctype html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            }
        </style>
        <title>Farmer Registration</title>
    </head>

    <body>
        <div class="container">

            <h2 style="text-align: left;">Farmer Registration</h2>

            </br>
            </br>

            <form method="post" action="{{action('RegistrationController@store')}}" enctype="multipart/form-data" id="farmerRegistration"> 

                {{ csrf_field() }}

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
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required>
                    <small id="emailHelp" class="form-text text-muted">Minimum eight characters, at least one letter and one number.</small>
                </div>

                <div class="form-group">
                    <label for="telephoneNo">Telephone Number</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+94</span>
                        </div>
                        <input name="telephoneNo" type="number" class="form-control" aria-label="Telephone Number" minlength="1" maxlength="9" placeholder="7XXXXXXXXX" required>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">eg.7XXXXXXXXX.</small>
                </div>

                <div class="form-group">
                    <label for="nic">NIC Number</label>
                    <input name="nic" type="text" class="form-control" id="nic" placeholder="XXXXXXXXXv" minlength="10" minlength="11" required>
                    <small id="emailHelp" class="form-text text-muted">eg.XXXXXXXXXv.</small>
                </div>
                
                <div class="form-group">
                    <label for="image">NIC Image</label>
                    <input name="image" type="file" class="form-control-file" id="image" accept="image/*" required>

                    <div class="image-preview" id="imagePreview">
                        <img src="" alt="Image Preview" class="image-preview__image">
                        <span class="image-preview__default-text">Image Preview</span>
                    </div>
                </div>

                </br>

                <button type="submit" name="submit" class="btn btn-outline-secondary">Continue</button>
            </form>

            <script>
                $( document ).ready(function() {
                    
                    const inpFile = document.getElementById("image");
                    const previewContainer = document.getElementById("imagePreview");
                    const previewImage = previewContainer.querySelector(".image-preview__image");
                    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

                    inpFile.addEventListener("change", function() {
  
                        console.log("test");
                        const file = this.files[0];

                        if (file)
                        {
                            const reader = new FileReader();

                            previewDefaultText.style.display = "none";
                            previewImage.style.display = "block";

                            reader.addEventListener("load", function() {
                                console.log(this);
                                previewImage.setAttribute("src", this.result);
                            });

                            reader.readAsDataURL(file);
                        }
                    });
                });
            </script>
        </div>
    </body>
</html>