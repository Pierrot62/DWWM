


INSERT INTO `entreprises` (`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES
(1, 'Pellentesque Habitant Morbi Institute', 'EURL', '12 Rue des champignons', '12345678901234', '0123456789', 'Et Malesuada Limited', '123', 'Repres', 'repres', 'DG', '0123456789', 'repres@gmail.com', 11560);



INSERT INTO `formations` (`idFormation`, `libelleFormation`,grn,finaliteFormation) VALUES
(1, 'DWWM',164,""),
(2, 'TSAII',172,"");


INSERT INTO `sessionsformations` (`idSessionFormation`, `numOffreFormation`, `idFormation`, `dateDebut`, `dateFin`) VALUES
(1, 19227, 1, '2020-08-31', '2021-05-21'),
(2, 20145, 3, '2021-01-01', '2021-04-30');


INSERT INTO `periodesstages` (`idPeriode`, `idSessionFormation`, `dateDebutPAE`, `dateFinPAE`, `dateRapportSuivi`, `objectifPAE`) VALUES
(1, 1, '2021-02-15', '2021-05-14', '2021-05-01', ''),
(2, 2, '2021-02-05', '2021-02-15', '2021-02-10', ''),
(3, 2, '2021-04-01', '2021-04-20', '2021-04-15', '');


INSERT INTO `stagiaires`(`idStagiaire`, `genreStagiaire`, `nomStagiaire`, `prenomStagiaire`, `numSecuStagiaire`, `numBenefStagiaire`, `dateNaissanceStagiaire`, `emailStagiaire`, `adresse`, `idVilleHabitation`, `villeNaissance`, `TelStagiaire`) VALUES (1, 'F', 'dwOne', 'dwOne', '1211121111222', '12345678', '1995-02-01', 'dwone@gmail.com',"rue des champignons",12,"dunkerque","0123456789"),
(2, 'M', 'dwTwo', 'dwTwo', '1230212123123', '45678945', '1996-02-01', 'dwtwo@gmail.com',"rue des champignons",12,"Paris","0123456789"),
(3, 'M', 'dwThree', 'dwThree', '1451212456456', '12345654', '2025-02-01', 'dwthree@gmail.com',"rue des champignons",15,"lille","0123456789");


INSERT INTO `participations` (`idParticipation`, `idSessionFormation`, `idStagiaire`,dateDebut,dateFin) VALUES
(1, 1, 1,'2020-08-31','2021-05-20'),(2,1,2,'2020-08-31','2021-05-20'),(3,1,3,'2020-08-31','2021-05-20');


INSERT INTO `tuteurs` (`idTuteur`, `nomTuteur`, `prenomTuteur`, `fonctionTuteur`, `telTuteur`, `emailTuteur`, `idEntreprise`) VALUES
(1, 'tuteur', 'tuteur', 'tuteur', '1234567890', 'tuteur@gmail.com', 1);


INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `datePeremption`, `idRole`) VALUES
(2, 'POIX', 'Martine', 'martine.poix@gmail.com', 'Az1+1111', '2099-01-01', 2),
(3, 'dwOne', 'dwOne', 'dwone@gmail.com', 'dwOnedwOne12345678', '2021-06-05', 4),
(4, 'dwTwo', 'dwTwo', 'dwtwo@gmail.com', 'dwTwodwTwo45678945', '2021-06-05', 4),
(5, 'dwThree', 'dwThree', 'dwthree@gmail.com', 'dwThreedwThree12345654', '2021-06-05', 4),
(7, 'tuteur', 'tuteur', 'tuteur@gmail.com', 'tuteurtuteur12345678', '2021-05-29', 3);
INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `datePeremption`, `idRole`) VALUES(8, 'BUTTERDROGHE', 'Herve', 'herve@gmail.com', 'Herve1+111', '2999-12-31', 2);

INSERT INTO `animations` (`idAnimation`, `idUtilisateur`, `idFormation`) VALUES
(1, 2, 1);


INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(1, 1, 1, '08:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(2, 1, 13, '12:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(3, 1, 19, '14:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(4, 1, 7, '17:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(5, 1, 2, '08:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(6, 1, 14, '12:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(7, 1, 20, '14:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(8, 1, 8, '17:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(9, 1, 3, '08:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(10, 1, 15, '12:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(11, 1, 21, '14:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(12, 1, 9, '17:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(13, 1, 4, '08:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(14, 1, 16, '12:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(15, 1, 22, '14:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(16, 1, 10, '17:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(17, 1, 5, '08:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(18, 1, 17, '12:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(19, 1, 23, '14:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(20, 1, 11, '17:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(21, 1, 6, '00:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(22, 1, 18, '00:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(23, 1, 24, '00:00:00');
INSERT INTO `valeurshoraires` (`idValeurHoraires`, `idStage`, `idLibelleHoraire`, `valeurHoraire`) VALUES(24, 1, 12, '00:00:00');


INSERT INTO `stages` (`idStage`, `etape`, `dateVisite`, `nomVisiteur`, `lieuRealisation`, `deplacement`, `frequenceDeplacement`, `modeDeplacement`, `attFormReglement`, `libelleAttFormReg`, `visiteMedical`, `travauxDang`, `dateDeclarationDerog`, `sujetStage`, `travauxRealises`, `objectifPAE`, `dateDebut`, `dateFin`, `idTuteur`, `idStagiaire`, `idPeriode`) VALUES
(1, 4, NULL, NULL, 'entreprise', 0, '', '', 0, '', 0, 0, NULL, 'Créer une appli', NULL, 'Faire un bon stage', '2021-02-15', '2021-05-14', 1, 1, 1);