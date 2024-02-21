<?php
include 'bootstrap.html';
require "connection.php";

if(isset($_POST['submit'])){
    $Email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
   
    $Query = "INSERT INTO `user` (`Email`, `UserName`, `Password`) VALUES ('$Email', '$username', '$password')";

    
   
    $res = mysqli_query($conn,$Query);
    
    if($res){
       
        header("Location: load.php");
        // echo "Data inserted";
       
    }
    else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>
<form style="border: 2px solid black; margin-left: 500px; margin-right:500px; text-align: center ; margin-top: 10%; 
padding: 10px 10px 10px;
font-weight: bold;
" method="POST">
<div class="container">
<h2 class="text-center ">Sign In</h2>
    <div class="form-group" >
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
    
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
    </div>
    <button type="submit" name ="submit" class="btn btn-primary btn-block">Sign In</button>
</div>
</form>
