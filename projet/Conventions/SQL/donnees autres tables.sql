USE Conventions;



INSERT INTO `roles` (`idRole`, `libelleRole`) VALUES ('1', 'Administration');	
INSERT INTO `roles` (`idRole`, `libelleRole`) VALUES ('2', 'Formateur');
INSERT INTO `roles` (`idRole`, `libelleRole`) VALUES ('3', 'Tuteur');	
INSERT INTO `roles` (`idRole`, `libelleRole`) VALUES ('4', 'Stagiaire');


INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`,  `idRole`) VALUES (NULL, 'POIX', 'Martine', 'martine.poix@gmail.com', 'toto',  '2');
INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `idRole`) VALUES (NULL, 'ZOZO', 'Thomas', 'thomas.zozo@gmail.com', 'toto',  '2');
INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`,datePeremption, `idRole`) VALUES (NULL, 'SIMS', 'Alfred', 'alfred.sims@gmail.com', 'toto','2021-08-12','2');	
INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, datePeremption,`idRole`) VALUES (NULL, 'toto', 'TOTO', 'toto@gmail.com', 'user', '2022-01-01','1');	
INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `idRole`) VALUES (NULL, 'RJEB', 'Zied', 'zied@gmail.com', 'user', '4');	
INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `idRole`) VALUES (NULL, 'BOSS', 'Tuteur', 'tuteur@gmail.com', 'user', '3');


INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"ADMINISTRATEUR D’INFRASTRUCTURES SÉCURISÉES");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"INSTALLATEUR DE RÉSEAUX DE TÉLÉCOMMUNICATIONS");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"CONNAÎTRE ET APPLIQUER LA MÉTHODE 5S");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"AGENT DE FABRICATION D'ENSEMBLE MÉTALLIQUE");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"CONDUCTEUR D'INSTALLATION ET DE MACHINES AUTOMATISÉES");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"MÉCANICIEN DE MAINTENANCE AUTOMOBILE");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"PARCOURS CRÉATEURS D'ENTREPRISE");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"DÉVELOPPEUR WEB ET WEB MOBILE");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"FLUIDES FRIGORIGÈNES : ATTESTATION D’APTITUDE CATÉGORIE I");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"AUTOMATES SIEMENS S7 300 - S7 400 AVEC STEP7 : ASSURER LA MAINTENANCE RÉSEAU PARTIE 1");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"FORMATION PRÉPARATOIRE AUX FORMATIONS DU TERTIAIRE NIVEAU V");

INSERT INTO `Libellescomportementsprofessionnels`(`idLibellecomportementprofessionnel`, `ordreComportement`, `libelleComportement`) VALUES (NULL,1,"Ponctualité, respect des horaires et de la durée de travail ");
INSERT INTO `Libellescomportementsprofessionnels`(`idLibellecomportementprofessionnel`, `ordreComportement`, `libelleComportement`) VALUES (NULL,2,"Présentation, tenue compatible avec l’environnement professionnel ");
INSERT INTO `Libellescomportementsprofessionnels`(`idLibellecomportementprofessionnel`, `ordreComportement`, `libelleComportement`) VALUES (NULL,3,"Adaptation, intégration à l’équipe ");
INSERT INTO `Libellescomportementsprofessionnels`(`idLibellecomportementprofessionnel`, `ordreComportement`, `libelleComportement`) VALUES (NULL,4,"Établir des relations professionnelles avec l’environnement de travail ");
INSERT INTO `Libellescomportementsprofessionnels`(`idLibellecomportementprofessionnel`, `ordreComportement`, `libelleComportement`) VALUES (NULL,5,"Communiquer, rendre compte de son travail ");
INSERT INTO `Libellescomportementsprofessionnels`(`idLibellecomportementprofessionnel`, `ordreComportement`, `libelleComportement`) VALUES (NULL,6,"Réaliser des tâches de manière autonome ");
INSERT INTO `Libellescomportementsprofessionnels`(`idLibellecomportementprofessionnel`, `ordreComportement`, `libelleComportement`) VALUES (NULL,7,"Respecter les consignes ");
INSERT INTO `Libellescomportementsprofessionnels`(`idLibellecomportementprofessionnel`, `ordreComportement`, `libelleComportement`) VALUES (NULL,8," Respecter le matériel et l’environnement technique ");
INSERT INTO `Libellescomportementsprofessionnels`(`idLibellecomportementprofessionnel`, `ordreComportement`, `libelleComportement`) VALUES (NULL,9,"Agir de façon organisée et méthodique ");
INSERT INTO `Libellescomportementsprofessionnels`(`idLibellecomportementprofessionnel`, `ordreComportement`, `libelleComportement`) VALUES (NULL,10,"Respecter les critères qualité de l’entreprise ");
INSERT INTO `Libellescomportementsprofessionnels`(`idLibellecomportementprofessionnel`, `ordreComportement`, `libelleComportement`) VALUES (NULL,11,"Respect des règles d’hygiène et de sécurité ");

INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,1,"Agents chimiques dangereux ");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,2,"Agents biologiques ");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,3,"Vibrations mécaniques");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,4,"Rayonnements");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,5,"Milieu hyperbare ");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,6,"Températures extrêmes");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,7,"Effondrement et ensevelissement");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,8,"Appareils sous pression");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,9,"Milieu confiné ");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,10,"Travaux en contact avec du verre ou du métal en fusion");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,11,"Manutentions manuelles");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,12,"Risques électriques ");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,13,"Utilisation de machines ");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,14,"Travaux en hauteur ");
INSERT INTO `Libellestravauxdangereux`(`idLibelletravauxdangereux`, `ordreTravaux`, `libelleTravaux`) VALUES (NULL,15,"Contact avec des animaux");


INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Pellentesque Habitant Morbi Institute","EURL","7071 Suspendisse Road","81897909800006","0725101214","Et Malesuada Limited","7880782597146189","Hall","Ingrid","ouvrier ","0785101214","diam.Pellentesque.habitant@pretiumaliquetmetus.net",1);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Ligula Limited","SARL","715-7324 Erat. Road","47906057600002","0621548774","Duis Dignissim Company","3556707340853576","Perez","Timon","secretaire ","0621548714","nisi.magna@Phasellusdolor.org",56);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Eu Elit Nulla PC","EURL","870-3416 Vel Ave","82642455800003","0741526325","Curabitur LLC","1995715917806923","Ford","Kitra","developpeur ","0741521325","scelerisque.scelerisque@DonecnibhQuisque.net",41);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Lectus Pede PC","SARL","Ap #149-9089 Pellentesque St.","79366437600001","0752654821","Sapien Corp.","4317780658754571","Petersen","Ciaran","manager ","0752554821","quis.pede.Praesent@elitAliquam.net",23);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Vulputate Limited","SARL","P.O. Box 990, 7949 Turpis Avenue","11611820900000","0652584798","Mauris Vestibulum Neque Corporation","6240692052903041","Jones","Barry","ouvrier ","0652874798","non@augueporttitor.co.uk",14);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Facilisis Facilisis Magna Limited","SARL","224-578 Egestas Road","99374788000009","0754842315","Et Commodo LLC","5215714382014296","Indigo","Raymond","secretaire ","0752342315","est.congue.a@risusNullaeget.net",8);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Enim Non Company","EURL","4230 Nunc. Av.","12131422300003","0614398480","Felis Institute","4506729184122608","Delaney","Ima","manager ","0614698480","Nunc@indolorFusce.net",254);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Arcu Sed Incorporated","SARL","2163 Faucibus Street","19549927200001","0328514565","Nascetur Ridiculus Mus Inc.","7121956427995593","Miles","Wyoming","developpeur ","0328514465","Mauris.vel@eratnonummy.org",62);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Ut Odio PC","EURL","Ap #597-5678 Aliquam Ave","26994707300004","0713455748","Maecenas Institute","1303925838857152","Lyons","Baxter","manager ","0713453248","consectetuer@Duisdignissim.net",21);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Dui Inc.","SARL","830-8262 Laoreet, St.","93223710000007","0625241236","Donec Incorporated","4682031702470060","Mcleod","Elizabeth","ouvrier ","0621241236","interdum.Curabitur.dictum@feugiatplaceratvelit.org",85);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Elit Sed LLP","SARL","Ap #747-2595 Sed St.","50298190500008","0752148496","Sem Ut Limited","4125639599419708","Wilson","Rajah","infirmier","0752348496","eget.odio.Aliquam@Craspellentesque.edu",36);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Eu Associates","EURL","P.O. Box 493, 9197 Suspendisse Street","31535289800003","0240046261","Pede Company","1436809966716512","Todd","Brian","secretaire ","0240566261","pulvinar@convallis.co.uk",546);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Aliquam Erat Volutpat Corporation","SARL","P.O. Box 169, 2848 Dictum Rd.","69689545700005","0147586521","At Corp.","964785268767808E","Mendez","Emerson","ouvrier ","0147574521","Sed.nulla.ante@necorciDonec.ca",225);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Ut Eros Company","SARL","1892 Nisi. Avenue","89593574000004","0258636545","Sit Amet Dapibus Company","5034035006878489","Sears","Tarik","ouvrier ","0254536545","amet.dapibus@infaucibusorci.co.uk",852);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Massa Limited","EURL","204-2195 Dui St.","17691561900009","0614851725","A Sollicitudin Orci Inc.","1773353246202368","Chavez","Erica","infirmier","0614561725","convallis.ante.lectus@neque.net",45);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Commodo Hendrerit Donec LLC","EURL","Ap #445-5589 Dolor Av.","41086601600000","0725369514","Sagittis Felis Company","776848132E","Park","Ursa","infirmier","0725239514","molestie.Sed@volutpatNulla.co.uk",78);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Posuere At Velit Inc.","SARL","P.O. Box 489, 7782 Et, Rd.","34085502200000","0624158795","Montes Institute","2153477651171995","Dennis","Garrett","ouvrier ","0624151495","non@cursusetmagna.net",25);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Vitae Inc.","SARL","6923 Sed Street","33948339800006","0754563258","In PC","8548567751140816","Holloway","Fulton","infirmier","0754596258","sem.Pellentesque@vulputateposuere.net",41);
INSERT INTO `entreprises`(`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL,"Massa Institute","EURL","707-5099 Egestas. Road","85275111400004","0625458632","Libero Nec LLC","2440761","Bolton","Montana","ouvrier ","0625568632","elementum.lorem.ut@erategetipsum.org",32);

INSERT INTO `tuteurs` (`idTuteur`, `nomTuteur`, `prenomTuteur`, `fonctionTuteur`, `telTuteur`, `emailTuteur`, `idEntreprise`) VALUES (NULL, 'Tuteur', 'De fou', 'developpeur', '0614151602', 'toto@gmail.com', '1');	
INSERT INTO `tuteurs` (`idTuteur`, `nomTuteur`, `prenomTuteur`, `fonctionTuteur`, `telTuteur`, `emailTuteur`, `idEntreprise`) VALUES (NULL, 'Nico', 'sarko', 'PDG', '0614475402', 'nico@gmail.com', '2');	
INSERT INTO `tuteurs` (`idTuteur`, `nomTuteur`, `prenomTuteur`, `fonctionTuteur`, `telTuteur`, `emailTuteur`, `idEntreprise`) VALUES (NULL, 'Tuteur', 'De fou', 'developpeur', '0614151602', 'toto@gmail.com', '1');
INSERT INTO `tuteurs` (`idTuteur`, `nomTuteur`, `prenomTuteur`, `fonctionTuteur`, `telTuteur`, `emailTuteur`, `idEntreprise`) VALUES (NULL, 'Pierre', 'Lapin', 'developpeur', '0445145402', 'pierre@gmail.com', '1');	


INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (1,"M","Carey","Leilani","979875594631213","374216380873751","2021-05-05","toto1@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (2,"M","George","Cyrus","857493163485533","649458983885388","2021-05-05","toto2@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (3,"M","Haney","Gage","038726091478274","272642876819619","2021-05-05","toto3@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (4,"M","Wyatt","Cain","891058839878816","208418261710884","2021-05-05","toto4@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (5,"M","Fowler","Ezra","314606761239376","976588398060752","2021-05-05","toto5@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (6,"M","House","Meredith","789830079489082","157644599786943","2021-05-05","toto6@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (7,"M","Patrick","Burton","986813762093261","720600938056958","2021-05-05","toto7@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (8,"M","Hampton","Kylan","210170160906109","330731335504237","2021-05-05","tot8o@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (9,"M","Jefferson","Tiger","780320275928309","066162891679420","2021-05-05","tot9o@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (10,"F","Clayton","Lacy","052321302396563","469915021268419","2021-05-05","toto10@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (11,"F","Acevedo","Halla","893820518555182","932296509553262","2021-05-05","toto11@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (12,"F","Spence","Cherokee","548104762075293","883444967643750","2021-05-05","toto12@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (13,"F","Waters","Xantha","252427049584885","933853937166229","2021-05-05","toto13@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (14,"F","Barry","Jessica","561555919664555","922337272739623","2021-05-05","tot14o@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (15,"F","Middleton","Veda","905426716797036","177423855049949","2021-05-05","toto15@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (16,"F","Downs","Karen","152186861690277","634119464238204","2021-05-05","tot16o@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (17,"F","Kim","Vincent","960794255563536","692300146623517","2021-05-05","toto17@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (18,"F","Meyer","Boris","571049609829705","937240024817538","2021-05-05","toto18@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (19,"F","Hughes","Emery","905311253622789","723961201807299","2021-05-05","toto19@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (20,"F","Montoya","Igor","663315262419266","509665548797998","2021-05-05","toto20@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (21,"F","Carson","Nell","476858800920747","749393241034339","2021-05-05","toto21@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (22,"F","Austin","Gemma","451002372723906","685788753613137","2021-05-05","toto22@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (23,"F","Carpenter","Quincy","821398793173196","612177681543206","2021-05-05","toto23@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (24,"F","Adkins","Octavia","223951031598459","235861046097779","2021-05-05","tot24o@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (25,"F","Kelley","Phoebe","096023180216368","525742555498415","2021-05-05","tot25o@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (26,"F","Christian","Nicholas","417501349514365","757103316328797","2021-05-05","tot26o@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (27,"F","Mcdonald","Nelle","129732031875740","701826288356067","2021-05-05","tot27o@test.fr");
INSERT INTO `stagiaires` (`idStagiaire`,`genreStagiaire`,`nomStagiaire`,`prenomStagiaire`,`numSecuStagiaire`,`numBenefStagiaire`,`dateNaissanceStagiaire`,`emailStagiaire`) VALUES (28,"F","Marquez","Ira","714416769911156","357971867324688","2021-05-05","tot28o@test.fr");
UPDATE `stagiaires` SET `emailStagiaire`= CONCAT( `nomStagiaire` , "." , `prenomStagiaire`, "@gmail.com");

INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (1,"0048196996550",5);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (2,"2566858494579",1);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (3,"4629508445858",7);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (4,"6425382242961",2);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (5,"3207130638156",6);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (6,"8402414753117",9);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (7,"1306014302529",8);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (8,"7799551572292",3);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (9,"0965264250815",1);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (10,"9166444023295",1);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (11,"6477836051307",1);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (12,"2247163510075",8);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (13,"1134883228241",8);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (14,"6829556746887",5);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (15,"5655969257143",1);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (16,"6353900415990",5);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (17,"2814164537344",6);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (18,"5826459903578",4);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (19,"8862082190314",9);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (20,"7082429191074",6);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (21,"9569958541786",3);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (22,"2417177685592",9);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (23,"1543393588906",5);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (24,"7666511056629",1);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (25,"4296814252157",4);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (26,"6611983230353",9);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (27,"1820264622013",5);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (28,"2784852545671",2);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (29,"4958967041890",8);
INSERT INTO `sessionsformations` (`idSessionFormation`,`numOffreFormation`,`idFormation`) VALUES (30,"0692947198619",3);


INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (1,"2021-09-04 00:26:41","2020-12-09 23:34:59",5,23);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (2,"2020-08-10 06:04:45","2020-11-21 00:50:45",6,20);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (3,"2020-11-11 02:35:12","2020-08-11 06:32:57",4,27);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (4,"2020-03-08 14:14:50","2020-10-04 06:36:05",9,27);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (5,"2020-07-25 13:08:30","2021-04-30 11:54:42",3,10);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (6,"2021-06-13 12:57:21","2020-07-08 16:29:12",8,23);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (7,"2021-12-17 07:00:20","2021-06-30 14:10:04",2,7);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (8,"2020-07-21 03:28:13","2021-01-01 09:52:14",7,19);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (9,"2020-06-03 03:55:51","2022-01-11 05:17:42",2,17);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (10,"2021-12-11 15:56:58","2020-12-24 14:40:24",4,24);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (11,"2020-03-09 02:22:55","2020-09-03 03:27:06",1,25);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (12,"2020-09-16 07:34:00","2020-04-09 22:23:23",4,16);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (13,"2020-06-02 21:48:55","2020-08-31 12:29:23",4,18);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (14,"2020-06-16 17:26:39","2021-05-04 06:04:15",5,14);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (15,"2021-01-14 21:34:25","2021-05-30 03:54:51",8,20);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (16,"2020-12-10 14:38:15","2020-07-25 20:46:23",9,3);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (17,"2020-12-27 08:18:25","2020-07-23 05:17:34",3,7);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (18,"2020-05-26 07:51:27","2020-06-28 12:03:58",5,7);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (19,"2020-09-02 06:45:39","2021-09-21 10:07:35",3,4);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (20,"2020-01-26 05:11:04","2020-05-26 01:37:43",8,20);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (21,"2020-05-28 05:24:22","2020-11-27 20:21:02",3,21);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (22,"2021-12-17 06:51:21","2020-10-20 07:54:21",5,6);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (23,"2020-05-15 04:00:29","2020-06-10 10:37:53",7,11);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (24,"2021-12-27 19:16:06","2020-05-18 05:21:37",8,15);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (25,"2020-05-15 07:25:56","2020-10-08 00:15:10",7,26);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (26,"2020-10-07 03:56:46","2021-05-22 06:59:22",7,6);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (27,"2020-05-05 06:27:36","2020-06-24 07:42:25",6,2);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (28,"2021-04-04 17:14:38","2020-09-22 12:20:19",3,4);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (29,"2020-03-12 11:58:47","2020-06-16 16:01:24",5,8);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (30,"2021-03-25 02:50:11","2021-03-31 17:10:30",5,25);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (31,"2020-05-29 08:43:02","2021-04-26 23:01:42",4,5);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (32,"2021-12-16 16:16:03","2020-10-03 23:45:41",1,7);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (33,"2020-10-07 11:35:40","2021-11-20 21:50:59",8,22);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (34,"2021-11-22 06:23:06","2020-01-13 12:46:53",6,1);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (35,"2021-08-11 08:44:43","2021-08-07 09:28:00",2,10);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (36,"2021-03-08 19:02:01","2021-05-12 11:59:29",8,2);
INSERT INTO `participations` (`idParticipation`,`dateDebut`,`dateFin`,`idSessionFormation`,`idStagiaire`) VALUES (37,"2020-07-30 06:47:21","2020-12-09 00:36:55",7,2);



INSERT INTO `animations`(`idAnimation`, `idUtilisateur`, `idFormation`) VALUES (NULL,1,8);
INSERT INTO `animations`(`idAnimation`, `idUtilisateur`, `idFormation`) VALUES (NULL,2,4);
INSERT INTO `animations`(`idAnimation`, `idUtilisateur`, `idFormation`) VALUES (NULL,3,3);
INSERT INTO `animations`(`idAnimation`, `idUtilisateur`, `idFormation`) VALUES (NULL,4,2);
INSERT INTO `animations`(`idAnimation`, `idUtilisateur`, `idFormation`) VALUES (NULL,5,1);
INSERT INTO `animations`(`idAnimation`, `idUtilisateur`, `idFormation`) VALUES (NULL,6,5);



INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 1 , "horaireDebutJour1");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 2 , "horaireDebutJour2");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 3 , "horaireDebutJour3");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 4 , "horaireDebutJour4");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 5 , "horaireDebutJour5");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 6 , "horaireDebutJour6");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 7 , "horaireFinJour1");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 8 , "horaireFinJour2");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 9 , "horaireFinJour3");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 10 , "horaireFinJour4");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 11 , "horaireFinJour5");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 12 , "horaireFinJour6");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 13 , "horaireDebutDej1");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 14 , "horaireDebutDej2");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 15 , "horaireDebutDej3");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 16 , "horaireDebutDej4");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 17 , "horaireDebutDej5");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 18 , "horaireDebutDej6");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 19 , "horaireFinDej1");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 20 , "horaireFinDej2");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 21 , "horaireFinDej3");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 22 , "horaireFinDej4");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 23 , "horaireFinDej5");
INSERT INTO libellesHoraires (idLibelleHoraire , ordreHoraire , libelleHoraire) VALUES (NULL, 24 , "horaireFinDej6");



insert into stages (idStage, etape, dateVisite, nomVisiteur, lieuRealisation, deplacement, frequenceDeplacement, modeDeplacement, attFormReglement, libelleAttFormReg, visiteMedical, travauxDang, dateDeclarationDerog, sujetStage, travauxRealises, objectifPAE, dateDebut, dateFin, idTuteur, idStagiaire,idPeriode) values (1, 1, '2020-03-02 05:38:31', 'Hersch Monnery', 'Entreprise', 1 , 'Quotidien', 'Vehicule de l entreprise', 0, NULL, 1, 1, '2020-12-01 06:15:35', 'Streamlined maximized task-force', 'Secured demand-driven open system', 'Versatile bottom-line projection', '2020-11-12 21:28:57', '2020-08-13 14:36:33', 3, 6,1);
insert into stages (idStage, etape, dateVisite, nomVisiteur, lieuRealisation, deplacement, frequenceDeplacement, modeDeplacement, attFormReglement, libelleAttFormReg, visiteMedical, travauxDang, dateDeclarationDerog, sujetStage, travauxRealises, objectifPAE, dateDebut, dateFin, idTuteur, idStagiaire,idPeriode) values (2, 2, '2020-06-02 11:16:47', 'Lenard Mengue', 'Entreprise', 0, 'Quotidien', 'Vehicule de l entreprise', 1, 'attestation formation reglementaire', 0, 1, '2020-07-13 23:45:38', 'Assimilated upward-trending contingency', 'Exclusive fresh-thinking throughput', 'Multi-channelled explicit website', '2020-07-02 18:30:19', '2020-11-25 18:52:22', 4, 2,2);
insert into stages (idStage, etape, dateVisite, nomVisiteur, lieuRealisation, deplacement, frequenceDeplacement, modeDeplacement, attFormReglement, libelleAttFormReg, visiteMedical, travauxDang, dateDeclarationDerog, sujetStage, travauxRealises, objectifPAE, dateDebut, dateFin, idTuteur, idStagiaire,idPeriode) values (3, 3, '2020-02-14 12:16:23', 'Esdras Bault', 'Entreprise', 0, 'Quotidien', 'Transport en commun', 1, 'attestation formation reglementaire', 0, 0, '2020-06-26 01:13:45', 'Implemented intangible paradigm', 'Customizable disintermediate website', 'Monitored eco-centric attitude', '2020-02-19 03:19:55', '2020-03-30 03:33:30', 1, 1,2);
insert into stages (idStage, etape, dateVisite, nomVisiteur, lieuRealisation, deplacement, frequenceDeplacement, modeDeplacement, attFormReglement, libelleAttFormReg, visiteMedical, travauxDang, dateDeclarationDerog, sujetStage, travauxRealises, objectifPAE, dateDebut, dateFin, idTuteur, idStagiaire,idPeriode) values (4, 4, '2020-06-07 10:39:04', 'Rube Sholem', 'Entreprise', 1, 'Occasionnels', 'vehicule personnel du stagiaire', 0, NULL, 0, 1, '2020-08-30 02:05:39', 'Public-key responsive productivity', 'Centralized attitude-oriented database', 'Synergized systemic help-desk', '2020-07-25 09:26:01', '2020-07-19 13:08:55', 2, 4,3);
insert into stages (idStage, etape, dateVisite, nomVisiteur, lieuRealisation, deplacement, frequenceDeplacement, modeDeplacement, attFormReglement, libelleAttFormReg, visiteMedical, travauxDang, dateDeclarationDerog, sujetStage, travauxRealises, objectifPAE, dateDebut, dateFin, idTuteur, idStagiaire,idPeriode) values (5, 5, '2020-09-01 06:48:44', 'Becky Arpur', 'Entreprise', 1, 'Un fois par mois', 'Vehicule de l entreprise', 0, NULL, 1, 1, '2020-07-20 20:08:41', 'De-engineered neutral solution', 'Reactive upward-trending algorithm', 'Reduced uniform knowledge base', '2020-10-23 21:48:47', '2020-03-20 16:30:38', 1, 3,3);

INSERT INTO `evaluations` (`idStage`,`dateEvaluation`,`objectifAcquisition`,`comportementMt`,`satisfactionEnt`,`remarqueEnt`,`perspectiveEmb`) VALUES (1,"2021-02-15",1,1,2,"il est doué",2);
INSERT INTO `evaluations` (`idStage`,`dateEvaluation`,`objectifAcquisition`,`comportementMt`,`satisfactionEnt`,`remarqueEnt`,`perspectiveEmb`) VALUES (2,"2021-03-11",2,2,3,"il manque de rigueur",1);
INSERT INTO `evaluations` (`idStage`,`dateEvaluation`,`objectifAcquisition`,`comportementMt`,`satisfactionEnt`,`remarqueEnt`,`perspectiveEmb`) VALUES (3,"2021-02-09",2,1,2,"il est doué",4);
INSERT INTO `evaluations` (`idStage`,`dateEvaluation`,`objectifAcquisition`,`comportementMt`,`satisfactionEnt`,`remarqueEnt`,`perspectiveEmb`) VALUES (4,"2021-03-05",3,2,1,"il est ingerable",3);
INSERT INTO `evaluations` (`idStage`,`dateEvaluation`,`objectifAcquisition`,`comportementMt`,`satisfactionEnt`,`remarqueEnt`,`perspectiveEmb`) VALUES (5,"2021-04-21",1,2,1,"il est nul",1);
INSERT INTO `evaluations` (`idStage`,`dateEvaluation`,`objectifAcquisition`,`comportementMt`,`satisfactionEnt`,`remarqueEnt`,`perspectiveEmb`) VALUES (6,"2021-02-14",3,1,2,"il est doué",2);

INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,1,1,1);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,1,2,1);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,1,3,2);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,1,4,3);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,1,5,2);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,1,6,5);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,1,7,4);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,1,8,3);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,1,9,4);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,1,10,1);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,1,11,1);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,1,11,2);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,2,1,1);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,2,2,5);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,2,3,4);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,2,4,2);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,2,5,3);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,2,6,2);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,2,7,1);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,2,8,4);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,2,9,5);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,2,10,2);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,2,11,3);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,2,10,3);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,3,1,2);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,3,2,5);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,3,3,4);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,3,4,5);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,3,5,4);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,3,6,2);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,3,7,1);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,3,8,3);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,3,9,1);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,3,10,3);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,3,11,1);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,3,9,5);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,4,1,4);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,4,2,5);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,4,3,2);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,4,4,1);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,4,5,2);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,4,6,1);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,4,7,3);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,4,8,1);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,4,9,5);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,4,10,4);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,4,11,3);
INSERT INTO `valeurscomportementsprofessionnels`(`idComportementProfessionnel`, `idStage`, `idLibelleComportementProfessionnel`, `valeurComportement`) VALUES (NULL,4,8,1);


insert into valeursHoraires (idStage, idLibelleHoraire, valeurHoraire) values (1, 1, '6:59:22');
insert into valeursHoraires (idStage, idLibelleHoraire, valeurHoraire) values (1, 2, '6:59:22');
insert into valeursHoraires (idStage, idLibelleHoraire, valeurHoraire) values (1, 3, '6:59:22');
insert into valeursHoraires (idStage, idLibelleHoraire, valeurHoraire) values (1, 4, '6:59:22');
insert into valeursHoraires (idStage, idLibelleHoraire, valeurHoraire) values (2, 1, '20:15:13');
insert into valeursHoraires (idStage, idLibelleHoraire, valeurHoraire) values (2, 2, '20:15:13');
insert into valeursHoraires (idStage, idLibelleHoraire, valeurHoraire) values (2, 3, '20:15:13');
insert into valeursHoraires (idStage, idLibelleHoraire, valeurHoraire) values (2, 4, '20:15:13');
insert into valeursHoraires (idStage, idLibelleHoraire, valeurHoraire) values (2, 5, '20:15:13');


INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,2,1,"php",4);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,2,2,"sql",2);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,2,3,"js",3);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,2,4,"agile",5);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,3,1,"php",5);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,3,2,"sql",4);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,3,3,"js",2);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,3,4,"agile",2);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,1,1,"php",4);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,1,2,"sql",2);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,1,3,"js",5);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,1,4,"agile",1);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,4,1,"php",5);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,4,2,"sql",4);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,4,3,"js",4);
INSERT INTO `valeursacquis` (`idValeurAcquis`,`idStage`,`ordreAcquis`,`libelleAcquis`,`valeurAcquis`) VALUES (NULL,4,4,"agile",3);

INSERT INTO `periodesstages` (`idPeriode`, `idSessionFormation`, `dateDebutPAE`, `dateFinPAE`, `dateRapportSuivi`, `objectifPAE`) VALUES (NULL, '5', '2021-05-11', '2021-05-15', '2021-07-30', 'sdvujgdhjsdvsdvsdv');
INSERT INTO `periodesstages` (`idPeriode`, `idSessionFormation`, `dateDebutPAE`, `dateFinPAE`, `dateRapportSuivi`, `objectifPAE`) VALUES (NULL, '5', '2021-05-11', '2021-05-25', '2021-06-25', 'sdvsduyjghjvsdvsdv');
INSERT INTO `periodesstages` (`idPeriode`, `idSessionFormation`, `dateDebutPAE`, `dateFinPAE`, `dateRapportSuivi`, `objectifPAE`) VALUES (NULL, '1', '2021-07-11', '2021-08-01', '2021-08-30', 'sdvstyuedrgfhdvsdvsdv');
INSERT INTO `periodesstages` (`idPeriode`, `idSessionFormation`, `dateDebutPAE`, `dateFinPAE`, `dateRapportSuivi`, `objectifPAE`) VALUES (NULL, '21', '2021-02-11', '2021-02-15', '2021-02-25', 'sdvsdfghezgwdfdvsdvsdv');
INSERT INTO `periodesstages` (`idPeriode`, `idSessionFormation`, `dateDebutPAE`, `dateFinPAE`, `dateRapportSuivi`, `objectifPAE`) VALUES (NULL, '21', '2021-05-11', '2021-12-01', '2021-12-30', 'sdvxfgyuytrjsdvsdvaaaaasdv');
INSERT INTO `periodesstages` (`idPeriode`, `idSessionFormation`, `dateDebutPAE`, `dateFinPAE`, `dateRapportSuivi`, `objectifPAE`) VALUES (NULL, '21', '2021-05-11', '2022-01-02', '2022-01-28', 'sdvwxfuyfgusdvsdvsdezrzerv');
INSERT INTO `periodesstages` (`idPeriode`, `idSessionFormation`, `dateDebutPAE`, `dateFinPAE`, `dateRapportSuivi`, `objectifPAE`) VALUES (NULL, '8', '2022-05-11', '2022-12-01', '2022-12-30', 'sdvxfgyuytrjsdvsqazzartedvsdv');
INSERT INTO `periodesstages` (`idPeriode`, `idSessionFormation`, `dateDebutPAE`, `dateFinPAE`, `dateRapportSuivi`, `objectifPAE`) VALUES (NULL, '21', '2022-05-11', '2022-01-02', '2022-01-28', 'sdvwxfuqsdqsdqsdyfgusdvsdvsdv');

INSERT INTO `regions`  VALUES
(1, 'Auvergne-Rhône-Alpes', 12),
(2, 'Bourgogne-Franche-Comté', 8),
(3, 'Bretagne', 4),
(4, 'Centre-Val de Loire', 6),
(5, 'Corse', 2),
(6, 'Grand-Est', 10),
(7, 'Hauts-de-France', 5),
(8, 'Ile-de-France', 8),
(9, 'Normandie', 5),
(10, 'Nouvelle-Aquitaine', 12),
(11, 'Occitanie', 13),
(12, 'Pays de la Loire', 5),
(13, 'Provence-Alpes-Côte d\'Azur', 6),
(14, 'DOM-TOM', 12);


INSERT INTO `departements`  VALUES
('01', 'Ain', 1),
('02', 'Aisne', 7),
('03', 'Allier', 1),
('04', 'Alpes-de-Haute-Provence', 13),
('05', 'Hautes-Alpes', 13),
('06', 'Alpes-Maritimes', 13),
('07', 'Ardèche', 1),
('08', 'Ardennes', 6),
('09', 'Ariège', 11),
('10', 'Aube', 6),
('11', 'Aude', 11),
('12', 'Aveyron', 11),
('13', 'Bouches-du-Rhône', 13),
('14', 'Calvados', 9),
('15', 'Cantal', 1),
('16', 'Charente', 10),
('17', 'Charente-Maritime', 10),
('18', 'Cher', 4),
('19', 'Corrèze', 10),
('21', 'Côte-d\'Or', 2),
('22', 'Côtes-d\'Armor', 3),
('23', 'Creuse', 10),
('24', 'Dordogne', 10),
('25', 'Doubs', 2),
('26', 'Drôme', 1),
('27', 'Eure', 9),
('28', 'Eure-et-Loir', 4),
('29', 'Finistère', 3),
('2A', 'Corse-du-Sud', 5),
('2B', 'Haute-Corse ', 5),
('30', 'Gard', 11),
('31', 'Haute-Garonne', 11),
('32', 'Gers', 11),
('33', 'Gironde', 10),
('34', 'Hérault', 11),
('35', 'Ille-et-Vilaine', 3),
('36', 'Indre', 4),
('37', 'Indre-et-Loire', 4),
('38', 'Isère', 1),
('39', 'Jura', 2),
('40', 'Landes', 10),
('41', 'Loir-et-Cher', 4),
('42', 'Loire', 1),
('43', 'Haute-Loire', 1),
('44', 'Loire-Atlantique', 12),
('45', 'Loiret', 4),
('46', 'Lot', 11),
('47', 'Lot-et-Garonne', 10),
('48', 'Lozère', 11),
('49', 'Maine-et-Loire', 12),
('50', 'Manche', 9),
('51', 'Marne', 6),
('52', 'Haute-Marne', 6),
('53', 'Mayenne', 12),
('54', 'Meurthe-et-Moselle', 6),
('55', 'Meuse', 6),
('56', 'Morbihan', 3),
('57', 'Moselle', 6),
('58', 'Nièvre', 2),
('59', 'Nord', 7),
('60', 'Oise', 7),
('61', 'Orne', 9),
('62', 'Pas-de-Calais', 7),
('63', 'Puy-de-Dôme', 1),
('64', 'Pyrénées-Atlantiques', 10),
('65', 'Hautes-Pyrénées', 11),
('66', 'Pyrénées-Orientales', 11),
('67', 'Bas-Rhin', 6),
('68', 'Haut-Rhin', 6),
('69', 'Rhône', 1),
('70', 'Haute-Saône', 2),
('71', 'Saône-et-Loire', 2),
('72', 'Sarthe', 12),
('73', 'Savoie', 1),
('74', 'Haute-Savoie', 1),
('75', 'Paris', 8),
('76', 'Seine-Maritime', 9),
('77', 'Seine-et-Marne', 8),
('78', 'Yvelines', 8),
('79', 'Deux-Sèvres', 10),
('80', 'Somme', 7),
('81', 'Tarn', 11),
('82', 'Tarn-et-Garonne', 11),
('83', 'Var', 13),
('84', 'Vaucluse', 13),
('85', 'Vendée', 12),
('86', 'Vienne', 10),
('87', 'Haute-Vienne', 10),
('88', 'Vosges', 6),
('89', 'Yonne', 2),
('90', 'Territoire de Belfort', 2),
('91', 'Essonne', 8),
('92', 'Hauts-de-Seine', 8),
('93', 'Seine-Saint-Denis', 8),
('94', 'Val-de-Marne', 8),
('95', 'Val-d\'Oise', 8),
('971', 'Guadeloupe', 14),
('972', 'Martinique', 14),
('973', 'Guyane', 14),
('974', 'La Réunion', 14),
('975', 'Saint-Pierre-et-Miquelon', 14),
('976', 'Mayotte', 14),
('977', 'Saint-Barthélemy	', 14),
('978', 'Saint-Martin	', 14),
('984', 'Terres australes et antarctiques françaises', 14),
('986', 'Wallis-et-Futuna', 14),
('987', 'Polynésie française', 14),
('988', 'Nouvelle-Calédonie', 14),
('989', 'Clipperton', 14);



UPDATE `villes` SET `idDepartement`=substr(`codePostal`,1,2);
UPDATE `villes` SET `idDepartement`='2A' where idDepartement=20;

