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
        <title>EAM_Project</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="wrapper">
                <center>
                    <h3> Πληροφορίες Συγγράμματος </h3>
                    <img class="media-object" src="http://placehold.it/250x160" alt="...">
                    <table>
                        <tr>
                            <td> <b> Τίτλος: </b> </td>
                            <td> Το όνομα του ρόδου </td>
                        </tr>
                        <tr>
                            <td> <b> Συγγραφέας: </b> </td>
                            <td> Umberto Eco</td>
                        </tr>
                        <tr>
                            <td> <b> Εκδοτικός Οίκος: </b> </td>
                            <td> Εκδοτική Α.Ε </td>
                        </tr>
                    </table>
                    <div class="rates">
                        <h4> Αξιολόγηση Συγγράμματος: </h4>
                        <input type="number" class="rating" data-min="1" data-max="5" value="0">

                        <h4> Μεταφόρτωση δείγματος του Συγγράμματος: </h4>
                        <span class="glyphicon glyphicon-save" aria-hidden="true"></span>

                    </div>
                </center>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
