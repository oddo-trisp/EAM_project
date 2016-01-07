<?php header("content-type: text/html;charset=utf-8") ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="author" content="Giorgos Apostolopoulos, Odysseas Trispiotis, Nikos Matthioudakis">
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/libraries.css">
        <script src="assets/js/index.js"></script>
        <script src="assets/js/libraries.js"></script>
        <title>EAM_Project</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="libs">
                <h3> Βιβλιοθήκες Πανεπιστημίου Αθηνών </h3>
                    <!--<li><a href="libpage.php">Βιβλιοθήκη Αγγλικής Γλώσσας και Φιλολογίας</a></li>
                    <li><a href="libpage.php">Βιβλιοθήκη Αρχαιολογίας και Ιστορίας της Τέχνης</a></li>
                    <li><a href="libpage.php">Βιβλιοθήκη Αστροφυσικής και Αστρονομίας</a></li>-->
                    <?php
                        $db_hostname = "localhost";		//database server (use localhost or 127.0.0.1 if this is the same machine the web server runs on)
                        $db_name = "library";		// database
                        $db_user = "root";			// database username
                        $db_pass = "";			// database password
                        $link=mysqli_connect($db_hostname, $db_user, $db_pass, $db_name) or die ("Unable to connect to database");
                        mysqli_set_charset($link,"utf8");

                        //sximatismos tou query
                        $query = 'SELECT DISTINCT MainLibrary FROM Library';
                        //  $query = 'select ISBN from Book';

                        //ektelesi tou query
                        $results = mysqli_query($link,$query) or die ("Query failed");

                        //an epistrafikan apotelesmata
                        if (mysqli_num_rows($results) > 0)
                        {
                            $i=0;
                            //pairnw ena-ena ta apotelesmata
                            while ($row = mysqli_fetch_object($results))
                            {
                                $i++;
                                echo '<h4>'.$row->MainLibrary.'</h4>';
                                echo '<div>';
                                    $query = 'SELECT Name FROM Library WHERE MainLibrary="'.$row->MainLibrary.'"';
                                    $results1 = mysqli_query($link,$query) or die ("Query failed");
                                    if(mysqli_num_rows($results1) > 0)
                                    {
                                      $j=0;
                                      while($row1 = mysqli_fetch_object($results1))
                                      {
                                            $j++;
                                            echo '<li><a href="libpage.php?name='.$row1->Name.'">'.$row1->Name.'</a></li>';
                                            echo '<br>';
                                      }
                                    }
                                    else
                                    {
                                        echo 'Δεν βρέθηκαν αποτελέσματα...';
                                    }
                                    echo '</div>';
                                echo '<br>';
                            }
                        }
                        //alliws, an den epistrafikan apotelesmata
                        else
                        {
                            echo '<h4>Δεν βρέθηκαν αποτελέσματα...<h4>';
                        }
                        mysqli_close($link);
                  ?>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
