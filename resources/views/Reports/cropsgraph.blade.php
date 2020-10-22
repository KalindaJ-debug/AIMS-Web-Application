<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crops Information</title>

    <style>
        .table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        .table td, .table th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        
        .table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
       
       .note {
           background-color: #4CAF50;
           border: 2px dashed greenyellow;
           padding: 20px;
       }

    </style>
</head>
<body onload="init()">
    <!--The header for the  -->
    <header>
        <div class="note">
            <h1>AIMS Sri Lanka</h1>
            <h3>Agricultural Information Management System</h3>
            <p>The below pdf is generated for documentation purposes. The documents may contain sensitive data so, please handle with absolute discretion. </p>
            <h3>Crops List</h3>
        </div>
    </header>

    <br>
    <br>
    <h3>Crop Categories</h3>
    <table class="table" id="categoryTable"> 
        <thead class="thead-dark">
            <tr>
                <th scope="col">Crop Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $categories)
            <tr>
                <td scope="row">{{ $categories->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <h3>Crops</h3>
    <table class="table" id="cropTable"> 
        <thead class="thead-dark">
            <tr>
                <th scope="col">Crop Category</th>
                <th scope="col">Crop</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($crop as $crops)
            @php
                $category = App\CropCategory::where('id', $crops->type_id)->first();
            @endphp
            <tr>
                <td scope="row">{{ $category->name }}</td>
                <td><p style='color:blue'>{{ $crops->name }}</p></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <h3>Crop varieties</h3>
    <table class="table" id="varietyTable"> 
        <thead class="thead-dark">
            <tr>
                <th scope="col">Crop Category</th>
                <th scope="col">Crop</th>
                <th scope="col">Variety</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($varieties as $variety)
            @php
                $crop = App\Crop::where('id', $variety->crop_id)->first();
                $category = App\CropCategory::where('id', $crop->type_id)->first();
            @endphp
            <tr>
                <td scope="row">{{ $category->name }}</td>
                <td>{{ $crop->name }}</td>
                <td><p style='color:blue'>{{ $variety->name }}</p></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Data List for Each category , crop and variety</h3>
    @foreach ($crop_categories as $cat)
        <h2>{{ $cat->name }}</h2>
<p>The sum of the harvested land for the specific distrcit is {{$cat->sum}}</p>        
    @endforeach

    @foreach ($crop_list as $clist)
            
    @endforeach

    @foreach ($crop_varieties as $cvariety)
            
    @endforeach
    
</body>
</html>