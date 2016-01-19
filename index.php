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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="assets/css/jQuery.verticalCarousel.css">
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <script src="assets/js/index.js"></script>
        <script src="assets/js/jQuery.verticalCarousel.js"></script>

        <title>EAM_Project</title>
    </head>
    <body>
        <div id="container">
            <div id="headerfile"> <?php include 'header.php' ?></div>
            <div id="wrapper">
                <div class="row">
                    <div class="col-md-3">
                        <div class="verticalCarousel">
                            <div class="verticalCarouselHeader">
                                <h3> Ανακοινώσεις </h3>
                                <a href="#" class="vc_goDown"><i class="fa fa-fw fa-angle-down"></i></a>
                                <a href="#" class="vc_goUp"><i class="fa fa-fw fa-angle-up"></i></a>
                            </div>
                            <ul class="verticalCarouselGroup vc_list">
                                <li>
                                    <h4>Article 1</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="ann_link"> <a href="announcementpage.php"> Περισσότερα </a> </div>
                                </li>
                                <li>
                                    <h4>Article 2</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="ann_link"> <a href="announcementpage.php"> Περισσότερα </a> </div>
                                </li>
                                <li>
                                    <h4>Article 3</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="ann_link"> <a href="announcementpage.php"> Περισσότερα </a> </div>
                                </li>
                                <li>
                                    <h4>Article 4</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="ann_link"> <a href="announcementpage.php"> Περισσότερα </a> </div>
                                </li>
                                <li>
                                    <h4>Article 5</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="ann_link"> <a href="announcementpage.php"> Περισσότερα </a> </div>
                                </li>
                            </ul>
                        </div>
                        <script>
                            $(".verticalCarousel").verticalCarousel({
                                currentItem: 1,
                                showItems: 3,
                            });
                        </script>
                    </div>
                    <div class="col-md-8">
                        <h3> Καλώς ήρθατε! </h3>
                        <p>
                            Καλώς ορίσατε στον δικτυακό τόπο των Βιβλιοθηκών του
                            <a href="http://www.di.uoa.gr"> Εθνικού και Καποδιστριακού Πανεπιστημίου Αθηνών. </a>
                        </p>
                        <h4> Μια σύντομη ιστορική αναδρομή </h4>
                        <p>
                            Στις 14 Απριλίου του 1837 εκδόθηκε διάταγμα που αφορούσε στη σύσταση Πανεπιστημίου με σκοπό αυτό να αποτελέσει το πρώτο Πανεπιστήμιο όχι μόνο του Ελληνικού κράτους, αλλά και της ευρύτερης περιοχής της Βαλκανικής και της Ανατολικής Μεσογείου.
                            Έτσι, στις 2 Ιουλίου του 1839 ο Όθωνας έθεσε το θεμέλιο λίθο για την ανέγερση του Ελληνικού Πανεπιστημίου και δυο χρόνια αργότερα, το Νοέμβριο του 1841, άρχισαν τα μαθήματα.
                            Ενώ ακόμη συνεχίζονταν οι εργασίες ανοικοδόμησης στο χώρο των Προπυλαίων, υπήρξε παράλληλα και η φροντίδα για τη δημιουργία Βιβλιοθήκης και ειδικών συλλογών, απαραίτητων για τη διδασκαλία και την επιστημονική συγκρότηση των φοιτητών.
                            Το 1866 η πανεπιστημιακή και η δημόσια βιβλιοθήκη συγχωνεύθηκαν και αποτέλεσαν την Εθνική Βιβλιοθήκη, που στεγάστηκε στον άνω όροφο του Πανεπιστημίου έως το 1903, οπότε και μεταφέρθηκε στο διπλανό νεοκλασικό κτήριο.
                        </p>
                        <h4> Πρόσφατες αναρτήσεις </p>
                        <div class="recent">
                            <img class="media-object" src="http://placehold.it/100x150"/>
                            <img class="media-object" src="http://placehold.it/100x150"/>
                            <img class="media-object" src="http://placehold.it/100x150"/>
                            <img class="media-object" src="http://placehold.it/100x150"/>
                            <img class="media-object" src="http://placehold.it/100x150"/>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
        </div>
        <div id="footerfile"> <?php include 'footer.php' ?></div>
    </body>
</html>
