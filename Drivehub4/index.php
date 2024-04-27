<?php
// include "p\_modals.php";
include "boot.php";
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drivehub</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Source Sans Pro', sans-serif;
           background: skyblue url('p/back.png') no-repeat; /* Added background image */
            background-size: cover;
            margin: 0;
        }
        #sidebar {
            position: absolute;
            width: 300px;
            height: 100%;
            background: #000;
            left: -300px;
            transition: .4s;
            z-index: 3; /* Ensure sidebar is above overlay */
        }
        #sidebar.active {
            left: 0px;
        }
        #sidebar ul li {
            list-style: none;
            color: #fff;
            font-size: 20px;
            padding: 20px 24px;
        }
        #sidebar .toggle-btn {
            position: absolute;
            top: 30px;
            left: 330px;
            z-index: 4; /* Ensure toggle button is above overlay */
        }
        .welcome-text {
    position: absolute;
    font-family: Georgia, serif;
    top: 50%;
    left: 50%;
    background-color: rgba(0, 0, 0, 0.5); /* Decreased opacity */
    transform: translate(-50%, -50%);
    color: white;
    font-size: 24px;
    text-align: center;
    padding: 10px 20px; /* Combined padding */
}
        .toggle-btn span {
            width: 45px;
            height: 4px;
            background: #fff;
            display: block;
            margin-top: 6px;
        }
        .menu {
            width: 100%;
            background: rgba(0, 0, 0, 0.3); /* Adjusted background color and opacity */
            overflow: auto;
            padding: 10px 20px;
            position: relative;
            z-index: 2; /* Ensure top navigation stays above sidebar */
        }
        .s1-text{
            margin-top: 100px;
            color: white;
            position: absolute;
    font-family: Georgia, serif;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 24px;
    text-align: center;
    padding: 10px 20px; /* Combined padding */
        }
        .s2-text{
            margin-top: 20px;
            color:white;
            position: absolute;
    font-family: Georgia, serif;
    margin-top: 300px;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 24px;
    text-align: center;
    padding: 10px 20px; /* Combined padding */
        }
        .menu ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
            line-height: 40px; /* Adjusted line height */
            float: right;
        }
        .menu li {
            float: left;
            margin-right: 20px;
        }
        .menu ul li a {
            background: #142b47;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            color: #f2f2f2;
            font-size: 16px;
            font-family: sans-serif;
        }
        .menu li a:hover {
            color: #fff;
            opacity: 0.8; /* Adjusted opacity on hover */
        }
        .search-form {
            margin-top: 10px; /* Adjusted margin */
            float: right;
            margin-right: 40px;
        }
        input[type=text] {
            padding: 7px;
            border: none;
            font-size: 16px;
            font-family: sans-serif;
        }
        button {
            background: orange;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            padding: 7px 15px;
            font-family: sans-serif;
            border: none;
            font-size: 16px;
        }
        #login {
            margin-right: 20px;
        }
        #signup {
            margin-right: 20px;
        }
        /* Overlay styles */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
            z-index: 1; /* Ensure overlay is above everything except sidebar */
            display: none; /* Initially hidden */
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li><a href="about.php" ><button type="button">About</button></a></li>
            <li><a href="contact.php" ><button type="button">Contact Us</button></a></li>
        </ul>
    </div>
    <nav class="menu">
        <a href="login.php" style="padding-left: 60%; "><button type="button"> Log-in</button></a>
        <a href="sign_in.php"><button type="button">Sign Up</button></a>   
        <form class="search-form" action="search.php" method="post">
            <input type="text" name="user_input" placeholder="Search">
            <button type="submit" value="submit" name="submit">Search</button>
        </form>
    </nav>
    <div class="overlay" onclick="toggleSidebar()"></div> <!-- Overlay element -->
    <div class="welcome-text">
        <p>D r i v e H u b</p>
    </div>
    <div class="s1-text">
        <p> Empowering Your Journey, One Mile at a Time.</p>
    </div>
    <div class="s2-text">
        <p>Navigate Your Future with Drive Hub.</p>
    </div>
   
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
            var overlay = document.querySelector('.overlay');
            overlay.style.display = (sidebar.classList.contains('active')) ? 'block' : 'none';
        }
    </script>
</body>
</html> 
