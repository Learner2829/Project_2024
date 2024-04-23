
<?php

include "boot.php";
if(!(isset($_SESSION["username"]))){
// header("Location:index.php");
}
?>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Messages</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
<!-- <style>
   body {
            font-family: 'Source Sans Pro', sans-serif;
            background: skyblue url('Untitled.png') no-repeat; /* Added background image */
            background-size: cover;
            margin: 0;

        }
</style> -->
</head>
<body>

    <div class="container mt-8" style="margin-left: 1px;">
        <div class="row">
            <div class="col-md-3">
                <div class="card border bg-dark text-white text-center">
                    <div class="card-body">
                        <img src="image1.jpg" class="card-img-top mb-3" alt="Not set">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                            <th>Download</th>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html> 

