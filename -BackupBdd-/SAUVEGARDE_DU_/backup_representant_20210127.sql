-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: representant
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
-- Current Database: `representant`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `representant` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `representant`;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `IdClient` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` varchar(25) DEFAULT NULL,
  `VilleClient` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdClient`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Alice','Lyon'),(2,'Bruno','Lyon'),(3,'Charles','Compiègne'),(4,'Denis','Montpellier'),(5,'Emile','Strasbourg');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `clientventes`
--

DROP TABLE IF EXISTS `clientventes`;
/*!50001 DROP VIEW IF EXISTS `clientventes`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `clientventes` AS SELECT 
 1 AS `NomClient`,
 1 AS `VilleClient`,
 1 AS `IdVente`,
 1 AS `IdRepres`,
 1 AS `IdProduit`,
 1 AS `IdClient`,
 1 AS `Quantité`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `clientventesgauche`
--

DROP TABLE IF EXISTS `clientventesgauche`;
/*!50001 DROP VIEW IF EXISTS `clientventesgauche`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `clientventesgauche` AS SELECT 
 1 AS `NomClient`,
 1 AS `VilleClient`,
 1 AS `IdVente`,
 1 AS `IdRepres`,
 1 AS `IdProduit`,
 1 AS `IdClient`,
 1 AS `Quantité`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produits` (
  `IdProduit` int(11) NOT NULL AUTO_INCREMENT,
  `NomProduit` varchar(25) DEFAULT NULL,
  `CouleurProduit` varchar(25) DEFAULT NULL,
  `PoidsProduit` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produits`
--

LOCK TABLES `produits` WRITE;
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
INSERT INTO `produits` VALUES (1,'Aspirateur','Rouge',3546),(2,'Trottinette','Bleu',1423),(3,'Chaise','Blanc',3827),(4,'Tapis','Rouge',1423);
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `representants`
--

DROP TABLE IF EXISTS `representants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `representants` (
  `IdRepres` int(11) NOT NULL AUTO_INCREMENT,
  `NomRepres` varchar(25) DEFAULT NULL,
  `VilleRepres` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdRepres`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `representants`
--

LOCK TABLES `representants` WRITE;
/*!40000 ALTER TABLE `representants` DISABLE KEYS */;
INSERT INTO `representants` VALUES (1,'Stephane','Lyon'),(2,'Benjamin','Paris'),(3,'Leonard','Lyon'),(4,'Antoine','Brest'),(5,'Bruno','Bayonne');
/*!40000 ALTER TABLE `representants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventes`
--

DROP TABLE IF EXISTS `ventes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventes` (
  `IdVente` int(11) NOT NULL AUTO_INCREMENT,
  `IdRepres` int(11) DEFAULT NULL,
  `IdProduit` int(11) DEFAULT NULL,
  `IdClient` int(11) DEFAULT NULL,
  `Quantité` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdVente`),
  KEY `IdClient` (`IdClient`),
  KEY `IdProduit` (`IdProduit`),
  KEY `IdRepres` (`IdRepres`),
  CONSTRAINT `ventes_ibfk_1` FOREIGN KEY (`IdClient`) REFERENCES `clients` (`IdClient`),
  CONSTRAINT `ventes_ibfk_2` FOREIGN KEY (`IdProduit`) REFERENCES `produits` (`IdProduit`),
  CONSTRAINT `ventes_ibfk_3` FOREIGN KEY (`IdRepres`) REFERENCES `representants` (`IdRepres`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventes`
--

LOCK TABLES `ventes` WRITE;
/*!40000 ALTER TABLE `ventes` DISABLE KEYS */;
INSERT INTO `ventes` VALUES (1,1,1,1,1),(2,1,1,2,1),(3,2,2,3,1),(4,4,3,3,200),(5,3,4,2,190),(6,1,3,2,300),(7,3,1,2,120),(8,3,1,4,120),(9,3,4,4,2),(10,3,1,1,3),(11,3,4,1,5),(12,3,1,3,1);
/*!40000 ALTER TABLE `ventes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `representant`
--

USE `representant`;

--
-- Final view structure for view `clientventes`
--

/*!50001 DROP VIEW IF EXISTS `clientventes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `clientventes` AS select `clients`.`NomClient` AS `NomClient`,`clients`.`VilleClient` AS `VilleClient`,`ventes`.`IdVente` AS `IdVente`,`ventes`.`IdRepres` AS `IdRepres`,`ventes`.`IdProduit` AS `IdProduit`,`ventes`.`IdClient` AS `IdClient`,`ventes`.`Quantité` AS `Quantité` from (`clients` join `ventes` on((`clients`.`IdClient` = `ventes`.`IdClient`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `clientventesgauche`
--

/*!50001 DROP VIEW IF EXISTS `clientventesgauche`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `clientventesgauche` AS select `clients`.`NomClient` AS `NomClient`,`clients`.`VilleClient` AS `VilleClient`,`ventes`.`IdVente` AS `IdVente`,`ventes`.`IdRepres` AS `IdRepres`,`ventes`.`IdProduit` AS `IdProduit`,`ventes`.`IdClient` AS `IdClient`,`ventes`.`Quantité` AS `Quantité` from (`clients` left join `ventes` on((`clients`.`IdClient` = `ventes`.`IdClient`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-27 17:15:02
