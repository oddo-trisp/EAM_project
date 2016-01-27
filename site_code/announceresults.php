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
        <link rel="stylesheet" href="assets/css/announceresults.css">
        <script src="assets/js/index.js"></script>
        <title>EAM_Project</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="wrapper">
                <h3> Όλες οι ανακοινώσεις </h3>
                <?php
                    //Connect to database
                    include 'connect.php';

                  $query='SELECT * FROM Announcements ORDER BY date DESC';
                  //ektelesi tou query
                  $results = mysqli_query($link,$query) or die ("Query failed");

                  if(mysqli_num_rows($results) > 0)
                  {
                    while($row = mysqli_fetch_object($results))
                    {
                      $sub=mb_substr($row->word,0,300,'UTF-8');
                        echo '<div class="well well-sm">
                          <h4> '.$row->title.' </h4>
                          <p> '.$row->date.' </p>
                          <p> '.$sub.'...</p>
                          <p> <a class="more" href="announcementpage.php?id='.$row->idAnnouncements.'"> Περισσότερα </a> </p>
                      </div>';
                    }
                  }
                  else
                     echo '<p class="noresults">Δεν βρέθηκαν αποτελέσματα...!</p>';
                   $results->close();
                   mysqli_close($link);
                ?>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
