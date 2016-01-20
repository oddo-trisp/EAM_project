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
                    //Connect to database
                    include 'connect.php';

                  if(isset($_POST["mbutton"]))
                  {
                    //sximatismos tou query
                    //echo $_POST["mvalue"];
                    $query = 'SELECT * FROM Documents WHERE INSTR(title,"'.$_POST["mvalue"].'")>0';
                    //$query = 'SELECT * FROM Book';
                  }
                  else if(isset($_POST["qsbutton"]))
                  {

                        $query = 'SELECT * FROM Documents WHERE INSTR('.$_POST["menu"].',"'.$_POST["qsfield"].'") > 0';

                  }
                  else if(isset($_POST["csbutton"]))
                  {
                    $query="xa";
                  }

                  //ektelesi tou query
                  $results = mysqli_query($link,$query) or die ("Query failed");
                ?>
                <div class="row">
                   <div class="col-md-7 col-lg-7">
                       <ul class="media-list main-list">
                         <?php
                         if(mysqli_num_rows($results) > 0)
                         {
                           while($row = mysqli_fetch_object($results))
                           {
                            $lend="";
                             if($row->isLended==true)
                                $lend="Lended";
                              else
                                $lend="Available";
                             echo '<li class="media">
                               <a class="pull-left" href="bookinfo.php?id='.$row->idDocuments.'">
                                 <img class="media-object" src="http://placehold.it/150x90" alt="...">
                               </a>
                               <div class="media-body">
                                 <h4 class="media-heading">'.$row->title.'</h4>
                                 <p class="by-author">'.$row->type.' By '.$row->author.'</p>
                                 <p class="by-author">'.$row->libName.'</p>
                                 <p class="by-author">'.$lend.'</p>
                               </div>
                             </li>';
                                 echo '<br>';
                           }
                         }
                         else
                            echo 'Δεν βρέθηκαν αποτελέσματα...!';
                          $results->close();
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
