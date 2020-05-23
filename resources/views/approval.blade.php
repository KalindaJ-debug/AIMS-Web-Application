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

        <title>Approval</title>
    </head>
    <body>
    
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        });
    </script>
    <div class="container">
        
        <table id="datatable" class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Approval ID</th>
                    <th scope="col">Farmer Name</th>
                    <th scope="col">Province</th>
                    <th scope="col">District</th>
                    <th scope="col">Region</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Kalinda Jayasinghe</td>
                    <td>Western</td>
                    <td>Rajagiriya</td>
                    <td>Region 2</td>
                    <td><p style="color:blue">Pending</p></td>
                    <td><button type="button" class="btn btn-outline-primary" onclick="window.location.href = 'http://127.0.0.1:8000/proposal/1';">Primary</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Kalinda Jayasinghe</td>
                    <td>Eastern</td>
                    <td>Magul Maha Viharaya</td>
                    <td>Region 2</td>
                    <td><p style="color:blue">Pending</p></td>
                    <td><button type="button" class="btn btn-outline-primary" onclick="window.location.href = 'http://127.0.0.1:8000/proposal/1';">Primary</button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Kalinda Jayasinghe</td>
                    <td>Nothern</td>
                    <td>Jaffna</td>
                    <td>Region 2</td>
                    <td><p style="color:blue">Pending</p></td>
                    <td><button type="button" class="btn btn-outline-primary" onclick="window.location.href = 'http://127.0.0.1:8000/proposal/1';">Primary</button></td>
                </tr>
            </tbody>
        </table>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    </body>
</html>