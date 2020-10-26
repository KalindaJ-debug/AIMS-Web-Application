<!DOCTYPE html>
<html>
<head>
    <title>Harvest Details in Malabe Region</title>
    <style type="text/css">
    table{
        width:100%;
        margin: 0 auto;
        border:1px solid;
    }
    </style>
</head>
<body>
<h1>Harvest Details in Malabe Region</h1>
<table>
    <thead>
    <tr>
        <th>ID</td>
        <th>Farmer Name</th>
        <th>Season</th>
        <th>Harvest Date</th>
        <th>Harvested Amount</th>
        <th>Cultivated Land</th>
    </tr>
    </thead>
    <tbody>
     @foreach($harvests as $harvest) 
        <tr>
            <td>{{$harvest[0]}}</td>
            <td>{{$harvest[1]}} {{$harvest[2]}}</td>
            <td>{{$harvest[3]}}</td>
            <td>{{$harvest[7]}}</td>
            <td>{{$harvest[4]}}</td>
            <td>{{$harvest[5]}}</td>
        </tr>
     @endforeach
    </tbody>
</table>
</body>
</html>
