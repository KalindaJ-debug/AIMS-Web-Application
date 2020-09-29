<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <title>Approval Description {{ $id }}</title>
    </head>
    <body>
        <div class="container">
            <button type="button" class="btn btn-outline-primary" onclick="window.location.href = 'http://127.0.0.1:8000/approval';"><i class="fas fa-arrow-left"> Back</i></button>
            
            </br></br>
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Farmer</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Crop</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">External Factors</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" value="{{ $farmer->firstName }}" readonly>
                            </div>
                                
                            <div class="form-group">
                                <label for="otherName">Other Name</label>
                                <input type="text" class="form-control" id="otherName" value="{{ $farmer->otherName }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" value="{{ $farmer->lastName }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="province">Province</label>
                                <input type="text" class="form-control" id="province" value="{{ $province->name }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="">District</label>
                                <input type="text" class="form-control" id="" value="{{ $district->name }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="region">Region</label>
                                <input type="text" class="form-control" id="region" value="{{ $region->name }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="season">Season</label>
                                <input type="text" class="form-control" id="season" value="{{ $approval->season }}" readonly>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="form-group">
                                <label for="category">Crop Category</label>
                                <input type="text" class="form-control" id="category" value="{{ $category->name }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="crop">Crop Name</label>
                                <input type="text" class="form-control" id="crop" value="{{ $crop->name }}" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label for="variety">Variety</label>
                                <input type="text" class="form-control" id="variety" value="{{ $variety->name }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="variety">Cultivation Submitted Date</label>
                                <input type="text" class="form-control" id="variety" value="{{ $approval->submitedDate }}" readonly>
                            </div>
                                
                            <div class="form-group">
                                <label for="amount">Harvest Amount</label>
                                <input type="text" class="form-control" id="amount" value="{{ $approval->harvestedAmount }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="land">Cultivated Land</label>
                                <input type="text" class="form-control" id="land" value="{{ $approval->cultivatedLand }}" readonly>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="data">
                                    <label class="form-check-label" for="data">
                                        Approve Data
                                    </label>
                                </div>
                            </div> 
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="form-group">
                                <label for="average">Average Rainfall</label>
                                <input type="text" class="form-control" id="average" value="4.2" readonly>
                            </div>

                            <div class="form-group">
                                <label for="damage">Damaged Land</label>
                                <input type="text" class="form-control" id="damage" value="24.2" readonly>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="external">
                                    <label class="form-check-label" for="external">
                                        Approve Data
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-alerts="alerts" data-titles='{"error": "<em>Danger Title!</em>"}' data-fade="2000" ></div>
            
            <form>
                <div class="form-row">
                    <div class="col">
                        <button type="button" class="btn btn-outline-success btn-lg" id="approve"><i class="fas fa-check"></i> Approve</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-danger btn-lg" id="decline"><i class="fas fa-times-circle"></i> Decline</button>
                    </div>
                </div>
            </form>

            </br>
            </br>
            </br>
            </br>
        </div>

        <nav class="navbar fixed-bottom navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" width="87.5" height="50" alt="" loading="lazy">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    AIMS (Agriculture Information Management System)                   
                </ul>
                
                <button type="button" class="btn btn-outline-primary" onclick="window.location.href = 'http://127.0.0.1:8000/approval/1';"><i class="far fa-question-circle"></i> About Us</button>
                <button type="button" class="btn btn-outline-primary" onclick="window.location.href = 'http://127.0.0.1:8000/approval/1';"><i class="fas fa-phone-volume"></i> Contact Us</button>
            </div>
        </nav>

        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Please check the checkboxes
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="declineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="{{action('ApprovalController@store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $id }}">
                        <input type="hidden" name="status" value="denied">
                        <div class="modal-body">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="accuracy" name="accuracy" onclick="clearOther()">
                                <label class="form-check-label" for="other">Inaccurate Data</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="otherCheck" name="otherCheck" onclick="otherCheckBox()">
                                <label class="form-check-label" for="other">Other Reason</label>
                            </div>
                            <div class="form-group">
                                <label for="other">Other</label>
                                <textarea class="form-control" name="other" id="other" rows="3" readonly></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-danger">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-check-circle"></i> Success</h5>
                </div>
                <div class="modal-footer">
                    <form method="post" action="{{action('ApprovalController@store')}}" enctype="multipart/form-data" id="farmerRegistration">
                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $id }}">
                        <input type="hidden" name="status" value="approved">

                        <button type="submit" class="btn btn-outline-dark">Continue</button>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script>
            function otherCheckBox() 
            {
                var otherCheck = document.getElementById("otherCheck");

                if (otherCheck.checked == true)
                {
                    document.getElementById('other').readOnly = false;
                    document.getElementById("accuracy").checked = false;
                }
                else
                {
                    document.getElementById('other').readOnly = true;
                }
            }

            function clearOther()
            {
                document.getElementById('other').value = "";
                document.getElementById('other').readOnly = true;
                document.getElementById("otherCheck").checked = false;
            }
        </script>
    </body>
</html>

<script>
    $( document ).ready(function() {
        $("#approve").click(function()
        {
            $(this).data('clicked', true);
            console.log("Test");
            
            var data = document.getElementById("data");
            var external = document.getElementById("external");

            if (data.checked == true)
            {
                console.log("Test 1");
                if (external.checked == true)
                {
                    console.log("Test 2");
                    $('#successModal').modal('show');
                }
                else 
                {
                    //$('.alert').alert();
                    $('#errorModal').modal('show');
                }
            }
            else
            {
                //$('.alert').alert();
                $('#errorModal').modal('show');
            }
        });

        $("#decline").click(function() {
            $('#declineModal').modal('show');
        });
    });    
</script>