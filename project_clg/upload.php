<?php
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
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Error: " . $_FILES['file']['error'];
}
?>
