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
        <li><a href="index.php">ΑΡΧΙΚΗ</a></li>
        <li><a href="faq.php">ΠΛΗΡΟΦΟΡΙΕΣ (F.A.Q)</a></li>
        <li><a href="libraries.php">ΒΙΒΛΙΟΘΗΚΕΣ</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ΥΠΗΡΕΣΙΕΣ
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="booksearch.php">ΑΝΑΖΗΤΗΣΗ ΣΥΓΓΡΑΜΜΑΤΟΣ</a></li>
                <li><a href="bookentry.php">ΚΑΤΑΧΩΡΗΣΗ ΣΥΓΓΡΑΜΜΑΤΟΣ</a></li>
                <li><a href="mybooks.php">ΤΑ ΒΙΒΛΙΑ ΜΟΥ</a></li>
            </ul>
         </li>
         <li><a href="contact.php">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
         <form class="navbar-form navbar-right" role="search" action="bookresults.php" method="post">
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search" name="q">
                <div class="input-group-btn">
                    <button name="qsearch" class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </form>
    </ul>
</div>
