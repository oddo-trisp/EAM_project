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
        <title>ΥΚΒ ΕΚΠΑ</title>
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

                        $query = 'SELECT * FROM Documents WHERE INSTR('.$_POST["menu"].',"'.$_POST["qsfield"].'") > 0 ORDER BY title';

                  }
                  else if(isset($_POST["csbutton"]))
                  {
                      $query='SELECT * FROM Documents WHERE ';
                      $first='true';
                      if($_POST["title"] != NULL && $_POST["title"] != '')
                      {
                        $query=$query.'INSTR(title,"'.$_POST["title"].'") > 0';
                        $first='false';
                      }
                      if($_POST["author"] != NULL && $_POST["author"] != '')
                      {
                          if($first=='true')
                          {
                            $query=$query.'INSTR(author,"'.$_POST["author"].'") > 0';
                            $first='false';
                          }
                          else
                            $query=$query.' AND INSTR(author,"'.$_POST["author"].'") > 0';
                      }
                      if($_POST["libMenu"] != 'empty')
                      {
                        if($first=='true')
                        {
                          $query=$query.'INSTR(libName,"'.$_POST["libMenu"].'")>0';
                          $first='false';
                        }
                        else
                          $query=$query.' AND INSTR(libName,"'.$_POST["libMenu"].'") > 0';
                      }
                      if($_POST["typeMenu"] != 'empty')
                      {
                          if($first=='true')
                          {
                            $query=$query.'INSTR(type,"'.$_POST["typeMenu"].'") > 0';
                            $first='false';
                          }
                          else
                            $query=$query.' AND INSTR(type,"'.$_POST["typeMenu"].'") > 0';
                      }
                      if($_POST["statusMenu"] != 'empty')
                      {
                        $lended=0;
                        if($_POST["statusMenu"]=='lended')
                              $lended=1;
                        if($first=='true')
                        {
                          $query=$query.'isLended='.$lended.'';
                          $first='false';
                        }
                        else
                          $query=$query.' AND isLended='.$lended.'';
                      }
                      $query=$query.' ORDER BY title';

                  }

                  //ektelesi tou query
                  $results = mysqli_query($link,$query) or die ("Query failed");
                ?>
                <div class="row">
                         <?php
                         $i=0;
                         if(mysqli_num_rows($results) > 0)
                         {
                           echo '<div class="col-md-5 col-lg-5">
                               <ul class="media-list main-list">';
                           while($row = mysqli_fetch_object($results))
                           {
                             if(($i % 2)==0)
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
                                $i++;
                           }
                         echo '</ul>
                          </div>';
                           echo '<div class="col-md-7 col-lg-7">
                               <ul class="media-list main-list">';
                            $i=1;
                            mysqli_data_seek($results,1);
                           while($row = mysqli_fetch_object($results))
                           {
                             if(($i % 2)!=0)
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
                                $i++;
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
