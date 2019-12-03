<?php
/**
 * It-305
 * Imelda Medina
 * 11/20/2019
 * This php file validates the guest form and inserts the data into the sql is data is valid
 */

//ERROR reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//If user is not logged in, reroute them to the login page
if(!isset($_SESSION['username'])){
    header('location: login.php');
}

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Guest Book Summary</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
        <!--Favicon-->
        <link rel="icon" type="image/jpg" href="images/books.jpg">
<!--        <link rel="stylesheet" type="text/css" href="guest_book.css">-->
        <link rel="stylesheet" type="text/css" href="css/guest_book.css">
    </head>
    <body>

    <div align="center">
        <div class="jumbotron">
            <h1 class="display-4">Guest Summary</h1>
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
                        <a class="nav-link" data-value="bio" href="http://imedina.greenriverdev.com/portfolio/bio.php">Bio</a></li>
                    <li class="nav-item">
                        <a class="nav-link " data-value="portfolio"href="http://imedina.greenriverdev.com/portfolio/portfolio.php">Portfolio</a></li>
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

        <?php

        require('/home/imedinag/connect.php');

        $sql='SELECT guest_Id, fName, lName, title, company, linkedIn, email, comment, met_other, created_at, meet_type, mailing 
            FROM meet INNER JOIN guest ON guest.meet_id = meet.meet_id 
            where guest.meet_id = meet.meet_id ORDER BY guest_Id DESC';


        //Send the query to the database
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);
        ?>
        <table id="dreamer-table" class="display">
            <thead>
            <tr>
                <th>Guest Id</th>
                <th>Name</th>
                <th>Title</th>
                <th>Company</th>
                <th>LinkedIn URL</th>
                <th>Email</th>
                <th>Mailing format</th>
                <th>Comment</th>
                <th>How we meet</th>
                <th>Submission Date</th>

            </tr>
            </thead>
            <tbody>

            <?php
            //Print the results
            while ($row = mysqli_fetch_assoc($result)) {
                $guestID = $row['guest_Id'];
                $first = $row['fName'];
                $lName = $row['lName'];
                $title = $row['title'];
                $company = $row['company'];
                $linkedIn = $row['linkedIn'];
                $email = $row['email'];
                $method = $row['mailing'];
                $comment = $row['comment'];
                $meet = $row['meet_type'];
                $met_other = $row['met_other'];
                $date = date('m-d-Y H:i:s', strtotime($row['created_at']));

                echo "<tr>
        <td>$guestID</td>
        <td>$first $lName</td>
        <td>$title</td>
        <td>$company</td>
        <td>$linkedIn</td>
        <td>$email</td>
        <th>$method</th>
        <td>$comment</td>";
        if(!empty($met_other)) {
          echo  "<td>$met_other</td>";
        }else {
           echo "<td>$meet</td>";
        }
        echo"<td>$date</td>
        
        </tr>";
            }
            ?>
            </tbody>
        </table>
        <div>
<!--            <a href="guest_book.php" class="p-md-2 mb-auto bg-dark text-white">Go to guest form</a>-->
<!--            <button onclick="window.location.href = 'guest_book.html';">Go to guest form</button>-->
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        // $('#dreamer-table').DataTable();
        // $('#dreamer-table').DataTable({"order":[0,'desc']});
        $('#dreamer-table').DataTable( {
            order:[0,'desc'],
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal( {
                        header: function ( row ) {
                            var data = row.data();
                            return 'Details for '+data[0]+' '+data[1];
                        }
                    } ),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                        tableClass: 'table'
                    } )
                }
            },
        } );
    </script>

    </body>
    </html>

<!--References-->
<!--w3school-->
<!--stackoverflow-->
<!--geeksforgeeks-->





