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
        <script src="assets/js/bookinfo.js"></script>
        <title>ΥΚΒ ΕΚΠΑ</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="wrapper">
                <h3>Καταχώρηση Συγγράμματος</h3>
                <form name="bentry" class="form" method="post" action="index.php"  onsubmit="return submitBook();">
                    <table align="center">
                        <tr>
                            <td> <label for="text">Τίτλος*</label> </td>
                            <td> <input type="text" name="title" id="title" placeholder="Το όνομα του ρόδου" required/> </td>
                        </tr>
                        <tr>
                            <td> <label for="text">Τύπος*</label> </td>
                            <td> <input type="text" name="type" id="type" placeholder="Bοοκ" required/> </td>
                        </tr>
                        <tr>
                            <td> <label for="name">Συγγραφέας*</label> </td>
                            <td> <input type="text" name="author" id="author" placeholder="Umberto Eco" required/> </td>
                        </tr>
                        <tr>
                            <td> <label for="text">Ημερομηνία Έκδοσης*</label> </td>
                            <td> <input type="datetime" name="pubdate" id="pubdate" placeholder="2011-01-01" required/> </td>
                        </tr>
                        <tr>

                            <td> <label for="text">Βιβλιοθήκη*</label> </td>
                            <td> <select name="library" id="library-dropdown" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
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
                                $results->close();
                                mysqli_close($link);
                              ?>
                            </select>
                            </td>
                        </tr>
                    </table>
                    <div class="submit"> <input type="submit" value="Καταχώρηση" /> <input type="reset" value="Καθαρισμός" /> </div>
                    <div align="center"><label for="text">*Υποχρεωτικά πεδία!</label> </td></div>
                </form>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
