<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Information</title>

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
        
        #table tr:nth-child(even){background-color: #f2f2f2;}
        
        #table tr:hover {background-color: #ddd;}
        
        #table th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #4CAF50;
          color: white;
        }
        </style>
</head>
<body>
    <!--The header for the  -->
    <header>
        <div class="overlay">
    <h1>Simply The Best</h1>
    <h3>Reasons for Choosing US</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.</p>
        <br>
        <button>READ MORE</button>
            </div>
    </header>

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