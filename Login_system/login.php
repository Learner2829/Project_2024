<?php
include 'boot.html';

?>

<form style="border: 2px solid black; margin-left: 500px; margin-right:500px; text-align: center ; margin-top: 10%; 
padding: 10px 10px 10px;
font-weight: bold;
">
    
  <div class="form-group" >
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary" >Submit</button>
</form>

<?php





?>