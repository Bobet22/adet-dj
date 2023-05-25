<?php

// Create a connection to the database
$servername = "localhost";
$username = "root";
$password = "124peao1";
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
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";

    // Bind the parameters
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);

    // Execute the query
    $stmt->execute();

    // Check if the user exists
    if ($stmt->rowCount() > 0) {
      // The user exists, so log them in
      session_start();
      $_SESSION['username'] = $username;
    } else {
      // The user doesn't exist, so show an error message
      header('Location: error.php');
    }
  }
} catch (PDOException $e) {
  // Display an error message if the connection fails
  echo $e->getMessage();
}

?>