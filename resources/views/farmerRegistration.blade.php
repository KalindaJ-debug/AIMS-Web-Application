<!doctype html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <title>Farmer Registration</title>
    </head>

    <body>
        <div class="container">

            <h2 style="text-align: left;">Registration</h2>

            </br>
            </br>

            <form method="post" action="{{action('RegistrationController@store')}}" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">First and Last name</span>
                    </div>
                    <input name="firstName" type="text" aria-label="First name" class="form-control" placeholder="First name">
                    <input name="lastName" type="text" aria-label="Last name" class="form-control" placeholder="Last name">
                </div>

                </br>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Other Names</label>
                    <input name="otherName" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Other name">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Telephone Number</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+94</span>
                        </div>
                        <input name="telephoneNo" type="number" class="form-control" aria-label="Telephone Number" minlength="1" maxlength="9" placeholder="7XXXXXXXXX">
                    </div>
                    <small id="emailHelp" class="form-text text-muted">eg.7XXXXXXXXX.</small>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">NIC Number</label>
                    <input name="nic" type="text" class="form-control" id="exampleFormControlInput1" placeholder="XXXXXXXXXv">
                    <small id="emailHelp" class="form-text text-muted">eg.XXXXXXXXXv.</small>
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlFile1">NIC Image</label>
                    <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>

                </br>

                <button type="submit" name="submit" class="btn btn-outline-secondary">Continue</button>
            </form>

        </div>
    </body>
</html>