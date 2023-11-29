<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        } */

        .login-container {
            background-color: #fff;
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .input-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .signup-link {
            text-align: center;
            margin-top: 10px;
        }

        .signup-link a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-white bg-white color="#">
        <div class="container-fluid">
           <!-- Logo -->
           <a class="navbar-brand" href="#">
                <img src="{{ asset('image/reuserlogo.png') }}" alt="Logo" height="70">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" style="display: flex; flex-grow: 0; justify-content: flex-end; align-items: flex-end;" id="mynavbar">
            <ul class="navbar-nav me-auto ">

            <!-- Navbar -->
              <li class="nav-item">

            <tr> </tr>
                <a class="nav-link" href="/index"class="index-link" href="javascript:void(0)">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Role</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">About</a>
              </li>
              <li class="nav-item">
                <a href="/signup"class="nav-link" href="javascript:void(0)">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <center>
        <!-- Login -->
    <div class="login-container">
        <h2>Login</h2>

        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your email...">
        </div>

        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Your password...">
        </div>

        <button type="submit">Login</button>

        <div class="signup-link">
            <p>Don't have an account? <a href="/signup"class="login-link" href="javascript:void(0)">Sign up</a></p>
        </div>
    </div>
        </center
</body>
</html>
