
<!--/**-->
<!-- * Imelda Medina-->
<!-- * Nov 16/2019-->
<!-- * guest_book.php-->
<!-- */-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Guest Book</title>
    <!--Favicon-->
    <link rel="icon" type="image/jpg" href="images/books.jpg">
    <link rel="stylesheet" type="text/css" href="guest_book.css">

</head>
<body>

<!--<div class="container" id="main">-->
<div align="center">
    <div class="jumbotron">
        <h1 class="display-4">Guest Book</h1>
    </div><!--end of jumbotron-->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top ">
        <a class="navbar-brand" href="http://imedina.greenriverdev.com/portfolio/landing.html">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="bio" href="http://imedina.greenriverdev.com/portfolio/bio.html">Bio</a></li>
                <li class="nav-item">
                    <a class="nav-link " data-value="portfolio"href="http://imedina.greenriverdev.com/portfolio/portfolio.html">Portfolio</a></li>
                <li class="nav-item">
                    <a class="nav-link " data-value="linkedin" href="https://www.linkedin.com/in/imelda-medina/" target="_blank" rel="noopener noreferrer">LinkedIn</a></li>
                <li class="nav-item">
                    <a class="nav-link " data-value="resume" href="http://imedina.greenriverdev.com/305/resume/index.html" target="_blank" rel="noopener noreferrer">Resume</a></li>
                <li class="nav-item">
                    <a class="nav-link " data-value="guest_book" href="http://imedina.greenriverdev.com/305/GuestBook/guest_book.php">Guest Book</a></li>
                <li class="nav-item">
                    <a class="nav-link " data-value="admin_page" href="http://imedina.greenriverdev.com/305/GuestBook/login.php">Admin Page</a></li>
            </ul>
        </div>
    </nav>
<?php
//Include the nav page
    include 'nav.php';
?>
</div>
<br>
<form class="container" action="confirmation.php" method="post">
<div class="container">

<fieldset class="form-name">
    <div class="form-name">
<!--        <label for="fName">First name</label>-->
        <input class="form-control" type="text" id="fName" name="fName" placeholder="First name&#42;">
        <span class="err" id="err-fName">Please enter a first name</span>
    </div>
</fieldset>

<fieldset class="form-group">
    <div class="form-name">
<!--        <label for="lName">Last name</label>-->
        <input type="text" class="form-control" id="lName" name="lName" placeholder="Last name&#42;" >
        <span class="err" id="err-lName">Please enter a last name</span>
    </div>
</fieldset>

<fieldset class="form-group">
    <div class="form-title">
<!--        <label for="title">Title</label>-->
        <input type="text" class="form-control" id="title" name="title" placeholder="Title" >
        <span class="err" id="err-title">Please enter a title</span>
    </div>
</fieldset>

<fieldset class="form-group">
    <div class="form-company">
<!--        <label for="company">Company</label>-->
        <input type="text" class="form-control" id="company" name="company" placeholder="company" >
        <span class="err" id="err-company">Please enter a company</span>
    </div>
 </fieldset>

 <fieldset class="form-group">
    <div class="form-linkedIn">
<!--        <label for="linkedIn">LinkedIn URL</label>-->
        <input type="text" class="form-control" id="linkedIn" name="linkedIn" placeholder="LinkedIn URL">
        <span class="err" id="err-linkedIn">Please enter a valid linkedIn URL</span>
    </div>
 </fieldset>

 <fieldset class="form-group">
    <div class="form-Email">
<!--        <label for="email">Email address</label>-->
        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        <span class="err" id="err-Email">Please enter a valid Email</span>
    </div>
 </fieldset>

 <fieldset class="form-group">
    <div class="form-group" id="comment-block">
<!--        <label for="comment">Comment</label>-->
        <textarea class="form-control" id="comment" name="comment" rows="3" cols="20" placeholder="Comment"></textarea>
    </div>
 </fieldset>
    <fieldset>
        <div class="form-check" id="mail">
            <input class="form-check-input" type="checkbox"
                   value="mailing" id="mailing" name="mailing">
            <label class="form-check-label" for="mailing">
                Please add me to your mailing list
            </label>
        </div>
    </fieldset>
    <div id="eFormat">
 <fieldset class="form-group">
        <legend>Choose an email format</legend>
        <div class="form-check form-check-inline">
            <input class="form-check-input"
                   type="radio" name="method"
                   id="html" value="html">
            <label class="form-check-label" for="html">
                HTML
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input"
                   type="radio" name="method"
                   id="text" value="text">
            <label class="form-check-label" for="text">
                Text
            </label>
        </div>
        <span class="err" id="err-method">Please select an email format
            </span>
 </fieldset>
    </div>
 <fieldset class="form-group">
<!--        <legend>How did we meet?</legend>-->
        <div class="form-group">
            <select class="form-control" id="meet" name="meet">
                <option value="0">How did we meet?&#42;</option>
                <option  value="1">Meet up</option>
                <option  value="2">Job Fair</option>
                <option value="3">We haven't met yet</option>
                <option value="4">Other</option>
            </select>
        </div>
     <span class="err" id="err-meet">Please specify</span>
            <div class="form-group" id="other-block">
<!--                <label for="met_other">Other</label>-->
                <textarea class="form-control" id="met_other" name="met_other" rows="3" cols="20" placeholder="Other"></textarea>
            </div>
     <div>
<!--         <a href="admin.php" class="p-2 mb-auto bg-dark text-white">Go to admin page</a>-->
<!--         <button id="adminBton" class="btn btn-outline-dark" onclick="window.location.href = 'admin.php';">Go to admin page</button>-->
     </div>
 </fieldset>


        <div>
        <button id="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
</form>
</div>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/guest_book.js"></script>-->
<script>
    var met = document.getElementById("meet");
    met.onchange= meet;
    function meet() {
        var oBlock = document.getElementById("other-block");
        if(this.options[this.selectedIndex].value=="4"){
            oBlock.style.display = "block";
        }else{
            oBlock.style.display = "none";
        }
    }
    var email = document.getElementById("mailing");
    email.onchange= eMail;
    function eMail(){
        var eFor = document.getElementById("eFormat");
        if(this.checked){
            eFor.style.display ="block";
        }else{
            eFor.style.display ="none";
        }
    }
</script>
</body>
</html>