-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: conventions
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
-- Current Database: `conventions`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `conventions` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `conventions`;

--
-- Table structure for table `animations`
--

DROP TABLE IF EXISTS `animations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animations` (
  `idAnimation` int(11) NOT NULL AUTO_INCREMENT,
  `idUtilisateur` int(11) NOT NULL,
  `idFormation` int(11) NOT NULL,
  PRIMARY KEY (`idAnimation`),
  KEY `FK_Animation_Formations` (`idFormation`),
  KEY `FK_Animation_Utilisateurs` (`idUtilisateur`),
  CONSTRAINT `FK_Animation_Formations` FOREIGN KEY (`idFormation`) REFERENCES `formations` (`idFormation`),
  CONSTRAINT `FK_Animation_Utilisateurs` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animations`
--

LOCK TABLES `animations` WRITE;
/*!40000 ALTER TABLE `animations` DISABLE KEYS */;
INSERT INTO `animations` VALUES (1,1,6),(2,2,4),(3,3,3),(4,4,2),(5,5,1),(6,6,5);
/*!40000 ALTER TABLE `animations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departements`
--

DROP TABLE IF EXISTS `departements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departements` (
  `idDepartement` char(3) NOT NULL,
  `libelleDepartement` varchar(100) NOT NULL,
  `idRegion` int(11) NOT NULL,
  PRIMARY KEY (`idDepartement`),
  KEY `FK_Departements_Regions` (`idRegion`),
  CONSTRAINT `FK_Departements_Regions` FOREIGN KEY (`idRegion`) REFERENCES `regions` (`idRegion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table des départements français';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departements`
--

LOCK TABLES `departements` WRITE;
/*!40000 ALTER TABLE `departements` DISABLE KEYS */;
INSERT INTO `departements` VALUES ('01','Ain',1),('02','Aisne',7),('03','Allier',1),('04','Alpes-de-Haute-Provence',13),('05','Hautes-Alpes',13),('06','Alpes-Maritimes',13),('07','Ardèche',1),('08','Ardennes',6),('09','Ariège',11),('10','Aube',6),('11','Aude',11),('12','Aveyron',11),('13','Bouches-du-Rhône',13),('14','Calvados',9),('15','Cantal',1),('16','Charente',10),('17','Charente-Maritime',10),('18','Cher',4),('19','Corrèze',10),('21','Côte-d\'Or',2),('22','Côtes-d\'Armor',3),('23','Creuse',10),('24','Dordogne',10),('25','Doubs',2),('26','Drôme',1),('27','Eure',9),('28','Eure-et-Loir',4),('29','Finistère',3),('2A','Corse-du-Sud',5),('2B','Haute-Corse ',5),('30','Gard',11),('31','Haute-Garonne',11),('32','Gers',11),('33','Gironde',10),('34','Hérault',11),('35','Ille-et-Vilaine',3),('36','Indre',4),('37','Indre-et-Loire',4),('38','Isère',1),('39','Jura',2),('40','Landes',10),('41','Loir-et-Cher',4),('42','Loire',1),('43','Haute-Loire',1),('44','Loire-Atlantique',12),('45','Loiret',4),('46','Lot',11),('47','Lot-et-Garonne',10),('48','Lozère',11),('49','Maine-et-Loire',12),('50','Manche',9),('51','Marne',6),('52','Haute-Marne',6),('53','Mayenne',12),('54','Meurthe-et-Moselle',6),('55','Meuse',6),('56','Morbihan',3),('57','Moselle',6),('58','Nièvre',2),('59','Nord',7),('60','Oise',7),('61','Orne',9),('62','Pas-de-Calais',7),('63','Puy-de-Dôme',1),('64','Pyrénées-Atlantiques',10),('65','Hautes-Pyrénées',11),('66','Pyrénées-Orientales',11),('67','Bas-Rhin',6),('68','Haut-Rhin',6),('69','Rhône',1),('70','Haute-Saône',2),('71','Saône-et-Loire',2),('72','Sarthe',12),('73','Savoie',1),('74','Haute-Savoie',1),('75','Paris',8),('76','Seine-Maritime',9),('77','Seine-et-Marne',8),('78','Yvelines',8),('79','Deux-Sèvres',10),('80','Somme',7),('81','Tarn',11),('82','Tarn-et-Garonne',11),('83','Var',13),('84','Vaucluse',13),('85','Vendée',12),('86','Vienne',10),('87','Haute-Vienne',10),('88','Vosges',6),('89','Yonne',2),('90','Territoire de Belfort',2),('91','Essonne',8),('92','Hauts-de-Seine',8),('93','Seine-Saint-Denis',8),('94','Val-de-Marne',8),('95','Val-d\'Oise',8),('971','Guadeloupe',14),('972','Martinique',14),('973','Guyane',14),('974','La Réunion',14),('975','Saint-Pierre-et-Miquelon',14),('976','Mayotte',14),('977','Saint-Barthélemy	',14),('978','Saint-Martin	',14),('984','Terres australes et antarctiques françaises',14),('986','Wallis-et-Futuna',14),('987','Polynésie française',14),('988','Nouvelle-Calédonie',14),('989','Clipperton',14);
/*!40000 ALTER TABLE `departements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entreprises` (
  `idEntreprise` int(11) NOT NULL AUTO_INCREMENT,
  `raisonSociale` varchar(50) NOT NULL,
  `statutJuridiqueEnt` varchar(50) NOT NULL,
  `adresseEnt` varchar(50) NOT NULL,
  `numSiretEnt` varchar(14) NOT NULL,
  `telEnt` varchar(10) NOT NULL,
  `assureurEnt` varchar(50) NOT NULL,
  `numSocietaire` varchar(20) NOT NULL,
  `nomRepresentant` varchar(50) NOT NULL,
  `prenomRepresentant` varchar(50) NOT NULL,
  `fctRepresentant` varchar(50) NOT NULL,
  `telRepresentant` varchar(10) NOT NULL,
  `mailRepresentant` varchar(100) NOT NULL,
  `idVille` int(11) NOT NULL,
  PRIMARY KEY (`idEntreprise`),
  KEY `FK_Entreprises_Villes` (`idVille`),
  CONSTRAINT `FK_Entreprises_Villes` FOREIGN KEY (`idVille`) REFERENCES `villes` (`idVille`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entreprises`
--

LOCK TABLES `entreprises` WRITE;
/*!40000 ALTER TABLE `entreprises` DISABLE KEYS */;
INSERT INTO `entreprises` VALUES (1,'Pellentesque Habitant Morbi Institute','EURL','7071 Suspendisse Road','81897909800006','0725101214','Et Malesuada Limited','7880782597146189','Hall','Ingrid','ouvrier ','0785101214','diam.Pellentesque.habitant@pretiumaliquetmetus.net',1),(2,'Ligula Limited','SARL','715-7324 Erat. Road','47906057600002','0621548774','Duis Dignissim Company','3556707340853576','Perez','Timon','secretaire ','0621548714','nisi.magna@Phasellusdolor.org',56),(3,'Eu Elit Nulla PC','EURL','870-3416 Vel Ave','82642455800003','0741526325','Curabitur LLC','1995715917806923','Ford','Kitra','developpeur ','0741521325','scelerisque.scelerisque@DonecnibhQuisque.net',41),(4,'Lectus Pede PC','SARL','Ap #149-9089 Pellentesque St.','79366437600001','0752654821','Sapien Corp.','4317780658754571','Petersen','Ciaran','manager ','0752554821','quis.pede.Praesent@elitAliquam.net',23),(5,'Vulputate Limited','SARL','P.O. Box 990, 7949 Turpis Avenue','11611820900000','0652584798','Mauris Vestibulum Neque Corporation','6240692052903041','Jones','Barry','ouvrier ','0652874798','non@augueporttitor.co.uk',14),(6,'Facilisis Facilisis Magna Limited','SARL','224-578 Egestas Road','99374788000009','0754842315','Et Commodo LLC','5215714382014296','Indigo','Raymond','secretaire ','0752342315','est.congue.a@risusNullaeget.net',8),(7,'Enim Non Company','EURL','4230 Nunc. Av.','12131422300003','0614398480','Felis Institute','4506729184122608','Delaney','Ima','manager ','0614698480','Nunc@indolorFusce.net',254),(8,'Arcu Sed Incorporated','SARL','2163 Faucibus Street','19549927200001','0328514565','Nascetur Ridiculus Mus Inc.','7121956427995593','Miles','Wyoming','developpeur ','0328514465','Mauris.vel@eratnonummy.org',62),(9,'Ut Odio PC','EURL','Ap #597-5678 Aliquam Ave','26994707300004','0713455748','Maecenas Institute','1303925838857152','Lyons','Baxter','manager ','0713453248','consectetuer@Duisdignissim.net',21),(10,'Dui Inc.','SARL','830-8262 Laoreet, St.','93223710000007','0625241236','Donec Incorporated','4682031702470060','Mcleod','Elizabeth','ouvrier ','0621241236','interdum.Curabitur.dictum@feugiatplaceratvelit.org',85),(11,'Elit Sed LLP','SARL','Ap #747-2595 Sed St.','50298190500008','0752148496','Sem Ut Limited','4125639599419708','Wilson','Rajah','infirmier','0752348496','eget.odio.Aliquam@Craspellentesque.edu',36),(12,'Eu Associates','EURL','P.O. Box 493, 9197 Suspendisse Street','31535289800003','0240046261','Pede Company','1436809966716512','Todd','Brian','secretaire ','0240566261','pulvinar@convallis.co.uk',546),(13,'Aliquam Erat Volutpat Corporation','SARL','P.O. Box 169, 2848 Dictum Rd.','69689545700005','0147586521','At Corp.','964785268767808E','Mendez','Emerson','ouvrier ','0147574521','Sed.nulla.ante@necorciDonec.ca',225),(14,'Ut Eros Company','SARL','1892 Nisi. Avenue','89593574000004','0258636545','Sit Amet Dapibus Company','5034035006878489','Sears','Tarik','ouvrier ','0254536545','amet.dapibus@infaucibusorci.co.uk',852),(15,'Massa Limited','EURL','204-2195 Dui St.','17691561900009','0614851725','A Sollicitudin Orci Inc.','1773353246202368','Chavez','Erica','infirmier','0614561725','convallis.ante.lectus@neque.net',45),(16,'Commodo Hendrerit Donec LLC','EURL','Ap #445-5589 Dolor Av.','41086601600000','0725369514','Sagittis Felis Company','776848132E','Park','Ursa','infirmier','0725239514','molestie.Sed@volutpatNulla.co.uk',78),(17,'Posuere At Velit Inc.','SARL','P.O. Box 489, 7782 Et, Rd.','34085502200000','0624158795','Montes Institute','2153477651171995','Dennis','Garrett','ouvrier ','0624151495','non@cursusetmagna.net',25),(18,'Vitae Inc.','SARL','6923 Sed Street','33948339800006','0754563258','In PC','8548567751140816','Holloway','Fulton','infirmier','0754596258','sem.Pellentesque@vulputateposuere.net',41),(19,'Massa Institute','EURL','707-5099 Egestas. Road','85275111400004','0625458632','Libero Nec LLC','2440761','Bolton','Montana','ouvrier ','0625568632','elementum.lorem.ut@erategetipsum.org',32);
/*!40000 ALTER TABLE `entreprises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evaluations`
--

DROP TABLE IF EXISTS `evaluations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evaluations` (
  `idStage` int(11) NOT NULL,
  `dateEvaluation` date NOT NULL,
  `objectifAcquisition` int(11) NOT NULL,
  `comportementMt` int(11) NOT NULL,
  `satisfactionEnt` int(11) NOT NULL,
  `remarqueEnt` char(250) NOT NULL,
  `perspectiveEmb` int(11) NOT NULL,
  PRIMARY KEY (`idStage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluations`
--

LOCK TABLES `evaluations` WRITE;
/*!40000 ALTER TABLE `evaluations` DISABLE KEYS */;
INSERT INTO `evaluations` VALUES (1,'2021-02-15',1,1,2,'il est doué',2),(2,'2021-03-11',2,2,3,'il manque de rigueur',1),(3,'2021-02-09',2,1,2,'il est doué',4),(4,'2021-03-05',3,2,1,'il est ingerable',3),(5,'2021-04-21',1,2,1,'il est nul',1),(6,'2021-02-14',3,1,2,'il est doué',2);
/*!40000 ALTER TABLE `evaluations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formations`
--

DROP TABLE IF EXISTS `formations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formations` (
  `idFormation` int(11) NOT NULL AUTO_INCREMENT,
  `libelleFormation` varchar(200) NOT NULL,
  PRIMARY KEY (`idFormation`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formations`
--

LOCK TABLES `formations` WRITE;
/*!40000 ALTER TABLE `formations` DISABLE KEYS */;
INSERT INTO `formations` VALUES (1,'ADMINISTRATEUR D’INFRASTRUCTURES SÉCURISÉES'),(2,'INSTALLATEUR DE RÉSEAUX DE TÉLÉCOMMUNICATIONS'),(3,'CONNAÎTRE ET APPLIQUER LA MÉTHODE 5S'),(4,'AGENT DE FABRICATION D\'ENSEMBLE MÉTALLIQUE'),(5,'CONDUCTEUR D\'INSTALLATION ET DE MACHINES AUTOMATISÉES'),(6,'MÉCANICIEN DE MAINTENANCE AUTOMOBILE'),(7,'PARCOURS CRÉATEURS D\'ENTREPRISE'),(8,'DÉVELOPPEUR WEB ET WEB MOBILE'),(9,'FLUIDES FRIGORIGÈNES : ATTESTATION D’APTITUDE CATÉGORIE I'),(10,'AUTOMATES SIEMENS S7 300 - S7 400 AVEC STEP7 : ASSURER LA MAINTENANCE RÉSEAU PARTIE 1'),(11,'FORMATION PRÉPARATOIRE AUX FORMATIONS DU TERTIAIRE NIVEAU V');
/*!40000 ALTER TABLE `formations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libellescomportementsprofessionnels`
--

DROP TABLE IF EXISTS `libellescomportementsprofessionnels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libellescomportementsprofessionnels` (
  `idLibelleComportementProfessionnel` int(11) NOT NULL AUTO_INCREMENT,
  `ordreComportement` int(11) NOT NULL,
  `libelleComportement` varchar(100) NOT NULL,
  PRIMARY KEY (`idLibelleComportementProfessionnel`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libellescomportementsprofessionnels`
--

LOCK TABLES `libellescomportementsprofessionnels` WRITE;
/*!40000 ALTER TABLE `libellescomportementsprofessionnels` DISABLE KEYS */;
INSERT INTO `libellescomportementsprofessionnels` VALUES (1,1,'Ponctualité, respect des horaires et de la durée de travail '),(2,2,'Présentation, tenue compatible avec l’environnement professionnel '),(3,3,'Adaptation, intégration à l’équipe '),(4,4,'Établir des relations professionnelles avec l’environnement de travail '),(5,5,'Communiquer, rendre compte de son travail '),(6,6,'Réaliser des tâches de manière autonome '),(7,7,'Respecter les consignes '),(8,8,' Respecter le matériel et l’environnement technique '),(9,9,'Agir de façon organisée et méthodique '),(10,10,'Respecter les critères qualité de l’entreprise '),(11,11,'Respect des règles d’hygiène et de sécurité ');
/*!40000 ALTER TABLE `libellescomportementsprofessionnels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libelleshoraires`
--

DROP TABLE IF EXISTS `libelleshoraires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libelleshoraires` (
  `idLibelleHoraire` int(11) NOT NULL AUTO_INCREMENT,
  `ordreHoraire` int(11) NOT NULL,
  `libelleHoraire` varchar(40) NOT NULL,
  PRIMARY KEY (`idLibelleHoraire`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libelleshoraires`
--

LOCK TABLES `libelleshoraires` WRITE;
/*!40000 ALTER TABLE `libelleshoraires` DISABLE KEYS */;
INSERT INTO `libelleshoraires` VALUES (1,1,'horaireDebutJour1'),(2,2,'horaireDebutJour2'),(3,3,'horaireDebutJour3'),(4,4,'horaireDebutJour4'),(5,5,'horaireDebutJour5'),(6,6,'horaireDebutJour6'),(7,7,'horaireFinJour1'),(8,8,'horaireFinJour2'),(9,9,'horaireFinJour3'),(10,10,'horaireFinJour4'),(11,11,'horaireFinJour5'),(12,12,'horaireFinJour6'),(13,13,'horaireDebutDej1'),(14,14,'horaireDebutDej2'),(15,15,'horaireDebutDej3'),(16,16,'horaireDebutDej4'),(17,17,'horaireDebutDej5'),(18,18,'horaireDebutDej6'),(19,19,'horaireFinDej1'),(20,20,'horaireFinDej2'),(21,21,'horaireFinDej3'),(22,22,'horaireFinDej4'),(23,23,'horaireFinDej5'),(24,24,'horaireFinDej6');
/*!40000 ALTER TABLE `libelleshoraires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libellestravauxdangereux`
--

DROP TABLE IF EXISTS `libellestravauxdangereux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libellestravauxdangereux` (
  `idLibelleTravauxDangereux` int(11) NOT NULL AUTO_INCREMENT,
  `ordreTravaux` int(11) NOT NULL,
  `libelleTravaux` varchar(100) NOT NULL,
  PRIMARY KEY (`idLibelleTravauxDangereux`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libellestravauxdangereux`
--

LOCK TABLES `libellestravauxdangereux` WRITE;
/*!40000 ALTER TABLE `libellestravauxdangereux` DISABLE KEYS */;
INSERT INTO `libellestravauxdangereux` VALUES (1,1,'Agents chimiques dangereux '),(2,2,'Agents biologiques '),(3,3,'Vibrations mécaniques'),(4,4,'Rayonnements'),(5,5,'Milieu hyperbare '),(6,6,'Températures extrêmes'),(7,7,'Effondrement et ensevelissement'),(8,8,'Appareils sous pression'),(9,9,'Milieu confiné '),(10,10,'Travaux en contact avec du verre ou du métal en fusion'),(11,11,'Manutentions manuelles'),(12,12,'Risques électriques '),(13,13,'Utilisation de machines '),(14,14,'Travaux en hauteur '),(15,15,'Contact avec des animaux');
/*!40000 ALTER TABLE `libellestravauxdangereux` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participations`
--

DROP TABLE IF EXISTS `participations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participations` (
  `idParticipation` int(11) NOT NULL AUTO_INCREMENT,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `idSessionFormation` int(11) NOT NULL,
  `idStagiaire` int(11) NOT NULL,
  PRIMARY KEY (`idParticipation`),
  KEY `FK_Participation_SessionFormation` (`idSessionFormation`),
  KEY `FK_Participation_Stagiaires` (`idStagiaire`),
  CONSTRAINT `FK_Participation_SessionFormation` FOREIGN KEY (`idSessionFormation`) REFERENCES `sessionsformations` (`idSessionFormation`),
  CONSTRAINT `FK_Participation_Stagiaires` FOREIGN KEY (`idStagiaire`) REFERENCES `stagiaires` (`idStagiaire`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participations`
--

LOCK TABLES `participations` WRITE;
/*!40000 ALTER TABLE `participations` DISABLE KEYS */;
INSERT INTO `participations` VALUES (1,'2021-09-04','2020-12-09',5,1),(2,'2020-08-10','2020-11-21',6,20),(3,'2020-11-11','2020-08-11',4,27),(4,'2020-03-08','2020-10-04',9,27),(5,'2020-07-25','2021-04-30',3,10),(6,'2021-06-13','2020-07-08',8,23),(7,'2021-12-17','2021-06-30',2,7),(8,'2020-07-21','2021-01-01',7,19),(9,'2020-06-03','2022-01-11',2,17),(10,'2021-12-11','2020-12-24',4,24),(11,'2020-03-09','2020-09-03',1,25),(12,'2020-09-16','2020-04-09',4,16),(13,'2020-06-02','2020-08-31',4,18),(14,'2020-06-16','2021-05-04',5,14),(15,'2021-01-14','2021-05-30',8,20),(16,'2020-12-10','2020-07-25',9,3),(17,'2020-12-27','2020-07-23',3,7),(18,'2020-05-26','2020-06-28',5,7),(19,'2020-09-02','2021-09-21',3,4),(20,'2020-01-26','2020-05-26',8,20),(21,'2020-05-28','2020-11-27',3,21),(22,'2021-12-17','2020-10-20',5,6),(23,'2020-05-15','2020-06-10',7,11),(24,'2021-12-27','2020-05-18',8,15),(25,'2020-05-15','2020-10-08',7,26),(26,'2020-10-07','2021-05-22',7,6),(27,'2020-05-05','2020-06-24',6,2),(28,'2021-04-04','2020-09-22',3,4),(29,'2020-03-12','2020-06-16',5,8),(30,'2021-03-25','2021-03-31',5,25),(31,'2020-05-29','2021-04-26',4,5),(32,'2021-12-16','2020-10-03',1,7),(33,'2020-10-07','2021-11-20',8,22),(34,'2021-11-22','2020-01-13',6,1),(35,'2021-08-11','2021-08-07',2,10),(36,'2021-03-08','2021-05-12',8,2),(37,'2020-07-30','2020-12-09',7,2);
/*!40000 ALTER TABLE `participations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodesstages`
--

DROP TABLE IF EXISTS `periodesstages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodesstages` (
  `idPeriode` int(11) NOT NULL AUTO_INCREMENT,
  `idSessionFormation` int(11) NOT NULL,
  `dateDebutPAE` date NOT NULL,
  `dateFinPAE` date NOT NULL,
  `dateRapportSuivi` date NOT NULL,
  `objectifPAE` text NOT NULL,
  PRIMARY KEY (`idPeriode`),
  KEY `FK_PeriodesStages_SessionFormation` (`idSessionFormation`),
  CONSTRAINT `FK_PeriodesStages_SessionFormation` FOREIGN KEY (`idSessionFormation`) REFERENCES `sessionsformations` (`idSessionFormation`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodesstages`
--

LOCK TABLES `periodesstages` WRITE;
/*!40000 ALTER TABLE `periodesstages` DISABLE KEYS */;
INSERT INTO `periodesstages` VALUES (1,5,'2021-05-11','2021-05-15','2021-07-30','sdvujgdhjsdvsdvsdv'),(2,5,'2021-05-11','2021-05-25','2021-06-25','sdvsduyjghjvsdvsdv'),(3,1,'2021-07-11','2021-08-01','2021-08-30','sdvstyuedrgfhdvsdvsdv'),(4,21,'2021-02-11','2021-02-15','2021-02-25','sdvsdfghezgwdfdvsdvsdv'),(5,21,'2021-05-11','2021-12-01','2021-12-30','sdvxfgyuytrjsdvsdvaaaaasdv'),(6,21,'2021-05-11','2022-01-02','2022-01-28','sdvwxfuyfgusdvsdvsdezrzerv'),(7,8,'2022-05-11','2022-12-01','2022-12-30','sdvxfgyuytrjsdvsqazzartedvsdv'),(8,21,'2022-05-11','2022-01-02','2022-01-28','sdvwxfuqsdqsdqsdyfgusdvsdvsdv');
/*!40000 ALTER TABLE `periodesstages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regions` (
  `idRegion` int(11) NOT NULL AUTO_INCREMENT,
  `libelleRegion` varchar(50) NOT NULL,
  `nb_departs` int(11) NOT NULL,
  PRIMARY KEY (`idRegion`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'Auvergne-Rhône-Alpes',12),(2,'Bourgogne-Franche-Comté',8),(3,'Bretagne',4),(4,'Centre-Val de Loire',6),(5,'Corse',2),(6,'Grand-Est',10),(7,'Hauts-de-France',5),(8,'Ile-de-France',8),(9,'Normandie',5),(10,'Nouvelle-Aquitaine',12),(11,'Occitanie',13),(12,'Pays de la Loire',5),(13,'Provence-Alpes-Côte d\'Azur',6),(14,'DOM-TOM',12);
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `libelleRole` varchar(25) NOT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administration'),(2,'Formateur'),(3,'Tuteur'),(4,'Stagiaire');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessionsformations`
--

DROP TABLE IF EXISTS `sessionsformations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessionsformations` (
  `idSessionFormation` int(11) NOT NULL AUTO_INCREMENT,
  `numOffreFormation` bigint(15) NOT NULL,
  `idFormation` int(11) NOT NULL,
  PRIMARY KEY (`idSessionFormation`),
  KEY `FK_SessionFormation_Formations` (`idFormation`),
  CONSTRAINT `FK_SessionFormation_Formations` FOREIGN KEY (`idFormation`) REFERENCES `formations` (`idFormation`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessionsformations`
--

LOCK TABLES `sessionsformations` WRITE;
/*!40000 ALTER TABLE `sessionsformations` DISABLE KEYS */;
INSERT INTO `sessionsformations` VALUES (1,48196996550,5),(2,2566858494579,1),(3,4629508445858,7),(4,6425382242961,2),(5,3207130638156,6),(6,8402414753117,9),(7,1306014302529,8),(8,7799551572292,3),(9,965264250815,1),(10,9166444023295,1),(11,6477836051307,1),(12,2247163510075,8),(13,1134883228241,8),(14,6829556746887,5),(15,5655969257143,1),(16,6353900415990,5),(17,2814164537344,6),(18,5826459903578,4),(19,8862082190314,9),(20,7082429191074,6),(21,9569958541786,3),(22,2417177685592,9),(23,1543393588906,5),(24,7666511056629,1),(25,4296814252157,4),(26,6611983230353,9),(27,1820264622013,5),(28,2784852545671,2),(29,4958967041890,8),(30,692947198619,3);
/*!40000 ALTER TABLE `sessionsformations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stages`
--

DROP TABLE IF EXISTS `stages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stages` (
  `idStage` int(11) NOT NULL AUTO_INCREMENT,
  `etape` int(11) NOT NULL COMMENT '1 stagiaire , 2 entreprise ,3 conditions, 4 sujet de stage, 5 evaluations',
  `dateVisite` date DEFAULT NULL,
  `nomVisiteur` varchar(200) DEFAULT NULL,
  `lieuRealisation` varchar(200) DEFAULT NULL,
  `deplacement` tinyint(1) DEFAULT NULL,
  `frequenceDeplacement` varchar(200) DEFAULT NULL,
  `modeDeplacement` varchar(200) DEFAULT NULL,
  `attFormReglement` tinyint(1) DEFAULT NULL,
  `libelleAttFormReg` varchar(200) DEFAULT NULL,
  `visiteMedical` tinyint(1) DEFAULT NULL,
  `travauxDang` tinyint(1) DEFAULT NULL,
  `dateDeclarationDerog` date DEFAULT NULL,
  `sujetStage` text,
  `travauxRealises` text,
  `objectifPAE` text,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `idTuteur` int(11) NOT NULL,
  `idStagiaire` int(11) NOT NULL,
  `idPeriode` int(11) NOT NULL,
  PRIMARY KEY (`idStage`),
  KEY `FK_Stages_Stagiaires` (`idStagiaire`),
  KEY `FK_Stages_Tuteurs` (`idTuteur`),
  CONSTRAINT `FK_Stages_Stagiaires` FOREIGN KEY (`idStagiaire`) REFERENCES `stagiaires` (`idStagiaire`),
  CONSTRAINT `FK_Stages_Tuteurs` FOREIGN KEY (`idTuteur`) REFERENCES `tuteurs` (`idTuteur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stages`
--

LOCK TABLES `stages` WRITE;
/*!40000 ALTER TABLE `stages` DISABLE KEYS */;
INSERT INTO `stages` VALUES (1,1,'2020-03-02','Hersch Monnery','Entreprise',1,'Quotidien','Vehicule de l entreprise',0,NULL,1,1,'2020-12-01','Streamlined maximized task-force','Secured demand-driven open system','Versatile bottom-line projection','2020-11-12','2020-08-13',5,6,1),(2,2,'2020-06-02','Lenard Mengue','Entreprise',0,'Quotidien','Vehicule de l entreprise',1,'attestation formation reglementaire',0,1,'2020-07-13','Assimilated upward-trending contingency','Exclusive fresh-thinking throughput','Multi-channelled explicit website','2020-07-02','2020-11-25',5,2,2),(3,3,'2020-02-14','Esdras Bault','Entreprise',0,'Quotidien','Transport en commun',1,'attestation formation reglementaire',0,0,'2020-06-26','Implemented intangible paradigm','Customizable disintermediate website','Monitored eco-centric attitude','2020-02-19','2020-03-30',1,1,2),(4,4,'2020-06-07','Rube Sholem','Entreprise',1,'Occasionnels','vehicule personnel du stagiaire',0,NULL,0,1,'2020-08-30','Public-key responsive productivity','Centralized attitude-oriented database','Synergized systemic help-desk','2020-07-25','2020-07-19',2,4,3),(5,5,'2020-09-01','Becky Arpur','Entreprise',1,'Un fois par mois','Vehicule de l entreprise',0,NULL,1,1,'2020-07-20','De-engineered neutral solution','Reactive upward-trending algorithm','Reduced uniform knowledge base','2020-10-23','2020-03-20',6,3,3);
/*!40000 ALTER TABLE `stages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `stagiaireformation`
--

DROP TABLE IF EXISTS `stagiaireformation`;
/*!50001 DROP VIEW IF EXISTS `stagiaireformation`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `stagiaireformation` AS SELECT 
 1 AS `idFormation`,
 1 AS `libelleFormation`,
 1 AS `idSessionFormation`,
 1 AS `numOffreFormation`,
 1 AS `idPeriode`,
 1 AS `dateDebutPAE`,
 1 AS `dateFinPAE`,
 1 AS `dateRapportSuivi`,
 1 AS `objectifPAE`,
 1 AS `idParticipation`,
 1 AS `dateDebut`,
 1 AS `dateFin`,
 1 AS `idStagiaire`,
 1 AS `genreStagiaire`,
 1 AS `nomStagiaire`,
 1 AS `prenomStagiaire`,
 1 AS `numSecuStagiaire`,
 1 AS `numBenefStagiaire`,
 1 AS `dateNaissanceStagiaire`,
 1 AS `emailStagiaire`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `stagiaires`
--

DROP TABLE IF EXISTS `stagiaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stagiaires` (
  `idStagiaire` int(11) NOT NULL AUTO_INCREMENT,
  `genreStagiaire` varchar(1) NOT NULL,
  `nomStagiaire` varchar(50) NOT NULL,
  `prenomStagiaire` varchar(50) NOT NULL,
  `numSecuStagiaire` varchar(15) NOT NULL,
  `numBenefStagiaire` varchar(15) NOT NULL,
  `dateNaissanceStagiaire` date NOT NULL,
  `emailStagiaire` varchar(50) NOT NULL,
  PRIMARY KEY (`idStagiaire`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stagiaires`
--

LOCK TABLES `stagiaires` WRITE;
/*!40000 ALTER TABLE `stagiaires` DISABLE KEYS */;
INSERT INTO `stagiaires` VALUES (1,'M','Carey','Leilani','979875594631213','374216380873751','2021-05-05','test@gmail.com'),(2,'M','George','Cyrus','857493163485533','649458983885388','2021-05-05','George.Cyrus@gmail.com'),(3,'M','Haney','Gage','038726091478274','272642876819619','2021-05-05','Haney.Gage@gmail.com'),(4,'M','Wyatt','Cain','891058839878816','208418261710884','2021-05-05','Wyatt.Cain@gmail.com'),(5,'M','Fowler','Ezra','314606761239376','976588398060752','2021-05-05','Fowler.Ezra@gmail.com'),(6,'M','House','Meredith','789830079489082','157644599786943','2021-05-05','House.Meredith@gmail.com'),(7,'M','Patrick','Burton','986813762093261','720600938056958','2021-05-05','Patrick.Burton@gmail.com'),(8,'M','Hampton','Kylan','210170160906109','330731335504237','2021-05-05','Hampton.Kylan@gmail.com'),(9,'M','Jefferson','Tiger','780320275928309','066162891679420','2021-05-05','Jefferson.Tiger@gmail.com'),(10,'F','Clayton','Lacy','052321302396563','469915021268419','2021-05-05','Clayton.Lacy@gmail.com'),(11,'F','Acevedo','Halla','893820518555182','932296509553262','2021-05-05','Acevedo.Halla@gmail.com'),(12,'F','Spence','Cherokee','548104762075293','883444967643750','2021-05-05','Spence.Cherokee@gmail.com'),(13,'F','Waters','Xantha','252427049584885','933853937166229','2021-05-05','Waters.Xantha@gmail.com'),(14,'F','Barry','Jessica','561555919664555','922337272739623','2021-05-05','Barry.Jessica@gmail.com'),(15,'F','Middleton','Veda','905426716797036','177423855049949','2021-05-05','Middleton.Veda@gmail.com'),(16,'F','Downs','Karen','152186861690277','634119464238204','2021-05-05','Downs.Karen@gmail.com'),(17,'F','Kim','Vincent','960794255563536','692300146623517','2021-05-05','Kim.Vincent@gmail.com'),(18,'F','Meyer','Boris','571049609829705','937240024817538','2021-05-05','Meyer.Boris@gmail.com'),(19,'F','Hughes','Emery','905311253622789','723961201807299','2021-05-05','Hughes.Emery@gmail.com'),(20,'F','Montoya','Igor','663315262419266','509665548797998','2021-05-05','Montoya.Igor@gmail.com'),(21,'F','Carson','Nell','476858800920747','749393241034339','2021-05-05','Carson.Nell@gmail.com'),(22,'F','Austin','Gemma','451002372723906','685788753613137','2021-05-05','Austin.Gemma@gmail.com'),(23,'F','Carpenter','Quincy','821398793173196','612177681543206','2021-05-05','Carpenter.Quincy@gmail.com'),(24,'F','Adkins','Octavia','223951031598459','235861046097779','2021-05-05','Adkins.Octavia@gmail.com'),(25,'F','Kelley','Phoebe','096023180216368','525742555498415','2021-05-05','Kelley.Phoebe@gmail.com'),(26,'F','Christian','Nicholas','417501349514365','757103316328797','2021-05-05','Christian.Nicholas@gmail.com'),(27,'F','Mcdonald','Nelle','129732031875740','701826288356067','2021-05-05','Mcdonald.Nelle@gmail.com'),(28,'F','Marquez','Ira','714416769911156','357971867324688','2021-05-05','Marquez.Ira@gmail.com');
/*!40000 ALTER TABLE `stagiaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tuteurs`
--

DROP TABLE IF EXISTS `tuteurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tuteurs` (
  `idTuteur` int(11) NOT NULL AUTO_INCREMENT,
  `nomTuteur` varchar(50) NOT NULL,
  `prenomTuteur` varchar(50) NOT NULL,
  `fonctionTuteur` varchar(100) DEFAULT NULL,
  `telTuteur` varchar(10) DEFAULT NULL,
  `emailTuteur` varchar(100) NOT NULL,
  `idEntreprise` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTuteur`),
  KEY `FK_Tuteurs_Entreprises` (`idEntreprise`),
  CONSTRAINT `FK_Tuteurs_Entreprises` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprises` (`idEntreprise`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tuteurs`
--

LOCK TABLES `tuteurs` WRITE;
/*!40000 ALTER TABLE `tuteurs` DISABLE KEYS */;
INSERT INTO `tuteurs` VALUES (1,'Tuteur','De fou','developpeur','0614151602','toto@gmail.com',1),(2,'Nico','sarko','PDG','0614475402','nico@gmail.com',2),(3,'Tuteur','De fou','developpeur','0614151602','toto@gmail.com',1),(4,'Pierre','Lapin','developpeur','0445145402','pierre@gmail.com',1),(5,'Tuteur','De fou',NULL,NULL,'tuteur@gmail.com',6),(6,'Tuteur','tuteur',NULL,NULL,'sdf123@gmail.com',NULL);
/*!40000 ALTER TABLE `tuteurs` ENABLE KEYS */;
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
  `prenomUtilisateur` varchar(50) NOT NULL,
  `emailUtilisateur` varchar(50) NOT NULL,
  `mdpUtilisateur` varchar(50) NOT NULL,
  `datePeremption` varchar(15) DEFAULT NULL,
  `idRole` int(11) NOT NULL,
  PRIMARY KEY (`idUtilisateur`),
  UNIQUE KEY `email` (`emailUtilisateur`),
  KEY `FK_Utilisateurs_Roles` (`idRole`),
  CONSTRAINT `FK_Utilisateurs_Roles` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs`
--

LOCK TABLES `utilisateurs` WRITE;
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` VALUES (1,'POIX','Martine','martine.poix@gmail.com','toto',NULL,2),(2,'ZOZO','Thomas','thomas.zozo@gmail.com','toto',NULL,2),(3,'SIMS','Alfred','alfred.sims@gmail.com','toto','2021-08-12',2),(4,'toto','TOTO','toto@gmail.com','user','2022-01-01',1),(5,'RJEB','Zied','Carey.Leilani@gmail.com','user',NULL,4),(6,'BOSS','Tuteur','tuteur@gmail.com','user',NULL,3),(7,'test','Bruno','test@gmail.com','user',NULL,4),(8,'Tuteur','Tueur','sdf123@gmail.com','user',NULL,3);
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valeursacquis`
--

DROP TABLE IF EXISTS `valeursacquis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valeursacquis` (
  `idValeurAcquis` int(11) NOT NULL AUTO_INCREMENT,
  `idStage` int(11) NOT NULL,
  `ordreAcquis` int(11) NOT NULL,
  `libelleAcquis` varchar(200) NOT NULL,
  `valeurAcquis` int(11) DEFAULT NULL,
  PRIMARY KEY (`idValeurAcquis`),
  KEY `FK_ValeurAcquis_Stages` (`idStage`),
  CONSTRAINT `FK_ValeurAcquis_Stages` FOREIGN KEY (`idStage`) REFERENCES `stages` (`idStage`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valeursacquis`
--

LOCK TABLES `valeursacquis` WRITE;
/*!40000 ALTER TABLE `valeursacquis` DISABLE KEYS */;
INSERT INTO `valeursacquis` VALUES (1,2,1,'php',4),(2,2,2,'sql',2),(3,2,3,'js',3),(4,2,4,'agile',5),(5,3,1,'php',5),(6,3,2,'sql',4),(7,3,3,'js',2),(8,3,4,'agile',2),(9,1,1,'php',4),(10,1,2,'sql',2),(11,1,3,'js',5),(12,1,4,'agile',1),(13,4,1,'php',5),(14,4,2,'sql',4),(15,4,3,'js',4),(16,4,4,'agile',3);
/*!40000 ALTER TABLE `valeursacquis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valeurscomportementsprofessionnels`
--

DROP TABLE IF EXISTS `valeurscomportementsprofessionnels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valeurscomportementsprofessionnels` (
  `idComportementProfessionnel` int(11) NOT NULL AUTO_INCREMENT,
  `idStage` int(11) NOT NULL,
  `idLibelleComportementProfessionnel` int(11) NOT NULL,
  `valeurComportement` int(11) DEFAULT NULL,
  PRIMARY KEY (`idComportementProfessionnel`),
  KEY `FK_ValeurComportementsProfessionnels_Stages` (`idStage`),
  KEY `FK_ValeurCompProf_LibelleCompPro` (`idLibelleComportementProfessionnel`),
  CONSTRAINT `FK_ValeurCompProf_LibelleCompPro` FOREIGN KEY (`idLibelleComportementProfessionnel`) REFERENCES `libellescomportementsprofessionnels` (`idLibelleComportementProfessionnel`),
  CONSTRAINT `FK_ValeurComportementsProfessionnels_Stages` FOREIGN KEY (`idStage`) REFERENCES `stages` (`idStage`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valeurscomportementsprofessionnels`
--

LOCK TABLES `valeurscomportementsprofessionnels` WRITE;
/*!40000 ALTER TABLE `valeurscomportementsprofessionnels` DISABLE KEYS */;
INSERT INTO `valeurscomportementsprofessionnels` VALUES (1,1,1,1),(2,1,2,1),(3,1,3,2),(4,1,4,3),(5,1,5,2),(6,1,6,5),(7,1,7,4),(8,1,8,3),(9,1,9,4),(10,1,10,1),(11,1,11,1),(12,1,11,2),(13,2,1,1),(14,2,2,5),(15,2,3,4),(16,2,4,2),(17,2,5,3),(18,2,6,2),(19,2,7,1),(20,2,8,4),(21,2,9,5),(22,2,10,2),(23,2,11,3),(24,2,10,3),(25,3,1,2),(26,3,2,5),(27,3,3,4),(28,3,4,5),(29,3,5,4),(30,3,6,2),(31,3,7,1),(32,3,8,3),(33,3,9,1),(34,3,10,3),(35,3,11,1),(36,3,9,5),(37,4,1,4),(38,4,2,5),(39,4,3,2),(40,4,4,1),(41,4,5,2),(42,4,6,1),(43,4,7,3),(44,4,8,1),(45,4,9,5),(46,4,10,4),(47,4,11,3),(48,4,8,1);
/*!40000 ALTER TABLE `valeurscomportementsprofessionnels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valeurshoraires`
--

DROP TABLE IF EXISTS `valeurshoraires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valeurshoraires` (
  `idValeurHoraires` int(11) NOT NULL AUTO_INCREMENT,
  `idStage` int(11) NOT NULL,
  `idLibelleHoraire` int(11) NOT NULL,
  `valeurHoraire` time DEFAULT NULL,
  PRIMARY KEY (`idValeurHoraires`),
  KEY `FK_ValeurHoraires_Stages` (`idStage`),
  KEY `FK_ValeurHoraires_LibelleHoraires` (`idLibelleHoraire`),
  CONSTRAINT `FK_ValeurHoraires_LibelleHoraires` FOREIGN KEY (`idLibelleHoraire`) REFERENCES `libelleshoraires` (`idLibelleHoraire`),
  CONSTRAINT `FK_ValeurHoraires_Stages` FOREIGN KEY (`idStage`) REFERENCES `stages` (`idStage`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valeurshoraires`
--

LOCK TABLES `valeurshoraires` WRITE;
/*!40000 ALTER TABLE `valeurshoraires` DISABLE KEYS */;
INSERT INTO `valeurshoraires` VALUES (1,1,1,'06:59:22'),(2,1,2,'06:59:22'),(3,1,3,'06:59:22'),(4,1,4,'06:59:22'),(5,2,1,'20:15:13'),(6,2,2,'20:15:13'),(7,2,3,'20:15:13'),(8,2,4,'20:15:13'),(9,2,5,'20:15:13');
/*!40000 ALTER TABLE `valeurshoraires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valeurstravauxdangereux`
--

DROP TABLE IF EXISTS `valeurstravauxdangereux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valeurstravauxdangereux` (
  `idTravauxDangereux` int(11) NOT NULL AUTO_INCREMENT,
  `idStage` int(11) NOT NULL,
  `idLibelleTravauxDangereux` int(11) NOT NULL,
  `valeurTravaux` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTravauxDangereux`),
  KEY `FK_ValeurTravauxDangereux_Stages` (`idStage`),
  KEY `FK_ValeurTravauxDangereux_LibelleTravauxDangereux` (`idLibelleTravauxDangereux`),
  CONSTRAINT `FK_ValeurTravauxDangereux_LibelleTravauxDangereux` FOREIGN KEY (`idLibelleTravauxDangereux`) REFERENCES `libellestravauxdangereux` (`idLibelleTravauxDangereux`),
  CONSTRAINT `FK_ValeurTravauxDangereux_Stages` FOREIGN KEY (`idStage`) REFERENCES `stages` (`idStage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valeurstravauxdangereux`
--

LOCK TABLES `valeurstravauxdangereux` WRITE;
/*!40000 ALTER TABLE `valeurstravauxdangereux` DISABLE KEYS */;
/*!40000 ALTER TABLE `valeurstravauxdangereux` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `villes`
--

DROP TABLE IF EXISTS `villes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `villes` (
  `idVille` int(11) NOT NULL AUTO_INCREMENT,
  `nomVille` varchar(50) NOT NULL,
  `codePostal` int(11) NOT NULL,
  `idDepartement` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`idVille`)
) ENGINE=InnoDB AUTO_INCREMENT=1488 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `villes`
--

LOCK TABLES `villes` WRITE;
/*!40000 ALTER TABLE `villes` DISABLE KEYS */;
INSERT INTO `villes` VALUES (1,'VILLE DU PONT',25650,'25'),(2,'VILLERS BUZON',25170,'25'),(3,'VILLERS GRELOT',25640,'25'),(4,'VORGES LES PINS',25320,'25'),(5,'VYT LES BELVOIR',25430,'25'),(6,'ALEYRAC',26770,'26'),(7,'ANDANCETTE',26140,'26'),(8,'ANNEYRON',26140,'26'),(9,'AUBRES',26110,'26'),(10,'BARSAC',26150,'26'),(11,'LA BATIE ROLLAND',26160,'26'),(12,'LA BAUME DE TRANSIT',26790,'26'),(13,'BEAUFORT SUR GERVANNE',26400,'26'),(14,'BOURDEAUX',26460,'26'),(15,'BREN',26260,'26'),(16,'BRETTE',26340,'26'),(17,'CHABEUIL',26120,'26'),(18,'CHAMARET',26230,'26'),(19,'CHAROLS',26450,'26'),(20,'CHARPEY',26300,'26'),(21,'CHASTEL ARNAUD',26340,'26'),(22,'CHATEAUNEUF SUR ISERE',26300,'26'),(23,'CHATEAUNEUF DU RHONE',26780,'26'),(24,'CHAUDEBONNE',26110,'26'),(25,'CHAUVAC LAUX MONTAUX',26510,'26'),(26,'CLEON D ANDRAN',26450,'26'),(27,'COBONNE',26400,'26'),(28,'COLONZELLE',26230,'26'),(29,'LA COUCOURDE',26740,'26'),(30,'ESTABLET',26470,'26'),(31,'EURRE',26400,'26'),(32,'EYROLES',26110,'26'),(33,'VAL MARAVEL',26310,'26'),(34,'GRANE',26400,'26'),(35,'GRIGNAN',26230,'26'),(36,'GUMIANE',26470,'26'),(37,'IZON LA BRUISSE',26560,'26'),(38,'JONCHERES',26310,'26'),(39,'LABOREL',26560,'26'),(40,'LUC EN DIOIS',26310,'26'),(41,'MANAS',26160,'26'),(42,'MONTAULIEU',26110,'26'),(43,'MONTELIER',26120,'26'),(44,'MONTFERRAND LA FARE',26510,'26'),(45,'MONTFROC',26560,'26'),(46,'MONTJOUX',26220,'26'),(47,'MONTVENDRE',26120,'26'),(48,'PELONNE',26510,'26'),(49,'PIEGROS LA CLASTRE',26400,'26'),(50,'PIERRELATTE',26700,'26'),(51,'PLAISIANS',26170,'26'),(52,'LE POET LAVAL',26160,'26'),(53,'PONT DE BARRET',26160,'26'),(54,'LES PRES',26310,'26'),(55,'PUYGIRON',26160,'26'),(56,'RATIERES',26330,'26'),(57,'RIMON ET SAVEL',26340,'26'),(58,'RIOMS',26170,'26'),(59,'ROCHEBRUNE',26110,'26'),(60,'ROCHEFORT EN VALDAINE',26160,'26'),(61,'ROCHE ST SECRET BECONNE',26770,'26'),(62,'LA ROCHE SUR GRANE',26400,'26'),(63,'ROUSSET LES VIGNES',26770,'26'),(64,'SAHUNE',26510,'26'),(65,'ST AGNAN EN VERCORS',26420,'26'),(66,'ST AGNAN EN VERCORS',26420,'26'),(67,'ST AUBAN SUR L OUVEZE',26170,'26'),(68,'ST AVIT',26330,'26'),(69,'ST BARTHELEMY DE VALS',26240,'26'),(70,'ST BENOIT EN DIOIS',26340,'26'),(71,'STE EUPHEMIE SUR OUVEZE',26170,'26'),(72,'ST FERREOL TRENTE PAS',26110,'26'),(73,'STE JALLE',26110,'26'),(74,'ST JEAN EN ROYANS',26190,'26'),(75,'ST MARCEL LES VALENCE',26320,'26'),(76,'ST NAZAIRE LE DESERT',26340,'26'),(77,'ST PANTALEON LES VIGNES',26770,'26'),(78,'ST SAUVEUR GOUVERNET',26110,'26'),(79,'SAOU',26400,'26'),(80,'SAVASSE',26740,'26'),(81,'SAVASSE',26740,'26'),(82,'SOUSPIERRE',26160,'26'),(83,'SUZE LA ROUSSE',26790,'26'),(84,'LES TOURRETTES',26740,'26'),(85,'TRUINAS',26460,'26'),(86,'TULETTE',26790,'26'),(87,'VACHERES EN QUINT',26150,'26'),(88,'VENTEROL',26110,'26'),(89,'VERS SUR MEOUGE',26560,'26'),(90,'ACLOU',27800,'27'),(91,'ACON',27570,'27'),(92,'AMFREVILLE ST AMAND',27370,'27'),(93,'AMFREVILLE ST AMAND',27370,'27'),(94,'ANDE',27430,'27'),(95,'ANGERVILLE LA CAMPAGNE',27930,'27'),(96,'AUTHEUIL AUTHOUILLET',27490,'27'),(97,'CHAMBOIS',27240,'27'),(98,'BACQUEVILLE',27440,'27'),(99,'BAILLEUL LA VALLEE',27260,'27'),(100,'BALINES',27130,'27'),(101,'BARC',27170,'27'),(102,'LES BAUX STE CROIX',27180,'27'),(103,'BEAUFICEL EN LYONS',27480,'27'),(104,'MESNIL EN OUCHE',27270,'27'),(105,'MESNIL EN OUCHE',27410,'27'),(106,'BEAUMONT LE ROGER',27170,'27'),(107,'BERNIENVILLE',27180,'27'),(108,'LES MONTS DU ROUMOIS',27370,'27'),(109,'BOIS LE ROI',27220,'27'),(110,'BOISNEY',27800,'27'),(111,'BOUCHEVILLIERS',27150,'27'),(112,'GRAND BOURGTHEROULDE',27520,'27'),(113,'GRAND BOURGTHEROULDE',27520,'27'),(114,'BRETEUIL',27160,'27'),(115,'CANAPPEVILLE',27400,'27'),(116,'CAORCHES ST NICOLAS',27300,'27'),(117,'CAPELLE LES GRANDS',27270,'27'),(118,'CHAMBRAY',27120,'27'),(119,'LA CHAPELLE GAUTHIER',27270,'27'),(120,'MARBOIS',27240,'27'),(121,'CLAVILLE',27180,'27'),(122,'COMBON',27170,'27'),(123,'CONCHES EN OUCHE',27190,'27'),(124,'CONTEVILLE',27210,'27'),(125,'COURCELLES SUR SEINE',27940,'27'),(126,'COURTEILLES',27130,'27'),(127,'CRESTOT',27110,'27'),(128,'CRIQUEBEUF LA CAMPAGNE',27110,'27'),(129,'CROSVILLE LA VIEILLE',27110,'27'),(130,'LES DAMPS',27340,'27'),(131,'MESNILS SUR ITON',27240,'27'),(132,'MESNILS SUR ITON',27240,'27'),(133,'MESNILS SUR ITON',27240,'27'),(134,'DARDEZ',27930,'27'),(135,'DAUBEUF LA CAMPAGNE',27110,'27'),(136,'DAUBEUF PRES VATTEVILLE',27430,'27'),(137,'ECAQUELON',27290,'27'),(138,'ECARDENVILLE LA CAMPAGNE',27170,'27'),(139,'VEXIN SUR EPTE',27510,'27'),(140,'VEXIN SUR EPTE',27510,'27'),(141,'VEXIN SUR EPTE',27630,'27'),(142,'VEXIN SUR EPTE',27630,'27'),(143,'VEXIN SUR EPTE',27630,'27'),(144,'VEXIN SUR EPTE',27630,'27'),(145,'EMALLEVILLE',27930,'27'),(146,'EMANVILLE',27190,'27'),(147,'ETURQUERAYE',27350,'27'),(148,'EZY SUR EURE',27530,'27'),(149,'FAVEROLLES LA CAMPAGNE',27190,'27'),(150,'LE FAVRIL',27230,'27'),(151,'LE FIDELAIRE',27190,'27'),(152,'FOLLEVILLE',27230,'27'),(153,'LA FORET DU PARC',27220,'27'),(154,'FOUQUEVILLE',27370,'27'),(155,'LE PERREY',27680,'27'),(156,'FRANQUEVILLE',27800,'27'),(157,'GASNY',27620,'27'),(158,'LA GOULAFRIERE',27390,'27'),(159,'GRAVIGNY',27930,'27'),(160,'HARDENCOURT COCHEREL',27120,'27'),(161,'HARQUENCY',27700,'27'),(162,'LA HAYE DE ROUTOT',27350,'27'),(163,'LA HAYE ST SYLVESTRE',27330,'27'),(164,'HEUBECOURT HARICOURT',27630,'27'),(165,'HEUDREVILLE EN LIEUVIN',27230,'27'),(166,'HONDOUVILLE',27400,'27'),(167,'HOUVILLE EN VEXIN',27440,'27'),(168,'IVILLE',27110,'27'),(169,'LA LANDE ST LEGER',27210,'27'),(170,'LAUNAY',27470,'27'),(171,'LERY',27690,'27'),(172,'LORLEAU',27480,'27'),(173,'LOUYE',27650,'27'),(174,'MEREY',27640,'27'),(175,'MESNIL ROUSSET',27390,'27'),(176,'MESNIL SOUS VIENNE',27150,'27'),(177,'MORAINVILLE JOUVEAUX',27260,'27'),(178,'MOUETTES',27220,'27'),(179,'MOUSSEAUX NEUVILLE',27220,'27'),(180,'MUZY',27650,'27'),(181,'NEUILLY',27730,'27'),(182,'LA NOE POULAIN',27560,'27'),(183,'LE VAL DORE',27190,'27'),(184,'PERRIERS SUR ANDELLE',27910,'27'),(185,'LE PLANQUAY',27230,'27'),(186,'PRESSAGNY L ORGUEILLEUX',27510,'27'),(187,'RENNEVILLE',27910,'27'),(188,'ROMILLY LA PUTHENAYE',27170,'27'),(189,'ROUVRAY',27120,'27'),(190,'ST AGNAN DE CERNIERES',27390,'27'),(191,'ST AUBIN SUR GAILLON',27600,'27'),(192,'ST BENOIT DES OMBRES',27450,'27'),(193,'ST CHRISTOPHE SUR AVRE',27820,'27'),(194,'LE VAUDREUIL',27100,'27'),(195,'ST DENIS DES MONTS',27520,'27'),(196,'ST GERMAIN DES ANGLES',27930,'27'),(197,'ST GERMAIN SUR AVRE',27320,'27'),(198,'ST JULIEN DE LA LIEGUE',27600,'27'),(199,'LA CHAPELLE LONGUEVILLE',27950,'27'),(200,'ST LEGER DU GENNETEY',27520,'27'),(201,'ST MARCEL',27950,'27'),(202,'ST MARDS DE FRESNE',27230,'27'),(203,'LE LESME',27160,'27'),(204,'ST MARTIN DU TILLEUL',27300,'27'),(205,'ST MARTIN LA CAMPAGNE',27930,'27'),(206,'ST MARTIN ST FIRMIN',27450,'27'),(207,'STE OPPORTUNE DU BOSC',27110,'27'),(208,'ST PAUL DE FOURQUES',27800,'27'),(209,'ST PHILBERT SUR BOISSEY',27520,'27'),(210,'ST PHILBERT SUR RISLE',27290,'27'),(211,'ST PIERRE LA GARENNE',27600,'27'),(212,'ST VIGOR',27930,'27'),(213,'SANCOURT',27150,'27'),(214,'SASSEY',27930,'27'),(215,'SEBECOURT',27190,'27'),(216,'SERQUIGNY',27470,'27'),(217,'SUZAY',27420,'27'),(218,'LE THEIL NOLENT',27230,'27'),(219,'THIBERVILLE',27230,'27'),(220,'TILLY',27510,'27'),(221,'TOURNEDOS BOIS HUBERT',27180,'27'),(222,'TOURVILLE SUR PONT AUDEMER',27500,'27'),(223,'LA TRINITE DE REVILLE',27270,'27'),(224,'TRIQUEVILLE',27500,'27'),(225,'LE VAL DAVID',27120,'27'),(226,'VANNECROCQ',27210,'27'),(227,'VENON',27110,'27'),(228,'VERNEUSSES',27390,'27'),(229,'VILLEGATS',27120,'27'),(230,'VILLERS EN VEXIN',27420,'27'),(231,'SYLVAINS LES MOULINS',27240,'27'),(232,'VIRONVAY',27400,'27'),(233,'VOISCREVILLE',27520,'27'),(234,'AMILLY',28300,'28'),(235,'ARDELLES',28170,'28'),(236,'COMMUNE NOUVELLE D ARROU',28220,'28'),(237,'COMMUNE NOUVELLE D ARROU',28290,'28'),(238,'AUNEAU BLEURY ST SYMPHORIEN',28700,'28'),(239,'BAIGNEAUX',28140,'28'),(240,'BAILLEAU ARMENONVILLE',28320,'28'),(241,'BAZOCHES LES HAUTES',28140,'28'),(242,'BERCHERES ST GERMAIN',28300,'28'),(243,'BERCHERES LES PIERRES',28630,'28'),(244,'BONCOURT',28260,'28'),(245,'BOUGLAINVAL',28130,'28'),(246,'BREZOLLES',28270,'28'),(247,'CHALLET',28300,'28'),(248,'CHARTRES',28000,'28'),(249,'CHATEAUDUN',28200,'28'),(250,'CHATEAUNEUF EN THYMERAIS',28170,'28'),(251,'LES CHATELETS',28270,'28'),(252,'CHATENAY',28700,'28'),(253,'CHAUDON',28210,'28'),(254,'COURVILLE SUR EURE',28190,'28'),(255,'DAMBRON',28140,'28'),(256,'DAMPIERRE SOUS BROU',28160,'28'),(257,'DANCY',28800,'28'),(258,'DANGEAU',28160,'28'),(259,'ECROSNES',28320,'28'),(260,'ESCORPAIN',28270,'28'),(261,'FAVEROLLES',28210,'28'),(262,'LA FERTE VIDAME',28340,'28'),(263,'FONTENAY SUR CONIE',28140,'28'),(264,'LA FRAMBOISIERE',28250,'28'),(265,'FRANCOURVILLE',28700,'28'),(266,'LE GAULT ST DENIS',28800,'28'),(267,'GELLAINVILLE',28630,'28'),(268,'LE GUE DE LONGROI',28700,'28'),(269,'HANCHES',28130,'28'),(270,'ILLIERS COMBRAY',28120,'28'),(271,'INTREVILLE',28310,'28'),(272,'JANVILLE EN BEAUCE',28310,'28'),(273,'LAMBLORE',28340,'28'),(274,'LEVES',28300,'28'),(275,'LOUVILLE LA CHENARD',28150,'28'),(276,'LUISANT',28600,'28'),(277,'MAILLEBOIS',28170,'28'),(278,'MAINTENON',28130,'28'),(279,'MARBOUE',28200,'28'),(280,'ARCISSES',28400,'28'),(281,'ARCISSES',28400,'28'),(282,'MEAUCE',28240,'28'),(283,'MEREGLISE',28120,'28'),(284,'MESLAY LE VIDAME',28360,'28'),(285,'MEZIERES EN DROUAIS',28500,'28'),(286,'MIGNIERES',28630,'28'),(287,'MOLEANS',28200,'28'),(288,'NOGENT LE ROI',28210,'28'),(289,'NOTTONVILLE',28140,'28'),(290,'OINVILLE ST LIPHARD',28310,'28'),(291,'ROUVRES',28260,'28'),(292,'ST AUBIN DES BOIS',28300,'28'),(293,'STE GEMME MORONVAL',28500,'28'),(294,'ST GERMAIN LE GAILLARD',28190,'28'),(295,'ST JEAN PIERRE FIXTE',28400,'28'),(296,'ST LEGER DES AUBEES',28700,'28'),(297,'ST LUBIN DE LA HAYE',28410,'28'),(298,'ST OUEN MARCHEFROY',28260,'28'),(299,'ST VICTOR DE BUTHON',28240,'28'),(300,'SAINVILLE',28700,'28'),(301,'SANDARVILLE',28120,'28'),(302,'SERVILLE',28410,'28'),(303,'SOREL MOUSSEL',28260,'28'),(304,'SOURS',28630,'28'),(305,'TERMINIERS',28140,'28'),(306,'THEUVILLE',28360,'28'),(307,'THIVILLE',28200,'28'),(308,'TREMBLAY LES VILLAGES',28170,'28'),(309,'UMPEAU',28700,'28'),(310,'UNVERRE',28160,'28'),(311,'VERT EN DROUAIS',28500,'28'),(312,'VIERVILLE',28700,'28'),(313,'VIEUVICQ',28120,'28'),(314,'VILLIERS LE MORHIER',28130,'28'),(315,'LES VILLAGES VOVEENS',28150,'28'),(316,'ARGOL',29560,'29'),(317,'BANNALEC',29380,'29'),(318,'BEUZEC CAP SIZUN',29790,'29'),(319,'BRENNILIS',29690,'29'),(320,'PLOUNEOUR BRIGNOGAN PLAGES',29890,'29'),(321,'CLOHARS CARNOET',29360,'29'),(322,'CLOHARS FOUESNANT',29950,'29'),(323,'COMMANA',29450,'29'),(324,'CONCARNEAU',29900,'29'),(325,'LE CONQUET',29217,'29'),(326,'CORAY',29370,'29'),(327,'LE DRENNEC',29860,'29'),(328,'LA FOREST LANDERNEAU',29800,'29'),(329,'FOUESNANT',29170,'29'),(330,'GOUESNACH',29950,'29'),(331,'GOULVEN',29890,'29'),(332,'GUILERS',29820,'29'),(333,'HANVEC',29460,'29'),(334,'HOPITAL CAMFROUT',29460,'29'),(335,'ILE DE SEIN',29990,'29'),(336,'ILE MOLENE',29259,'29'),(337,'ILE TUDY',29980,'29'),(338,'LANDEDA',29870,'29'),(339,'LANDREVARZEC',29510,'29'),(340,'LANGOLEN',29510,'29'),(341,'LOCQUENOLE',29670,'29'),(342,'MAHALON',29790,'29'),(343,'MELLAC',29300,'29'),(344,'MESPAUL',29420,'29'),(345,'MOELAN SUR MER',29350,'29'),(346,'PENCRAN',29800,'29'),(347,'PLOBANNALEC LESCONIL',29740,'29'),(348,'PLOGOFF',29770,'29'),(349,'PLOMODIERN',29550,'29'),(350,'PLOUEGAT MOYSAN',29650,'29'),(351,'PLOUGONVELIN',29217,'29'),(352,'PLOUIGNEAU',29610,'29'),(353,'PLOURIN LES MORLAIX',29600,'29'),(354,'PLOUYE',29690,'29'),(355,'PLOZEVET',29710,'29'),(356,'PONT AVEN',29930,'29'),(357,'PONT L ABBE',29120,'29'),(358,'PORSPODER',29840,'29'),(359,'POULLAN SUR MER',29100,'29'),(360,'POULLAOUEN',29246,'29'),(361,'POULLAOUEN',29690,'29'),(362,'ROSNOEN',29590,'29'),(363,'ROSPORDEN',29140,'29'),(364,'ST HERNIN',29270,'29'),(365,'ST NIC',29550,'29'),(366,'ST THURIEN',29380,'29'),(367,'SCRIGNAC',29640,'29'),(368,'SPEZET',29540,'29'),(369,'LE TREVOUX',29380,'29'),(370,'ALBITRECCIA',20128,'2A'),(371,'ARBELLARA',20110,'2A'),(372,'ARGIUSTA MORICCIO',20140,'2A'),(373,'CIAMANNACCE',20134,'2A'),(374,'COGGIA',20118,'2A'),(375,'COGNOCOLI MONTICCHI',20166,'2A'),(376,'COTI CHIAVARI',20138,'2A'),(377,'FIGARI',20114,'2A'),(378,'FOCE',20100,'2A'),(379,'GIUNCHETO',20100,'2A'),(380,'GUAGNO',20160,'2A'),(381,'GUITERA LES BAINS',20153,'2A'),(382,'MARIGNANA',20141,'2A'),(383,'OLMETO',20113,'2A'),(384,'PERI',20167,'2A'),(385,'PIANOTTOLI CALDARELLO',20131,'2A'),(386,'PIETROSELLA',20166,'2A'),(387,'SERRA DI FERRO',20140,'2A'),(388,'SOTTA',20146,'2A'),(389,'TASSO',20134,'2A'),(390,'ZERUBIA',20116,'2A'),(391,'ZIGLIARA',20190,'2A'),(392,'ZOZA',20112,'2A'),(393,'ALANDO',20212,'2A'),(394,'ALBERTACCE',20224,'2A'),(395,'ALGAJOLA',20220,'2A'),(396,'AMPRIANI',20272,'2A'),(397,'BASTIA',20600,'2A'),(398,'BIGUGLIA',20620,'2A'),(399,'BRANDO',20222,'2A'),(400,'CAGNANO',20228,'2A'),(401,'CAMBIA',20244,'2A'),(402,'CANARI',20217,'2A'),(403,'CARTICASI',20244,'2A'),(404,'CASABIANCA',20237,'2A'),(405,'CASAMACCIOLI',20224,'2A'),(406,'CASTELLARE DI CASINCA',20213,'2A'),(407,'CASTINETA',20218,'2A'),(408,'CORBARA',20220,'2A'),(409,'CORBARA',20256,'2A'),(410,'CROCICCHIA',20290,'2A'),(411,'ERONE',20244,'2A'),(412,'ERSA',20275,'2A'),(413,'FARINOLE',20253,'2A'),(414,'GAVIGNANO',20218,'2A'),(415,'GHISONI',20227,'2A'),(416,'GIOCATOJO',20237,'2A'),(417,'ISOLACCIO DI FIUMORBO',20243,'2A'),(418,'LAMA',20218,'2A'),(419,'LINGUIZZETTA',20230,'2A'),(420,'LUCCIANA',20290,'2A'),(421,'LUCCIANA',20290,'2A'),(422,'LURI',20228,'2A'),(423,'MONTEGROSSO',20214,'2A'),(424,'MONTEGROSSO',20214,'2A'),(425,'MONTEGROSSO',20214,'2A'),(426,'MONTICELLO',20220,'2A'),(427,'MURO',20225,'2A'),(428,'NESSA',20225,'2A'),(429,'NOCARIO',20229,'2A'),(430,'NOCETA',20242,'2A'),(431,'OCCHIATANA',20226,'2A'),(432,'ORTIPORIO',20290,'2A'),(433,'PENTA DI CASINCA',20213,'2A'),(434,'PIANO',20215,'2A'),(435,'PIEDICORTE DI GAGGIO',20251,'2A'),(436,'PIEDICROCE',20229,'2A'),(437,'PIETROSO',20242,'2A'),(438,'PIGNA',20220,'2A'),(439,'PINO',20228,'2A'),(440,'POGGIO DI NAZZA',20240,'2A'),(441,'POGGIO D OLETTA',20232,'2A'),(442,'PORRI',20215,'2A'),(443,'PRUNELLI DI FIUMORBO',20243,'2A'),(444,'SPELONCATO',20226,'2A'),(445,'SANT ANDREA DI COTONE',20221,'2A'),(446,'SAN GIOVANNI DI MORIANI',20230,'2A'),(447,'SAN GIULIANO',20230,'2A'),(448,'SAN MARTINO DI LOTA',20200,'2A'),(449,'SAN NICOLAO',20230,'2A'),(450,'SANTA REPARATA DI MORIANI',20230,'2A'),(451,'TALLONE',20270,'2A'),(452,'VALLE D ALESANI',20234,'2A'),(453,'VALLICA',20259,'2A'),(454,'VERDESE',20229,'2A'),(455,'VESCOVATO',20215,'2A'),(456,'VIGNALE',20290,'2A'),(457,'VOLPAJOLA',20290,'2A'),(458,'AIGALIERS',30700,'30'),(459,'AIGUES VIVES',30670,'30'),(460,'AIMARGUES',30470,'30'),(461,'ALZON',30770,'30'),(462,'ARAMON',30390,'30'),(463,'ASPERES',30250,'30'),(464,'BARJAC',30430,'30'),(465,'BEAUCAIRE',30300,'30'),(466,'BEAUVOISIN',30640,'30'),(467,'BEAUVOISIN',30640,'30'),(468,'BOISSIERES',30114,'30'),(469,'BORDEZAC',30160,'30'),(470,'BOUILLARGUES',30230,'30'),(471,'BOURDIC',30190,'30'),(472,'BREAU MARS',30120,'30'),(473,'BRIGNON',30190,'30'),(474,'LA BRUGUIERE',30580,'30'),(475,'LA CADIERE ET CAMBO',30170,'30'),(476,'LE CAILAR',30740,'30'),(477,'LA CALMETTE',30190,'30'),(478,'CARSAN',30130,'30'),(479,'CASTILLON DU GARD',30210,'30'),(480,'CENDRAS',30480,'30'),(481,'CHUSCLAN',30200,'30'),(482,'CHUSCLAN',30200,'30'),(483,'COMBAS',30250,'30'),(484,'CONCOULES',30450,'30'),(485,'CONGENIES',30111,'30'),(486,'CONNAUX',30330,'30'),(487,'CONQUEYRAC',30170,'30'),(488,'CORCONNE',30260,'30'),(489,'COURRY',30500,'30'),(490,'EUZET',30360,'30'),(491,'FOISSAC',30700,'30'),(492,'GAUJAC',30330,'30'),(493,'GENERARGUES',30140,'30'),(494,'LA GRAND COMBE',30110,'30'),(495,'LANUEJOLS',30750,'30'),(496,'LAVAL PRADEL',30110,'30'),(497,'LEDENON',30210,'30'),(498,'LUSSAN',30580,'30'),(499,'LE MARTINET',30960,'30'),(500,'MARUEJOLS LES GARDON',30350,'30'),(501,'MAURESSARGUES',30350,'30'),(502,'MEJANNES LES ALES',30340,'30'),(503,'MOLIERES CAVAILLAC',30120,'30'),(504,'MUS',30121,'30'),(505,'ORSAN',30200,'30'),(506,'PARIGNARGUES',30730,'30'),(507,'POMMIERS',30120,'30'),(508,'REMOULINS',30210,'30'),(509,'ROBIAC ROCHESSADOULE',30160,'30'),(510,'ROCHEGUDE',30430,'30'),(511,'ROQUEDUR',30440,'30'),(512,'ROQUEMAURE',30150,'30'),(513,'ROUSSON',30340,'30'),(514,'ST BRES',30500,'30'),(515,'ST BRESSON',30440,'30'),(516,'ST CHRISTOL DE RODIERES',30760,'30'),(517,'ST COME ET MARUEJOLS',30870,'30'),(518,'ST DENIS',30500,'30'),(519,'ST DIONISY',30980,'30'),(520,'ST GILLES',30800,'30'),(521,'ST JEAN DE CRIEULON',30610,'30'),(522,'ST JEAN DE VALERISCLE',30960,'30'),(523,'ST JEAN DU PIN',30140,'30'),(524,'ST LAURENT D AIGOUZE',30220,'30'),(525,'ST LAURENT LA VERNEDE',30330,'30'),(526,'ST MAMERT DU GARD',30730,'30'),(527,'ST MARTIN DE VALGALGUES',30520,'30'),(528,'ST NAZAIRE DES GARDIES',30610,'30'),(529,'ST PRIVAT DE CHAMPCLOS',30430,'30'),(530,'ST ROMAN DE CODIERES',30440,'30'),(531,'SALINELLES',30250,'30'),(532,'SAUMANE',30125,'30'),(533,'SUMENE',30440,'30'),(534,'THEZIERS',30390,'30'),(535,'TRESQUES',30330,'30'),(536,'VAUVERT',30600,'30'),(537,'LA VERNAREDE',30530,'30'),(538,'VESTRIC ET CANDIAC',30600,'30'),(539,'LE VIGAN',30120,'30'),(540,'ST PAUL LES FONTS',30330,'30'),(541,'AGASSAC',31230,'31'),(542,'AIGREFEUILLE',31280,'31'),(543,'ALAN',31420,'31'),(544,'AMBAX',31230,'31'),(545,'ARLOS',31440,'31'),(546,'AUCAMVILLE',31140,'31'),(547,'AUREVILLE',31320,'31'),(548,'AURIBAIL',31190,'31'),(549,'AURIGNAC',31420,'31'),(550,'AUSSON',31210,'31'),(551,'AVIGNONET LAURAGAIS',31290,'31'),(552,'BARBAZAN',31510,'31'),(553,'BELBEZE DE LAURAGAIS',31450,'31'),(554,'BESSIERES',31660,'31'),(555,'BILLIERE',31110,'31'),(556,'BLAGNAC',31700,'31'),(557,'BONDIGOUX',31340,'31'),(558,'BONREPOS RIQUET',31590,'31'),(559,'BORDES DE RIVIERE',31210,'31'),(560,'LE BORN',31340,'31'),(561,'BOUTX',31160,'31'),(562,'BOUZIN',31420,'31'),(563,'BRAGAYRAC',31470,'31'),(564,'BRUGUIERES',31150,'31'),(565,'CABANAC CAZAUX',31160,'31'),(566,'CARAGOUDES',31460,'31'),(567,'CARBONNE',31390,'31'),(568,'CARDEILHAC',31350,'31'),(569,'CAZENEUVE MONTAUT',31420,'31'),(570,'CHEIN DESSUS',31160,'31'),(571,'CIERP GAUD',31440,'31'),(572,'DONNEVILLE',31450,'31'),(573,'DREMIL LAFAGE',31280,'31'),(574,'DRUDAS',31480,'31'),(575,'ESCALQUENS',31750,'31'),(576,'ESTENOS',31440,'31'),(577,'FRANCAZAL',31260,'31'),(578,'LE FRECHET',31360,'31'),(579,'FRONTIGNAN DE COMMINGES',31510,'31'),(580,'FRONTIGNAN SAVES',31230,'31'),(581,'FRONTON',31620,'31'),(582,'GAGNAC SUR GARONNE',31150,'31'),(583,'GOUAUX DE LARBOUST',31110,'31'),(584,'GOUZENS',31310,'31'),(585,'GRATENTOUR',31150,'31'),(586,'L ISLE EN DODON',31230,'31'),(587,'LABROQUERE',31510,'31'),(588,'LACAUGNE',31390,'31'),(589,'LAGARDELLE SUR LEZE',31870,'31'),(590,'LAHAGE',31370,'31'),(591,'LANTA',31570,'31'),(592,'LAREOLE',31480,'31'),(593,'LASSERRE PRADERE',31530,'31'),(594,'LAVALETTE',31590,'31'),(595,'LEGE',31440,'31'),(596,'LESPUGUE',31350,'31'),(597,'LHERM',31600,'31'),(598,'LONGAGES',31410,'31'),(599,'LUSCAN',31510,'31'),(600,'LUSSAN ADEILHAC',31430,'31'),(601,'MANCIOUX',31360,'31'),(602,'MARIGNAC',31440,'31'),(603,'MARIGNAC LASPEYRES',31220,'31'),(604,'MARTRES DE RIVIERE',31210,'31'),(605,'MARTRES TOLOSANE',31220,'31'),(606,'MAURAN',31220,'31'),(607,'MAUVAISIN',31190,'31'),(608,'MONDAVEZAN',31220,'31'),(609,'MONDONVILLE',31700,'31'),(610,'MONTBRUN BOCAGE',31310,'31'),(611,'MONTCLAR DE COMMINGES',31220,'31'),(612,'MONTESPAN',31260,'31'),(613,'MONTGAZIN',31410,'31'),(614,'MONTJOIRE',31380,'31'),(615,'MONTPITOL',31380,'31'),(616,'MOURvilles HAUTES',31540,'31'),(617,'NOGARET',31540,'31'),(618,'NOUEILLES',31450,'31'),(619,'ORE',31510,'31'),(620,'PAULHAC',31380,'31'),(621,'PEYRISSAS',31420,'31'),(622,'PEYROUZET',31420,'31'),(623,'PLAGNE',31220,'31'),(624,'POINTIS DE RIVIERE',31210,'31'),(625,'POLASTRON',31430,'31'),(626,'POUBEAU',31110,'31'),(627,'POUCHARRAMET',31370,'31'),(628,'PUYSSEGUR',31480,'31'),(629,'QUINT FONSEGRIVES',31130,'31'),(630,'RAZECUEILLE',31160,'31'),(631,'RIEUX VOLVESTRE',31310,'31'),(632,'ROQUESERIERE',31380,'31'),(633,'ROUEDE',31160,'31'),(634,'SABONNERES',31370,'31'),(635,'SACCOURVIELLE',31110,'31'),(636,'ST BERTRAND DE COMMINGES',31510,'31'),(637,'ST CEZERT',31330,'31'),(638,'ST CHRISTAUD',31310,'31'),(639,'ST GERMIER',31290,'31'),(640,'ST HILAIRE',31410,'31'),(641,'ST JULIEN SUR GARONNE',31220,'31'),(642,'ST MAMET',31110,'31'),(643,'ST MARCET',31800,'31'),(644,'ST MICHEL',31220,'31'),(645,'ST PIERRE DE LAGES',31570,'31'),(646,'ST SAUVEUR',31790,'31'),(647,'SANA',31220,'31'),(648,'SARREMEZAN',31350,'31'),(649,'SAUSSENS',31460,'31'),(650,'SAVERES',31370,'31'),(651,'SEDEILHAC',31580,'31'),(652,'SEILHAN',31510,'31'),(653,'SEYSSES',31600,'31'),(654,'SOUEICH',31160,'31'),(655,'TERREBASSE',31420,'31'),(656,'THIL',31530,'31'),(657,'TOULOUSE',31000,'31'),(658,'LES TOURREILLES',31210,'31'),(659,'TREBONS DE LUCHON',31110,'31'),(660,'L UNION',31240,'31'),(661,'URAU',31260,'31'),(662,'VALLEGUE',31290,'31'),(663,'VERFEIL',31590,'31'),(664,'VERNET',31810,'31'),(665,'VIEILLE TOULOUSE',31320,'31'),(666,'VILLARIES',31380,'31'),(667,'VILLENEUVE LECUSSAN',31580,'31'),(668,'VILLENOUVELLE',31290,'31'),(669,'ANTRAS',32360,'32'),(670,'ARMOUS ET CAU',32230,'32'),(671,'AUGNAX',32120,'32'),(672,'AUX AUSSAT',32170,'32'),(673,'AYZIEU',32800,'32'),(674,'BARRAN',32350,'32'),(675,'BAZIAN',32320,'32'),(676,'BAZUGUES',32170,'32'),(677,'BECCAS',32730,'32'),(678,'BELMONT',32190,'32'),(679,'BERRAC',32480,'32'),(680,'BEZOLLES',32310,'32'),(681,'BEZUES BAJON',32140,'32'),(682,'CABAS LOUMASSES',32140,'32'),(683,'CADEILHAN',32380,'32'),(684,'CAHUZAC SUR ADOUR',32400,'32'),(685,'CALLIAN',32190,'32'),(686,'CASTELNAU D ARBIEU',32500,'32'),(687,'CASTELNAU D AUZAN LABARRERE',32440,'32'),(688,'CASTERA LECTOUROIS',32700,'32'),(689,'CASTILLON DEBATS',32190,'32'),(690,'CEZAN',32410,'32'),(691,'CLERMONT SAVES',32600,'32'),(692,'ESCORNEBOEUF',32200,'32'),(693,'ESPAS',32370,'32'),(694,'FLEURANCE',32500,'32'),(695,'FUSTEROUAU',32400,'32'),(696,'GALIAX',32160,'32'),(697,'GAUJAN',32420,'32'),(698,'GOUTZ',32500,'32'),(699,'HAULIES',32550,'32'),(700,'HOMPS',32120,'32'),(701,'JEGUN',32360,'32'),(702,'JU BELLOC',32160,'32'),(703,'JUSTIAN',32190,'32'),(704,'LABRIHE',32120,'32'),(705,'LAGARDE HACHAN',32300,'32'),(706,'LALANNE',32500,'32'),(707,'LAMAZERE',32300,'32'),(708,'LARRESSINGLE',32100,'32'),(709,'LUPIAC',32290,'32'),(710,'MAIGNAUT TAUZIA',32310,'32'),(711,'MANSENCOME',32310,'32'),(712,'MARCIAC',32230,'32'),(713,'MAULEON D ARMAGNAC',32240,'32'),(714,'MAUMUSSON LAGUIAN',32400,'32'),(715,'MAURENS',32200,'32'),(716,'MIRAMONT D ASTARAC',32300,'32'),(717,'MIREPOIX',32390,'32'),(718,'MONBRUN',32600,'32'),(719,'MONCLAR',32150,'32'),(720,'MONCLAR SUR LOSSE',32300,'32'),(721,'MONCORNEIL GRAZAN',32260,'32'),(722,'MONFERRAN SAVES',32490,'32'),(723,'MONGAUSY',32220,'32'),(724,'MONTAMAT',32220,'32'),(725,'MONTESQUIOU',32320,'32'),(726,'MONTIES',32420,'32'),(727,'MONTIRON',32200,'32'),(728,'MONTPEZAT',32220,'32'),(729,'MONTREAL',32250,'32'),(730,'MOUREDE',32190,'32'),(731,'NOGARO',32110,'32'),(732,'NOILHAN',32130,'32'),(733,'ORDAN LARROQUE',32350,'32'),(734,'PANJAS',32110,'32'),(735,'PLAISANCE',32160,'32'),(736,'PONSAN SOUBIRAN',32300,'32'),(737,'PRECHAC',32390,'32'),(738,'PRENERON',32190,'32'),(739,'PUJAUDRAN',32600,'32'),(740,'PUYCASQUIER',32120,'32'),(741,'RAZENGUES',32600,'32'),(742,'RICOURT',32230,'32'),(743,'RISCLE',32400,'32'),(744,'LA ROMIEU',32480,'32'),(745,'SABAZAN',32290,'32'),(746,'ST ANTONIN',32120,'32'),(747,'ST ARAILLES',32350,'32'),(748,'ST BLANCARD',32140,'32'),(749,'ST BRES',32120,'32'),(750,'ST MARTIN',32300,'32'),(751,'ST MARTIN DE GOYNE',32480,'32'),(752,'ST MAUR',32300,'32'),(753,'ST MEZARD',32700,'32'),(754,'ST MONT',32400,'32'),(755,'ST ORENS',32120,'32'),(756,'ST PUY',32310,'32'),(757,'STE RADEGONDE',32500,'32'),(758,'SAMARAN',32140,'32'),(759,'SANSAN',32260,'32'),(760,'SEISSAN',32260,'32'),(761,'SEMBOUES',32230,'32'),(762,'SEREMPUY',32120,'32'),(763,'TACHOIRES',32260,'32'),(764,'TAYBOSC',32120,'32'),(765,'TERMES D ARMAGNAC',32400,'32'),(766,'TOURDUN',32230,'32'),(767,'TOURRENQUETS',32390,'32'),(768,'URDENS',32500,'32'),(769,'VALENCE SUR BAISE',32310,'32'),(770,'VERGOIGNAN',32720,'32'),(771,'VIC FEZENSAC',32190,'32'),(772,'VILLEFRANCHE',32420,'32'),(773,'ABZAC',33230,'33'),(774,'ANGLADE',33390,'33'),(775,'ARCACHON',33120,'33'),(776,'ARTIGUES PRES BORDEAUX',33370,'33'),(777,'VAL DE VIRVEE',33240,'33'),(778,'BALIZAC',33730,'33'),(779,'BEGADAN',33340,'33'),(780,'BEGLES',33130,'33'),(781,'BERNOS BEAULAC',33430,'33'),(782,'BERTHEZ',33124,'33'),(783,'BIGANOS',33380,'33'),(784,'BOMMES',33210,'33'),(785,'BORDEAUX',33200,'33'),(786,'BOULIAC',33270,'33'),(787,'BRANNENS',33124,'33'),(788,'BROUQUEYRAN',33124,'33'),(789,'BRUGES',33520,'33'),(790,'CADILLAC',33410,'33'),(791,'CAMIAC ET ST DENIS',33420,'33'),(792,'CAMIRAN',33190,'33'),(793,'CAPIAN',33550,'33'),(794,'CENAC',33360,'33'),(795,'CESTAS',33610,'33'),(796,'CIVRAC SUR DORDOGNE',33350,'33'),(797,'COIMERES',33210,'33'),(798,'COIRAC',33540,'33'),(799,'COURPIAC',33760,'33'),(800,'CREON',33670,'33'),(801,'CUSSAC FORT MEDOC',33460,'33'),(802,'DAIGNAC',33420,'33'),(803,'DIEULIVOL',33580,'33'),(804,'EYSINES',33320,'33'),(805,'FALEYRAS',33760,'33'),(806,'FLAUJAGUES',33350,'33'),(807,'FLOUDES',33190,'33'),(808,'GORNAC',33540,'33'),(809,'GRADIGNAN',33170,'33'),(810,'GRAYAN ET L HOPITAL',33590,'33'),(811,'HOSTENS',33125,'33'),(812,'HURE',33190,'33'),(813,'IZON',33450,'33'),(814,'LADAUX',33760,'33'),(815,'LAGORCE',33230,'33'),(816,'LA LANDE DE FRONSAC',33240,'33'),(817,'LANDERROUET SUR SEGUR',33540,'33'),(818,'LANSAC',33710,'33'),(819,'LEGE CAP FERRET',33950,'33'),(820,'LEGE CAP FERRET',33950,'33'),(821,'LEOGEATS',33210,'33'),(822,'LIGNAN DE BORDEAUX',33360,'33'),(823,'LOUCHATS',33125,'33'),(824,'LOUPIAC DE LA REOLE',33190,'33'),(825,'MADIRAC',33670,'33'),(826,'MARGAUX CANTENAC',33460,'33'),(827,'MARTRES',33760,'33'),(828,'MESTERRIEUX',33540,'33'),(829,'MOMBRIER',33710,'33'),(830,'MONSEGUR',33580,'33'),(831,'MONTAGNE',33570,'33'),(832,'MONTIGNAC',33760,'33'),(833,'MOULON',33420,'33'),(834,'NOAILLAN',33730,'33'),(835,'ORIGNE',33113,'33'),(836,'PERISSAC',33240,'33'),(837,'PESSAC',33600,'33'),(838,'PLASSAC',33390,'33'),(839,'PRECHAC',33730,'33'),(840,'PREIGNAC',33210,'33'),(841,'PUJOLS SUR CIRON',33210,'33'),(842,'PUYNORMAND',33660,'33'),(843,'QUEYRAC',33340,'33'),(844,'LA REOLE',33190,'33'),(845,'ROAILLAN',33210,'33'),(846,'RUCH',33350,'33'),(847,'SAILLANS',33141,'33'),(848,'ST ANDRE DU BOIS',33490,'33'),(849,'ST ANTOINE DU QUEYRET',33790,'33'),(850,'ST AVIT ST NAZAIRE',33220,'33'),(851,'VAL DE LIVENNE',33820,'33'),(852,'ST CIERS D ABZAC',33910,'33'),(853,'ST ESTEPHE',33180,'33'),(854,'ST FELIX DE FONCAUDE',33540,'33'),(855,'ST FERME',33580,'33'),(856,'ST GENIS DU BOIS',33760,'33'),(857,'ST GIRONS D AIGUEVIVES',33920,'33'),(858,'ST JEAN DE BLAIGNAC',33420,'33'),(859,'ST LAURENT DES COMBES',33330,'33'),(860,'ST LAURENT DU BOIS',33540,'33'),(861,'ST LAURENT DU PLAN',33190,'33'),(862,'ST MAGNE',33125,'33'),(863,'ST MAGNE DE CASTILLON',33350,'33'),(864,'ST MARTIN DE SESCAS',33490,'33'),(865,'ST MEDARD D EYRANS',33650,'33'),(866,'ST MICHEL DE CASTELNAU',33840,'33'),(867,'ST MICHEL DE RIEUFRET',33720,'33'),(868,'ST MICHEL DE LAPUJADE',33190,'33'),(869,'ST SAVIN',33920,'33'),(870,'ST SEURIN DE BOURG',33710,'33'),(871,'ST SEVE',33190,'33'),(872,'SAMONAC',33710,'33'),(873,'SAUCATS',33650,'33'),(874,'SAUGON',33920,'33'),(875,'SAUMOS',33680,'33'),(876,'SAUVETERRE DE GUYENNE',33540,'33'),(877,'SAVIGNAC DE L ISLE',33910,'33'),(878,'SIGALENS',33690,'33'),(879,'SILLAS',33690,'33'),(880,'TARNES',33240,'33'),(881,'LA TESTE DE BUCH',33115,'33'),(882,'LA TESTE DE BUCH',33115,'33'),(883,'LA TESTE DE BUCH',33260,'33'),(884,'TIZAC DE CURTON',33420,'33'),(885,'TIZAC DE LAPOUYADE',33620,'33'),(886,'UZESTE',33730,'33'),(887,'VAYRES',33870,'33'),(888,'VERDELAIS',33490,'33'),(889,'VIGNONET',33330,'33'),(890,'VILLANDRAUT',33730,'33'),(891,'AGDE',34300,'34'),(892,'AIGNE',34210,'34'),(893,'ALIGNAN DU VENT',34290,'34'),(894,'AUMES',34530,'34'),(895,'BABEAU BOULDOUX',34360,'34'),(896,'BALARUC LE VIEUX',34540,'34'),(897,'BEAUFORT',34210,'34'),(898,'BELARGA',34230,'34'),(899,'BERLOU',34360,'34'),(900,'BOISSET',34220,'34'),(901,'BUZIGNARGUES',34160,'34'),(902,'CAMBON ET SALVERGUES',34330,'34'),(903,'CANDILLARGUES',34130,'34'),(904,'CAPESTANG',34310,'34'),(905,'CASSAGNOLES',34210,'34'),(906,'CASTANET LE HAUT',34610,'34'),(907,'CASTELNAU LE LEZ',34170,'34'),(908,'CASTRIES',34160,'34'),(909,'LA CAUNETTE',34210,'34'),(910,'CAUSSE DE LA SELLE',34380,'34'),(911,'CAUSSINIOJOULS',34600,'34'),(912,'CAZEDARNES',34460,'34'),(913,'CAZOULS LES BEZIERS',34370,'34'),(914,'CESSENON SUR ORB',34460,'34'),(915,'COMBAILLAUX',34980,'34'),(916,'CORNEILHAN',34490,'34'),(917,'CRUZY',34310,'34'),(918,'ESPONDEILHAN',34290,'34'),(919,'GIGEAN',34770,'34'),(920,'LACOSTE',34800,'34'),(921,'LANSARGUES',34130,'34'),(922,'LATTES',34970,'34'),(923,'LAUROUX',34700,'34'),(924,'LEZIGNAN LA CEBE',34120,'34'),(925,'LOUPIAN',34140,'34'),(926,'LUNEL',34400,'34'),(927,'MARSILLARGUES',34590,'34'),(928,'MAS DE LONDRES',34380,'34'),(929,'MINERVE',34210,'34'),(930,'MONTAGNAC',34530,'34'),(931,'MONTAUD',34160,'34'),(932,'MONTPELLIER',34070,'34'),(933,'MURVIEL LES MONTPELLIER',34570,'34'),(934,'OCTON',34800,'34'),(935,'OUPIA',34210,'34'),(936,'PAILHES',34490,'34'),(937,'PALAVAS LES FLOTS',34250,'34'),(938,'PINET',34850,'34'),(939,'POILHES',34310,'34'),(940,'POUZOLS',34230,'34'),(941,'LE PRADAL',34600,'34'),(942,'PRADES SUR VERNAZOBRE',34360,'34'),(943,'LE PUECH',34700,'34'),(944,'PUILACHER',34230,'34'),(945,'PUISSERGUIER',34620,'34'),(946,'RIOLS',34220,'34'),(947,'LES RIVES',34520,'34'),(948,'ROQUEBRUN',34460,'34'),(949,'ST ANDRE DE SANGONIS',34725,'34'),(950,'ST BAUZILLE DE PUTOIS',34190,'34'),(951,'ST DREZERY',34160,'34'),(952,'ST ETIENNE DE GOURGAS',34700,'34'),(953,'ST GEORGES D ORQUES',34680,'34'),(954,'ST GUILHEM LE DESERT',34150,'34'),(955,'ST GUIRAUD',34725,'34'),(956,'ST JEAN DE BUEGES',34380,'34'),(957,'ST JEAN DE FOS',34150,'34'),(958,'ST JULIEN',34390,'34'),(959,'ST MARTIN DE LONDRES',34380,'34'),(960,'ST PARGOIRE',34230,'34'),(961,'SAUSSINES',34160,'34'),(962,'SERVIAN',34290,'34'),(963,'SORBS',34520,'34'),(964,'TAUSSAC LA BILLIERE',34600,'34'),(965,'LA TOUR SUR ORB',34260,'34'),(966,'LA VACQUERIE ET ST MARTIN DE CASTRIES',34520,'34'),(967,'VAILHAUQUES',34570,'34'),(968,'VALERGUES',34130,'34'),(969,'VENDRES',34350,'34'),(970,'VIAS',34450,'34'),(971,'VIEUSSAN',34390,'34'),(972,'VILLENEUVE LES MAGUELONE',34750,'34'),(973,'VILLETELLE',34400,'34'),(974,'VIOLS EN LAVAL',34380,'34'),(975,'ACIGNE',35690,'35'),(976,'VAL COUESNON',35460,'35'),(977,'ARBRISSEL',35130,'35'),(978,'BAULON',35580,'35'),(979,'LA BAZOUGE DU DESERT',35420,'35'),(980,'BAZOUGES LA PEROUSE',35560,'35'),(981,'BEAUCE',35133,'35'),(982,'BOISGERVILLY',35360,'35'),(983,'BRIE',35150,'35'),(984,'BRUC SUR AFF',35550,'35'),(985,'CANCALE',35260,'35'),(986,'CHANTELOUP',35150,'35'),(987,'LA CHAPELLE DES FOUGERETZ',35520,'35'),(988,'CHATEAUGIRON',35410,'35'),(989,'CHATEAUNEUF D ILLE ET VILAINE',35430,'35'),(990,'CHAVAGNE',35310,'35'),(991,'CHELUN',35640,'35'),(992,'CINTRE',35310,'35'),(993,'COESMES',35134,'35'),(994,'LA COUYERE',35320,'35'),(995,'DINARD',35800,'35'),(996,'DOL DE BRETAGNE',35120,'35'),(997,'DOMAGNE',35113,'35'),(998,'ERBREE',35500,'35'),(999,'GEVEZE',35850,'35'),(1000,'GUICHEN',35580,'35'),(1001,'HEDE BAZOUGES',35630,'35'),(1002,'LANRIGAN',35270,'35'),(1003,'LIFFRE',35340,'35'),(1004,'LONGAULNAY',35190,'35'),(1005,'LOUTEHEL',35330,'35'),(1006,'MEZIERES SUR COUESNON',35140,'35'),(1007,'MINIAC MORVAN',35540,'35'),(1008,'MINIAC MORVAN',35540,'35'),(1009,'MINIAC SOUS BECHEREL',35190,'35'),(1010,'LE MINIHIC SUR RANCE',35870,'35'),(1011,'MONTAUBAN DE BRETAGNE',35360,'35'),(1012,'MONTHAULT',35420,'35'),(1013,'MOUSSE',35130,'35'),(1014,'MUEL',35290,'35'),(1015,'NOYAL SUR VILAINE',35530,'35'),(1016,'PARCE',35210,'35'),(1017,'PARIGNE',35133,'35'),(1018,'POCE LES BOIS',35500,'35'),(1019,'QUEBRIAC',35190,'35'),(1020,'RENNES',35000,'35'),(1021,'ROZ LANDRIEUX',35120,'35'),(1022,'ST BENOIT DES ONDES',35114,'35'),(1023,'RIVES DU COUESNON',35140,'35'),(1024,'ST MALO',35400,'35'),(1025,'ST MAUGAN',35750,'35'),(1026,'ST MEEN LE GRAND',35290,'35'),(1027,'ST MELOIR DES ONDES',35350,'35'),(1028,'ST M HERVE',35500,'35'),(1029,'MESNIL ROC H',35720,'35'),(1030,'ST SULPICE DES LANDES',35390,'35'),(1031,'ST THURIAL',35310,'35'),(1032,'SAULNIERES',35320,'35'),(1033,'TALENSAC',35160,'35'),(1034,'TORCE',35370,'35'),(1035,'VERN SUR SEICHE',35770,'35'),(1036,'LE TRONCHET',35540,'35'),(1037,'AMBRAULT',36120,'36'),(1038,'ARPHEUILLES',36700,'36'),(1039,'ARTHON',36330,'36'),(1040,'BRIVES',36100,'36'),(1041,'CHABRIS',36210,'36'),(1042,'CHAMPILLET',36160,'36'),(1043,'CHATILLON SUR INDRE',36700,'36'),(1044,'CHAZELET',36170,'36'),(1045,'CHEZELLES',36500,'36'),(1046,'CIRON',36300,'36'),(1047,'CONCREMIERS',36300,'36'),(1048,'CUZION',36190,'36'),(1049,'DOUADIC',36300,'36'),(1050,'DUNET',36310,'36'),(1051,'DUN LE POELIER',36210,'36'),(1052,'ECUEILLE',36240,'36'),(1053,'GIROUX',36150,'36'),(1054,'ISSOUDUN',36100,'36'),(1055,'JEU LES BOIS',36120,'36'),(1056,'LEVROUX',36110,'36'),(1057,'LEVROUX',36110,'36'),(1058,'LIGNAC',36370,'36'),(1059,'LIGNEROLLES',36160,'36'),(1060,'LINIEZ',36150,'36'),(1061,'MAUVIERES',36370,'36'),(1062,'MEOBECQ',36500,'36'),(1063,'MOUHERS',36340,'36'),(1064,'MOUHET',36170,'36'),(1065,'MOULINS SUR CEPHONS',36110,'36'),(1066,'MURS',36700,'36'),(1067,'NEUILLAY LES BOIS',36500,'36'),(1068,'NEUVY PAILLOUX',36100,'36'),(1069,'NIHERNE',36250,'36'),(1070,'OBTERRE',36290,'36'),(1071,'LE PECHEREAU',36200,'36'),(1072,'PERASSAY',36160,'36'),(1073,'BADECON LE PIN',36200,'36'),(1074,'POMMIERS',36190,'36'),(1075,'PREAUX',36240,'36'),(1076,'ROSNAY',36300,'36'),(1077,'RUFFEC',36300,'36'),(1078,'ST AOUSTRILLE',36100,'36'),(1079,'ST BENOIT DU SAULT',36170,'36'),(1080,'STE FAUSTE',36100,'36'),(1081,'STE GEMME',36500,'36'),(1082,'ST GILLES',36170,'36'),(1083,'ST MICHEL EN BRENNE',36290,'36'),(1084,'THENAY',36800,'36'),(1085,'LE TRANGER',36700,'36'),(1086,'URCIERS',36160,'36'),(1087,'VAL FOUZON',36210,'36'),(1088,'VAL FOUZON',36210,'36'),(1089,'LA VERNELLE',36600,'36'),(1090,'VERNEUIL SUR IGNERAIE',36400,'36'),(1091,'VIGOULANT',36160,'36'),(1092,'ABILLY',37160,'37'),(1093,'AUTRECHE',37110,'37'),(1094,'AZAY SUR CHER',37270,'37'),(1095,'AZAY SUR INDRE',37310,'37'),(1096,'BALLAN MIRE',37510,'37'),(1097,'BERTHENAY',37510,'37'),(1098,'BRASLOU',37120,'37'),(1099,'CANDES ST MARTIN',37500,'37'),(1100,'LA CELLE ST AVANT',37160,'37'),(1101,'CHAMBON',37290,'37'),(1102,'CHANNAY SUR LATHAN',37330,'37'),(1103,'LA CHAPELLE AUX NAUX',37130,'37'),(1104,'CHAVEIGNES',37120,'37'),(1105,'CHINON',37500,'37'),(1106,'CRAVANT LES COTEAUX',37500,'37'),(1107,'CROTELLES',37380,'37'),(1108,'FAYE LA VINEUSE',37120,'37'),(1109,'FERRIERE SUR BEAULIEU',37600,'37'),(1110,'LES HERMITES',37110,'37'),(1111,'HUISMES',37420,'37'),(1112,'LANGEAIS',37130,'37'),(1113,'LIMERAY',37530,'37'),(1114,'LE LOUROUX',37240,'37'),(1115,'LUYNES',37230,'37'),(1116,'LA MEMBROLLE SUR CHOISILLE',37390,'37'),(1117,'METTRAY',37390,'37'),(1118,'MONTBAZON',37250,'37'),(1119,'MONTRESOR',37460,'37'),(1120,'NEUILLY LE BRIGNON',37160,'37'),(1121,'NEUVILLE SUR BRENNE',37110,'37'),(1122,'NOUANS LES FONTAINES',37460,'37'),(1123,'ORBIGNY',37460,'37'),(1124,'PUSSIGNY',37800,'37'),(1125,'RICHELIEU',37120,'37'),(1126,'ST ANTOINE DU ROCHER',37360,'37'),(1127,'STE CATHERINE DE FIERBOIS',37800,'37'),(1128,'ST CYR SUR LOIRE',37540,'37'),(1129,'ST EPAIN',37800,'37'),(1130,'ST FLOVIER',37600,'37'),(1131,'ST GENOUPH',37510,'37'),(1132,'ST GERMAIN SUR VIENNE',37500,'37'),(1133,'STE MAURE DE TOURAINE',37800,'37'),(1134,'ST SENOCH',37600,'37'),(1135,'SEMBLANCAY',37360,'37'),(1136,'SENNEVIERES',37600,'37'),(1137,'VARENNES',37600,'37'),(1138,'VERNEUIL SUR INDRE',37600,'37'),(1139,'VILLEPERDUE',37260,'37'),(1140,'VILLIERS AU BOUIN',37330,'37'),(1141,'VOU',37240,'37'),(1142,'ALLEVARD',38580,'38'),(1143,'AOSTE',38490,'38'),(1144,'APPRIEU',38140,'38'),(1145,'APPRIEU',38140,'38'),(1146,'ASSIEU',38150,'38'),(1147,'AURIS',38142,'38'),(1148,'AVIGNONET',38650,'38'),(1149,'BRESSIEUX',38870,'38'),(1150,'LA BUISSE',38500,'38'),(1151,'LA BUISSIERE',38530,'38'),(1152,'CHALON',38122,'38'),(1153,'CHAMAGNIEU',38460,'38'),(1154,'LA CHAPELLE DE LA TOUR',38110,'38'),(1155,'LA CHAPELLE DU BARD',38580,'38'),(1156,'CHARETTE',38390,'38'),(1157,'CHASSE SUR RHONE',38670,'38'),(1158,'CHATEAU BERNARD',38650,'38'),(1159,'CHEVRIERES',38160,'38'),(1160,'CHEZENEUVE',38300,'38'),(1161,'CLELLES',38930,'38'),(1162,'ST MARTIN DE LA CLUZE',38650,'38'),(1163,'CORNILLON EN TRIEVES',38710,'38'),(1164,'COUR ET BUIS',38122,'38'),(1165,'CREYS MEPIEU',38510,'38'),(1166,'DOISSIN',38730,'38'),(1167,'EYZIN PINET',38780,'38'),(1168,'FONTANIL CORNILLON',38120,'38'),(1169,'LA FORTERESSE',38590,'38'),(1170,'LA FRETTE',38260,'38'),(1171,'GIERES',38610,'38'),(1172,'GRENOBLE',38000,'38'),(1173,'GRENOBLE',38100,'38'),(1174,'GRESSE EN VERCORS',38650,'38'),(1175,'HUEZ',38750,'38'),(1176,'IZERON',38160,'38'),(1177,'JANNEYRIAS',38280,'38'),(1178,'JARDIN',38200,'38'),(1179,'LAVAL EN BELLEDONNE',38190,'38'),(1180,'LEYRIEU',38460,'38'),(1181,'LIVET ET GAVET',38220,'38'),(1182,'MARCIEU',38350,'38'),(1183,'MARNANS',38980,'38'),(1184,'MENS',38710,'38'),(1185,'MENS',38710,'38'),(1186,'MIZOEN',38142,'38'),(1187,'LES DEUX ALPES',38860,'38'),(1188,'MONTFALCON',38940,'38'),(1189,'MONTFERRAT',38620,'38'),(1190,'MONTREVEL',38690,'38'),(1191,'LA MOTTE D AVEILLANS',38770,'38'),(1192,'LA MURETTE',38140,'38'),(1193,'ARANDON PASSINS',38510,'38'),(1194,'PELLAFOL',38970,'38'),(1195,'PENOL',38260,'38'),(1196,'PIERRE CHATEL',38119,'38'),(1197,'POISAT',38320,'38'),(1198,'POLIENAS',38210,'38'),(1199,'PONTCHARRA',38530,'38'),(1200,'LE PONT DE BEAUVOISIN',38480,'38'),(1201,'PONT DE CHERUY',38230,'38'),(1202,'LE PONT DE CLAIX',38800,'38'),(1203,'PRESSINS',38480,'38'),(1204,'RENAGE',38140,'38'),(1205,'REVENTIN VAUGRIS',38121,'38'),(1206,'ROYAS',38440,'38'),(1207,'SABLONS',38550,'38'),(1208,'ST ALBIN DE VAULSERRE',38480,'38'),(1209,'ST ANDRE LE GAZ',38490,'38'),(1210,'ST ANTOINE L ABBAYE',38160,'38'),(1211,'ST BLAISE DU BUIS',38140,'38'),(1212,'ST CHRISTOPHE EN OISANS',38520,'38'),(1213,'ST CHRISTOPHE SUR GUIERS',38380,'38'),(1214,'ST CLAIR DU RHONE',38370,'38'),(1215,'ST CLAIR SUR GALAURE',38940,'38'),(1216,'ST GEOIRS',38590,'38'),(1217,'ST GUILLAUME',38650,'38'),(1218,'ST HILAIRE DU ROSIER',38840,'38'),(1219,'PLATEAU DES PETITES ROCHES',38660,'38'),(1220,'ST HONORE',38350,'38'),(1221,'ST JULIEN DE L HERMS',38122,'38'),(1222,'ST LATTIER',38840,'38'),(1223,'ST MARCELLIN',38160,'38'),(1224,'ST MICHEL DE ST GEOIRS',38590,'38'),(1225,'ST NICOLAS DE MACHERIN',38500,'38'),(1226,'ST PIERRE DE CHARTREUSE',38380,'38'),(1227,'ST PIERRE DE MESAGE',38220,'38'),(1228,'ST PRIM',38370,'38'),(1229,'ST QUENTIN SUR ISERE',38210,'38'),(1230,'ST ROMAIN DE JALIONAS',38460,'38'),(1231,'ST SORLIN DE VIENNE',38200,'38'),(1232,'ST SULPICE DES RIVOIRES',38620,'38'),(1233,'ST THEOFFREY',38119,'38'),(1234,'ST VERAND',38160,'38'),(1235,'ST VICTOR DE MORESTEL',38510,'38'),(1236,'SALAISE SUR SANNE',38150,'38'),(1237,'LA SALETTE FALLAVAUX',38970,'38'),(1238,'LA SALLE EN BEAUMONT',38350,'38'),(1239,'SASSENAGE',38360,'38'),(1240,'PORTE DES BONNEVAUX',38260,'38'),(1241,'PORTE DES BONNEVAUX',38260,'38'),(1242,'SEYSSUEL',38200,'38'),(1243,'SUCCIEU',38300,'38'),(1244,'TIGNIEU JAMEYZIEU',38230,'38'),(1245,'TORCHEFELON',38690,'38'),(1246,'LA TOUR DU PIN',38110,'38'),(1247,'TULLINS',38210,'38'),(1248,'VAULX MILIEU',38090,'38'),(1249,'VERNAS',38460,'38'),(1250,'LA VERPILLIERE',38290,'38'),(1251,'VIENNE',38200,'38'),(1252,'VIF',38450,'38'),(1253,'VILLARD RECULAS',38114,'38'),(1254,'VILLEFONTAINE',38090,'38'),(1255,'VILLEMOIRIEU',38460,'38'),(1256,'VILLE SOUS ANJOU',38150,'38'),(1257,'VAL DE VIRIEU',38730,'38'),(1258,'VOISSANT',38620,'38'),(1259,'CHAMROUSSE',38410,'38'),(1260,'ALIEZE',39270,'39'),(1261,'AROMAS',39240,'39'),(1262,'LES ARSURES',39600,'39'),(1263,'AUDELANGE',39700,'39'),(1264,'AUGISEY',39270,'39'),(1265,'BALANOD',39160,'39'),(1266,'BANS',39380,'39'),(1267,'BEAUFORT ORBAGNA',39190,'39'),(1268,'BEFFIA',39270,'39'),(1269,'BELLEFONTAINE',39400,'39'),(1270,'BESAIN',39800,'39'),(1271,'BIEFMORIN',39800,'39'),(1272,'BLYE',39130,'39'),(1273,'BORNAY',39570,'39'),(1274,'BRAINANS',39800,'39'),(1275,'CHAINEE DES COUPIS',39120,'39'),(1276,'CHAMBERIA',39270,'39'),(1277,'CHARENCY',39250,'39'),(1278,'LA CHARME',39230,'39'),(1279,'LA CHATELAINE',39600,'39'),(1280,'CHATELAY',39380,'39'),(1281,'CHATELNEUF',39300,'39'),(1282,'CHATENOIS',39700,'39'),(1283,'CHAUMERGY',39230,'39'),(1284,'LA CHAUMUSSE',39150,'39'),(1285,'CHAUSSENANS',39800,'39'),(1286,'LA CHAUX EN BRESSE',39230,'39'),(1287,'CHAVERIA',39270,'39'),(1288,'CHEMENOT',39230,'39'),(1289,'ST HYMETIERE SUR VALOUSE',39240,'39'),(1290,'CHENE SEC',39230,'39'),(1291,'CIZE',39300,'39'),(1292,'CLAIRVAUX LES LACS',39130,'39'),(1293,'CLUCY',39110,'39'),(1294,'COGNA',39130,'39'),(1295,'COISERETTE',39200,'39'),(1296,'CONDES',39240,'39'),(1297,'COURLAOUX',39570,'39'),(1298,'COUSANCE',39190,'39'),(1299,'COYRIERE',39200,'39'),(1300,'HAUTEROCHE',39570,'39'),(1301,'CUVIER',39250,'39'),(1302,'DENEZIERES',39130,'39'),(1303,'DESNES',39140,'39'),(1304,'LES DEUX FAYS',39230,'39'),(1305,'DOLE',39100,'39'),(1306,'DOLE',39100,'39'),(1307,'DOYE',39250,'39'),(1308,'VAL D EPY',39320,'39'),(1309,'ETIVAL',39130,'39'),(1310,'LA FERTE',39600,'39'),(1311,'LA FRASNEE',39130,'39'),(1312,'GERAISE',39110,'39'),(1313,'GEVINGEY',39570,'39'),(1314,'GRANDE RIVIERE CHATEAU',39150,'39'),(1315,'GRANDE RIVIERE CHATEAU',39150,'39'),(1316,'LES HAYS',39120,'39'),(1317,'IVORY',39110,'39'),(1318,'LAC DES ROUGES TRUITES',39150,'39'),(1319,'LADOYE SUR SEILLE',39210,'39'),(1320,'LAVANCIA EPERCY',1590,'15'),(1321,'LAVANS LES DOLE',39700,'39'),(1322,'LAVANS LES ST CLAUDE',39170,'39'),(1323,'LECT',39260,'39'),(1324,'VALZIN EN PETITE MONTAGNE',39240,'39'),(1325,'LEMUY',39110,'39'),(1326,'LOISIA',39320,'39'),(1327,'LONGCOCHON',39250,'39'),(1328,'LONS LE SAUNIER',39000,'39'),(1329,'LOULLE',39300,'39'),(1330,'MALANGE',39700,'39'),(1331,'MAYNAL',39190,'39'),(1332,'MENOTEY',39290,'39'),(1333,'MESNAY',39600,'39'),(1334,'MESSIA SUR SORNE',39570,'39'),(1335,'MEUSSIA',39260,'39'),(1336,'MIERY',39800,'39'),(1337,'MIGNOVILLARD',39250,'39'),(1338,'MOIRON',39570,'39'),(1339,'CHASSAL MOLINGES',39360,'39'),(1340,'MONTMARLON',39110,'39'),(1341,'MONTMIREY LE CHATEAU',39290,'39'),(1342,'MONTMOROT',39570,'39'),(1343,'HAUTS DE BIENNE',39400,'39'),(1344,'MOUTOUX',39300,'39'),(1345,'LES TROIS CHATEAUX',39160,'39'),(1346,'OUNANS',39380,'39'),(1347,'LE PASQUIER',39300,'39'),(1348,'PICARREAU',39800,'39'),(1349,'PONT D HERY',39110,'39'),(1350,'PORT LESNEY',39330,'39'),(1351,'PREMANON',39220,'39'),(1352,'PRETIN',39110,'39'),(1353,'RAHON',39120,'39'),(1354,'LES REPOTS',39140,'39'),(1355,'LES ROUSSES',39400,'39'),(1356,'ST CLAUDE',39200,'39'),(1357,'ST CYR MONTMALIN',39600,'39'),(1358,'VAL SURAN',39320,'39'),(1359,'ST LOUP',39120,'39'),(1360,'ST MAURICE CRILLAT',39130,'39'),(1361,'ST MAURICE CRILLAT',39130,'39'),(1362,'ST THIEBAUD',39110,'39'),(1363,'SANTANS',39380,'39'),(1364,'SYAM',39300,'39'),(1365,'TASSENIERES',39120,'39'),(1366,'TAVAUX',39500,'39'),(1367,'THERVAY',39290,'39'),(1368,'THOIRETTE COISIA',39240,'39'),(1369,'THOIRIA',39130,'39'),(1370,'VANNOZ',39300,'39'),(1371,'VAUX SUR POLIGNY',39800,'39'),(1372,'VERGES',39570,'39'),(1373,'VESCLES',39240,'39'),(1374,'VILLENEUVE SOUS PYMONT',39570,'39'),(1375,'VILLETTE LES ARBOIS',39600,'39'),(1376,'VAL SONNETTE',39190,'39'),(1377,'VRIANGE',39700,'39'),(1378,'AMOU',40330,'40'),(1379,'AUDIGNON',40500,'40'),(1380,'BAIGTS',40380,'40'),(1381,'BAS MAUCO',40500,'40'),(1382,'BASSERCLES',40700,'40'),(1383,'BATS',40320,'40'),(1384,'BENQUET',40280,'40'),(1385,'BEYLONGUE',40370,'40'),(1386,'BISCARROSSE',40600,'40'),(1387,'BONNEGARDE',40330,'40'),(1388,'BOURRIOT BERGONCE',40120,'40'),(1389,'BRETAGNE DE MARSAN',40280,'40'),(1390,'CAMPAGNE',40090,'40'),(1391,'CASTAIGNOS SOUSLENS',40700,'40'),(1392,'CLERMONT',40180,'40'),(1393,'ESCALANS',40310,'40'),(1394,'EUGENIE LES BAINS',40320,'40'),(1395,'GABARRET',40310,'40'),(1396,'GAILLERES',40090,'40'),(1397,'GAUJACQ',40330,'40'),(1398,'GELOUX',40090,'40'),(1399,'GRENADE SUR L ADOUR',40270,'40'),(1400,'HASTINGUES',40300,'40'),(1401,'HERM',40990,'40'),(1402,'HERRE',40310,'40'),(1403,'HEUGAS',40180,'40'),(1404,'LABENNE',40530,'40'),(1405,'LABRIT',40420,'40'),(1406,'LACQUY',40120,'40'),(1407,'LACRABE',40700,'40'),(1408,'LAGLORIEUSE',40090,'40'),(1409,'LAGRANGE',40240,'40'),(1410,'LALUQUE',40465,'40'),(1411,'LESPERON',40260,'40'),(1412,'LEVIGNACQ',40170,'40'),(1413,'LUBBON',40240,'40'),(1414,'RETJONS',40120,'40'),(1415,'MANO',40410,'40'),(1416,'MAURRIN',40270,'40'),(1417,'MAUVEZIN D ARMAGNAC',40240,'40'),(1418,'MEES',40990,'40'),(1419,'MEILHAN',40400,'40'),(1420,'MEZOS',40170,'40'),(1421,'MIMBASTE',40350,'40'),(1422,'MOLIETS ET MAA',40660,'40'),(1423,'MONTSOUE',40500,'40'),(1424,'MORCENX LA NOUVELLE',40110,'40'),(1425,'MORCENX LA NOUVELLE',40110,'40'),(1426,'MUGRON',40250,'40'),(1427,'NARROSSE',40180,'40'),(1428,'ONARD',40380,'40'),(1429,'ONDRES',40440,'40'),(1430,'ONESSE LAHARIE',40110,'40'),(1431,'ORIST',40300,'40'),(1432,'ORX',40230,'40'),(1433,'PARLEBOSCQ',40310,'40'),(1434,'PHILONDENX',40320,'40'),(1435,'PISSOS',40410,'40'),(1436,'POMAREZ',40360,'40'),(1437,'PONTONX SUR L ADOUR',40465,'40'),(1438,'POUDENX',40700,'40'),(1439,'POUILLON',40350,'40'),(1440,'RIVIERE SAAS ET GOURBY',40180,'40'),(1441,'SABRES',40630,'40'),(1442,'ST AUBIN',40250,'40'),(1443,'ST JEAN DE LIER',40380,'40'),(1444,'ST JUSTIN',40240,'40'),(1445,'ST MARTIN D ONEY',40090,'40'),(1446,'ST PANDELON',40180,'40'),(1447,'ST PAUL LES DAX',40990,'40'),(1448,'ST PIERRE DU MONT',40280,'40'),(1449,'SANGUINET',40460,'40'),(1450,'SARRAZIET',40500,'40'),(1451,'SAUBION',40230,'40'),(1452,'SAUGNAC ET CAMBRAN',40180,'40'),(1453,'LE SEN',40420,'40'),(1454,'SOORTS HOSSEGOR',40150,'40'),(1455,'SORE',40430,'40'),(1456,'SOUPROSSE',40250,'40'),(1457,'SOUSTONS',40140,'40'),(1458,'TALLER',40260,'40'),(1459,'TARNOS',40220,'40'),(1460,'TARTAS',40400,'40'),(1461,'TILH',40360,'40'),(1462,'TRENSACQ',40630,'40'),(1463,'UCHACQ ET PARENTIS',40090,'40'),(1464,'VIEUX BOUCAU LES BAINS',40480,'40'),(1465,'YCHOUX',40160,'40'),(1466,'AVARAY',41500,'41'),(1467,'BRIOU',41370,'41'),(1468,'BUSLOUP',41160,'41'),(1469,'CHAMPIGNY EN BEAUCE',41330,'41'),(1470,'LE CONTROIS EN SOLOGNE',41120,'41'),(1471,'COUDDES',41700,'41'),(1472,'COULOMMIERS LA TOUR',41100,'41'),(1473,'DHUIZON',41220,'41'),(1474,'DROUE',41270,'41'),(1475,'FAVEROLLES SUR CHER',41400,'41'),(1476,'FAYE',41100,'41'),(1477,'LAVARDIN',41800,'41'),(1478,'LIGNIERES',41160,'41'),(1479,'LOREUX',41200,'41'),(1480,'MARCILLY EN BEAUCE',41100,'41'),(1481,'MAVES',41500,'41'),(1482,'MENARS',41500,'41'),(1483,'MENNETOU SUR CHER',41320,'41'),(1484,'LES MONTILS',41120,'41'),(1485,'MONTOIRE SUR LE LOIR',41800,'41'),(1486,'MONT PRES CHAMBORD',41250,'41'),(1487,'MONTROUVEAU',41800,'41');
/*!40000 ALTER TABLE `villes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `conventions`
--

USE `conventions`;

--
-- Final view structure for view `stagiaireformation`
--

/*!50001 DROP VIEW IF EXISTS `stagiaireformation`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `stagiaireformation` AS select `f`.`idFormation` AS `idFormation`,`f`.`libelleFormation` AS `libelleFormation`,`s`.`idSessionFormation` AS `idSessionFormation`,`s`.`numOffreFormation` AS `numOffreFormation`,`p`.`idPeriode` AS `idPeriode`,`p`.`dateDebutPAE` AS `dateDebutPAE`,`p`.`dateFinPAE` AS `dateFinPAE`,`p`.`dateRapportSuivi` AS `dateRapportSuivi`,`p`.`objectifPAE` AS `objectifPAE`,`pa`.`idParticipation` AS `idParticipation`,`pa`.`dateDebut` AS `dateDebut`,`pa`.`dateFin` AS `dateFin`,`st`.`idStagiaire` AS `idStagiaire`,`st`.`genreStagiaire` AS `genreStagiaire`,`st`.`nomStagiaire` AS `nomStagiaire`,`st`.`prenomStagiaire` AS `prenomStagiaire`,`st`.`numSecuStagiaire` AS `numSecuStagiaire`,`st`.`numBenefStagiaire` AS `numBenefStagiaire`,`st`.`dateNaissanceStagiaire` AS `dateNaissanceStagiaire`,`st`.`emailStagiaire` AS `emailStagiaire` from ((((`formations` `f` join `sessionsformations` `s` on((`f`.`idFormation` = `s`.`idFormation`))) join `periodesstages` `p` on((`s`.`idSessionFormation` = `p`.`idSessionFormation`))) join `participations` `pa` on((`pa`.`idSessionFormation` = `s`.`idSessionFormation`))) join `stagiaires` `st` on((`st`.`idStagiaire` = `pa`.`idStagiaire`))) */;
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

-- Dump completed on 2021-01-25 17:15:01
