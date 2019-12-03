<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Portfolio</title>

    <!--Favicon-->
    <link rel="icon" type="image/jpg" href="images/black_hearth.jpeg">
    <link rel="stylesheet" type="text/css" href="styles/other.css">

</head>
<body>

<div class="jumbotron jumbotron-fluid">
<div class="container">
    <h1 class="display-4">Hello, Welcome To My Portfolio</h1>
    <p class="lead"> </p>
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
                <a class="nav-link " data-value="linkedin" href="https://www.linkedin.com/in/imelda-medina/" target="_blank" rel="noopener noreferrer">LinkedIn</a></li>
            <li class="nav-item">
                <a class="nav-link " data-value="resume" href="http://imedina.greenriverdev.com/305/resume/index.html">Resume</a></li>
            <li class="nav-item">
                <a class="nav-link " data-value="guest_book" href="http://imedina.greenriverdev.com/305/GuestBook/guest_book.php">Guest Book</a></li>
            <li class="nav-item">
                <a class="nav-link " data-value="admin_page" href="http://imedina.greenriverdev.com/305/GuestBook/login.php">Admin Page</a></li>
        </ul>
    </div>
</nav>


<div class="container">

    <section class="media mb-4" id="index">
        <div class="media-body">
            <h2>I.D.A.Y Dream</h2>
            <h5>Index page</h5>
            <p>This is the index page that we build for I.D.A.Y dream. I.D.A.Y Dream a non profit organization that helps
                young kids with school needs. I collaborated with 2 other people to create this project for the client.
                We worked with HTML, CSS for styling and we also used bootstrap 4.
            </p>
        </div>
        <img class="d-flex mr-3 img-fluid" style="width: 400px;" src="images/volunteer_index.png" alt="index page">
    </section>

    <section class="media mb-4" id="youth">
        <img class="d-flex mr-3 img-fluid" style="width: 350px;" src="images/youth_form.png" alt="youth form">
        <div class="media-body">
            <h2>I.D.A.Y Dream</h2>
            <h5>Youth Form</h5>
            <p>This youth form is a form that the client needed to sign up new teenagers. She exposed all her needs and
            we were committed to work as much as possible to achieve her expectation. Every two weeks we met up with her to show her our progress and get feedback.
                For this form we worked with HTML, JavaScript, PHP , SQL , CSS and Bootstrap 4.
                It was a nice experience!
            </p>
        </div>
    </section>
    <section class="media mb-4" id="summary">
        <div class="media-body">
            <h2>I.D.A.Y Dream</h2>
            <h5>Summary</h5>
            <p>This is the summary page the purpose of this form was to display all the people that filled the form so she
                could have a record of that people and be able to search for them  easier. I collaborated with 2 other people
                to create this project for the client. We worked with SQL, PHP, JavaScript and CSS
            </p>
        </div>
        <img class="d-flex mr-3 img-fluid" style="width: 400px;" src="images/summary.png" alt="index page">
    </section>

    <section class="media mb-4" id="no">
        <img class="d-flex mr-3 img-fluid" style="width: 400px;" src="images/no.png" alt="Decline notification">
        <div class="media-body">
            <h2>I.D.A.Y Dream</h2>
            <h5>Decline notification</h5>
            <p>One of the clients petitions was to ask for a background check when filling the form is the user
            declined to the background check she was not going to consider them. As developers we also need to consider the users.
                We came with the idea of asking the user as soon as they start filling the form if they declined to a background check
            then the form was hidden with JavaScript if they selected yes then they were able to fill the form</p>
        </div>
    </section>

    <section class="media mb-4" id="details">
        <div class="media-body">
            <h2>I.D.A.Y Dream</h2>
            <h5>Summary Details</h5>
            <p>To show all the columns of all the people signing in as a volunteers to the client we used bootstrap to make the summary page
            responsive. We worked with PHP to achieve this result. </p>
        </div>
        <img class="d-flex mr-3 img-fluid" style="width: 400px;" src="images/details.png" alt="details page">
    </section>

    <section class="media mb-4" id="references">
        <img class="d-flex mr-3 img-fluid" style="width: 400px;" src="images/references.png" alt="references form">
        <div class="media-body">
            <h2>I.D.A.Y Dream</h2>
            <h5>References</h5>
            <p>The volunteer form required three references from the user. We decided to make the references section
                responsive by using bootstrap (card class). This is a nice feature because every time that the title gets clicked the box
            slides down and shows the content inside of the box. This project was challenging and I learned a lot.
            We worked with JavaScript, HTML and CSS</p>
        </div>
    </section>


</div><!-- content container -->

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>