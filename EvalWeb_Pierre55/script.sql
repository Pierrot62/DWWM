#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


DROP DATABASE IF EXISTS GestionNotes;
CREATE DATABASE GestionNotes;
USE GestionNotes;

#------------------------------------------------------------
# Table: Eleves
#------------------------------------------------------------

CREATE TABLE Eleves(
        idEleve     Int  Auto_increment  NOT NULL PRIMARY KEY ,
        NomEleve    Varchar (50) NOT NULL ,
        PrenomEleve Varchar (50) NOT NULL ,
        Classe      Varchar (50) NOT NULL 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Matieres
#------------------------------------------------------------

CREATE TABLE Matieres(
        idMatiere      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        LibelleMatiere Varchar (50) NOT NULL 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        IdUtilisateur     Int  Auto_increment  NOT NULL PRIMARY KEY ,
        Login             Varchar (50) NOT NULL ,
        NomUtilisateur    Varchar (50) NOT NULL ,
        PrenomUtilisateur Varchar (50) NOT NULL ,
        MotDePasse        Varchar (50) NOT NULL ,
        Role              Int NOT NULL ,
        idMatieres        Int NOT NULL 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: suit
#------------------------------------------------------------

CREATE TABLE suivis(
        idSuivi     Int AUTO_INCREMENT NOT NULL PRIMARY KEY ,
        idMatiere   Int NOT NULL ,
        idEleve     Int NOT NULL ,
        Note        Float NOT NULL ,
        Coefficient Float NOT NULL 
)ENGINE=InnoDB;



ALTER TABLE `suivis` ADD CONSTRAINT `FK_suivis_matieres` FOREIGN KEY (`idMatiere`) REFERENCES `Matieres` (`idMatiere`);
ALTER TABLE `suivis` ADD CONSTRAINT `FK_suivis_eleve` FOREIGN KEY (`idEleve`) REFERENCES `Eleves` (`idEleve`);

