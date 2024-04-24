<?php
// Logout functionality
if (isset($_POST['logout'])) {
    // Destroy the session
    session_unset();
    session_destroy();
    // Redirect to login page after logout
    header('Location:index.php');
    exit();
}
else
{
    echo 'not work';
}



?>
