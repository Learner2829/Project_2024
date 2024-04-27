<!-- <?php
include_once('connection_db.php');
if(isset($_POST['btn']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $sql = "INSERT INTO `assignment` (`TITLE`, `DESCRIPTION`) VALUES ('$title', '$description');";
    $r = mysqli_query($conn,$sql);
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS styles for the form */
        form {
            margin-left: 500px;
            margin-top: 40px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        h1 {
            text-align: center;
            margin-top: 40px;
        }
        .add-button {
            margin-left: 500px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Assignment Form</h1>
    <form action="assignment.php" method="POST">
        <label for="title">Title</label>
        <input type="text" name="title[]" id="title">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description[]" id="description">
        <br>
        <button type="submit" name="btn">Submit</button>
    </form>
    
    <?php
    // If the button is clicked, add another form
    if (isset($_POST['add_form'])) {
        echo '<form action="assignment.php" method="POST">
                <label for="title">Title</label>
                <input type="text" name="title[]" id="title">
                <br>
                <label for="description">Description</label>
                <input type="text" name="description[]" id="description">
                <br>
                <button type="submit" name="btn">Submit</button>
            </form>';
    }
    ?>
    
    <!-- Button to add another form -->
    <form action="" method="POST">
        <button class="add-button" type="submit" name="add_form">Add Form</button>
    </form>
</body>
</html>