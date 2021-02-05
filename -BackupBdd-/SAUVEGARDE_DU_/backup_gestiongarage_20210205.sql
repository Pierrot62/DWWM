-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: gestiongarage
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
-- Current Database: `gestiongarage`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `gestiongarage` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gestiongarage`;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(50) NOT NULL,
  `prenomClient` varchar(50) NOT NULL,
  `telClient` varchar(15) NOT NULL,
  `adresseClient` varchar(50) NOT NULL,
  `cpClient` varchar(5) NOT NULL,
  `villeClient` varchar(30) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Lavachette','Pierrette','0720304050','5 rue des vaches','59240','Dunkerque'),(2,'Lacafet','Brunette','0610374058','9 rue du café','13140','Marseille'),(3,'Orangerie','Clementine','0612399080','12 rue des oranges','59140','Dunkerque'),(4,'Force','Armando','0780457820','25 rue de truc','33000','Bordeaux');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factures`
--

DROP TABLE IF EXISTS `factures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factures` (
  `idFacture` int(11) NOT NULL AUTO_INCREMENT,
  `dateFacture` date NOT NULL,
  PRIMARY KEY (`idFacture`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factures`
--

LOCK TABLES `factures` WRITE;
/*!40000 ALTER TABLE `factures` DISABLE KEYS */;
INSERT INTO `factures` VALUES (1,'2020-05-25'),(2,'2020-09-12'),(3,'2020-10-15'),(4,'2020-10-18');
/*!40000 ALTER TABLE `factures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interventions`
--

DROP TABLE IF EXISTS `interventions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interventions` (
  `idIntervention` int(11) NOT NULL AUTO_INCREMENT,
  `quantitePiece` int(11) NOT NULL,
  `idPiece` int(11) NOT NULL,
  `idReparation` int(11) NOT NULL,
  PRIMARY KEY (`idIntervention`),
  KEY `interventions_pieces_FK` (`idPiece`),
  KEY `interventions_reparations_FK` (`idReparation`),
  CONSTRAINT `interventions_pieces_FK` FOREIGN KEY (`idPiece`) REFERENCES `pieces` (`idPiece`),
  CONSTRAINT `interventions_reparations_FK` FOREIGN KEY (`idReparation`) REFERENCES `reparations` (`idReparation`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interventions`
--

LOCK TABLES `interventions` WRITE;
/*!40000 ALTER TABLE `interventions` DISABLE KEYS */;
INSERT INTO `interventions` VALUES (1,2,1,1),(2,25,2,2),(3,1,3,3),(4,1,4,4);
/*!40000 ALTER TABLE `interventions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pieces`
--

DROP TABLE IF EXISTS `pieces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pieces` (
  `idPiece` int(11) NOT NULL AUTO_INCREMENT,
  `libellePiece` varchar(50) NOT NULL,
  `prixPiece` float NOT NULL,
  PRIMARY KEY (`idPiece`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pieces`
--

LOCK TABLES `pieces` WRITE;
/*!40000 ALTER TABLE `pieces` DISABLE KEYS */;
INSERT INTO `pieces` VALUES (1,'Pneu',150),(2,'Vis',15),(3,'Moteur',200),(4,'Carroserie',290);
/*!40000 ALTER TABLE `pieces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reparations`
--

DROP TABLE IF EXISTS `reparations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reparations` (
  `idReparation` int(11) NOT NULL AUTO_INCREMENT,
  `libelleReparation` varchar(50) NOT NULL,
  `prixReparation` float NOT NULL,
  `dateReparation` date NOT NULL,
  `idVehicule` int(11) NOT NULL,
  `idFacture` int(11) NOT NULL,
  PRIMARY KEY (`idReparation`),
  KEY `reparations_vehicules_FK` (`idVehicule`),
  KEY `reparations_factures_FK` (`idFacture`),
  CONSTRAINT `reparations_factures_FK` FOREIGN KEY (`idFacture`) REFERENCES `factures` (`idFacture`),
  CONSTRAINT `reparations_vehicules_FK` FOREIGN KEY (`idVehicule`) REFERENCES `vehicules` (`idVehicule`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reparations`
--

LOCK TABLES `reparations` WRITE;
/*!40000 ALTER TABLE `reparations` DISABLE KEYS */;
INSERT INTO `reparations` VALUES (1,'Changement de pneu',300,'2020-05-20',1,1),(2,'On a fait des trucs',120,'2020-09-10',2,2),(3,'Changement du moteur',400,'2020-10-19',3,3),(4,'Réparation Carroserie',320,'2020-10-20',4,4);
/*!40000 ALTER TABLE `reparations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicules`
--

DROP TABLE IF EXISTS `vehicules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicules` (
  `idVehicule` int(11) NOT NULL AUTO_INCREMENT,
  `marqueVehicule` varchar(50) NOT NULL,
  `modeleVehicule` varchar(50) NOT NULL,
  `immatriculationVehicule` varchar(9) NOT NULL,
  `klmVehicule` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`idVehicule`),
  KEY `vehicules_clients_FK` (`idClient`),
  CONSTRAINT `vehicules_clients_FK` FOREIGN KEY (`idClient`) REFERENCES `clients` (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicules`
--

LOCK TABLES `vehicules` WRITE;
/*!40000 ALTER TABLE `vehicules` DISABLE KEYS */;
INSERT INTO `vehicules` VALUES (1,'Dacia','Sandero','AA-229-AA',15000,1),(2,'Citroen','C4','AB-289-BB',12000,2),(3,'Chevrolet','Corvette','FF-222-FF',20000,3),(4,'Ford','Fiesta','AE-155-BA',11000,4);
/*!40000 ALTER TABLE `vehicules` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-05 17:15:02
