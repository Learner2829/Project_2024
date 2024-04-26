<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "file_database"; // Change this to your database name

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    echo "o";
}

// Check if the form is submitted
if(isset($_POST["submit"])) {
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

    // Move uploaded file to a directory (optional)
    $upload_dir = "uploads/"; // Change this to your desired upload directory
    $upload_file = $upload_dir . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $upload_file);

    // Insert file information into the database
    $sql = "INSERT INTO files (file_name, file_size, file_type, file_extension) 
            VALUES ('$file_name', '$file_size', '$file_type', '$file_extension')";

    if (mysqli_query($conn, $sql)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$sql_select = "SELECT file_name, file_size, file_type FROM files";
$result = mysqli_query($conn, $sql_select);
echo "<table border='2px'>";
while($a = mysqli_fetch_array($result))
{
    echo "<tr>";

     echo "<td>";
     echo getFileIcon($a['file_type']); // Function to display file icon
     echo "</td>";

     echo "<td>";
     echo $a['file_name'];
     echo "</td>";

     echo "<td>";
     echo $a['file_size'];
     echo "</td>";

     echo "<td>";
     echo $a['file_type'];
     echo "</td>";
     
     echo "</tr>";

}
echo "</table>";
mysqli_close($conn);

// Function to get file icon based on file type
function getFileIcon($file_type) {
    // Define file type to icon mapping
    $icon_mapping = array(
        'application/pdf' => 'pdf_icon.png',
        'image/jpeg' => 'image_icon.png',
        'image/png' => 'image_icon.png',
        // Add more file types as needed
    );

    // Check if file type exists in mapping
    if(array_key_exists($file_type, $icon_mapping)) {
        return "<img src='icons/" . $icon_mapping[$file_type] . "' alt='File Icon' width='50'>";
    } else {
        // Default icon if file type is not found
        return "<img src='icons/default_icon.png' alt='File Icon' width='50'>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>File Upload Form</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="data.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" name="submit" value="Upload File">
    </form>
</body>
</html>
