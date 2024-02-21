<?php
include 'bootstrap.html';
require "connection.php";

if(isset($_POST['submit'])){
    $Email = $_POST['email'];
    $password = $_POST['password'];
       
      // echo "Email".$Email."<br>";
      // echo "Password".$password."<br>";

      // $Query="SELECT * FROM user where Email='$Email'&& Password='$password'";

        // header("Location: load2.php");  
    }





?>

<form style="border: 2px solid black; margin-left: 500px; margin-right:500px; text-align: center ; margin-top: 10%; 
padding: 10px 10px 10px;
font-weight: bold;
" method="POST">
<h2 class="text-center ">Log-in</h2>
  <div class="form-group" >
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
</form>

<?php





?>