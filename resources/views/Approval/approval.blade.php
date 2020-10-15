<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
        
        <title>Approval</title>
    </head>
    <body>
        <script type="text/JavaScript">
            $(document).ready( function () {
                $('#harvestTable').DataTable();
                $('#cultivationTable').DataTable();
            });
        </script>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" width="87.5" height="50" alt="" loading="lazy">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            
                
                <button type="button" class="btn btn-outline-warning" onclick="window.location.href = 'http://127.0.0.1:8000/approval';"><i class="fas fa-language"></i> Language</button>
                <button type="button" class="btn btn-outline-danger" onclick="window.location.href = 'http://127.0.0.1:8000/approval';"><i class="fas fa-sign-out-alt"></i> Sign Out</button>
            </div>
        </nav>
        
        <div class="container" style="background-color:white;">

            <h2 class="display-4">Approval Harvest</h2>
            
            </br>

            <table id="harvestTable" class="display table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Cultivation ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Season</th>
                        <th scope="col">Province</th>
                        <th scope="col">District</th>
                        <th scope="col">Region</th>
                        <th scope="col">Cultivation Start Date</th>
                        <th scope="col">Cultivation End Date</th>
                        <th scope="col">Status</th>
                        <!-- <th scope="col">Land</th> -->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($cultivation as $cultivations)
                    <tr> 
                        <th scope="row">{{ $cultivations[0] }}</th> 
                        <td>{{ $cultivations[1] }}</td>
                        <td>{{ $cultivations[2] }}</td>  
                        <td>{{ $cultivations[3] }}</td> 
                        <td>{{ $cultivations[4] }}</td> 
                        <td>{{ $cultivations[5] }}</td>
                        <td>{{ $cultivations[6] }}</td>
                        <td>{{ $cultivations[7] }}</td>
                        <td>{{ $cultivations[8] }}</td>
                        <td>@if ($cultivations[9] == 0)
                            <p style='color:blue'>Pending</p>
                        @elseif ($cultivations[9] == 1)
                            <p style='color:green'>Accepted</p>
                        @else
                            <p style='color:red'>Declined</p>
                        @endif</td>
                        <td><a class="btn btn-outline-primary" href="http://127.0.0.1:8000/cultivationDescription/{{ $cultivations[0] }}">View</a></td>
                        <!-- <td><button type="button" class="btn btn-dark">Land Details</button></td> -->  
                    </tr> 
                @endforeach        
                </tbody>
            </table>
            
            <table id="cultivationTable" class="display table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Harvest ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Season</th>
                        <th scope="col">Province</th>
                        <th scope="col">District</th>
                        <th scope="col">Region</th>
                        <th scope="col">Harvest End Date</th>
                        <th scope="col">Cultivation Start Date</th>
                        <th scope="col">Cultivation End Date</th>
                        <th scope="col">Status</th>
                        <!-- <th scope="col">Land</th> -->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($harvest as $harvests)
                    <tr> 
                        <th scope="row">{{ $harvests[0] }}</th> 
                        <td>{{ $harvests[1] }}</td>
                        <td>{{ $harvests[2] }}</td>  
                        <td>{{ $harvests[3] }}</td> 
                        <td>{{ $harvests[4] }}</td> 
                        <td>{{ $harvests[5] }}</td>
                        <td>{{ $harvests[6] }}</td>
                        <td>{{ $harvests[7] }}</td>
                        <td>{{ $harvests[8] }}</td>
                        <td>{{ $harvests[9] }}</td>
                        <td>@if ($harvests[10] == 0)
                            <p style='color:blue'>Pending</p>
                        @elseif ($harvests[10] == 1)
                            <p style='color:green'>Accepted</p>
                        @else
                            <p style='color:red'>Declined</p>
                        @endif</td>
                        <td><a class="btn btn-outline-primary" href="http://127.0.0.1:8000/harvestDescription/{{ $harvests[0] }}">View</a></td>
                        <!-- <td><button type="button" class="btn btn-dark">Land Details</button></td> -->  
                    </tr> 
                @endforeach        
                </tbody>
            </table>

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
        </div>
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>