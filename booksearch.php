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
                        <div class="col-sm-6 quick">
                            <h4>Γρήγορη Αναζήτηση</h4>
                            <div class="input-group">
                                <input type="text" class="form-control" name="x" placeholder="Search term...">
                                <span class="input-group-btn">
                                    <a href="bookresults.php" class="btn btn-info" role="button"><span class="glyphicon glyphicon-search"></span></a>
                                </span>
                            </div>
                            <p>Για να χρησιμοποιήσετε τη "Γρήγορη Αναζήτηση", πληκτρολογείστε απλώς τον όρο που αναζητείτε.</p>
                        </div>
                    </center>
                    <center>
                        <div class="col-sm-6 combined">
                            <h4>Σύνθετη Αναζήτηση</h4>
                            <form class="form">
                                <table>
                                    <tr>
                                        <td> <label for="text">Τίτλος</label> </td>
                                		<td> <input type="text"/> </td>
                                    </tr>
                                    <tr>
                                        <td> <label for="name">Συγγραφέας</label> </td>
                                		<td> <input type="text"/> </td>
                                	</tr>
                                    <tr>
                                        <td> <label for="text">Εκδοτικός Οίκος</label> </td>
                                		<td> <input type="text"/> </td>
                                	</tr>
                                </table>
                                <div class="submit"> <input type="submit" value="Αναζήτηση" /> </div>
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
