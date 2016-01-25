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
        <link rel="stylesheet" href="assets/css/qsearchresults.css">
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
                    $query = 'SELECT * FROM Documents WHERE INSTR(title,"'.$_POST["mvalue"].'")>0 ORDER BY title';
                    $query1 = 'SELECT * FROM Documents WHERE INSTR(type,"'.$_POST["mvalue"].'")>0 ORDER BY title';
                    $query2 = 'SELECT * FROM Documents WHERE INSTR(author,"'.$_POST["mvalue"].'")>0 ORDER BY title';
                    $query3 = 'SELECT * FROM Libraries WHERE INSTR(libName,"'.$_POST["mvalue"].'")>0 ORDER BY libName';
                    $query4 = 'SELECT * FROM Libraries WHERE INSTR(department,"'.$_POST["mvalue"].'")>0 ORDER BY libName';
                  }

                  //ektelesi tou query
                  $results = mysqli_query($link,$query) or die ("Query failed");
                  $results1 = mysqli_query($link,$query1) or die ("Query failed");
                  $results2 = mysqli_query($link,$query2) or die ("Query failed");
                  $results3 = mysqli_query($link,$query3) or die ("Query failed");
                  $results4 = mysqli_query($link,$query4) or die ("Query failed");
                ?>
                     <ul class="media-list main-list">
                         <div class="row">
                             <div class="col-md-1">
                             </div>
                             <?php
                             echo '<div class="col-md-5">';
                             $flag1="true";
                             $flag2="true";
                             if(mysqli_num_rows($results) > 0 || mysqli_num_rows($results1) > 0 || mysqli_num_rows($results2) > 0)
                             {
                               echo '<h3>Βιβλία</h3>';
                               while($row = mysqli_fetch_object($results))
                               {
                                $lend="";
                                 if($row->isLended==true)
                                    $lend="Lended";
                                  else
                                    $lend="Available";
                                    if($row->imageLink==NULL)
                                    {
                                      echo '<li class="media">
                                        <a class="pull-left" href="bookinfo.php?id='.$row->idDocuments.'">
                                          <img class="media-object" src="http://placehold.it/150x240" alt="...">
                                        </a>
                                        <div class="media-body">
                                          <h4 class="media-heading">'.$row->title.'</h4>
                                          <p class="by-author">'.$row->type.' By '.$row->author.'</p>
                                          <p class="by-author">'.$row->libName.'</p>
                                          <p class="by-author">'.$lend.'</p>
                                        </div>
                                      </li>';
                                    }
                                    else
                                    {
                                      echo '<li class="media">
                                        <a class="pull-left" href="bookinfo.php?id='.$row->idDocuments.'">
                                          <img class="media-object" src="'.$row->imageLink.'" alt="...">
                                        </a>
                                        <div class="media-body">
                                          <h4 class="media-heading">'.$row->title.'</h4>
                                          <p class="by-author">'.$row->type.' By '.$row->author.'</p>
                                          <p class="by-author">'.$row->libName.'</p>
                                          <p class="by-author">'.$lend.'</p>
                                        </div>
                                      </li>';
                                    }
                                     echo '<br>';
                               }
                               while($row = mysqli_fetch_object($results1))
                               {
                                $lend="";
                                 if($row->isLended==true)
                                    $lend="Lended";
                                  else
                                    $lend="Available";
                                    if($row->imageLink==NULL)
                                    {
                                      echo '<li class="media">
                                        <a class="pull-left" href="bookinfo.php?id='.$row->idDocuments.'">
                                          <img class="media-object" src="http://placehold.it/150x240" alt="...">
                                        </a>
                                        <div class="media-body">
                                          <h4 class="media-heading">'.$row->title.'</h4>
                                          <p class="by-author">'.$row->type.' By '.$row->author.'</p>
                                          <p class="by-author">'.$row->libName.'</p>
                                          <p class="by-author">'.$lend.'</p>
                                        </div>
                                      </li>';
                                    }
                                    else
                                    {
                                      echo '<li class="media">
                                        <a class="pull-left" href="bookinfo.php?id='.$row->idDocuments.'">
                                          <img class="media-object" src="'.$row->imageLink.'" alt="...">
                                        </a>
                                        <div class="media-body">
                                          <h4 class="media-heading">'.$row->title.'</h4>
                                          <p class="by-author">'.$row->type.' By '.$row->author.'</p>
                                          <p class="by-author">'.$row->libName.'</p>
                                          <p class="by-author">'.$lend.'</p>
                                        </div>
                                      </li>';
                                    }
                                     echo '<br>';
                               }
                               while($row = mysqli_fetch_object($results2))
                               {
                                $lend="";
                                 if($row->isLended==true)
                                    $lend="Lended";
                                  else
                                    $lend="Available";
                                    if($row->imageLink==NULL)
                                    {
                                      echo '<li class="media">
                                        <a class="pull-left" href="bookinfo.php?id='.$row->idDocuments.'">
                                          <img class="media-object" src="http://placehold.it/150x240" alt="...">
                                        </a>
                                        <div class="media-body">
                                          <h4 class="media-heading">'.$row->title.'</h4>
                                          <p class="by-author">'.$row->type.' By '.$row->author.'</p>
                                          <p class="by-author">'.$row->libName.'</p>
                                          <p class="by-author">'.$lend.'</p>
                                        </div>
                                      </li>';
                                    }
                                    else
                                    {
                                      echo '<li class="media">
                                        <a class="pull-left" href="bookinfo.php?id='.$row->idDocuments.'">
                                          <img class="media-object" src="'.$row->imageLink.'" alt="...">
                                        </a>
                                        <div class="media-body">
                                          <h4 class="media-heading">'.$row->title.'</h4>
                                          <p class="by-author">'.$row->type.' By '.$row->author.'</p>
                                          <p class="by-author">'.$row->libName.'</p>
                                          <p class="by-author">'.$lend.'</p>
                                        </div>
                                      </li>';
                                    }
                                     echo '<br>';
                               }
                               echo '</div>';
                             }
                             else
                                $flag1="false";
                             echo '<div class="col-md-5">';
                             if(mysqli_num_rows($results3) > 0 || mysqli_num_rows($results4) > 0)
                             {
                               echo '<h3>Βιβλιοθήκες</h3>';
                               while($row = mysqli_fetch_object($results3))
                               {

                                 echo '<li class="media">
                                   <div class="media-body" id="lib-body">
                                     <a href="libpage.php?name='.$row->libName.'"><h4 class="media-heading">'.$row->libName.'</h4></a>
                                     <p class="by-author">'.$row->department.'</p>
                                     <p class="by-author">'.$row->address.'</p>
                                   </div>
                                 </li>';
                                     echo '<br>';
                               }
                               while($row = mysqli_fetch_object($results4))
                               {
                                 echo '<li class="media">
                                   <div class="media-body" id="lib-body">
                                     <a href="libpage.php?name='.$row->libName.'"><h4 class="media-heading">'.$row->libName.'</h4></a>
                                     <p class="by-author">'.$row->department.'</p>
                                     <p class="by-author">'.$row->address.'</p>
                                   </div>
                                 </li>';
                                     echo '<br>';
                               }
                               echo '</div>';
                             }
                             else
                                $flag2="false";
                              if($flag1=="false" && $flag2=="false")
                                echo 'Δεν βρέθηκαν αποτελέσματα...!';
                              $results->close();
                              $results1->close();
                              $results2->close();
                              $results3->close();
                              $results4->close();
                              mysqli_close($link);
                            ?>
                       </ul>
                       <div class="col-md-1">
                       </div>
                </div>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
