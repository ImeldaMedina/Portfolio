<?php
    //no session start needed because pages 1, 2, and 3 already contain a
    //session_start and they 'include' the nav.php file so this file already
    //Start the session
    //session_start();

    //If user is logged in, get username
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        //Display a welcome message
        echo "<p> Welcome to the session, $username</p>";
        //Display a logout link
        echo  "<a href='logout.php'>Log out</a> ";
//        echo "<a href='page1.php'>Home</a> |";
    }

    //If user is logged in, get username
//    if(isset($_SESSION['username'])){
//        $username = $_SESSION['username'];
//        echo "  <a href='admin.php'>Guest Book Summary</a> |";
//    }else{
//        echo"  <a href=\"login.php\">Guest Book Summary</a> |";
//    }

?>
<link rel="stylesheet" type="text/css" href="nav.css">

<!-- <a href="guest_book.php">Guest Book</a>-->
<!--<a href="page3.php">Page 3</a>-->

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


