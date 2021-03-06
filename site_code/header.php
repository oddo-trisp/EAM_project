<?php

    session_start();
      echo '<script src="assets/js/header.js"></script>';

?>
<div class="header">
    <div id="lang">
        <img src="assets/img/grflag.png">
        <img src="assets/img/ukflag.png">
    </div>
    <div class="page-header">
        <h1> ΒΙΒΛΙΟΘΗΚΕΣ ΚΑΙ ΥΠΗΡΕΣΙΕΣ ΠΛΗΡΟΦΟΡΗΣΗΣ <br><small>  ΕΘΝΙΚΟ ΚΑΙ ΚΑΠΟΔΙΣΤΡΙΑΚΟ ΠΑΝΕΠΙΣΤΗΜΙΟ ΑΘΗΝΩΝ </small></h1>
    </div>

    <img src="assets/img/books2.jpg">

    <ul class="nav nav-tabs">
        <li><a href="index.php">  <span class="glyphicon glyphicon-home"/> </a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Βιβλιοθήκες
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="libsearch.php">Αναζήτηση Βιβλιοθήκης</a></li>
                <li><a href="libraries.php">Προβολή Βιβλιοθηκών</a></li>
            </ul>
         </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Υλικό (Βιβλία)
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="booksearch.php">Αναζήτηση Υλικού</a></li>
                <li><a href="bookentry.php">Καταχώρηση Υλικού</a></li>
                <li><a href="allbooks.php">Προβολή Όλων</a></li>
                <?php
                    if(!empty($_SESSION['pass']) && !empty($_SESSION['id']))
                    {
                        echo '<li><a href="mybooks.php">Τα Βιβλία μου</a></li>';
                    }
                ?>
            </ul>
         </li>
         <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#">Βοήθεια
                 <span class="caret"></span>
             </a>
             <ul class="dropdown-menu">
               <li><a href="faq.php">Πληροφορίες (F.A.Q)</a></li>
               <li><a href="contact.php">Επικοινωνία</a></li>
            </ul>
          </li>
          <?php
              if(basename($_SERVER['PHP_SELF'])!="index.php")
                echo '<li><a href="announceresults.php">Ανακοινώσεις</a></li>';
          ?>
         <?php
          if(basename($_SERVER['PHP_SELF'])!="booksearch.php" && basename($_SERVER['PHP_SELF'])!="libsearch.php")
          {
            echo '<form class="navbar-form navbar-left" name="mainsearch" role="search" action="qsearchresults.php" method="post">
                <div class="input-group">
                 <input type="text" name="mvalue" class="search-query form-control" placeholder="Search" />
                 <span class="input-group-btn">
                     <button onclick="return validateForm()" name="mbutton" class="btn btn-danger" type="submit" >
                         <span class="glyphicon glyphicon-search"></span>
                     </button>
                 </span>
                 </div>
             </form>';
           }
          ?>
          <?php
          if(empty($_SESSION['pass']) && empty($_SESSION['id']))
          {
            echo '<ul class="nav nav-tabs pull-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Συνδεθείτε</b> <span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu">
    				      <li>
    					        <div class="row">
    							      <div class="col-md-12">
    								        <form class="form" role="form" method="post" accept-charset="UTF-8" id="login-nav">
    										       <div class="form-group">
    											           <label class="sr-only">Username</label>
    											            <input name="Username" type="text" class="form-control" id="Username" placeholder="Username" required>
    										        </div>
    										          <div class="form-group">
    											            <label class="sr-only">Email</label>
    											            <input name="Pass" type="password" class="form-control" id="Pass" placeholder="Password" required>
    										          </div>
    										          <div class="form-group">
    											         <button type="button" name="loginbutton" onclick="return checkLogin()" class="btn btn-primary btn-block">Σύνδεση</button>
                                    </div>
                                    <div class="form-group">
      											         <button type="reset" name="resetbutton" class="btn btn-primary btn-block">Καθαρισμός</button>
      										            </div>
    								            </form>
    							        </div>
    							       <div class="bottom text-center">
    								        Νέος Χρήστης ? <br /> <a href="signup.php"><b>Εγγραφείτε</b></a>
    							         </div>
    					        </div>
    				       </li>
    			     </ul>';
             }
             else {
              echo '<li class="nav pull-right"><a href="logout.php">Αποσύνδεση</a></li>';
             }
          ?>
            </li>
          </ul>
    </ul>

</div>
