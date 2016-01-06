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
        <link rel="stylesheet" href="assets/css/bookentry.css">
        <script src="assets/js/index.js"></script>
        <title>EAM_Project</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="wrapper">
                <h3>Καταχώρηση Συγγράμματος</h3>
                <form class="form">
                    <table align="center">
                        <tr>
                            <td> <label for="text">Τίτλος</label> </td>
                            <td> <input type="text" name="title" id="title" placeholder="Το ονομα του ρόδου" /> </td>
                        </tr>
                        <tr>
                            <td> <label for="name">Συγγραφέας</label> </td>
                            <td> <input type="text" name="name" id="name" placeholder="Προκόπης Προκοπίου" /> </td>
                        </tr>
                        <tr>
                            <td> <label for="text">Εκδοτικός Οίκος</label> </td>
                            <td> <input type="text" name="pub" id="pub" placeholder="Εκδοτική Α.Ε" /> </td>
                        </tr>
                        <tr>
                            <td> <label for="text">ISBN</label> </td>
                            <td> <input type="text" name="isbn" id="isbn" placeholder="4-1292-3123-1223" /> </td>
                        </tr>
                        <tr>
                            <td> <label for="text">Περιγραφή</label> </td>
                            <td> <textarea name="text" placeholder="" /></textarea> </td>
                        </tr>
                    </table>
                    <div class="submit"> <input type="submit" value="Καταχώρηση" /> </div>
                </form>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>