-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: departement
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
-- Current Database: `departement`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `departement` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `departement`;

--
-- Table structure for table `departement`
--

DROP TABLE IF EXISTS `departement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departement` (
  `idDepartement` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`idDepartement`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departement`
--

LOCK TABLES `departement` WRITE;
/*!40000 ALTER TABLE `departement` DISABLE KEYS */;
INSERT INTO `departement` VALUES (1,'Ain'),(2,'Aisne'),(3,'Allier'),(4,'Alpes-de-Haute-Provence'),(5,'Hautes-Alpes'),(6,'Alpes-Maritimes'),(7,'Ardèche'),(8,'Ardennes'),(9,'Ariège'),(10,'Aube'),(11,'Aude'),(12,'Aveyron'),(13,'Bouches-du-Rhône'),(14,'Calvados'),(15,'Cantal'),(16,'Charente'),(17,'Charente-Maritime'),(18,'Cher'),(19,'Corrèze'),(20,'Corse-du-Sud'),(21,'Haute-Corse'),(22,'Côte-d\'Or'),(23,'Côtes-d\'Armor'),(24,'Creuse'),(25,'Dordogne'),(26,'Doubs'),(27,'Drôme'),(28,'Eure'),(29,'Eure-et-Loir'),(30,'Finistère'),(31,'Gard'),(32,'Haute-Garonne'),(33,'Gers'),(34,'Gironde'),(35,'Hérault'),(36,'Ille-et-Vilaine'),(37,'Indre'),(38,'Indre-et-Loire'),(39,'Isère'),(40,'Jura'),(41,'Landes'),(42,'Loir-et-Cher'),(43,'Loire'),(44,'Haute-Loire'),(45,'Loire-Atlantique'),(46,'Loiret'),(47,'Lot'),(48,'Lot-et-Garonne'),(49,'Lozère'),(50,'Maine-et-Loire'),(51,'Manche'),(52,'Marne'),(53,'Haute-Marne'),(54,'Mayenne'),(55,'Meurthe-et-Moselle'),(56,'Meuse'),(57,'Morbihan'),(58,'Moselle'),(59,'Nièvre'),(60,'Nord'),(61,'Oise'),(62,'Orne'),(63,'Pas-de-Calais'),(64,'Puy-de-Dôme'),(65,'Pyrénées-Atlantiques'),(66,'Hautes-Pyrénées'),(67,'Pyrénées-Orientales'),(68,'Bas-Rhin'),(69,'Haut-Rhin'),(70,'Rhône (circonscription administrative)'),(71,'Haute-Saône'),(72,'Saône-et-Loire'),(73,'Sarthe'),(74,'Savoie'),(75,'Haute-Savoie'),(76,'Paris'),(77,'Seine-Maritime'),(78,'Seine-et-Marne'),(79,'Yvelines'),(80,'Deux-Sèvres'),(81,'Somme'),(82,'Tarn'),(83,'Tarn-et-Garonne'),(84,'Var'),(85,'Vaucluse'),(86,'Vendée'),(87,'Vienne'),(88,'Haute-Vienne'),(89,'Vosges'),(90,'Yonne'),(91,'Territoire de Belfort'),(92,'Essonne'),(93,'Hauts-de-Seine'),(94,'Seine-Saint-Denis'),(95,'Val-de-Marne'),(96,'Val-d\'Oise'),(97,'Guadeloupe'),(98,'Martinique'),(99,'Guyane'),(100,'La Réunion'),(101,'Mayotte'),(102,'Clipperton');
/*!40000 ALTER TABLE `departement` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-13  9:38:29
