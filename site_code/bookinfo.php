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
        <link rel="stylesheet" href="assets/css/bookinfo.css">
        <script src="assets/js/bookinfo.js"></script>
        <script src="assets/js/index.js"></script>
        <title>ΥΚΒ ΕΚΠΑ</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="wrapper">
                <center>
                  <?php
                      $id=$_GET['id'];

                      //Connect to database
                      include 'connect.php';

                      //sximatismos tou query
                      $query = 'SELECT * FROM Documents WHERE idDocuments="'.$id.'"';

                      //ektelesi tou query
                      $results = mysqli_query($link,$query) or die ("Query failed");
                      $row=mysqli_fetch_object($results);
                      $results->close();
                      mysqli_close($link);

                  ?>
                    <h3> Πληροφορίες Βιβλίου </h3>
                    <?php
                      if($row->imageLink==NULL)
                        echo '<img class="media-object" src="http://placehold.it/250x160" alt="...">';
                      else
                        echo '<img class="media-object" src="'.$row->imageLink.'" alt="...">';
                    ?>
                    <table>
                        <tr>
                            <td> <b> Τίτλος: </b> </td>
                            <td> <?php echo ''.$row->title.''; ?> </td>
                        </tr>
                        <tr>
                            <td> <b> Τύπος: </b> </td>
                            <td> <?php echo ''.$row->type.''; ?> </td>
                        </tr>
                        <tr>
                            <td> <b> Συγγραφέας: </b> </td>
                            <td> <?php echo ''.$row->author.''; ?> </td>
                        </tr>
                        <tr>
                            <td> <b> Έτος Έκδοσης: </b> </td>
                            <td> <?php echo ''.$row->publicationDate.''; ?> </td>
                        </tr>
                        <tr>
                            <td> <b> Βιβλιοθήκη: </b> </td>
                            <td> <?php echo ''.$row->libName.''; ?> </td>
                        </tr>
                        <?php
                            if($row->isLended==true)
                            {
                              echo '<tr>
                                <td> <b> Κατάσταση: </b> </td>
                                <td><font color="red"> Δανεισμένο </font></td>
                              </tr>';
                            }
                          else
                          {
                            echo '<tr>
                              <td> <b> Κατάσταση: </b> </td>
                              <td><font color="green"> Διαθέσιμο </font></td>
                            </tr>';
                          }
                        ?>
                        <tr>
                          <td> <b> Βαθμολογία: </b> </td>
                          <td>
                          <?php
                              if($row->points != 0 && $row->voters != 0)
                              {
                                $realRating=($row->points)/($row->voters);
                                $rating=intval($realRating);
                                $realRating=substr($realRating, 0, 4);
                                echo ''.$realRating.'/5  (Από '.$row->voters.' χρήστες)';
                                echo '<input type="number" class="cur_rating" data-min="1" data-max="5" value="'.$rating.'"/>';
                              }
                              else
                              {
                                echo 'Δεν υπάρχουν βαθμολογίες';
                                echo '<input type="number" class="cur_rating" data-min="1" data-max="5" value="0"/>';
                              }

                          ?>
                          </td>
                        </tr>
                    </table>
                    <div class="row rates">
                        <div class="col-sm-4">
                            <h4> Αξιολόγηση Βιβλίου: </h4>
                            <input type="number" id="ratingval" name="ratingval" class="rating" data-min="1" data-max="5" value="0">
                            <?php echo'<div><input type="hidden" name="nameDoc" id="nameDoc" value="'.$row->title.'"></div>'; ?>
                            <div class="rating"> <input type="button" onclick="return rateByUser()" value="Αξιολόγηση" /> </div>
                        </div>
                        <?php
                        if($row->isLended!=true && !empty($_SESSION['pass']) && !empty($_SESSION['id']))
                        {
                           echo '<form method="post">
                             <div class="col-sm-4">
                            <h4> Δανεισμός του Βιβλίου: </h4>
                            <div><input type="hidden" name="idDoc" id="idDoc" value="'.$row->idDocuments.'"></div>
                            <div><input type="hidden" name="idUser" id="idUser" value="'.$_SESSION['id'].'"></div>
                            <div class="submit"> <input type="button" onclick="return lendBook()" value="Δανεισμός*" /> </div>
                            <br>
                            <div>  *Δανειστείτε τo βιβλίο για ένα μήνα! </div>
                            </div>
                            <form>';
                        }
                        else
                        {
                          if($row->isLended!=true)
                            echo '<form method="post">
                              <div class="col-sm-4" ><font color="red"><h4> Για το δανεισμό του βιβλίου απαιτείται σύνδεση! </h4></font></div>';
                            else
                              echo '<div class="col-sm-4" ></div>';
                        }
                        ?>
                        <div class="col-sm-4">
                            <h4> Μεταφόρτωση δείγματος του Βιβλίου: </h4>
                            <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
