<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmers Information</title>

    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        #table td, #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        
        #table th {
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
<body>
    <!--The header for the  -->
    <header>
        <div class="note">
            <h1>AIMS Sri Lanka</h1>
            <h3>Agricultural Information Management System</h3>
            <p>The below pdf is generated for documentation purposes. The documents may contain sensitive data so, please handle with absolute discretion. </p>
            <h3>Farmers List</h3>
        </div>
    </header>

    <br>
    <br>

    
    <table id="table" >
        <thead class="thead-dark">
            <tr>
                <th scope="col">Farmer ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Telephone Number</th>
                <th scope="col">NIC</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($farmer as $farmers)
            <tr>
                <th scope="row">{{ $farmers->id }}</th>
                <td>{{ $farmers->firstName }}</td>
                <td>{{ $farmers->lastName }}</td>
                <td>{{ $farmers->email }}</td>
                <td>{{ $farmers->userName }}</td>
                <td>{{ $farmers->telephoneNo }}</td>
                <td>{{ $farmers->nic }}</td>
            </tr>
            @endforeach
    </table>
    
</body>
</html>