-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: hotel
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
-- Current Database: `hotel`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `hotel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hotel`;

--
-- Table structure for table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chambre` (
  `idChambre` int(11) NOT NULL AUTO_INCREMENT,
  `numeroDeChambre` int(11) NOT NULL,
  `typeDeChambre` varchar(200) NOT NULL,
  `capaciteChambre` int(11) NOT NULL,
  `idHotel` int(11) DEFAULT NULL,
  PRIMARY KEY (`idChambre`),
  KEY `FK_chambre_hotel` (`idHotel`),
  CONSTRAINT `FK_chambre_hotel` FOREIGN KEY (`idHotel`) REFERENCES `hotel` (`idHotel`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chambre`
--

LOCK TABLES `chambre` WRITE;
/*!40000 ALTER TABLE `chambre` DISABLE KEYS */;
INSERT INTO `chambre` VALUES (1,101,'1',1,NULL),(2,102,'1',2,NULL),(3,103,'1',1,NULL),(4,104,'1',2,NULL),(5,105,'1',2,NULL),(6,106,'1',1,NULL),(7,107,'1',3,NULL),(8,108,'1',1,NULL),(9,109,'1',2,NULL),(10,235,'1',1,NULL),(11,157,'1',1,NULL),(12,874,'1',1,NULL),(13,125,'1',5,NULL),(14,101,'1',3,NULL),(15,102,'1',3,NULL),(16,103,'1',2,NULL),(17,104,'1',3,NULL),(18,105,'1',3,NULL),(19,106,'1',1,NULL),(20,107,'1',1,NULL),(21,108,'1',2,NULL),(22,109,'1',2,NULL),(23,235,'1',3,NULL),(24,157,'1',1,NULL),(25,874,'1',2,NULL),(26,125,'1',1,NULL),(27,101,'1',3,NULL),(28,102,'1',3,NULL),(29,103,'1',1,NULL),(30,104,'1',1,NULL),(31,105,'1',1,NULL),(32,106,'1',2,NULL),(33,107,'1',2,NULL),(34,108,'1',1,NULL),(35,109,'1',3,NULL),(36,235,'1',3,NULL),(37,157,'1',3,NULL),(38,874,'1',1,NULL),(39,125,'1',2,NULL);
/*!40000 ALTER TABLE `chambre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(200) NOT NULL,
  `prenomClient` varchar(200) NOT NULL,
  `adresseClient` varchar(200) NOT NULL,
  `villeClient` varchar(200) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'DOE','John','Rue Du General Leclerc','Chatenay Malabry'),(2,'HOMME','Josh','Rue Danton','Palm Desert'),(3,'PAUL','Weller','Rue Hoche','Londres'),(4,'WHITE','Jack','Allee Gustave Eiffel','Detroit'),(5,'CLAYPOOL','Les','Rue Jean Pierre Timbaud','San Francisco'),(6,'SQUIRE','Chris','Place Paul Vaillant Couturier','Londres'),(7,'WOOD','Ronnie','Rue Erevan','Londres'),(8,'THUNDERS','Johnny','Rue Du General Leclerc','New York'),(9,'JEUNEMAITRE','Eric','Rue Du General Leclerc','Chaville'),(10,'KARAM','Patrick','Rue Danton','Courbevoie'),(11,'RUFET','Corinne','Rue Hoche','Le Plessis Robinson'),(12,'SAINT JUST ','Wallerand','Allee Gustave Eiffel','Marnes La Coquette'),(13,'SANTINI','Jean-Luc','Rue Jean Pierre Timbaud','Chatenay Malabry'),(14,'AIT','Eddie','Place Paul Vaillant Couturier','Le Plessis Robinson'),(15,'BARBOTIN','Eddie','Rue Erevan','Chatenay Malabry'),(16,'BERESSI','Isabelle','Rue Du General Leclerc','Londres'),(17,'CAMARA','Lamine','Rue Ernest Renan','Antony'),(18,'CECCONI','Frank','Rue Georges Marie','Chatenay Malabry'),(19,'CHEVRON','Eric','Boulevard Gallieni','Suresnes'),(20,'CIUNTU','Marie-Carole','Esplanade Du Belvedere','Meudon'),(21,'DOE','John','Rue Du General Leclerc','Chatenay Malabry'),(22,'HOMME','Josh','Rue Danton','Palm Desert'),(23,'PAUL','Weller','Rue Hoche','Londres'),(24,'WHITE','Jack','Allee Gustave Eiffel','Detroit'),(25,'CLAYPOOL','Les','Rue Jean Pierre Timbaud','San Francisco'),(26,'SQUIRE','Chris','Place Paul Vaillant Couturier','Londres'),(27,'WOOD','Ronnie','Rue Erevan','Londres'),(28,'THUNDERS','Johnny','Rue Du General Leclerc','New York'),(29,'JEUNEMAITRE','Eric','Rue Du General Leclerc','Chaville'),(30,'KARAM','Patrick','Rue Danton','Courbevoie'),(31,'RUFET','Corinne','Rue Hoche','Le Plessis Robinson'),(32,'SAINT JUST ','Wallerand','Allee Gustave Eiffel','Marnes La Coquette'),(33,'SANTINI','Jean-Luc','Rue Jean Pierre Timbaud','Chatenay Malabry'),(34,'AIT','Eddie','Place Paul Vaillant Couturier','Le Plessis Robinson'),(35,'BARBOTIN','Eddie','Rue Erevan','Chatenay Malabry'),(36,'BERESSI','Isabelle','Rue Du General Leclerc','Londres'),(37,'CAMARA','Lamine','Rue Ernest Renan','Antony'),(38,'CECCONI','Frank','Rue Georges Marie','Chatenay Malabry'),(39,'CHEVRON','Eric','Boulevard Gallieni','Suresnes'),(40,'CIUNTU','Marie-Carole','Esplanade Du Belvedere','Meudon'),(41,'DOE','John','Rue Du General Leclerc','Chatenay Malabry'),(42,'HOMME','Josh','Rue Danton','Palm Desert'),(43,'PAUL','Weller','Rue Hoche','Londres'),(44,'WHITE','Jack','Allee Gustave Eiffel','Detroit'),(45,'CLAYPOOL','Les','Rue Jean Pierre Timbaud','San Francisco'),(46,'SQUIRE','Chris','Place Paul Vaillant Couturier','Londres'),(47,'WOOD','Ronnie','Rue Erevan','Londres'),(48,'THUNDERS','Johnny','Rue Du General Leclerc','New York'),(49,'JEUNEMAITRE','Eric','Rue Du General Leclerc','Chaville'),(50,'KARAM','Patrick','Rue Danton','Courbevoie'),(51,'RUFET','Corinne','Rue Hoche','Le Plessis Robinson'),(52,'SAINT JUST ','Wallerand','Allee Gustave Eiffel','Marnes La Coquette'),(53,'SANTINI','Jean-Luc','Rue Jean Pierre Timbaud','Chatenay Malabry'),(54,'AIT','Eddie','Place Paul Vaillant Couturier','Le Plessis Robinson'),(55,'BARBOTIN','Eddie','Rue Erevan','Chatenay Malabry'),(56,'BERESSI','Isabelle','Rue Du General Leclerc','Londres'),(57,'CAMARA','Lamine','Rue Ernest Renan','Antony'),(58,'CECCONI','Frank','Rue Georges Marie','Chatenay Malabry'),(59,'CHEVRON','Eric','Boulevard Gallieni','Suresnes'),(60,'CIUNTU','Marie-Carole','Esplanade Du Belvedere','Meudon'),(61,'DOE','John','Rue Du General Leclerc','Chatenay Malabry'),(62,'HOMME','Josh','Rue Danton','Palm Desert'),(63,'PAUL','Weller','Rue Hoche','Londres'),(64,'WHITE','Jack','Allee Gustave Eiffel','Detroit'),(65,'CLAYPOOL','Les','Rue Jean Pierre Timbaud','San Francisco'),(66,'SQUIRE','Chris','Place Paul Vaillant Couturier','Londres'),(67,'WOOD','Ronnie','Rue Erevan','Londres'),(68,'THUNDERS','Johnny','Rue Du General Leclerc','New York'),(69,'JEUNEMAITRE','Eric','Rue Du General Leclerc','Chaville'),(70,'KARAM','Patrick','Rue Danton','Courbevoie'),(71,'RUFET','Corinne','Rue Hoche','Le Plessis Robinson'),(72,'SAINT JUST ','Wallerand','Allee Gustave Eiffel','Marnes La Coquette'),(73,'SANTINI','Jean-Luc','Rue Jean Pierre Timbaud','Chatenay Malabry'),(74,'AIT','Eddie','Place Paul Vaillant Couturier','Le Plessis Robinson'),(75,'BARBOTIN','Eddie','Rue Erevan','Chatenay Malabry'),(76,'BERESSI','Isabelle','Rue Du General Leclerc','Londres'),(77,'CAMARA','Lamine','Rue Ernest Renan','Antony'),(78,'CECCONI','Frank','Rue Georges Marie','Chatenay Malabry'),(79,'CHEVRON','Eric','Boulevard Gallieni','Suresnes'),(80,'CIUNTU','Marie-Carole','Esplanade Du Belvedere','Meudon'),(81,'POIX','Martine','AFPA','Dunkerque');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `effectue`
--

DROP TABLE IF EXISTS `effectue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `effectue` (
  `idSejour` int(11) NOT NULL,
  `idChambre` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `dateDebutSejour` date NOT NULL,
  `dateFinSejour` date NOT NULL,
  `prixSejour` decimal(10,0) NOT NULL,
  `arrhes` decimal(10,0) NOT NULL,
  PRIMARY KEY (`idSejour`),
  KEY `FK_effectue_chambre` (`idChambre`),
  KEY `FK_effectue_client` (`idClient`),
  CONSTRAINT `FK_effectue_chambre` FOREIGN KEY (`idChambre`) REFERENCES `chambre` (`idChambre`),
  CONSTRAINT `FK_effectue_client` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `effectue`
--

LOCK TABLES `effectue` WRITE;
/*!40000 ALTER TABLE `effectue` DISABLE KEYS */;
/*!40000 ALTER TABLE `effectue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotel` (
  `idHotel` int(11) NOT NULL AUTO_INCREMENT,
  `categorieHotel` decimal(10,0) NOT NULL,
  `adresseHotel` varchar(200) NOT NULL,
  `villeHotel` varchar(200) NOT NULL,
  `idStation` int(11) DEFAULT NULL,
  `nomHotel` varchar(200) NOT NULL,
  PRIMARY KEY (`idHotel`),
  KEY `FK_hotel_station` (`idStation`),
  CONSTRAINT `FK_hotel_station` FOREIGN KEY (`idStation`) REFERENCES `station` (`idStation`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel`
--

LOCK TABLES `hotel` WRITE;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` VALUES (1,3,'rue du bas','Pralo',NULL,'Le Magnifique'),(2,1,'rue du haut','Pralo',NULL,'Hotel du haut'),(3,3,'place de la liberation','Vonten',NULL,'Le Narval'),(4,4,'place du 14 juillet','Bretou',NULL,'Les Pissenlis'),(5,5,'place du bas','Bretou',NULL,'RR Hotel'),(6,2,'place du haut','Bretou',NULL,'La Brique'),(7,3,'place du centre','Toras',NULL,'Le Beau Rivage'),(8,1,'1 Chemin des randonneurs','Alpe d Huez',NULL,'Residence les marmottes'),(9,5,'2 Rue des sapins','Areches',NULL,'Residence les edelweiss'),(10,4,'7 Avenue de la neige','Beaufort',NULL,'Residence les panoramas'),(11,5,'8 Chemin des pissenlits','Aussois',NULL,'Residence les sapins'),(12,3,'10 Rue des etables','Avoriaz',NULL,'Chalets les marmottes'),(13,3,'8 Avenue des sapins','Alpe d Huez',NULL,'Chalets les edelweiss'),(14,2,'3 Chemin de la neige','Areches',NULL,'Chalets les panoramas'),(15,5,'3 Rue des pissenlits','Beaufort',NULL,'Chalets les sapins'),(16,3,'rue du bas','Pralo',NULL,'Le Magnifique'),(17,1,'rue du haut','Pralo',NULL,'Hotel du haut'),(18,3,'place de la liberation','Vonten',NULL,'Le Narval'),(19,4,'place du 14 juillet','Bretou',NULL,'Les Pissenlis'),(20,5,'place du bas','Bretou',NULL,'RR Hotel'),(21,2,'place du haut','Bretou',NULL,'La Brique'),(22,3,'place du centre','Toras',NULL,'Le Beau Rivage'),(23,1,'1 Chemin des randonneurs','Alpe d Huez',NULL,'Residence les marmottes'),(24,5,'2 Rue des sapins','Areches',NULL,'Residence les edelweiss'),(25,4,'7 Avenue de la neige','Beaufort',NULL,'Residence les panoramas'),(26,5,'8 Chemin des pissenlits','Aussois',NULL,'Residence les sapins'),(27,3,'10 Rue des etables','Avoriaz',NULL,'Chalets les marmottes'),(28,3,'8 Avenue des sapins','Alpe d Huez',NULL,'Chalets les edelweiss'),(29,2,'3 Chemin de la neige','Areches',NULL,'Chalets les panoramas'),(30,5,'3 Rue des pissenlits','Beaufort',NULL,'Chalets les sapins'),(31,3,'rue du bas','Pralo',NULL,'Le Magnifique'),(32,1,'rue du haut','Pralo',NULL,'Hotel du haut'),(33,3,'place de la liberation','Vonten',NULL,'Le Narval'),(34,4,'place du 14 juillet','Bretou',NULL,'Les Pissenlis'),(35,5,'place du bas','Bretou',NULL,'RR Hotel'),(36,2,'place du haut','Bretou',NULL,'La Brique'),(37,3,'place du centre','Toras',NULL,'Le Beau Rivage'),(38,1,'1 Chemin des randonneurs','Alpe d Huez',NULL,'Residence les marmottes'),(39,5,'2 Rue des sapins','Areches',NULL,'Residence les edelweiss'),(40,4,'7 Avenue de la neige','Beaufort',NULL,'Residence les panoramas'),(41,5,'8 Chemin des pissenlits','Aussois',NULL,'Residence les sapins'),(42,3,'10 Rue des etables','Avoriaz',NULL,'Chalets les marmottes'),(43,3,'8 Avenue des sapins','Alpe d Huez',NULL,'Chalets les edelweiss'),(44,2,'3 Chemin de la neige','Areches',NULL,'Chalets les panoramas'),(45,5,'3 Rue des pissenlits','Beaufort',NULL,'Chalets les sapins');
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `station`
--

DROP TABLE IF EXISTS `station`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `station` (
  `idStation` int(11) NOT NULL AUTO_INCREMENT,
  `altitudeStation` decimal(10,0) NOT NULL,
  `nomStation` varchar(200) NOT NULL,
  PRIMARY KEY (`idStation`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `station`
--

LOCK TABLES `station` WRITE;
/*!40000 ALTER TABLE `station` DISABLE KEYS */;
INSERT INTO `station` VALUES (1,2500,'La Montagne'),(2,200,'Le Sud'),(3,10,'La Plage'),(4,1860,'Alpe d Huez'),(5,1200,'Areches'),(6,1200,'Beaufort'),(7,1500,'Aussois'),(8,1800,'Avoriaz'),(9,2500,'La Montagne'),(10,200,'Le Sud'),(11,10,'La Plage'),(12,1860,'Alpe d Huez'),(13,1200,'Areches'),(14,1200,'Beaufort'),(15,1500,'Aussois'),(16,1800,'Avoriaz'),(17,2500,'La Montagne'),(18,200,'Le Sud'),(19,10,'La Plage'),(20,1860,'Alpe d Huez'),(21,1200,'Areches'),(22,1200,'Beaufort'),(23,1500,'Aussois'),(24,1800,'Avoriaz'),(25,2500,'La Montagne'),(26,200,'Le Sud'),(27,10,'La Plage'),(28,1860,'Alpe d Huez'),(29,1200,'Areches'),(30,1200,'Beaufort'),(31,1500,'Aussois'),(32,1800,'Avoriaz'),(33,2500,'La Montagne'),(34,200,'Le Sud'),(35,10,'La Plage'),(36,1860,'Alpe d Huez'),(37,1200,'Areches'),(38,1200,'Beaufort'),(39,1500,'Aussois'),(40,1800,'Avoriaz');
/*!40000 ALTER TABLE `station` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-05 10:50:02
