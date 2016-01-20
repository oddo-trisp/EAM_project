CREATE DATABASE  IF NOT EXISTS `eam_2016` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `eam_2016`;
-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: EAM_2016
-- ------------------------------------------------------
-- Server version	5.5.38

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
  PRIMARY KEY (`idDocuments`),
  UNIQUE KEY `idDocuments_UNIQUE` (`idDocuments`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Documents`
--

LOCK TABLES `Documents` WRITE;
/*!40000 ALTER TABLE `Documents` DISABLE KEYS */;
INSERT INTO `Documents` VALUES (1,'Ψυχομετρία','paper','Alexopoulos','2011-01-01 00:00:00',NULL,'Φιλοσοφική',NULL,0),(2,'Ψυχομετρία','paper','Alexopoulos','2011-01-01 00:00:00','2016-01-24 00:00:00','Φιλοσοφική',1,1),(3,'Ψυχομετρία','paper','Alexopoulos','2011-01-01 00:00:00',NULL,'Φιλοσοφική',NULL,0),(4,'Μαθηματική ανάλυση','book','Rassias','2014-01-01 00:00:00',NULL,'Θετικές Επιστήμες',NULL,0),(5,'Μαθηματική ανάλυση','book','Rassias','2014-01-01 00:00:00','2016-01-31 00:00:00','Θετικές Επιστήμες',5,1),(6,'Διακριτα Μαθηματικά','book','Liu','2013-01-01 00:00:00',NULL,'Θετικές Επιστήμες',NULL,0),(7,'Εισαγωγή στη βιοχημεία','paper','Georgatsos','2013-01-01 00:00:00',NULL,'Θετικές Επιστήμες',NULL,0),(8,'Νεοελληνική Φιλολογία','book','Mastrodimitris','1996-01-01 00:00:00',NULL,'Φιλοσοφική',NULL,0),(9,'Αστικό δίκαιο: επιτομή','book','Papasteriou','2010-01-01 00:00:00',NULL,'Νομική',NULL,0),(10,'Χριστιανισμός και έρως','book','Sherrard','1994-01-01 00:00:00',NULL,'Θεολογική',NULL,0),(11,'Βιοηθική (κλωνοποίηση)','book','Charalambous','2001-01-01 00:00:00',NULL,'Επιστήμες Υγείας',NULL,0);
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
INSERT INTO `Libraries` VALUES (1,'Φιλοσοφική','Πανεπιστημιούπολη',2107272132,'psychologia@lib.uoa.gr','lib.uoa.gr','Φιλοσοφική'),(2,'Θετικές Επιστήμες','Πανεπιστημιούπολη',2107276524,'sci@lib.uoa.gr','www.lib.uoa.gr/sci','Πληροφορική'),(3,'Νομική','Ιπποκράτους 33',2103688371,'dimdikaiou@lib.uoa.gr','www.lib.uoa.gr/law','Νομική'),(4,'Θεολογική','Πανεπιστημιούπολη',2107275781,'theologiki@lib.uoa.gr','','Θεολογική'),(5,'Επιστήμες Υγείας','Μικράς Ασίας και Δήλου 1',2107461400,'epistigias@lib.uoa.gr','','Ιατρική');
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-19 17:07:09
