INSERT INTO `animations` (`idAnimation`, `idUtilisateur`, `idFormation`) VALUES
(1, 2, 1);


INSERT INTO `entreprises` (`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES
(1, 'Pellentesque Habitant Morbi Institute', 'EURL', '12 Rue des champignons', '12345678901234', '0123456789', 'Et Malesuada Limited', '123', 'Repres', 'repres', 'DG', '0123456789', 'repres@gmail.com', 11560);



INSERT INTO `formations` (`idFormation`, `libelleFormation`) VALUES
(1, 'DWWM'),
(2, 'TSAII'),
(3, 'ADVF');


INSERT INTO `participations` (`idParticipation`, `idSessionFormation`, `idStagiaire`) VALUES
(1, 1, 1),(2,1,2),(3,1,3);


INSERT INTO `periodesstages` (`idPeriode`, `idSessionFormation`, `dateDebutPAE`, `dateFinPAE`, `dateRapportSuivi`, `objectifPAE`) VALUES
(1, 1, '2021-02-15', '2021-05-14', '2021-05-01', ''),
(2, 2, '2021-02-05', '2021-02-15', '2021-02-10', ''),
(3, 2, '2021-04-01', '2021-04-20', '2021-04-15', '');


INSERT INTO `sessionsformations` (`idSessionFormation`, `numOffreFormation`, `idFormation`, `dateDebut`, `dateFin`) VALUES
(1, 19227, 1, '2020-08-31', '2021-05-21'),
(2, 20145, 3, '2021-01-01', '2021-04-30');


INSERT INTO `stages` (`idStage`, `etape`, `dateVisite`, `nomVisiteur`, `lieuRealisation`, `deplacement`, `frequenceDeplacement`, `modeDeplacement`, `attFormReglement`, `libelleAttFormReg`, `visiteMedical`, `travauxDang`, `dateDeclarationDerog`, `sujetStage`, `travauxRealises`, `objectifPAE`, `dateDebut`, `dateFin`, `idTuteur`, `idStagiaire`, `idPeriode`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2021-02-15', '2021-05-14', 1, 1, 1);


INSERT INTO `stagiaires` (`idStagiaire`, `genreStagiaire`, `nomStagiaire`, `prenomStagiaire`, `numSecuStagiaire`, `numBenefStagiaire`, `dateNaissanceStagiaire`, `emailStagiaire`) VALUES
(1, 'H', 'dwOne', 'dwOne', '1211121111222', '12345678', '1995-02-01', 'dwone@gmail.com'),
(2, 'M', 'dwTwo', 'dwTwo', '1230212123123', '45678945', '1996-02-01', 'dwtwo@gmail.com'),
(3, 'M', 'dwThree', 'dwThree', '1451212456456', '12345654', '2025-02-01', 'dwthree@gmail.com');


INSERT INTO `tuteurs` (`idTuteur`, `nomTuteur`, `prenomTuteur`, `fonctionTuteur`, `telTuteur`, `emailTuteur`, `idEntreprise`) VALUES
(1, 'tuteur', 'tuteur', 'tuteur', '1234567890', 'tuteur@gmail.com', 1);


INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `datePeremption`, `idRole`) VALUES
(2, 'POIX', 'Martine', 'martine.poix@gmail.com', 'Az1+1111', '2099-01-01', 2),
(3, 'dwOne', 'dwOne', 'dwone@gmail.com', 'dwOnedwOne12345678', '2021-06-05', 4),
(4, 'dwTwo', 'dwTwo', 'dwtwo@gmail.com', 'dwTwodwTwo45678945', '2021-06-05', 4),
(5, 'dwThree', 'dwThree', 'dwthree@gmail.com', 'dwThreedwThree12345654', '2021-06-05', 4),
(7, 'tuteur', 'tuteur', 'tuteur@gmail.com', 'tuteurtuteur12345678', '2021-05-29', 3);
