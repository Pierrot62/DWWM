1  -  SELECT `nomHotel` , `villeHotel` FROM hotels
2  -  SELECT nomClient , prenomClient , adresseClient , villeClient FROM clients WHERE nomClient = "White"
3  -  SELECT nomStation , altitudeStation FROM stations where altitudeStation < 1000
4  -  SELECT numChambre , capaciteChambre FROM chambres where capaciteChambre > 1
5  -  SELECT nomClient , villeClient FROM clients WHERE villeClient != "Londres"
6  -  SELECT stations.nomStation , hotels.nomHotel , hotels.categorieHotel , hotels.villeHotel FROM stations LEFT JOIN hotels ON stations.idStation = hotels.idStation
7  -  SELECT numChambre , nomHotel , categorieHotel , villeHotel FROM chambres INNER JOIN hotels ON chambres.idHotel = hotels.idHotel
8  -  SELECT nomClient , dateReservationSejour , dateDebutSejour , dateFinSejour FROM clients INNER JOIN reservations ON reservations.idClient = clients.idClient
9  -  SELECT numChambre , hotels.nomHotel , stations.nomStation FROM chambres INNER JOIN hotels ON chambres.idHotel = hotels.idHotel INNER JOIN stations ON hotels.idStation = stations.idStation
10 -  SELECT chambres.numChambre, hotels.nomHotel, hotels.categorieHotel, hotels.villeHotel, chambres.capaciteChambre FROM chambres INNER JOIN hotels ON chambres.IdChambre = hotels.idHotel WHERE chambres.capaciteChambre > 1 AND hotels.villeHotel = "Bretou"
11 -  SELECT COUNT(nomHotel) FROM hotels GROUP BY idStation 
12 -  SELECT COUNT(numChambre) FROM chambres GROUP BY idHotel         jarrive a compter le nb de chambre par hotel mais pas par station
13 -  SELECT COUNT(numChambre) FROM chambres WHERE capaciteChambre > 1 GROUP BY idHotel         jarrive a compter le nb de chambre par hotel mais pas par station
14 - 
15 -  SELECT nomStation , AVG(DATEDIFF(`dateFinSejour`,`dateDebutSejour`)) FROM stations GROUP BY stations  Pas terminer
16 - voir phpMyAdmin
17 - voir phpMyAdmin
18 - ALTER TABLE `reservations` ADD `archive` VARCHAR(5) NOT NULL AFTER `IdChambre`;
19 - DELIMITER |
     CREATE PROCEDURE archivage()
     BEGIN 
	 UPDATE reservations set archive = "oui" WHERE reservations.dateFinSejour > CAST(NOW() AS DATE);
     END |
     DELIMITER ;

