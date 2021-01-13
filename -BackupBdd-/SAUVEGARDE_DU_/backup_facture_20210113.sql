-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: facture
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
-- Current Database: `facture`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `facture` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `facture`;

--
-- Table structure for table `achete`
--

DROP TABLE IF EXISTS `achete`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `achete` (
  `idProduit` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `quantiteAchetee` double NOT NULL,
  PRIMARY KEY (`idProduit`),
  KEY `FK_achete_Clients` (`idClient`),
  CONSTRAINT `FK_achete_Clients` FOREIGN KEY (`idClient`) REFERENCES `clients` (`idClient`),
  CONSTRAINT `FK_achete_Produits` FOREIGN KEY (`idProduit`) REFERENCES `produits` (`idProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `achete`
--

LOCK TABLES `achete` WRITE;
/*!40000 ALTER TABLE `achete` DISABLE KEYS */;
/*!40000 ALTER TABLE `achete` ENABLE KEYS */;
UNLOCK TABLES;

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
  `adresseClient` varchar(100) NOT NULL,
  `codePostalClient` int(11) NOT NULL,
  `villeClient` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contient`
--

DROP TABLE IF EXISTS `contient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contient` (
  `idFacture` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `quantiteFacturee` double NOT NULL,
  PRIMARY KEY (`idFacture`),
  KEY `FK_contient_Produits` (`idProduit`),
  CONSTRAINT `FK_contient_Factures` FOREIGN KEY (`idFacture`) REFERENCES `factures` (`idFacture`),
  CONSTRAINT `FK_contient_Produits` FOREIGN KEY (`idProduit`) REFERENCES `produits` (`idProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contient`
--

LOCK TABLES `contient` WRITE;
/*!40000 ALTER TABLE `contient` DISABLE KEYS */;
/*!40000 ALTER TABLE `contient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factures`
--

DROP TABLE IF EXISTS `factures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factures` (
  `idFacture` int(11) NOT NULL AUTO_INCREMENT,
  `numeroDevis` int(11) NOT NULL,
  `dateFacture` date NOT NULL,
  `tvaFacture` int(11) NOT NULL COMMENT 'En pourcentage',
  `remiseFacture` int(11) NOT NULL,
  `acompteFacture` int(11) NOT NULL,
  `conditionPaiement` varchar(50) NOT NULL,
  `echeancePaiement` varchar(50) NOT NULL,
  `montant` float NOT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`idFacture`),
  KEY `FK_Factures_Clients` (`idClient`),
  CONSTRAINT `FK_Factures_Clients` FOREIGN KEY (`idClient`) REFERENCES `clients` (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factures`
--

LOCK TABLES `factures` WRITE;
/*!40000 ALTER TABLE `factures` DISABLE KEYS */;
/*!40000 ALTER TABLE `factures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produits` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `nomProduit` varchar(60) NOT NULL,
  `prixUnitaire` double NOT NULL,
  `idUnite` int(11) NOT NULL,
  PRIMARY KEY (`idProduit`),
  KEY `FK_Produits_UnitesDeMesure` (`idUnite`),
  CONSTRAINT `FK_Produits_UnitesDeMesure` FOREIGN KEY (`idUnite`) REFERENCES `unitesdemesure` (`idUnite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produits`
--

LOCK TABLES `produits` WRITE;
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unitesdemesure`
--

DROP TABLE IF EXISTS `unitesdemesure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unitesdemesure` (
  `idUnite` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleUnite` varchar(50) NOT NULL,
  PRIMARY KEY (`idUnite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unitesdemesure`
--

LOCK TABLES `unitesdemesure` WRITE;
/*!40000 ALTER TABLE `unitesdemesure` DISABLE KEYS */;
/*!40000 ALTER TABLE `unitesdemesure` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-13 17:15:02
