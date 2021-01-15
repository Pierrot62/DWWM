#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS conventions;
CREATE DATABASE IF NOT EXISTS `conventions` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `conventions`;



DROP TABLE IF EXISTS `animation`;
DROP TABLE IF EXISTS `LibelleComportementsProfessionnels`;
DROP TABLE IF EXISTS `ValeurComportementsProfessionnels`;
DROP TABLE IF EXISTS `entreprises`;
DROP TABLE IF EXISTS `ValeurAcquis`;
DROP TABLE IF EXISTS `evaluations`;
DROP TABLE IF EXISTS `formations`;
DROP TABLE IF EXISTS `LibelleHoraires`;
DROP TABLE IF EXISTS `ValeurHoraires`;
DROP TABLE IF EXISTS `participation`;
DROP TABLE IF EXISTS `sessionformation`;
DROP TABLE IF EXISTS `stages`;
DROP TABLE IF EXISTS `stagiaires`;
DROP TABLE IF EXISTS `LibelleTravauxDangereux`;
DROP TABLE IF EXISTS `ValeurTravauxDangereux`;
DROP TABLE IF EXISTS `tuteurs`;
DROP TABLE IF EXISTS `villes`;
DROP TABLE IF EXISTS `Utilisateurs`;
DROP TABLE IF EXISTS `Roles`;

#------------------------------------------------------------
# Table: Villes
#------------------------------------------------------------

CREATE TABLE Villes(
        idVille    Int  Auto_increment  NOT NULL PRIMARY KEY ,
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
# Table: SessionFormation
#------------------------------------------------------------

CREATE TABLE SessionFormation(
        idSessionFormation Int  Auto_increment  NOT NULL PRIMARY KEY,
        numOffreFormation  Varchar (50) NOT NULL ,
        objectifPAE        Text NOT NULL ,
        dateRapportSuivi     Date NOT NULL ,
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
# Table: Animation
#------------------------------------------------------------

CREATE TABLE Animation
(
    idAnimation INT Auto_increment NOT NULL PRIMARY KEY,
    idUtilisateur  INT NOT NULL,
    idFormation INT NOT NULL 
)ENGINE=InnoDB, CHARSET = UTF8;  

#------------------------------------------------------------
# Table: Participation
#------------------------------------------------------------

CREATE TABLE Participation
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

CREATE TABLE evaluations
(
        idStage              Int    NOT NULL PRIMARY KEY,
        dateEvaluation       Date NOT NULL ,
        objectifAcquisition  Int NOT NULL COMMENT "1:totalement 2:partiellement 3:non",
        comportementMt       Int NOT NULL COMMENT "1:adapté 2:en progression 3:peu adapté",
		satisfactionEnt      Int NOT NULL COMMENT "1:satisfaite 2: peu satisfaite 3:pas satisfaite",
        remarqueEnt          Char(250) NOT NULL ,
        perspectiveEmb       Int NOT NULL COMMENT "1:CDI 2:CDD 3:Alternance 4:Neant"

)ENGINE=InnoDB, CHARSET = UTF8;

CREATE TABLE LibelleTravauxDangereux
(
    idLibelleTravauxDangereux   Int Auto_increment  NOT NULL PRIMARY KEY,
    ordreTravaux INT NOT NULL , 
    libelleTravaux VARCHAR(100) NOT NULL  
)ENGINE=InnoDB, CHARSET = UTF8;

CREATE TABLE ValeurTravauxDangereux
(
    idTravauxDangereux  Int Auto_increment NOT NULL PRIMARY KEY,
    idStage   Int   NOT NULL,
    idLibelleTravauxDangereux INT NOT NULL , 
    valeurTravaux  Int 
)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: horaires
#------------------------------------------------------------

CREATE TABLE LibelleHoraires
(
    idLibelleHoraire   Int Auto_increment  NOT NULL PRIMARY KEY,
    ordreHoraire INT NOT NULL , 
    libelleHoraire VARCHAR(40) NOT NULL  
)ENGINE=InnoDB, CHARSET = UTF8;

CREATE TABLE ValeurHoraires
(
    idValeurHoraires   Int Auto_increment NOT NULL PRIMARY KEY,
    idStage   Int   NOT NULL,
    idLibelleHoraire INT NOT NULL , 
    valeurHoraire  Time
)ENGINE=InnoDB, CHARSET = UTF8;

CREATE TABLE LibelleComportementsProfessionnels
(
    idLibelleComportementProfessionnel   Int  Auto_increment  NOT NULL PRIMARY KEY,
    ordreComportement INT NOT NULL , 
    libelleComportement VARCHAR(100) NOT NULL  
)ENGINE=InnoDB, CHARSET = UTF8;

CREATE TABLE ValeurComportementsProfessionnels
(
    idComportementProfessionnel Int Auto_increment NOT NULL PRIMARY KEY,
    idStage   Int NOT NULL,
    idLibelleComportementProfessionnel INT NOT NULL , 
    valeurComportement INT  
)ENGINE=InnoDB, CHARSET = UTF8;


CREATE TABLE ValeurAcquis
(
    idValeurAcquis   Int  Auto_increment NOT NULL PRIMARY KEY,
    idStage   Int  NOT NULL,
	ordreAcquis INT NOT NULL,
    libelleAcquis VARCHAR(200) NOT NULL , 
    valeurAcquis INT  
)ENGINE=InnoDB, CHARSET = UTF8;

ALTER TABLE SessionFormation
ADD CONSTRAINT FK_SessionFormation_Formations
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

ALTER TABLE Participation
ADD CONSTRAINT FK_Participation_SessionFormation
FOREIGN KEY (idSessionFormation)
REFERENCES SessionFormation(idSessionFormation);

ALTER TABLE Participation
ADD CONSTRAINT FK_Participation_Stagiaires
FOREIGN KEY (idStagiaire)
REFERENCES Stagiaires(idStagiaire);

ALTER TABLE Animation
ADD CONSTRAINT FK_Animation_Formations
FOREIGN KEY (idFormation)
REFERENCES Formations(idFormation);

ALTER TABLE Animation
ADD CONSTRAINT FK_Animation_Utilisateurs
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

ALTER TABLE ValeurTravauxDangereux
ADD CONSTRAINT FK_ValeurTravauxDangereux_Stages
FOREIGN KEY (idStage)
REFERENCES Stages(idStage);

ALTER TABLE ValeurTravauxDangereux
ADD CONSTRAINT FK_ValeurTravauxDangereux_LibelleTravauxDangereux
FOREIGN KEY (idLibelleTravauxDangereux)
REFERENCES LibelleTravauxDangereux(idLibelleTravauxDangereux);

ALTER TABLE ValeurHoraires
ADD CONSTRAINT FK_ValeurHoraires_Stages
FOREIGN KEY (idStage)
REFERENCES Stages(idStage);

ALTER TABLE ValeurHoraires
ADD CONSTRAINT FK_ValeurHoraires_LibelleHoraires
FOREIGN KEY (idLibelleHoraire)
REFERENCES LibelleHoraires(idLibelleHoraire);

ALTER TABLE ValeurComportementsProfessionnels
ADD CONSTRAINT FK_ValeurComportementsProfessionnels_Stages
FOREIGN KEY (idStage)
REFERENCES Stages(idStage);

ALTER TABLE ValeurComportementsProfessionnels
ADD CONSTRAINT FK_ValeurCompProf_LibelleCompPro
FOREIGN KEY (idLibelleComportementProfessionnel)
REFERENCES LibelleComportementsProfessionnels(idLibelleComportementProfessionnel);

ALTER TABLE ValeurAcquis
ADD CONSTRAINT FK_ValeurAcquis_Stages
FOREIGN KEY (idStage)
REFERENCES Stages(idStage);
