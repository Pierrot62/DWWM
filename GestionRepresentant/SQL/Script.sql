-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 08 déc. 2020 à 16:17
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionrepresentant`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `IdClient` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` varchar(25) DEFAULT NULL,
  `VilleClient` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdClient`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`IdClient`, `NomClient`, `VilleClient`) VALUES
(2, 'TEST', 'TEST'),
(3, 'Charles', 'Compiègne'),
(4, 'Denis', 'Montpellier'),
(5, 'Emile', 'Strasbourg'),
(8, 'Pierre', 'Calais');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `IdProduit` int(11) NOT NULL AUTO_INCREMENT,
  `NomProduit` varchar(25) DEFAULT NULL,
  `CouleurProduit` varchar(25) DEFAULT NULL,
  `PoidsProduit` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`IdProduit`, `NomProduit`, `CouleurProduit`, `PoidsProduit`) VALUES
(1, 'Aspirateur', 'VERT', 3546),
(2, 'Trottinette', 'Bleu', 1423),
(5, 'VACHE', 'FOLLE', 5000),
(6, 'test1', 'rouge', 4444),
(7, 'test2', 'rouge', 444);

-- --------------------------------------------------------

--
-- Structure de la table `representants`
--

DROP TABLE IF EXISTS `representants`;
CREATE TABLE IF NOT EXISTS `representants` (
  `IdRepres` int(11) NOT NULL AUTO_INCREMENT,
  `NomRepres` varchar(25) DEFAULT NULL,
  `VilleRepres` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdRepres`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `representants`
--

INSERT INTO `representants` (`IdRepres`, `NomRepres`, `VilleRepres`) VALUES
(1, 'Non Renseigner', 'Non Renseigner'),
(7, 'Pierre', 'Boulogne');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `TitreRole` varchar(30) NOT NULL,
  `numRole` int(11) NOT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`idRole`, `TitreRole`, `numRole`) VALUES
(1, 'user', 1),
(2, 'admin', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nomUser` varchar(50) NOT NULL,
  `prenomUser` varchar(50) NOT NULL,
  `mdpUser` varchar(50) NOT NULL,
  `roleUser` int(1) NOT NULL,
  `pseudoUser` varchar(30) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `nomUser`, `prenomUser`, `mdpUser`, `roleUser`, `pseudoUser`) VALUES
(1, 'Courquin', 'Pierre-Edouard', 'd9b1d7db4cd6e70935368a1efb10e377', 1, '123'),
(2, 'admin', 'admin', 'd9b1d7db4cd6e70935368a1efb10e377', 2, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

DROP TABLE IF EXISTS `ventes`;
CREATE TABLE IF NOT EXISTS `ventes` (
  `IdVente` int(11) NOT NULL AUTO_INCREMENT,
  `IdRepres` int(11) DEFAULT NULL,
  `IdProduit` int(11) DEFAULT NULL,
  `IdClient` int(11) DEFAULT NULL,
  `Quantite` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdVente`),
  KEY `IdClient` (`IdClient`),
  KEY `IdProduit` (`IdProduit`),
  KEY `IdRepres` (`IdRepres`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ventes`
--

INSERT INTO `ventes` (`IdVente`, `IdRepres`, `IdProduit`, `IdClient`, `Quantite`) VALUES
(3, 1, 2, 3, 1),
(21, 1, 1, 3, 99999),
(22, 7, 5, 5, 5);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ventes`
--
ALTER TABLE `ventes`
  ADD CONSTRAINT `ventes_ibfk_1` FOREIGN KEY (`IdClient`) REFERENCES `clients` (`IdClient`),
  ADD CONSTRAINT `ventes_ibfk_2` FOREIGN KEY (`IdProduit`) REFERENCES `produits` (`IdProduit`),
  ADD CONSTRAINT `ventes_ibfk_3` FOREIGN KEY (`IdRepres`) REFERENCES `representants` (`IdRepres`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
