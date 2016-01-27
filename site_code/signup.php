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
        <link rel="stylesheet" href="assets/css/signup.css">
        <script src="assets/js/index.js"></script>
        <script src="assets/js/signup.js"></script>
        <title>EAM_Project</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="wrapper">
                <h3>Εγγραφή Χρήστη</h3>
                <form class="form" action="index.php" method="post" onsubmit="return checkall();">
                    <table align="center">
                      <tr>
                          <td> <label for="username">Username*</label> </td>
                      <td> <input type="text" name="username" id="username" placeholder="prokprokopiou" oninput="checkname()" required>
                        <br>
                        <span id="name_status"></span></input>
                      </td>
                      </tr>
                      <tr>
                          <td> <label for="pass">Password*</label> </td>
                          <td> <input type="password" name="pass" id="pass" placeholder="Παρακαλώ πληκτρολογείστε έναν κωδικό πρόσβασης" required>
                          </td>
                      </tr>
                      <tr>
                          <td> <label for="check_pass">Επιβεβαίωση Password*</label> </td>
                          <td> <input type="password" name="check_pass" id="check_pass" placeholder="Παρακαλώ επαναλλάβετε τον κωδικό πρόσβασης" required>
                          </td>
                      </tr>
                      <tr>
                            <td> <label for="name">Όνομα*</label> </td>
                    		<td> <input type="text" name="name" id="name" placeholder="Προκόπης" required/> </td>
                        </tr>
                        <tr>
                              <td> <label for="surname">Επώνυμο*</label> </td>
                          <td> <input type="text" name="surname" id="surname" placeholder="Προκοπίου" required /> </td>
                          </tr>
                        <tr>
                            <td> <label for="email">Email*</label> </td>
                    		<td> <input type="email" name="email" id="email" placeholder="mail@example.com" oninput="checkemail()" required>
                          <br>
                          <span id="email_status"></span></input>
                        </td>
                    	</tr>
                        <tr>
                            <td> <label for="text">Τμήμα*</label> </td>
                    		<td> <input type="text" name="department" id="department" placeholder="Πληροφορική" required/> </td>
                    	</tr>
                    </table>
                    <div class="submit"> <input type="submit" value="Εγγραφή" /> <input type="reset" value="Καθαρισμός" /> </div>
                    <div align="center"><label for="text">*Υποχρεωτικά πεδία!</label> </td></div>

                </form>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
