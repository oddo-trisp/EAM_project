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
        <link rel="stylesheet" href="assets/css/libpage.css">
        <script src="assets/js/libpage.js"></script>
        <script src="assets/js/index.js"></script>
        <title>EAM_Project</title>
    </head>
    <body>
      <?php $name=$_GET['name'];
          $db_hostname = "localhost";		//database server (use localhost or 127.0.0.1 if this is the same machine the web server runs on)
          $db_name = "library";		// database
          $db_user = "root";			// database username
          $db_pass = "";			// database password
          $link=mysqli_connect($db_hostname, $db_user, $db_pass, $db_name) or die ("Unable to connect to database");
          mysqli_set_charset($link,"utf8");

          //sximatismos tou query
          $query = 'SELECT * FROM Library WHERE Name="'.$name.'"';

          //ektelesi tou query
          $results = mysqli_query($link,$query) or die ("Query failed");
          $row=mysqli_fetch_object($results);
          mysqli_close($link);
      ?>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="lib">
                <h3><?php echo ''.$row->Name.''?></h3>
                <h4> <b>Πληροφορίες Επικοινωνίας</b> </h4>
                <table align="center">
                    <tr>
                        <td><b>Τηλέφωνο:</b></td>
                        <td> <?php echo ''.$row->Phone.''?> </td>
                    </tr>
                    <tr>
                        <td> <b>Διεύθυνση:</b> </td>
                        <td> <?php echo ''.$row->Address.''?> </td>
                    </tr>
                    <tr>
                        <td><b>FAX:</b></td>
                        <td> <?php echo ''.$row->FAX.''?> </td>
                    </tr>
                    <tr>
                        <td><b>E-mail:</b></td>
                        <td> <?php echo ''.$row->Email.''?> </td>
                    </tr>
                    <tr>
                        <td><b>Ώρες Λειτουργίας:</b></td>
                        <td> <?php echo ''.$row->OpenInfro.''?> </td>
                    </tr>
                </table>
                <center>
                    <div id="map"></div>
                </center>
                <center>
                    <div id="people">
                        <h4 class="ppl"> <b>Προσωπικό</b> </h4>
                        <?php echo ''.$row->Info.''?>
                    </div>
                </center>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
