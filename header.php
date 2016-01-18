<?php
  if(basename($_SERVER['PHP_SELF'])!="booksearch.php")
  {
      echo '<script src="assets/js/header.js"></script>';
  }
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
        <li><a href="index.php"><img src="assets/img/home.png"></a></li>
        <li><a href="faq.php">ΠΛΗΡΟΦΟΡΙΕΣ (F.A.Q)</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ΒΙΒΛΙΟΘΗΚΕΣ
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="libsearch.php">ΑΝΑΖΗΤΗΣΗ ΒΙΒΛΙΟΘΗΚΗΣ</a></li>
                <li><a href="libraries.php">ΠΡΟΒΟΛΗ ΒΙΒΛΙΟΘΗΚΩΝ</a></li>
            </ul>
         </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ΥΛΙΚΟ
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="booksearch.php">ΑΝΑΖΗΤΗΣΗ ΥΛΙΚΟΥ</a></li>
                <li><a href="bookentry.php">ΚΑΤΑΧΩΡΗΣΗ ΥΛΙΚΟΥ</a></li>
                <li><a href="mybooks.php">ΤΑ ΒΙΒΛΙΑ ΜΟΥ</a></li>
            </ul>
         </li>
         <li><a href="contact.php">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
         <?php
          if(basename($_SERVER['PHP_SELF'])!="booksearch.php")
          {
            echo '<form class="navbar-form navbar-left" name="mainsearch" role="search" action="bookresults.php" method="post">
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
         <ul class="nav nav-tabs pull-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Συνδεθείτε</b> <span class="caret"></span></a>
    			<ul id="login-dp" class="dropdown-menu">
    				<li>
    					 <div class="row">
    							<div class="col-md-12">
    								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
    										<div class="form-group">
    											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
    											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
    										</div>
    										<div class="form-group">
    											 <label class="sr-only" for="exampleInputPassword2">Password</label>
    											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
    										</div>
    										<div class="form-group">
    											 <button type="submit" class="btn btn-primary btn-block">Σύνδεση</button>
    										</div>
    								 </form>
    							</div>
    							<div class="bottom text-center">
    								Νέος Χρήστης ? <br /> <a href="signup.php"><b>Εγγραφείτε</b></a>
    							</div>
    					 </div>
    				</li>
    			</ul>
            </li>
          </ul>
    </ul>

</div>
