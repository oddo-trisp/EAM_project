CREATE DATABASE  IF NOT EXISTS `eamuser54` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `eamuser54`;
-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: eamuser54
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Announcements`
--

DROP TABLE IF EXISTS `Announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Announcements` (
  `idAnnouncements` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `word` varchar(2000) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idAnnouncements`),
  UNIQUE KEY `idAnnouncements_UNIQUE` (`idAnnouncements`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Announcements`
--

LOCK TABLES `Announcements` WRITE;
/*!40000 ALTER TABLE `Announcements` DISABLE KEYS */;
INSERT INTO `Announcements` VALUES (1,'Προβλήματα στη λειτουργία του Συστήματος','Σας ενημερώνουμε ότι καθώς συνεχίζονται οι διαδικασίες μετάπτωσης του υπάρχοντος συστήματος αυτοματοποίησης βιβλιοθήκης του ΕΚΠΑ στο νέο συνεργατικό μοντέλο του ILSaS (δράση που εντάσσεται στο έργο του Συνδέσμου Ελληνικών Ακαδημαϊκών Βιβλιοθηκών (ΣΕΑΒ / HEAL-Link) στο ΕΣΠΑ), θα επηρεαστούν οι διαδικασίες δανεισμού και εξυπηρέτησης χρηστών. Συγκεκριμένα, από την Πέμπτη 5 Νοεμβρίου 2015 ξεκινούν οι διαδικασίες δανεισμού με την σταδιακή ενσωμάτωση των βιβλιοθηκών μας, προκειμένου για να αντιμετωπιστούν πιθανά προβλήματα στην ομαλή ένταξη της Βιβλιοθήκης του ΕΚΠΑ στο νέο σύστημα.','2016-01-26'),(2,'Εργασίες αποκατάστασης πρόσβασης σε ψηφιακές συλλογές','Σας ενημερώνουμε ότι, λόγω εργασιών αναβάθμισης των υποδομών της Βιβλιοθήκης, οι ψηφιακές συλλογές Κοσμόπολις, Πλειάς και Δανιηλίς, αλλά και η υπηρεσία ηλεκτρονικής εκδοτικής Πασιθέη δεν θα είναι διαθέσιμες το Σαββατοκύριακο 12-13 Δεκεμβρίου 2015.\n\nΑπολογούμαστε για την αναστάτωση, αλλά η διακοπή της λειτουργίας των υπηρεσιών αυτών είναι επιτακτική για την αποκατάσταση της ομαλότητας στην πρόσβαση σε αυτές.','2015-12-11'),(3,'Δωρεάν πρόσβαση σε τίτλους των σειρών Undergraduate Texts in Mathematics και Universitext','Ο εκδοτικός οίκος Springer παρέχει δωρέαν το περιεχόμενο των σειρών Undergraduate Texts in Mathematics και Universitext σε pdf μορφή. Το περιεχόμενο στο οποίο μπορεί να έχει κάποιος πρόσβαση είναι από την έναρξη κυκλοφορίας των σειρών, δηλαδή από το 1958 και το 1930 αντίστοιχα, έως το 2005. Πρακτικά ο Springer δεν επιτρέπει την ελεύθερη πρόσβαση στους τίτλους των σειρών αυτών έως και δέκα χρόνια πριν, επιβάλλοντας ένα κινούμενο τείχος (moving wall), όπως χαρακτηριστικά ονομάζεται αυτή η πρακτική. Παρ’ όλα αυτά το περιεχόμενο των σειρών είναι ιδιαίτερα χρήσιμο για προπτυχιακούς και μεταπτυχιακούς φοιτητές διαφόρων κλάδων των Μαθηματικών.','2015-12-29'),(4,'Διακοπή υπηρεσιών του HEAL-LInk για εργασίες συντήρησης','Θα θέλαμε να σας ενημερώσουμε ότι από Παρασκευή 22/01/2016 έως και Κυριακή 24/01/2016 θα υπάρξει διακοπή των υπηρεσιών των ηλεκτρονικών πηγών του HEAL-Link, λόγω εκτεταμένων εργασιών συντήρησης στις υποδομές του. Η διακοπή αναμένεται να επηρεάσει τη λειτουργία του δικτυακού τόπου, ενώ η πρόσβαση στο περιεχόμενο των εκδοτών, συμπεριλαμβανομένης της λειτουργίας των υπηρεσιών πιστοποίησης, εκτιμάται ότι θα είναι ομαλή.','2016-01-22');
/*!40000 ALTER TABLE `Announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Documents`
--

DROP TABLE IF EXISTS `Documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Documents` (
  `idDocuments` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `author` varchar(45) NOT NULL,
  `publicationDate` datetime NOT NULL,
  `returnDate` datetime DEFAULT NULL,
  `libName` varchar(45) NOT NULL,
  `useridLended` int(11) DEFAULT NULL,
  `isLended` int(1) unsigned zerofill NOT NULL,
  `imageLink` varchar(100) DEFAULT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `voters` int(11) NOT NULL DEFAULT '0',
  `extension` int(1) unsigned zerofill NOT NULL DEFAULT '0',
  PRIMARY KEY (`idDocuments`),
  UNIQUE KEY `idDocuments_UNIQUE` (`idDocuments`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Documents`
--

LOCK TABLES `Documents` WRITE;
/*!40000 ALTER TABLE `Documents` DISABLE KEYS */;
INSERT INTO `Documents` VALUES (1,'Ψυχομετρία','paper','Alexopoulos','2011-01-01 00:00:00',NULL,'Φιλοσοφική',NULL,0,'http://d.scdn.gr/images/books/000399/399685-big.jpg',4,1,0),(2,'Ψυχομετρία','paper','Alexopoulos','2011-01-01 00:00:00','2016-01-24 00:00:00','Φιλοσοφική',1,1,'http://d.scdn.gr/images/books/000399/399685-big.jpg',4,1,0),(3,'Ψυχομετρία','paper','Alexopoulos','2011-01-01 00:00:00',NULL,'Φιλοσοφική',NULL,0,'http://d.scdn.gr/images/books/000399/399685-big.jpg',4,1,0),(4,'Μαθηματική ανάλυση','book','Rassias','2014-01-01 00:00:00',NULL,'Θετικές Επιστήμες',NULL,0,'https://d.scdn.gr/images/books/000322/322209-big.jpg',4,1,0),(5,'Μαθηματική ανάλυση','book','Rassias','2014-01-01 00:00:00','2016-01-31 00:00:00','Θετικές Επιστήμες',5,1,'https://d.scdn.gr/images/books/000322/322264-big.jpg',4,1,0),(6,'Διακριτα Μαθηματικά','book','Liu','2013-01-01 00:00:00',NULL,'Θετικές Επιστήμες',NULL,0,'http://www.cup.gr/Images/Products/STOIXEIA_DIAKRITON_MATHIMATIKON.jpg',4,1,0),(7,'Εισαγωγή στη βιοχημεία','paper','Georgatsos','2013-01-01 00:00:00',NULL,'Θετικές Επιστήμες',NULL,0,'http://a.scdn.gr/images/books/000118/118836-big.jpg',4,1,0),(8,'Νεοελληνική Φιλολογία','book','Mastrodimitris','1996-01-01 00:00:00',NULL,'Φιλοσοφική',NULL,0,'https://a.scdn.gr/images/books/000133/133085-big.jpg',4,1,0),(9,'Αστικό δίκαιο: επιτομή','book','Papasteriou','2010-01-01 00:00:00',NULL,'Νομική',NULL,0,'http://www.e-shop.gr/images/BKS/BKS.0333561.jpg',5,1,0),(10,'Χριστιανισμός και έρως','book','Sherrard','1994-01-01 00:00:00',NULL,'Θεολογική',NULL,0,'https://images-na.ssl-images-amazon.com/images/I/31WvmpS81eL._SL256_.jpg',4,1,0),(11,'Βιοηθική (κλωνοποίηση)','book','Charalambous','2001-01-01 00:00:00',NULL,'Επιστήμες Υγείας',NULL,0,NULL,3,1,0);
/*!40000 ALTER TABLE `Documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Libraries`
--

DROP TABLE IF EXISTS `Libraries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Libraries` (
  `idLibraries` int(11) NOT NULL AUTO_INCREMENT,
  `libName` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `telNum` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `department` varchar(45) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  PRIMARY KEY (`idLibraries`),
  UNIQUE KEY `idLibraries_UNIQUE` (`idLibraries`),
  UNIQUE KEY `telNum_UNIQUE` (`telNum`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Libraries`
--

LOCK TABLES `Libraries` WRITE;
/*!40000 ALTER TABLE `Libraries` DISABLE KEYS */;
INSERT INTO `Libraries` VALUES (1,'Φιλοσοφική','Πανεπιστημιούπολη',2107272132,'psychologia@lib.uoa.gr','lib.uoa.gr','Φιλοσοφική',37.9701,23.7803),(2,'Θετικές Επιστήμες','Πανεπιστημιούπολη',2107276524,'sci@lib.uoa.gr','www.lib.uoa.gr/sci','Πληροφορική',37.9685,23.767),(3,'Νομική','Ιπποκράτους 33',2103688371,'dimdikaiou@lib.uoa.gr','www.lib.uoa.gr/law','Νομική',37.9829,23.7355),(4,'Θεολογική','Πανεπιστημιούπολη',2107275781,'theologiki@lib.uoa.gr','','Θεολογική',37.9691,23.7761),(5,'Επιστήμες Υγείας','Μικράς Ασίας και Δήλου 1',2107461400,'epistigias@lib.uoa.gr','','Ιατρική',37.9833,23.7664);
/*!40000 ALTER TABLE `Libraries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `idUsers` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsers`,`email`),
  UNIQUE KEY `idUsers_UNIQUE` (`idUsers`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,'nmpegetis','Begetis','nmpegetis@di.uoa.gr','Φιλοσοφική','Nikos'),(2,'kelraheb','Elraheb','kelraheb@di.uoa.gr','Θεολογική','Katerina'),(3,'vkatifori','Katifori','vkatifori@di.uoa.gr','Νομική','Vivi'),(4,'sbaltzi','Baltzi','sbaltzi@di.uoa.gr','Ιατρική','Sofia'),(5,'yioannidis','Ioannidis','yioannidis@di.uoa.gr','Πληροφορική','Yannis'),(6,'lpapadopoulos','Papadopoulos','lpapad@di.uoa.gr','Πληροφορική','Labis');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'eamuser54'
--

--
-- Dumping routines for database 'eamuser54'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-26 17:30:00
