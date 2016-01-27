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
                    <?php
                        //Connect to database
                        include 'connect.php';

                        //sximatismos tou query
                        $query = 'SELECT DISTINCT department FROM Libraries ORDER BY department';
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
                                echo '<h4>'.$row->department.'</h4>';
                                echo '<div>';
                                    $query = 'SELECT libName FROM Libraries WHERE department="'.$row->department.'" ORDER BY libName';
                                    $results1 = mysqli_query($link,$query) or die ("Query failed");
                                    if(mysqli_num_rows($results1) > 0)
                                    {
                                      $j=0;
                                      while($row1 = mysqli_fetch_object($results1))
                                      {
                                            $j++;
                                            echo '<div class="link_to"> <a href="libpage.php?name='.$row1->libName.'">'.$row1->libName.'</a></div>';
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
                        $results->close();
                        $results1->close();
                        mysqli_close($link);
                  ?>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
