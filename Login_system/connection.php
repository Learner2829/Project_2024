<?php
$Server="localhost";
$Username="root";
$Password="";
$Database="test";
$conn=mysqli_connect($Server,$Username,$Password,$Database);

if($conn){
    // echo "Connected";
}
else
{
    echo "Not Connected";
}



?>