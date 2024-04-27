<?php
require_once "connection_db.php";
require_once "boot.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["user_input"];
    // Use mysqli_real_escape_string to sanitize the input
    $escaped_uname = mysqli_real_escape_string($conn, $uname);
    $query = "SELECT * FROM user WHERE MATCH(U_NAME) AGAINST('$escaped_uname')";
    
    $result = mysqli_query($conn, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($record = mysqli_fetch_assoc($result)) {
                echo '<div class="alert alert-light" role="alert" style="text-align:center">
                    <img src="p/image1.jpg" style="width: 50px; height: 50px;" alt="">
                    <a href="user_d_t.php?uname='.$record["U_NAME"].'" class="alert-link">' . $record["U_NAME"] . '</a>. Give it a click for view Profile.
                    <a href="index.php">Back</a>
                </div>';
            }
        } else {
            echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
             User not found;
             <a href="index.php">Back</a>
            </div>
          </div>
        
          </div>';
        
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
