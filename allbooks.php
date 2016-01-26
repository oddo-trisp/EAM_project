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
                <h2> Όλα τα Βιβλία ανά είδος </h2>
                <?php
                    //Connect to database
                    include 'connect.php';

                    $query='select count(idDocuments) as papers from Documents where type="paper"';
                    $results = mysqli_query($link,$query) or die ("Query failed");
                    $row=mysqli_fetch_object($results);
                    $papers=$row->papers;
                    $query='select count(idDocuments) as books from Documents where type="book"';
                    $results = mysqli_query($link,$query) or die ("Query failed");
                    $row=mysqli_fetch_object($results);
                    $books=$row->books;

                    $query='SELECT * FROM Documents';

                  //ektelesi tou query
                  $results = mysqli_query($link,$query) or die ("Query failed");
                ?>
                <div class="row">
                         <?php
                         if(mysqli_num_rows($results) > 0)
                         {
                           echo '<div class="col-md-5 col-lg-5">
                               <ul class="media-list main-list">
                               <h2>Books('.$books.')</h2>';
                           while($row = mysqli_fetch_object($results))
                           {
                             if(($row->type)=='book')
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
                                        <img class="media-object" src="http://placehold.it/150x240"  height="240" width="150" alt="...">
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
                                        <img class="media-object" src="'.$row->imageLink.'" height="240" width="150" alt="...">
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
                           }
                         echo '</ul>
                          </div>';
                           echo '<div class="col-md-7 col-lg-7">
                               <ul class="media-list main-list">
                                <h2>Papers('.$papers.')</h2>';
                            mysqli_data_seek($results,0);
                           while($row = mysqli_fetch_object($results))
                           {
                             if(($row->type)=='paper')
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
                                        <img class="media-object" src="http://placehold.it/150x240" height="240" width="150" alt="...">
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
                                        <img class="media-object" src="'.$row->imageLink.'" height="240" width="150" alt="...">
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
                           }
                           echo '</ul>
                            </div>';
                         }
                         else
                            echo '<p class="noresults">Δεν βρέθηκαν αποτελέσματα...!</p>';
                          $results->close();
                          mysqli_close($link);
                        ?>
               </div>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
