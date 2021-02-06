-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: gestionsannonces
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
-- Current Database: `gestionsannonces`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `gestionsannonces` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gestionsannonces`;

--
-- Table structure for table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `annonces` (
  `idAnnonce` int(11) NOT NULL AUTO_INCREMENT,
  `titreAnnonce` varchar(50) NOT NULL,
  `lienImg` varchar(100) NOT NULL,
  `libelleAnnonce` varchar(100) NOT NULL,
  `prixAnnonce` float NOT NULL,
  `datePublication` varchar(10) NOT NULL,
  `statutAnnonce` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`idAnnonce`),
  KEY `FK_annonces_categories` (`idCategorie`),
  KEY `FK_annonces_utilisateurs` (`idUtilisateur`),
  CONSTRAINT `FK_annonces_categories` FOREIGN KEY (`idCategorie`) REFERENCES `categories` (`idCategorie`),
  CONSTRAINT `FK_annonces_utilisateurs` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `annonces`
--

LOCK TABLES `annonces` WRITE;
/*!40000 ALTER TABLE `annonces` DISABLE KEYS */;
INSERT INTO `annonces` VALUES (1,'ordinateur1','ordi1.jpg','ceci est un ordinateur en bon etat',50,'2020-05-25',1,2,3),(2,'ordinateur2','ordi2.jpeg','ceci est un ordinateur en bon etat',100,'2020-04-25',2,3,3),(3,'ordinateur3','ordi3.jpg','ceci est un ordinateur en bon etat',200,'2020-10-25',2,3,3),(4,'voiture1','voiture1.jpg','ceci est une voiture tres belle',5000,'2020-09-11',1,2,2),(5,'voiture2','voiture2.jpg','ceci est une voiture tres belle',2000,'2020-03-22',1,3,2),(6,'voiture3','voiture3.jpg','ceci est une voiture tres belle',1000,'2020-07-08',1,3,2),(7,'voiture4','voiture4.jpg','ceci est une voiture tres belle',4000,'2020-04-17',2,2,2),(8,'meuble1','meuble1.jpg','un meuble en tres bon etat',10,'2020-02-04',1,3,1),(9,'meuble2','meuble2.jpg','un meuble en tres bon etat',15,'2020-01-10',2,2,1);
/*!40000 ALTER TABLE `annonces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `libelleCategorie` varchar(30) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'meubles'),(2,'voitures'),(3,'pc'),(4,'Toutes categories');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `langue`
--

DROP TABLE IF EXISTS `langue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `langue` (
  `idLangue` int(11) NOT NULL AUTO_INCREMENT,
  `nomLangue` varchar(50) NOT NULL,
  `codeLangue` varchar(2) NOT NULL,
  `textLangue` varchar(50) NOT NULL,
  PRIMARY KEY (`idLangue`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `langue`
--

LOCK TABLES `langue` WRITE;
/*!40000 ALTER TABLE `langue` DISABLE KEYS */;
INSERT INTO `langue` VALUES (1,'Voiture','FR','Voiture'),(2,'Voiture','EN','Car'),(3,'Vetement','FR','Vetement'),(4,'Vetement','EN','clothing'),(5,'Rechercher','FR','Rechercher'),(6,'Rechercher','EN','Search'),(7,'Mes Annonces','FR','Mes Annonces'),(8,'Mes Annonces','EN','My Ads'),(9,'Ajouter une Annonce','FR','Ajouter une Annonce'),(10,'Ajouter une Annonce','EN','Add ad'),(11,'deconnexion','FR','deconnexion'),(12,'deconnexion','EN','disconnection'),(13,'titre','FR','titre'),(14,'titre','EN','title'),(15,'Image','FR','image'),(16,'image','EN','Picture'),(17,'libelle','FR','libelle'),(18,'libelle','EN','Name'),(19,'Prix','FR','Prix'),(20,'Prix','EN','price'),(21,'Date de publication','FR','Date de publication'),(22,'Date de publication','EN','publication date'),(23,'Statut de l\'annonce','FR','Statut de l\'annonce'),(24,'Statut de l\'annonce','EN','ad status'),(25,'Disponible','FR','Disponible'),(26,'Disponible','EN','Available'),(27,'Vendu','FR','Vendu'),(28,'Vendu','EN','sold'),(29,'Categorie','FR','Categorie'),(30,'Categorie','EN','Category'),(31,'Meuble','FR','Meuble'),(32,'Meuble','EN','furniture item'),(33,'pc','FR','pc'),(34,'pc','EN','Computer'),(35,'Retour','FR','Retour'),(36,'Retour','EN','return'),(37,'Mes Messages','FR','Mes Messages'),(38,'Mes Messages','EN','My Messages'),(39,'Liste utilisateurs','FR','Liste des Utilisateurs'),(40,'Liste utilisateurs','EN','User List'),(41,'Liste Annonces','FR','Liste des Annonces'),(42,'Liste Annonces','EN','Announcements List'),(43,'Modifier','FR','Modifier'),(44,'Modifier','EN','Modify'),(45,'Supprimer','FR','Supprimer'),(46,'Supprimer','EN','Delete'),(47,'Consulter','FR','Consulter'),(48,'Consulter','EN','View'),(49,'publiée le','FR','Publiée le'),(50,'publiée le','EN','Published'),(51,'Par','FR','Par'),(52,'Par','EN','By'),(53,'Statut','FR','Statut'),(54,'Statut','EN','Status'),(55,'Envoyé par','FR','Envoyé par'),(56,'Envoyé par','EN','Send by'),(57,'Aucun message à afficher','FR','Aucun message à afficher'),(58,'Aucun message à afficher','EN','No message to display');
/*!40000 ALTER TABLE `langue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `idMessage` int(11) NOT NULL AUTO_INCREMENT,
  `libelleMessage` varchar(500) NOT NULL,
  `contenueMessage` varchar(500) NOT NULL,
  `idDestinataire` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idMessage`),
  KEY `FK_messages_utilisateurs` (`idUtilisateur`),
  CONSTRAINT `FK_messages_utilisateurs` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'interresse','je suis interresser par votre bien',2,3),(2,'j achete','je vous achete cet objet',3,2),(3,'possible de negocier?','je vous propose 5 euros pour ce produit',2,3);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `libelleRole` varchar(50) NOT NULL,
  `codeRole` int(11) NOT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'administrateur',1),(2,'utilisateur',2);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomUtilisateur` varchar(50) NOT NULL,
  `prenomutilisateur` varchar(50) NOT NULL,
  `emailUtilisateur` varchar(50) NOT NULL,
  `pseudoUtilisateur` varchar(50) NOT NULL,
  `mdpUtilisateur` varchar(50) NOT NULL,
  `telUtilisateur` varchar(10) NOT NULL,
  `idRole` int(11) NOT NULL,
  PRIMARY KEY (`idUtilisateur`),
  KEY `FK_utilisateur_roles` (`idRole`),
  CONSTRAINT `FK_utilisateur_roles` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs`
--

LOCK TABLES `utilisateurs` WRITE;
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` VALUES (1,'Boboze','Toto','Toto@gmail.com','toto59','toto59','0324256742',1),(2,'Bobozo','Titi','Titi@gmail.com','titi59','titi59','0344251142',2),(3,'Babouze','Tutu','Tutu@gmail.com','tutu59','tutu59','0328321042',2),(4,'Test','Retest','test@test','test','d9b1d7db4cd6e70935368a1efb10e377','0202020202',1);
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-06 17:15:02
