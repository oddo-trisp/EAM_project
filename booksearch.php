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
                <h3>Αναζήτηση Συγγραμμάτων</h3>
                <div class="row">
                  <center>
                    <form name="quicksearch" role="search" action="bookresults.php" method="post">
                      <div class="col-sm-6 quick">
                          <h4>Γρήγορη Αναζήτηση</h4>
                          <div class="input-group">
                              <div class="input-group-btn search-panel">
                                <select id="menu" name="menu" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <option value="ISBN"><i class="fa fa-angle-double-right"></i> ISBN</option>
                                    <option value="Name"><i class="fa fa-angle-double-right"></i> Name</option>
                                    <option value="Description"><i class="fa fa-angle-double-right"></i> Description</option>
                                  </select>
                              <!--<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <span id="search_concept">Name</span> <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#id"><i class="fa fa-angle-double-right"></i> ID</a></li>
                                <li><a href="#name"><i class="fa fa-angle-double-right"></i> Name</a></li>
                                <li><a href="#description"><i class="fa fa-angle-double-right"></i> Description</a></li>
                              </ul>-->
                            </div>
                            <input type="hidden" name="search_param" value="name" id="search_param">
                            <input type="text" class="form-control" name="qsfield" placeholder="Search.." id="search_key" value="">
                            <span class="input-group-btn">
                                <button class="btn btn-default text-muted" type="reset" title="Clear"><i class="glyphicon glyphicon-remove"></i> </button>
                                <button  onclick="return validateQuickForm()" name="qsbutton" class="btn btn-info" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </span>
                          </div>

                          <p>Για να χρησιμοποιήσετε τη "Γρήγορη Αναζήτηση", επιλέξτε από το μενού την κατηγορία αναζήτησης και πληκτρολογείστε τον όρο που αναζητείτε.</p>
                      </div>
                    </form>
                  </center>
                    <center>
                        <div class="col-sm-6 combined">
                            <h4>Σύνθετη Αναζήτηση</h4>
                            <form name="combsearch" class="form" action="bookresults.php" method="post">
                                <table>
                                    <tr>
                                        <td> <label for="text">Τίτλος</label> </td>
                                		<td> <input type="text" name="title"/> </td>
                                    </tr>
                                    <tr>
                                        <td> <label for="name">Συγγραφέας</label> </td>
                                		<td> <input type="text" name="author"/> </td>
                                	</tr>
                                    <tr>
                                        <td> <label for="text">Εκδοτικός Οίκος</label> </td>
                                		<td> <input type="text" name="publisher"/> </td>
                                	</tr>
                                </table>
                                <div class="submit"> <input onclick="return validateCombForm()" type="submit" name="csbutton" value="Αναζήτηση" /> <input type="reset" value="Καθαρισμός" />  </div>
                            </form>
                            <p>Για να χρησιμοποιήσετε τη "Σύνθετη Αναζήτηση", συμπληρώστε τη φόρμα και πατήστε το πλήκτρο αναζήτησης.</p>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
