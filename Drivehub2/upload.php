<?php
require_once "connection_db.php";
session_start();
// Check if file was uploaded without errors
if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['file']['tmp_name'];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    
    // Move uploaded file to desired destination
    $uploadDir = 'uploads/';
    $destPath = $uploadDir . $fileName;
    
    if (move_uploaded_file($fileTmpPath, $destPath)) {
        $UNAME=$_SESSION['username'];
        $query1="SELECT `U_ID` FROM `user` WHERE U_NAME="."'$UNAME'";
        $result=mysqli_query($conn,$query1);
        $data=mysqli_fetch_assoc($result);
        $uid=$data["U_ID"];
        if(!$result){
            echo mysqli_error($conn);
        }
        // print_r($result);
        $query2="INSERT INTO `files` (`U_ID`, `FILE_NAME`, `FILE_TYPE`, `PATH`) VALUES ($uid, '$fileName', '$fileType', '$destPath')";
        $result2=mysqli_query($conn,$query2);
        if(!$result2){
            echo "Error uploading file.:".mysqli_error($conn);
        }
        else
        {
            echo "File uploaded successfully.";
            echo '<a href="user_d">Back</a>';
        }
        
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Error: " . $_FILES['file']['error'];
}
?>
