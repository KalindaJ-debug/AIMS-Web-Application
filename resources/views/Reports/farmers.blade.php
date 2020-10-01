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
        <thead>
          <tr>
            <th >ID</th>
            <th >First Name</th>
            <th >Last Name</th>
            <th >Username</th>
            <th >Email</th>
            <th >Last Login</th>
            <th >IP Address</th>
          </tr>
        </thead>
              
        <tbody>
            @foreach($users as $user)
              <tr>
                  <th>{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->lastname}}</td>
                  <td>{{$user->username}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->last_login_at}}</td>
                  <td>{{$user->last_login_ip}}</td>

              </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>