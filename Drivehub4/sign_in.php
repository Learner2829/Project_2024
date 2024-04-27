<?php
include_once('connection_db.php');

$errors = []; // Array to store validation errors

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
        $errors[] = "All fields are required!";
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // Check if username or email already exists
        $sql_check = "SELECT * FROM `User` WHERE `U_NAME`='$username' OR `U_EMAIL`='$email'";
        $result_check = mysqli_query($conn, $sql_check);
        
        if (mysqli_num_rows($result_check) > 0) {
            $errors[] = "Username or email already exists!";
        } else {
            // Insert new user record with hashed password
            $password=password_hash($password,PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO `user` (`U_NAME`, `U_EMAIL`, `PASSWORD`) VALUES ('$username', '$email', '$password')";
            $result_insert = mysqli_query($conn, $sql_insert);
            
            if ($result_insert) {
                header('location:index.php');
                exit; // Stop further execution after redirection
            } else {
                $errors[] = "Error: " . mysqli_error($conn);
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sigh-In</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3 mt-5">
      <h2 class="text-center mb-4">Sign Up</h2>
      
      <?php 
      if (!empty($errors)) {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
          foreach ($errors as $error) {
              echo '<p>' . $error . '</p>';
          }
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
      }
      ?>
      
      <form method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
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
