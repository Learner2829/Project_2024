
<?php
include_once 'connection_db.php';
include 'p/_modal.php';
include "boot.php"; 
session_start(); // Start session
if(isset($_SESSION["username"])){
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Centered Table</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        </head>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Drivehub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Messages
        </button>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
    <form action="logout.php" method="post">
    <input type="submit" name="logout" value="logout">
    </form>
    </nav>
    
    <div class="container">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="file" class="btn btn-primary">
                    <i class="bi bi-plus"></i> Choose File
                    <input type="file" id="file" name="file" style="display: none;">
                </label>
                <br>
                <input type="submit" value="Upload File" class="btn btn-success">
            </form>
        </div>
    <input type="file" id="fileInput" style="display: none;">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
        <div class="container mt-8" style="margin-left: 1px;">
            <div class="row">
                <div class="col-md-3">
                    <div class="card border bg-dark text-white text-center">
                        <div class="card-body">
                            <img src="image1.jpg" class="card-img-top mb-3" alt="Not set">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                            <ul class="list-group list-group-flush text-white">
                                <li class="list-group-item">Groups</li>
                                <li class="list-group-item">Files</li>
                                <li class="list-group-item">A third item</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8"  style="margin-top: 10px; margin-bottom: 90px; margin-left: 50px;">
                    <table class="table" style="background-color: rgba(255, 255, 255, 0);">
                        <thead>
                            <tr>
                                <th>File Name</th>
                                <th>File type</th>
                                <th>File size</th>
                                <th>Date</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>file1</td>
                                <td>.PDF</td>
                                <td>2kB</td>
                                <td>4/8/2024</td>
                                <td><a hred="#">EDIT</a></td>
                                <td><a hred="#">DELTE</a></td>
                            </tr>
                                <!-- Add more rows here -->
                        </tbody>
                    </table>
                    
        <div class="container mt-8" style="margin-left: 1px;">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table" style="background-color: rgba(255, 255, 255, 0);">
                        <!-- Your table content -->
                    </table>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
        <script>
      document.getElementById("openFileSystem").addEventListener("click", function() {
        document.getElementById("fileInput").click();
      });
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    </body>
    </html> ';
}
else{
    header("Location:index.php");
}




?>



    