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
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/libpage.css">
        <script src="assets/js/libpage.js"></script>
        <script src="assets/js/index.js"></script>
        <title>EAM_Project</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="lib">
              <?php $name=$_GET['name'];
                  //Connect to database
                  include 'connect.php';

                  //sximatismos tou query
                  $query = 'SELECT * FROM Libraries WHERE libName="'.$name.'"';

                  //ektelesi tou query
                  $results = mysqli_query($link,$query) or die ("Query failed");
                  $row=mysqli_fetch_object($results);
                  $results->close();
                  mysqli_close($link);
              ?>
                <h3><?php echo ''.$row->libName.''?></h3>
                <h4> <b>Πληροφορίες Επικοινωνίας</b> </h4>
                <table align="center">
                    <tr>
                        <td><b>Τηλέφωνο:</b></td>
                        <td> <?php echo ''.$row->telNum.''?> </td>
                    </tr>
                    <tr>
                        <td> <b>Διεύθυνση:</b> </td>
                        <td> <?php echo ''.$row->address.''?> </td>
                    </tr>
                    <tr>
                        <td> <b>Τμήμα:</b> </td>
                        <td> <?php echo ''.$row->department.''?> </td>
                    </tr>
                    <tr>
                        <td><b>E-mail:</b></td>
                        <td> <?php echo ''.$row->email.''?> </td>
                    </tr>
                    <tr>
                        <td><b>Web site:</b></td>
                        <td>
                        <?php
                            if(strpos($row->website,'www') !== FALSE)
                            {
                              echo '<a href="http://'.$row->website.'">'.$row->website.'</a>';
                            }
                            else
                            {
                              if(!empty($row->website))
                                echo '<a href="http://www.'.$row->website.'">www.'.$row->website.'</a>';
                              else
                                echo 'Μη διαθέσιμο';
                            }
                        ?>
                      </td>
                    </tr>
                </table>
                <center>
                  <div><input type="hidden" name="latitude" id="latitude" value="<?php echo''.$row->latitude.''?>"></div>
                  <div><input type="hidden" name="longitude" id="longitude" value="<?php echo''.$row->longitude.''?>"></div>
                    <div id="map"></div>
                </center>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
