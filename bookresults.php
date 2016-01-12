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
        <link rel="stylesheet" href="assets/css/bookresults.css">
        <script src="assets/js/index.js"></script>
        <title>EAM_Project</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div class="wrapper">
                <h3> Αποτελέσματα Αναζήτησης </h3>
                <?php
                    $db_hostname = "localhost";		//database server (use localhost or 127.0.0.1 if this is the same machine the web server runs on)
                    $db_name = "library";		// database
                    $db_user = "root";			// database username
                    $db_pass = "";			// database password
                    $link=mysqli_connect($db_hostname, $db_user, $db_pass, $db_name) or die ("Unable to connect to database");
                    mysqli_set_charset($link,"utf8");
                    $flag="false";
                  if(isset($_POST["qsearch"]) && !empty($_POST["q"]))
                  {
                    //sximatismos tou query
                    $query = 'SELECT * FROM Book WHERE Name LIKE "'.$_POST["q"].'"';
                  }
                  else if(isset($_POST["qsbutton"]) && !empty($_POST["qsfield"]))
                  {
                      $query = 'SELECT * FROM Book WHERE "'.$_POST["menu"].'" LIKE "'.$_POST["qsfield"].'"';
                  }
                  else if(isset($_POST["csbutton"]))
                  {
                    $query="xa";
                  }

                  //ektelesi tou query
                  $results = mysqli_query($link,$query) or die ("Query failed");
                  $row=mysqli_fetch_object($results);
                ?>
                <div class="row">
                   <div class="col-md-7 col-lg-7">
                       <ul class="media-list main-list">
                         <?php
                         if(mysqli_num_rows($results) > 0)
                         {
                           while($row = mysqli_fetch_object($results))
                           {
                             echo '<li class="media">
                               <a class="pull-left" href="bookinfo.php">
                                 <img class="media-object" src="http://placehold.it/150x90" alt="...">
                               </a>
                               <div class="media-body">
                                 <h4 class="media-heading">'.$row->Name.'</h4>
                                 <p class="by-author">'.$row->ISBN.'</p>
                                 <p class="by-author">By Jhon Doe</p>
                               </div>
                             </li>';
                                 echo '<br>';
                           }
                         }
                         else
                            echo 'Δεν βρέθηκαν αποτελέσματα...!';
                        mysqli_close($link);
                         ?>
                         <!--<li class="media">
                           <a class="pull-left" href="bookinfo.php">
                             <img class="media-object" src="http://placehold.it/150x90" alt="...">
                           </a>
                           <div class="media-body">
                             <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                             <p class="by-author">By Jhon Doe</p>
                           </div>
                         </li>
                         <li class="media">
                           <a class="pull-left" href="bookinfo.php">
                             <img class="media-object" src="http://placehold.it/150x90" alt="...">
                           </a>
                           <div class="media-body">
                             <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                             <p class="by-author">By Jhon Doe</p>
                           </div>
                         </li>
                         <li class="media">
                           <a class="pull-left" href="bookinfo.php">
                             <img class="media-object" src="http://placehold.it/150x90" alt="...">
                           </a>
                           <div class="media-body">
                             <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                             <p class="by-author">By Jhon Doe</p>
                           </div>
                         </li>-->
                       </ul>
                   </div>
               </div>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
