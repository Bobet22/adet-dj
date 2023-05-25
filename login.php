<!DOCTYPE html>
<html>
<head>
  <title>Login and Signup UI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <style>
    .container {
      width: 500px;
      margin: 0 auto;
      padding: 10px;
      background-color: #ffffff;
      border-radius: 5px;
    }
    
    .header {
      text-align: center;
    }
    
    .form-group {
      margin-bottom: 10px;
    }
    
    .input-group {
      width: 100%;
    }
    
    .input-group-text {
      background-color: #eeeeee;
      border-radius: 0 5px 5px 0;
    }
    
    .btn {
      background-color: #000000;
      color: #ffffff;
      border-radius: 5px;
      width: 100%;
    }
    
    .btn:hover {
      background-color: #000000;
      color: #ffffff;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Login and Signup UI</h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2>Login</h2>
        <form action="check.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>



