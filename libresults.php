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
        <link rel="stylesheet" href="assets/css/libresults.css">
        <script src="assets/js/index.js"></script>
        <title>EAM_Project</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="wrapper">
                <h3> Αποτελέσματα Αναζήτησης </h3>
                <?php
                    //Connect to database
                    include 'connect.php';

                  if(isset($_POST["qsbutton"]))
                  {

                        $query = 'SELECT * FROM Libraries WHERE INSTR('.$_POST["menu"].',"'.$_POST["qsfield"].'") > 0';

                  }
                  else if(isset($_POST["csbutton"]))
                  {
                      $query='SELECT * FROM Libraries WHERE ';
                      $first='true';
                      if($_POST["libName"] != NULL && $_POST["libName"] != '')
                      {
                        $query=$query.'INSTR(libName,"'.$_POST["libName"].'") > 0';
                        $first='false';
                      }
                      if($_POST["address"] != NULL && $_POST["address"] != '')
                      {
                          if($first=='true')
                          {
                            $query=$query.'INSTR(address,"'.$_POST["address"].'") > 0';
                            $first='false';
                          }
                          else
                            $query=$query.' AND INSTR(address,"'.$_POST["address"].'") > 0';
                      }
                      if($_POST["department"] != NULL && $_POST["department"] != '')
                      {
                          if($first=='true')
                          {
                            $query=$query.'INSTR(department,"'.$_POST["department"].'") > 0';
                            $first='false';
                          }
                          else
                            $query=$query.' AND INSTR(department,"'.$_POST["department"].'") > 0';
                      }

                  }

                  //ektelesi tou query
                  $results = mysqli_query($link,$query) or die ("Query failed");

                  if(mysqli_num_rows($results) > 0)
                  {
                    while($row = mysqli_fetch_object($results))
                    {
                        echo '<div class="well well-sm">
                          <h4> '.$row->libName.' </h4>
                          <p> '.$row->department.' </p>
                          <p> '.$row->address.' </p>
                          <p> <a class="more" href="libpage.php?name='.$row->libName.'"> Περισσότερα </a> </p>
                      </div>';
                    }
                  }
                  else
                     echo 'Δεν βρέθηκαν αποτελέσματα...!';
                   $results->close();
                   mysqli_close($link);
                ?>
                <!--<div class="well well-sm">
                    <h4> Βιβλιοθήκη Αγγλικής Φιλολογίας </h4>
                    <p> Τμήμα Νομικής </p>
                    <p> Σολωμού 189, 29111 </p>
                    <p> <a class="more" href="libpage.php"> Περισσότερα </a> </p>
                </div>
                <div class="well well-sm">
                    <h4> Βιβλιοθήκη Θεωρητικών Μαθηματικών </h4>
                    <p> Τμήμα Μαθηματικών </p>
                    <p> Αραβαντινού 22, 12292 </p>
                    <p> <a class="more" href="libpage.php"> Περισσότερα </a> </p>
                </div>
                <div class="well well-sm">
                    <h4> Βιβλιοθήκη Πληροφορικής και Τηλεπικοινωνιών </h4>
                    <p> Τμήμα ΠΛηροφορικής </p>
                    <p> Μαυρομιχάλη 12, 22257 </p>
                    <p> <a class="more" href="libpage.php"> Περισσότερα </a> </p>
                </div>-->
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
