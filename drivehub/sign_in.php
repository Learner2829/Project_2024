<?php
include_once('connection_db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {           
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);        
        
        // Check if username or email already exists
        $sql_check = "SELECT * FROM `usertable` WHERE `username`='$username' OR `useremail`='$email'";
        $result_check = mysqli_query($conn, $sql_check);
        
        if(mysqli_num_rows($result_check) > 0) {
            echo "Username or email already exists!";
        } else {
            // Insert new user record with hashed password
            $sql_insert = "INSERT INTO `usertable` (`username`, `useremail`, `password`)
                           VALUES ('$username', '$email', '$hashed_password')";
            $result_insert = mysqli_query($conn, $sql_insert);
            
            if($result_insert) {
                header('location:user_d.php');
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    } else {
        echo "All fields are required!";
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
      <h2 class="text-center mb-4">Sign Up</h2>
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
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
