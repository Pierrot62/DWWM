
CREATE DATABASE IF NOT EXISTS CDAPierre;
use CDAPierre;

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville`(
  `idVille` int(11) AUTO_INCREMENT NOT NULL  PRIMARY KEY,
  `nomVille` varchar(255) NOT NULL,
  `numDepVille` int(2) NOT NULL,
  `cpVille` varchar(5) NOT NULL,
  `majVille` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
) ENGINE=InnoDB, CHARSET=utf8;

--
-- Jeu de données
--

INSERT INTO `ville` (`idVille`, `nomVille`, `numDepVille`, `cpVille`, `majVille`) VALUES
(1, 'Boulogne', 62, 62200),
(2, 'Lille', 59, 59000),
(3, 'Marseille', 13, 13000);
