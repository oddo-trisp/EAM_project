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
        <!-- Latest compiled GoogleApis MAPS -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/announcementpage.css">
        <script src="assets/js/index.js"></script>
        <title>EAM_Project</title>
    </head>
    <body>
      <?php
          $id=$_GET['id'];

          //Connect to database
          include 'connect.php';

          //sximatismos tou query
          $query = 'SELECT * FROM Announcements WHERE idAnnouncements="'.$id.'"';

          //ektelesi tou query
          $results = mysqli_query($link,$query) or die ("Query failed");
          $row=mysqli_fetch_object($results);
          $results->close();
          mysqli_close($link);

      ?>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="ann">
                <center>
                  <?php
                    echo '
                    <h3> Ανακοίνωση </h3>
                    <p class="date"> '.$row->date.' </p>
                    <h4> <b>'.$row->title.'</b></h4>
                    <p>
                        '.$row->word.'
                    </p>
                    <p class="pdf_view"> Δείτε την ανακοίνωση σε pdf: <img class="pdf_download_icon" src="assets/img/pdf_icon.png"/> </p>';
                  ?>
                </center>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
