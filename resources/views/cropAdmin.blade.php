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

        <title>Crop</title>
    </head>
    <body>
    <!-- style="background-color:#2E933C;" -->
        <script>
            $(document).ready( function () {
                $('#datatable').DataTable();
            });
        </script>
        
        <div class="container" style="background-color:white;">

            <h2 class="display-4">Crop</h2>
            
            </br>

            <table class="table" id="datatable"> 
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Crop Category</th>
                        <th scope="col">Crop</th>
                        <th scope="col">Variety</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($varieties as $variety)
                    @php
                        $crop = App\Crop::where('id', $variety->crop_id)->first();
                        $category = App\CropCategory::where('id', $crop->type_id)->first();
                    @endphp
                    <tr>
                        <th scope="row">{{ $category->name }}</th>
                        <td>{{ $crop->name }}</td>
                        <td>{{ $variety->name }}</td>
                        <td>@mdo</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>