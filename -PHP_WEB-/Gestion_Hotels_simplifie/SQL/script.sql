
CREATE DATABASE IF NOT EXISTS Gestion_hotels;
use Gestion_hotels;

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `idHotel` int(11) NOT NULL AUTO_INCREMENT,
  `nomHotel` varchar(25) NOT NULL,
  `categorieHotel` int(11) NOT NULL,
  `adresseHotel` varchar(25) NOT NULL,
  `villeHotel` varchar(25) NOT NULL,
  `idStation` int(11) NOT NULL,
  PRIMARY KEY (`idHotel`),
  KEY `FK_Hotels_idStation` (`idStation`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `hotels`
--

INSERT INTO `hotels` (`idHotel`, `nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`, `idStation`) VALUES
(1, 'Le Magnifique', 3, 'rue du bas', 'Pralo', 1),
(2, 'Hotel du haut', 1, 'rue du haut', 'Pralo', 1),
(3, 'Le Narval', 3, 'place de la liberation', 'Vonten', 2),
(4, 'Les Pissenlis', 4, 'place du 14 juillet', 'Bretou', 2),
(5, 'RR Hotel', 5, 'place du bas', 'Bretou', 2),
(6, 'La Brique', 2, 'place du haut', 'Bretou', 2),
(7, 'Le Beau Rivage', 3, 'place du centre', 'Toras', 3),
(8, 'Résidence les marmottes', 1, '1 Chemin des randonneurs', 'Alpe d Huez', 6),
(9, 'Résidence les edelweiss', 5, '2 Rue des sapins', 'Areches', 2),
(10, 'Résidence les panoramas', 4, '7 Avenue de la neige', 'Beaufort', 2),
(11, 'Résidence les sapins', 5, '8 Chemin des pissenlits', 'Aussois', 4),
(12, 'Chalets les marmottes', 3, '10 Rue des etables', 'Avoriaz', 3),
(13, 'Chalets les edelweiss', 3, '8 Avenue des sapins', 'Alpe d Huez', 8),
(14, 'Chalets les panoramas', 2, '3 Chemin de la neige', 'Areches', 6),
(15, 'Chalets les sapins', 5, '3 Rue des pissenlits', 'Beaufort', 8);
