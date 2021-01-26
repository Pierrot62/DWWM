-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: soldats
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
-- Current Database: `soldats`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `soldats` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `soldats`;

--
-- Table structure for table `bataille`
--

DROP TABLE IF EXISTS `bataille`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bataille` (
  `idBataille` int(11) NOT NULL AUTO_INCREMENT,
  `nomBataille` varchar(50) NOT NULL,
  `lieuBataille` varchar(50) NOT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  PRIMARY KEY (`idBataille`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bataille`
--

LOCK TABLES `bataille` WRITE;
/*!40000 ALTER TABLE `bataille` DISABLE KEYS */;
INSERT INTO `bataille` VALUES (1,'ghfghf','ereryery','2020-10-16','2020-10-09'),(2,'ghfghf','ereryery',NULL,NULL),(3,'ghfghf','ereryery',NULL,NULL),(4,'ghfghf','ereryery',NULL,NULL),(5,'ghfghf','ereryery',NULL,NULL),(6,'ghfghf','ereryery',NULL,NULL),(7,'ghfghf','ereryery',NULL,NULL),(8,'ghfghf','ereryery',NULL,NULL),(9,'ghfghf','ereryery',NULL,NULL),(10,'ghfghf','ereryery',NULL,NULL),(11,'ghfghf','ereryery',NULL,NULL),(12,'ghfghf','ereryery',NULL,NULL),(13,'ghfghf','ereryery',NULL,NULL),(14,'ghfghf','ereryery',NULL,NULL),(15,'ghfghf','ereryery',NULL,NULL),(16,'ghfghf','ereryery',NULL,NULL),(17,'ghfghf','ereryery',NULL,NULL);
/*!40000 ALTER TABLE `bataille` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blessures`
--

DROP TABLE IF EXISTS `blessures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blessures` (
  `idBlessure` int(11) NOT NULL AUTO_INCREMENT,
  `typeBlessure` varchar(50) NOT NULL,
  `DateBlessure` date NOT NULL,
  PRIMARY KEY (`idBlessure`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blessures`
--

LOCK TABLES `blessures` WRITE;
/*!40000 ALTER TABLE `blessures` DISABLE KEYS */;
/*!40000 ALTER TABLE `blessures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blessuressoldat`
--

DROP TABLE IF EXISTS `blessuressoldat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blessuressoldat` (
  `idSoldat` int(11) NOT NULL,
  `idBlessure` int(11) NOT NULL,
  PRIMARY KEY (`idSoldat`),
  KEY `Subi_Blessures0_FK` (`idBlessure`),
  CONSTRAINT `Subi_Blessures0_FK` FOREIGN KEY (`idBlessure`) REFERENCES `blessures` (`idBlessure`),
  CONSTRAINT `Subi_Soldats_FK` FOREIGN KEY (`idSoldat`) REFERENCES `soldats` (`idSoldat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blessuressoldat`
--

LOCK TABLES `blessuressoldat` WRITE;
/*!40000 ALTER TABLE `blessuressoldat` DISABLE KEYS */;
/*!40000 ALTER TABLE `blessuressoldat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grades` (
  `idGrade` int(11) NOT NULL AUTO_INCREMENT,
  `dateObtention` varchar(50) NOT NULL,
  PRIMARY KEY (`idGrade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grades`
--

LOCK TABLES `grades` WRITE;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;
/*!40000 ALTER TABLE `grades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lieublessures`
--

DROP TABLE IF EXISTS `lieublessures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lieublessures` (
  `idBlessure` int(11) NOT NULL,
  `idBataille` int(11) NOT NULL,
  PRIMARY KEY (`idBlessure`),
  KEY `Produit_Bataille0_FK` (`idBataille`),
  CONSTRAINT `Produit_Bataille0_FK` FOREIGN KEY (`idBataille`) REFERENCES `bataille` (`idBataille`),
  CONSTRAINT `Produit_Blessures_FK` FOREIGN KEY (`idBlessure`) REFERENCES `blessures` (`idBlessure`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lieublessures`
--

LOCK TABLES `lieublessures` WRITE;
/*!40000 ALTER TABLE `lieublessures` DISABLE KEYS */;
/*!40000 ALTER TABLE `lieublessures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soldats`
--

DROP TABLE IF EXISTS `soldats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `soldats` (
  `idSoldat` int(11) NOT NULL AUTO_INCREMENT,
  `nomSoldat` varchar(50) NOT NULL,
  `prenomSoldat` varchar(50) NOT NULL,
  `idGrade` int(11) NOT NULL,
  `idUnite` int(11) NOT NULL,
  PRIMARY KEY (`idSoldat`),
  KEY `Soldats_Grades_FK` (`idGrade`),
  KEY `Soldats_Unite0_FK` (`idUnite`),
  CONSTRAINT `Soldats_Grades_FK` FOREIGN KEY (`idGrade`) REFERENCES `grades` (`idGrade`),
  CONSTRAINT `Soldats_Unite0_FK` FOREIGN KEY (`idUnite`) REFERENCES `unite` (`idUnite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soldats`
--

LOCK TABLES `soldats` WRITE;
/*!40000 ALTER TABLE `soldats` DISABLE KEYS */;
/*!40000 ALTER TABLE `soldats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unite`
--

DROP TABLE IF EXISTS `unite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unite` (
  `idUnite` int(11) NOT NULL AUTO_INCREMENT,
  `nomUnite` varchar(50) NOT NULL,
  `dateRattachement` date NOT NULL,
  PRIMARY KEY (`idUnite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unite`
--

LOCK TABLES `unite` WRITE;
/*!40000 ALTER TABLE `unite` DISABLE KEYS */;
/*!40000 ALTER TABLE `unite` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-26 17:15:02
