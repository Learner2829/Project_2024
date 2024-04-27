<?php
include_once('connection_db.php');
session_start(); // Start session

if ($_SERVER["REQUEST_METHOD"] == "POST") {           
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Query to retrieve user by username
        $sql_select = "SELECT * FROM `User` WHERE `U_NAME`='$username'";
        $result = mysqli_query($conn, $sql_select);
        
        if(mysqli_num_rows($result) == 1) { // If user exists
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['PASSWORD'];
            
            // Verify the password
            if (password_verify($password, $hashed_password)) {
                $_SESSION['username'] = $username; // Store username in session
                header('location:user_d.php'); // Redirect to user dashboard
                exit();
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Invalid username or password
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                ';
            }
        } else {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Invalid username or password
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
          ';
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
        <a href="index.php">Back to Home</a>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
