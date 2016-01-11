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
                    <tr>
                        <td>
                            <img class="media-object" src="http://placehold.it/160x120" alt="...">
                        </td>
                        <td>
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
                        </td>
                        <td>
                            <p class="date"> <b> Ημερομηνία Παράδοσης </b> <br /> 23-2-2016 </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="media-object" src="http://placehold.it/160x120" alt="...">
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td> <b> Τίτλος: </b> </td>
                                    <td> Πρακτική Φιλοσοφία</td>
                                </tr>
                                <tr>
                                    <td> <b> Συγγραφέας: </b> </td>
                                    <td> Ευάγγελος Παπανούτσος </td>
                                </tr>
                                <tr>
                                    <td> <b> Εκδοτικός Οίκος: </b> </td>
                                    <td> Εκδόσεις "Δωδώνη"</td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <p class="date"> <b> Ημερομηνία Παράδοσης </b> <br /> 9-1-2016 </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
