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
      <div class="col-md-12">
        <h2>Signup</h2>
        <form action="" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Signup</button>
        </form>

        <?php
        // Create a connection to the database
        $servername = "localhost";
        $username = "root";
        $password = "benny1234";
        $database = "adet-dj";

        // Create a new PDO object
        $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the connection is successful
        try {
          // Get the user input
          if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Prepare the SQL statement
            $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";

            // Bind the parameters
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);

            // Execute the query
            $stmt->execute();

            header('Location: login.php');

            // echo $stmt;

            // // Check if the user exists
            // if ($stmt->rowCount() > 0) {
            //   // The user exists, so log them in
            //   // header('Location: home.php');
            // } else {
            //   // The user doesn't exist, so show an error message
            //   // header("Location: login.php?err=1");
            // }
          }
        } catch (PDOException $e) {
          // Display an error message if the connection fails
          echo $e->getMessage();
        }
        ?>
      </div>
    </div>
  </div>
</body>
</html>
