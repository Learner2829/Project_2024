<?php
include_once('connection_db.php');

session_start(); // Start session

if ($_SERVER["REQUEST_METHOD"] == "POST") {           
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Query to check if user exists
        $sql_select = "SELECT * FROM `usertable` WHERE `username`='$username' AND `password`='$password'";
        $result = mysqli_query($conn, $sql_select);
        
        if(mysqli_num_rows($result) == 1) { // If user exists
            $_SESSION['username'] = $username; // Store username in session
            header('location:user_d.php'); // Redirect to user dashboard
            exit();
        } else {
            echo "Invalid username or password"; // Display error message
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3 mt-5">
      <h2 class="text-center mb-4">Login IN</h2>
      <form method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
