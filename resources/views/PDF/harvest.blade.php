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
        <th>Farmer ID</th>
        <th>Season</th>
        <th>Harvest Date</th>
        <th>Harvested Amount</th>
        <th>Cultivated Land</th>
    </tr>
    </thead>
    <tbody>
     @foreach($harvests as $key => $harvest)   
        <tr>
            <td>{{$harvest->id}}</td>
            <td>{{$harvest->farmer_id}}</td>
            <td>{{$harvest->season}}</td>
            <td>{{$harvest->endDate}}</td>
            <td>{{$harvest->harvestedAmount}}</td>
            <td>{{$harvest->cultivatedLand}}</td>
        </tr>
     @endforeach
    </tbody>
</table>
</body>
</html>
