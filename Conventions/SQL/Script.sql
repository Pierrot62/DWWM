#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS conventions;
CREATE DATABASE IF NOT EXISTS `conventions` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `conventions`;

DROP TABLE IF EXISTS `animations`;
DROP TABLE IF EXISTS `LibellesComportementsProfessionnels`;
DROP TABLE IF EXISTS `ValeursComportementsProfessionnels`;
DROP TABLE IF EXISTS `entreprises`;
DROP TABLE IF EXISTS `ValeursAcquis`;
DROP TABLE IF EXISTS `evaluations`;
DROP TABLE IF EXISTS `formations`;
DROP TABLE IF EXISTS `LibellesHoraires`;
DROP TABLE IF EXISTS `ValeursHoraires`;
DROP TABLE IF EXISTS `participations`;
DROP TABLE IF EXISTS `sessionsformation`;
DROP TABLE IF EXISTS `stages`;
DROP TABLE IF EXISTS `stagiaires`;
DROP TABLE IF EXISTS `LibellesTravauxDangereux`;
DROP TABLE IF EXISTS `ValeursTravauxDangereux`;
DROP TABLE IF EXISTS `tuteurs`;
DROP TABLE IF EXISTS `villes`;
DROP TABLE IF EXISTS `Utilisateurs`;
DROP TABLE IF EXISTS `Roles`;
DROP TABLE IF EXISTS `regions`;
DROP TABLE IF EXISTS `departements`;

#------------------------------------------------------------
# Table: Villes
#------------------------------------------------------------

CREATE TABLE Villes(
        idVille    Int  Auto_increment  NOT NULL PRIMARY KEY ,
        idDepartement varchar(3),
        nomVille   Varchar (50) NOT NULL ,
        codePostal Int NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: Utilisateurs
#------------------------------------------------------------

CREATE TABLE Utilisateurs(
        idUtilisateur     Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomUtilisateur    Varchar (50) NOT NULL ,
        prenomUtilisateur Varchar (50) NOT NULL ,
        emailUtilisateur  Varchar (50) NOT NULL ,
        mdpUtilisateur    Varchar (50) NOT NULL ,
		datePeremption         Varchar (15) NULL ,
        idRole            Int NOT NULL,
		UNIQUE KEY `email` (`emailUtilisateur`)
)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: roles
#------------------------------------------------------------

CREATE TABLE Roles(
        idRole      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        libelleRole Varchar (25) NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: Stagiaires
#------------------------------------------------------------

CREATE TABLE Stagiaires(
        idStagiaire            Int  Auto_increment  NOT NULL PRIMARY KEY,
        genreStagiaire         Varchar (1) NOT NULL ,
        nomStagiaire           Varchar (50) NOT NULL ,
        prenomStagiaire        Varchar (50) NOT NULL ,
        numSecuStagiaire       Varchar (15) NOT NULL ,
        numBenefStagiaire      Varchar (15) NOT NULL ,
        emailStagiaire         Varchar (50) NOT NULL ,
        dateNaissanceStagiaire Date NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: Formations
#------------------------------------------------------------

CREATE TABLE Formations(
        idFormation      Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleFormation Varchar (200) NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: SessionsFormations
#------------------------------------------------------------

CREATE TABLE SessionsFormations(
        idSessionFormation Int  Auto_increment  NOT NULL PRIMARY KEY,
        numOffreFormation  Varchar (50) NOT NULL ,
        idFormation        Int NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: Entreprises
#------------------------------------------------------------

CREATE TABLE Entreprises(
        idEntreprise       Int  Auto_increment  NOT NULL PRIMARY KEY,
        raisonSociale      Varchar (50) NOT NULL ,
        statutJuridiqueEnt Varchar (50) NOT NULL ,
        adresseEnt         Varchar (50) NOT NULL ,
        numSiretEnt        Varchar (14) NOT NULL ,
        telEnt             Varchar (10) NOT NULL ,
        assureurEnt        Varchar (50) NOT NULL ,
        numSocietaire      Varchar (20) NOT NULL ,
        nomRepresentant    Varchar (50) NOT NULL ,
        prenomRepresentant Varchar (50) NOT NULL ,
        fctRepresentant    Varchar (50) NOT NULL ,
        telRepresentant    Varchar (10) NOT NULL ,
        mailRepresentant   Varchar (100) NOT NULL,
        idVille            Int  NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: Tuteurs
#------------------------------------------------------------

CREATE TABLE Tuteurs(
        idTuteur       Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomTuteur      Varchar (50) NOT NULL ,
        prenomTuteur   Varchar (50) NOT NULL ,
        fonctionTuteur Varchar (100) NOT NULL ,
        telTuteur      Varchar (10) NOT NULL ,
        mailTuteur     Varchar (100) NOT NULL ,
        idEntreprise   Int NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: Stages
#------------------------------------------------------------

CREATE TABLE Stages(
        idStage              Int  Auto_increment  NOT NULL PRIMARY KEY,
		etape				 Int NOT NULL,
        dateVisite           Date NOT NULL ,
        nomVisiteur          Varchar (200) NOT NULL ,    
        lieuRealisation      Varchar (200) NOT NULL ,
        deplacement          Bool NOT NULL ,
        frequenceDeplacement Varchar (200) NOT NULL ,
        modeDeplacement      Varchar (200) NOT NULL ,
        attFormReglement     Bool NOT NULL ,
        libelleAttFormReg    Varchar (200) ,
        visiteMedical        Bool NOT NULL ,
        travauxDang          Bool NOT NULL ,
        dateDeclarationDerog Date NOT NULL ,
        sujetStage           Text NOT NULL ,
        travauxRealises      Text NOT NULL ,
        objectifPAE          Text NOT NULL ,
        dateDebut            Date NOT NULL ,
        dateFin              Date NOT NULL ,
        idTuteur  Int   NOT NULL ,
        idStagiaire Int NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: Animations
#------------------------------------------------------------

CREATE TABLE Animations
(
    idAnimation INT Auto_increment NOT NULL PRIMARY KEY,
    idUtilisateur  INT NOT NULL,
    idFormation INT NOT NULL 
)ENGINE=InnoDB, CHARSET = UTF8;  

#------------------------------------------------------------
# Table: Participations
#------------------------------------------------------------

CREATE TABLE Participations
(
    idParticipation INT Auto_increment NOT NULL PRIMARY KEY,
    dateDebut DATE NOT NULL, 
    dateFin DATE NOT NULL,
    idSessionFormation INT NOT NULL, 
    idStagiaire INT NOT NULL
)ENGINE=InnoDB, CHARSET = UTF8;  


#------------------------------------------------------------
# Table: evaluations
#------------------------------------------------------------

CREATE TABLE Evaluations
(
        idStage              Int    NOT NULL PRIMARY KEY,
        dateEvaluation       Date NOT NULL ,
        objectifAcquisition  Int NOT NULL COMMENT "1:totalement 2:partiellement 3:non",
        comportementMt       Int NOT NULL COMMENT "1:adapté 2:en progression 3:peu adapté",
		satisfactionEnt      Int NOT NULL COMMENT "1:satisfaite 2: peu satisfaite 3:pas satisfaite",
        remarqueEnt          Char(250) NOT NULL ,
        perspectiveEmb       Int NOT NULL COMMENT "1:CDI 2:CDD 3:Alternance 4:Neant"

)ENGINE=InnoDB, CHARSET = UTF8;

CREATE TABLE LibellesTravauxDangereux
(
    idLibelleTravauxDangereux   Int Auto_increment  NOT NULL PRIMARY KEY,
    ordreTravaux INT NOT NULL , 
    libelleTravaux VARCHAR(100) NOT NULL  
)ENGINE=InnoDB, CHARSET = UTF8;

CREATE TABLE ValeursTravauxDangereux
(
    idTravauxDangereux  Int Auto_increment NOT NULL PRIMARY KEY,
    idStage   Int   NOT NULL,
    idLibelleTravauxDangereux INT NOT NULL , 
    valeurTravaux  Int 
)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: horaires
#------------------------------------------------------------

CREATE TABLE LibellesHoraires
(
    idLibelleHoraire   Int Auto_increment  NOT NULL PRIMARY KEY,
    ordreHoraire INT NOT NULL , 
    libelleHoraire VARCHAR(40) NOT NULL  
)ENGINE=InnoDB, CHARSET = UTF8;

CREATE TABLE ValeursHoraires
(
    idValeurHoraire   Int Auto_increment NOT NULL PRIMARY KEY,
    idStage   Int   NOT NULL,
    idLibelleHoraire INT NOT NULL , 
    valeurHoraire  Time
)ENGINE=InnoDB, CHARSET = UTF8;

CREATE TABLE LibellesComportementsProfessionnels
(
    idLibelleComportementProfessionnel   Int  Auto_increment  NOT NULL PRIMARY KEY,
    ordreComportement INT NOT NULL , 
    libelleComportement VARCHAR(100) NOT NULL  
)ENGINE=InnoDB, CHARSET = UTF8;

CREATE TABLE ValeursComportementsProfessionnels
(
    idComportementProfessionnel Int Auto_increment NOT NULL PRIMARY KEY,
    idStage   Int NOT NULL,
    idLibelleComportementProfessionnel INT NOT NULL , 
    valeurComportement INT  
)ENGINE=InnoDB, CHARSET = UTF8;


CREATE TABLE ValeursAcquis
(
    idValeurAcquis   Int  Auto_increment NOT NULL PRIMARY KEY,
    idStage   Int  NOT NULL,
	ordreAcquis INT NOT NULL,
    libelleAcquis VARCHAR(200) NOT NULL , 
    valeurAcquis INT  
)ENGINE=InnoDB, CHARSET = UTF8;




ALTER TABLE SessionsFormations
ADD CONSTRAINT FK_SessionsFormations_Formations
FOREIGN KEY (idFormation)
REFERENCES Formations(idFormation);

ALTER TABLE Tuteurs
ADD CONSTRAINT FK_Tuteurs_Entreprises
FOREIGN KEY (idEntreprise)
REFERENCES Entreprises(idEntreprise);

ALTER TABLE Stages
ADD CONSTRAINT FK_Stages_Stagiaires
FOREIGN KEY (idStagiaire)
REFERENCES Stagiaires(idStagiaire);

ALTER TABLE Stages
ADD CONSTRAINT FK_Stages_Tuteurs
FOREIGN KEY (idTuteur)
REFERENCES Tuteurs(idTuteur);

ALTER TABLE Participations
ADD CONSTRAINT FK_Participations_SessionFormations
FOREIGN KEY (idSessionFormation)
REFERENCES SessionsFormations(idSessionFormation);

ALTER TABLE Participations
ADD CONSTRAINT FK_Participations_Stagiaires
FOREIGN KEY (idStagiaire)
REFERENCES Stagiaires(idStagiaire);

ALTER TABLE Animations
ADD CONSTRAINT FK_Animations_Formations
FOREIGN KEY (idFormation)
REFERENCES Formations(idFormation);

ALTER TABLE Animations
ADD CONSTRAINT FK_Animations_Utilisateurs
FOREIGN KEY (idUtilisateur)
REFERENCES Utilisateurs(idUtilisateur);

ALTER TABLE Utilisateurs
ADD CONSTRAINT FK_Utilisateurs_Roles
FOREIGN KEY (idRole)
REFERENCES Roles(idRole);

ALTER TABLE Entreprises
ADD CONSTRAINT FK_Entreprises_Villes
FOREIGN KEY (idVille)
REFERENCES Villes(idVille);

ALTER TABLE ValeursTravauxDangereux
ADD CONSTRAINT FK_ValeursTravauxDangereux_Stages
FOREIGN KEY (idStage)
REFERENCES Stages(idStage);

ALTER TABLE ValeursTravauxDangereux
ADD CONSTRAINT FK_ValeursTravauxDangereux_LibellesTravauxDangereux
FOREIGN KEY (idLibelleTravauxDangereux)
REFERENCES LibellesTravauxDangereux(idLibelleTravauxDangereux);

ALTER TABLE ValeursHoraires
ADD CONSTRAINT FK_ValeursHoraires_Stages
FOREIGN KEY (idStage)
REFERENCES Stages(idStage);

ALTER TABLE ValeursHoraires
ADD CONSTRAINT FK_ValeursHoraires_LibellesHoraires
FOREIGN KEY (idLibelleHoraire)
REFERENCES LibellesHoraires(idLibelleHoraire);

ALTER TABLE ValeursComportementsProfessionnels
ADD CONSTRAINT FK_ValeursComportementsProfessionnels_Stages
FOREIGN KEY (idStage)
REFERENCES Stages(idStage);

ALTER TABLE ValeursComportementsProfessionnels
ADD CONSTRAINT FK_ValeursCompProf_LibellesCompPro
FOREIGN KEY (idLibelleComportementProfessionnel)
REFERENCES LibellesComportementsProfessionnels(idLibelleComportementProfessionnel);

ALTER TABLE ValeursAcquis
ADD CONSTRAINT FK_ValeursAcquis_Stages
FOREIGN KEY (idStage)
REFERENCES Stages(idStage);

DROP TABLE IF EXISTS `departements`;
CREATE TABLE IF NOT EXISTS `departements` (
  `idDepartement` char(3) NOT NULL PRIMARY KEY,
  `libelleDepartement` varchar(100) NOT NULL,
  `idRegion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table des départements français';


DROP TABLE IF EXISTS `regions`;
CREATE TABLE IF NOT EXISTS `regions` (
  `idRegion` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `libelleRegion` varchar(50) NOT NULL,
  `nb_departs` int(11) NOT NULL
) ENGINE=innoDB DEFAULT CHARSET=utf8;

ALTER TABLE Departements
ADD CONSTRAINT FK_Departements_Regions
FOREIGN KEY (idRegion)
REFERENCES Regions(idRegion);

-- ALTER TABLE Villes
-- ADD CONSTRAINT FK_Villes_idDepartement
-- FOREIGN KEY (idDepartement)
-- REFERENCES Departements(idDepartement);
