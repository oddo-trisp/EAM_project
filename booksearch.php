<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
        <link rel="stylesheet" href="assets/css/booksearch.css">
        <script src="assets/js/validators.js"></script>
        <script src="assets/js/index.js"></script>
        <title>EAM_Project</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="wrapper">
                <h3>Αναζήτηση Υλικού</h3>
                <div class="row">
                  <center>
                    <form name="quicksearch" role="search" action="bookresults.php" method="post">
                      <div class="col-sm-6 quick">
                          <h4>Γρήγορη Αναζήτηση</h4>
                          <div class="input-group">
                              <div class="input-group-btn search-panel">
                                <select id="menu" name="menu" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <option value="title"><i class="fa fa-angle-double-right"></i> Τίτλος</option>
                                    <option value="type"><i class="fa fa-angle-double-right"></i> Τύπος</option>
                                    <option value="author"><i class="fa fa-angle-double-right"></i> Συγγραφέας</option>
                                  </select>
                            </div>
                            <input type="hidden" name="search_param" value="name" id="search_param">
                            <input type="text" class="form-control" name="qsfield" placeholder="Search.." id="search_key" value="">
                            <span class="input-group-btn">
                                <button class="btn btn-default text-muted" type="reset" title="Clear" ><i class="glyphicon glyphicon-remove"></i> </button></font>
                                <button  onclick="return validateQuickForm()" name="qsbutton" class="btn btn-info" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </span>
                          </div>

                          <p>Για να χρησιμοποιήσετε τη "Γρήγορη Αναζήτηση", επιλέξτε από το μενού την κατηγορία αναζήτησης και πληκτρολογείστε τον όρο που αναζητείτε.</p>
                          </form>
                          <form action="allbooks.php" method="post">
                          <center class="prev-all">
                                <p>  <h4> Προβολή όλων των Βιβλίων </h4> </p>
                                <div class="submit"> <input  onClick="window.location.href='allbooks.php'" type="submit" value="Προβολή"/></div>
                            </center>
                          </form>
                      </div>
                  </center>
                    <center>
                        <div class="col-sm-6 combined">
                            <h4>Σύνθετη Αναζήτηση</h4>
                            <form name="combsearch" class="form" action="bookresults.php" method="post">
                                <table>
                                    <tr>
                                        <td> <label for="text">Τίτλος</label> </td>
                                		<td> <input type="text" name="title" placeholder="Το όνομα του ρόδου"/> </td>
                                    </tr>
                                    <tr>
                                        <td> <label for="name">Συγγραφέας</label> </td>
                                		<td> <input type="text" name="author" placeholder="Umberto Eco"/> </td>
                                	</tr>
                                <tr>
                                      <td> <label for="text">Βιβλιοθήκη</label> </td>
                                      <td> <select id="menu" name="libMenu" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <option value="empty"><i class="fa fa-angle-double-right"></i>----Επιλογή Βιβλιοθήκης----</option>
                                        <?php
                                          //Connect to database
                                          include 'connect.php';

                                          //sximatismos tou query
                                          $query = 'select * from Libraries';

                                          $results = mysqli_query($link,$query) or die ("Query failed");

                                          if(mysqli_num_rows($results) > 0)
                                          {
                                            while($row = mysqli_fetch_object($results))
                                            {
                                                  echo '<option value="'.$row->libName.'"><i class="fa fa-angle-double-right"></i>'.$row->libName.'</option>';
                                            }
                                          }
                                        ?>
                                      </select>
                                      </td>
                                </tr>
                                <tr>
                                  <td> <label for="text">Τύπος</label> </td>
                                  <td> <select id="menu" name="typeMenu" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <option value="empty"><i class="fa fa-angle-double-right"></i>--------Επιλογή Τύπου-------</option>
                                    <?php

                                      //sximatismos tou query
                                      $query = 'select distinct type from Documents';

                                      $results = mysqli_query($link,$query) or die ("Query failed");

                                      if(mysqli_num_rows($results) > 0)
                                      {
                                        while($row = mysqli_fetch_object($results))
                                        {
                                              echo '<option value="'.$row->type.'"><i class="fa fa-angle-double-right"></i>'.$row->type.'</option>';
                                        }
                                      }
                                      $results->close();
                                      mysqli_close($link);
                                    ?>
                                  </select>
                              </tr>
                                <tr>
                                    <td> <label for="name">Κατάσταση</label> </td>
                                    <td> <select id="menu" name="statusMenu" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                      <option value="empty"><i class="fa fa-angle-double-right"></i>----Επιλογή Κατάστασης----</option>
                                      <option value="available"><i class="fa fa-angle-double-right"></i>Διαθέσιμο</option>
                                      <option value="lended"><i class="fa fa-angle-double-right"></i>Δανεισμένο</option>
                                </tr>
                                </table>
                                <div class="submit"> <input onclick="return validateCombForm()" type="submit" name="csbutton" value="Αναζήτηση" /> <input type="reset" value="Καθαρισμός" />  </div>
                            </form>
                            <p>Για να χρησιμοποιήσετε τη "Σύνθετη Αναζήτηση", συμπληρώστε τουλάχιστον ένα πεδίο της φόρμας και πατήστε το πλήκτρο αναζήτησης.</p>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
