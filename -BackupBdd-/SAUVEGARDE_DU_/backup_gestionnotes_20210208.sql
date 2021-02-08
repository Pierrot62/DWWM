-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: gestionnotes
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Current Database: `gestionnotes`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `gestionnotes` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gestionnotes`;

--
-- Table structure for table `eleves`
--

DROP TABLE IF EXISTS `eleves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eleves` (
  `idEleve` int(11) NOT NULL AUTO_INCREMENT,
  `NomEleve` varchar(50) NOT NULL,
  `PrenomEleve` varchar(50) NOT NULL,
  `Classe` varchar(50) NOT NULL,
  PRIMARY KEY (`idEleve`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eleves`
--

LOCK TABLES `eleves` WRITE;
/*!40000 ALTER TABLE `eleves` DISABLE KEYS */;
INSERT INTO `eleves` VALUES (1,'Pierre','pierre','3eme'),(2,'Pierre','pierre','3eme'),(3,'Pierre','pierre','3eme'),(4,'Pierre','pierre','3eme'),(5,'Pierre','pierre','3eme'),(6,'Pierre','pierre','3eme'),(7,'Pierre','pierre','3eme'),(8,'Pierre','pierre','3eme'),(9,'Pierre','pierre','3eme'),(10,'Pierre','pierre','3eme'),(11,'Pierre','pierre','3eme'),(12,'Pierre','pierre','3eme'),(13,'Pierre','pierre','3eme'),(14,'Pierre','pierre','3eme'),(15,'Pierre','pierre','3eme'),(16,'Pierre','pierre','3eme'),(17,'Pierre','pierre','3eme'),(18,'Pierre','pierre','3eme'),(19,'Pierre','pierre','3eme'),(20,'Pierre','pierre','3eme'),(21,'Pierre','pierre','3eme'),(22,'Pierre','pierre','3eme'),(23,'Pierre','pierre','3eme'),(24,'Pierre','pierre','3eme'),(25,'Pierre','pierre','3eme'),(26,'Pierre','pierre','3eme'),(27,'Pierre','pierre','3eme'),(28,'test','test','test'),(29,'test','test','test'),(30,'test','test','test'),(31,'test','test','test'),(32,'test','test','test'),(33,'test','test','test'),(34,'test','test','zaetzeteztt'),(35,'MARTINEa','MARTINE','MARTINE'),(36,'MARTINEa','MARTINE','MARTINE'),(37,'COURQUIN','Pierre','DWWM'),(38,'Pierre','pierre','3eme'),(39,'COURQUIN','Pierre','DWWM'),(40,'Pierre','pierre','3eme'),(41,'COURQUIN','Pierre','DWWM');
/*!40000 ALTER TABLE `eleves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matieres`
--

DROP TABLE IF EXISTS `matieres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matieres` (
  `idMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleMatiere` varchar(50) NOT NULL,
  PRIMARY KEY (`idMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matieres`
--

LOCK TABLES `matieres` WRITE;
/*!40000 ALTER TABLE `matieres` DISABLE KEYS */;
INSERT INTO `matieres` VALUES (1,'francais'),(2,'anglais'),(3,'chinois'),(4,'maths'),(5,'ESPAGNOL !!!'),(6,'chirn'),(7,'159'),(8,'francaise'),(9,'francaisedd');
/*!40000 ALTER TABLE `matieres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suivis`
--

DROP TABLE IF EXISTS `suivis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suivis` (
  `idSuivi` int(11) NOT NULL AUTO_INCREMENT,
  `idMatiere` int(11) NOT NULL,
  `idEleve` int(11) NOT NULL,
  `Note` float NOT NULL,
  `Coefficient` float NOT NULL,
  PRIMARY KEY (`idSuivi`),
  KEY `FK_suivis_matieres` (`idMatiere`),
  KEY `FK_suivis_eleve` (`idEleve`),
  CONSTRAINT `FK_suivis_eleve` FOREIGN KEY (`idEleve`) REFERENCES `eleves` (`idEleve`),
  CONSTRAINT `FK_suivis_matieres` FOREIGN KEY (`idMatiere`) REFERENCES `matieres` (`idMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suivis`
--

LOCK TABLES `suivis` WRITE;
/*!40000 ALTER TABLE `suivis` DISABLE KEYS */;
INSERT INTO `suivis` VALUES (1,2,36,15,2),(2,2,2,15,2),(3,2,2,15,2),(4,2,37,20,2),(5,2,37,1,2),(6,2,1,55,2);
/*!40000 ALTER TABLE `suivis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateur` (
  `IdUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(50) NOT NULL,
  `NomUtilisateur` varchar(50) NOT NULL,
  `PrenomUtilisateur` varchar(50) NOT NULL,
  `MotDePasse` varchar(50) NOT NULL,
  `Role` int(11) NOT NULL,
  `idMatieres` int(11) NOT NULL,
  PRIMARY KEY (`IdUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (9,'Test','Test','Test','123',1,2),(10,'admin','admin','admin','123',2,1);
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-08 17:15:02
