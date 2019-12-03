<?php


//Turn on error reporting
//ERROR reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//If the user is already logged in
if (isset($_SESSION['username'])) {
    //Redirect to admin page
    header("location: admin.php");
}

//If the login form has been submitted
if (isset($_POST['submit'])) {
    //Include creds.php (eventually, passwords should be moved to a secure location
    //or stored in a database)
    include 'creds.php';

    //Get the username and password from the POST array
    $username = $_POST['username'];
    $password = $_POST['password'];


    //If the username and password are correct
    if (array_key_exists($username, $loggins) && $loggins["$username"] == $password) {
        //Store login name in a session variable
        $_SESSION['username'] = $username;

        //Redirect to admin(summary)
        header("location: admin.php");
    } else {
        //Login credentials are incorrect
        echo "<p>Invalid login</p>";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/guest_book.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/images.jpeg">
    <title>Log In</title>
</head>
<body>
<!-- Title and Contact Info -->
<div class="jumbotron jumbotron-fluid" id="jumbotron2">
    <div class="container">
        <br>
        <h1 class="display-4 center"> Hey, Good to see you again!</h1>
    </div>
</div>
<!-- navbar -->
<nav class="navbar navbar-expand-lg fixed-top ">
    <a class="navbar-brand" href="http://imedina.greenriverdev.com/portfolio/landing.html">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-4">
            <li class="nav-item">
                <a class="nav-link" data-value="bio" href="http://imedina.greenriverdev.com/portfolio/bio.php">Bio</a></li>
            <li class="nav-item">
                <a class="nav-link " data-value="portfolio"href="http://imedina.greenriverdev.com/portfolio/portfolio.php">Portfolio</a></li>
            <li class="nav-item">
                <a class="nav-link " data-value="linkedin" href="https://www.linkedin.com/in/imelda-medina/">LinkedIn</a></li>
            <li class="nav-item">
                <a class="nav-link " data-value="resume" href="http://imedina.greenriverdev.com/305/resume/index.html" target="_blank" rel="noopener noreferrer">Resume</a></li>
            <li class="nav-item">
                <a class="nav-link " data-value="guest_book" href="http://imedina.greenriverdev.com/305/GuestBook/guest_book.php">Guest Book</a></li>
            <li class="nav-item">
                <a class="nav-link " data-value="admin_page" href="http://imedina.greenriverdev.com/305/GuestBook/login.php">Admin Page</a></li>
        </ul>
    </div>
</nav>
<form id="main" method="post" action="#">
    <div class="container" >
        <p class="center">Log in to get going</p>
    <label>
        <input id="username" type="text" name="username"  placeholder="Username"><br>
    </label><br>
    <label>
        <input id="password" type="password" name="password"  placeholder="password"><br>
    </label><br>
        <input class="p-2 mb-auto bg-dark text-white" type="submit" name="submit" value="Log in">
<!--        <input type="button" onclick="alert('Hello World!')" value="Click Me!">-->
    </div><!-- end of div container-->
</form>
</body>
</html>
