<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Giorgos Apostolopoulos, Odysseas Trispiotis, Nikos Matthioudakis">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/mybooks.css">
        <script src="assets/js/index.js"></script>
        <title>EAM_Project</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="wrapper">
                <h3> Τα βιβλία μου </h3>
                <table>
                <?php
                    //Connect to database
                    include 'connect.php';

                    $id=$_SESSION['id'];
                    $query = 'SELECT * FROM Documents WHERE useridLended='.$id.' ORDER BY title';

                    //ektelesi tou query
                    $results = mysqli_query($link,$query) or die ("Query failed");

                    if(mysqli_num_rows($results) > 0)
                    {

                      while($row = mysqli_fetch_object($results))
                      {
                      echo '<tr>
                            <td>
                                <img class="media-object" src="http://placehold.it/160x120" alt="...">
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td> <b> Τίτλος: </b> </td>
                                        <td> '.$row->title.' </td>
                                    </tr>
                                    <tr>
                                        <td> <b> Τύπος: </b> </td>
                                        <td> '.$row->type.'</td>
                                    </tr>
                                    <tr>
                                        <td> <b> Συγγραφέας: </b> </td>
                                        <td> '.$row->author.'</td>
                                    </tr>
                                    <tr>
                                        <td> <b> Έτος Έκδοσης: </b> </td>
                                        <td> '.$row->publicationDate.'</td>
                                    </tr>
                                    <tr>
                                        <td> <b> Βιβλιοθήκη: </b> </td>
                                        <td> '.$row->libName.'</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <p class="date"> <b> Ημερομηνία Παράδοσης </b> <br /> '.$row->returnDate.' </p>
                            </td>
                            <td>
                                <input type="button" class="extendloan" value="Παράταση Δανεισμού"/>
                            </td>
                        </tr>';

                      }

                    }
                    else
                        echo 'Δεν βρέθηκαν αποτελέσματα...!';
                ?>
              </table>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
