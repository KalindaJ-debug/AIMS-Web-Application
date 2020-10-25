<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!-- Data Table -->
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
        <script type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        
        <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

        <script type="text/JavaScript">
        $(document).ready( function () {
            $('#cultivationTable').DataTable();
        } );
        </script>

        <title>Crop Visualisation</title>
    </head>
    <body>
        @include('layouts.header')
        @include('layouts.navbar')

        <div class="container">
            <h2>Crop District Analysis</h2>
            
            <table class="table" id="cultivationTable">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Crop</th>
                    <th scope="col">Cultivation</th>
                    <th scope="col">Harvest</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($crops as $crop)
                    <tr>
                        <th scope="row">{{$crop->id}}</th>
                        <td>{{$crop->name}}</td>
                        <td><a class="btn btn-outline-primary" href="http://127.0.0.1:8000/cropCultivationSelect/{{$crop->id}}">Report</a></td>
                        <td><a class="btn btn-outline-primary" href="http://127.0.0.1:8000/cropHarvestSelect/{{$crop->id}}">Report</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        
        </div>

        <script>
		
	    </script>

        @include('layouts.footer')
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
