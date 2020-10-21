#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS Soldats;

CREATE DATABASE Soldats;

USE Soldats;

#------------------------------------------------------------
# Table: Blessures
#------------------------------------------------------------
CREATE TABLE Blessures(
        idBlessure Int Auto_increment NOT NULL PRIMARY KEY,
        typeBlessure Varchar (50) NOT NULL,
        DateBlessure Date NOT NULL
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Bataille
#------------------------------------------------------------
CREATE TABLE Bataille(
        idBataille Int Auto_increment NOT NULL PRIMARY KEY,
        nomBataille Varchar (50) NOT NULL,
        lieuBataille Varchar (50) NOT NULL,
        dateDebut Date NOT NULL,
        dateFin Date NOT NULL
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Grades
#------------------------------------------------------------
CREATE TABLE Grades(
        idGrade Int Auto_increment NOT NULL PRIMARY KEY,
        dateObtention Varchar (50) NOT NULL
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Unite
#------------------------------------------------------------
CREATE TABLE Unite(
        idUnite Int Auto_increment NOT NULL PRIMARY KEY,
        nomUnite Varchar (50) NOT NULL,
        dateRattachement Date NOT NULL
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Soldats
#------------------------------------------------------------
CREATE TABLE Soldats(
        idSoldat Int Auto_increment NOT NULL PRIMARY KEY,
        nomSoldat Varchar (50) NOT NULL,
        prenomSoldat Varchar (50) NOT NULL,
        idGrade Int NOT NULL,
        idUnite Int NOT NULL
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Produit
#------------------------------------------------------------
CREATE TABLE Produit(
        idBlessure Int NOT NULL PRIMARY KEY,
        idBataille Int NOT NULL
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Subi
#------------------------------------------------------------
CREATE TABLE Subi(
        idSoldat Int NOT NULL PRIMARY KEY,
        idBlessure Int NOT NULL
) ENGINE = InnoDB;

ALTER TABLE
        Soldats
ADD
        CONSTRAINT Soldats_Grades_FK FOREIGN KEY (idGrade) REFERENCES Grades(idGrade);

ALTER TABLE
        Soldats
ADD
        CONSTRAINT Soldats_Unite0_FK FOREIGN KEY (idUnite) REFERENCES Unite(idUnite);

ALTER TABLE
        Produit
ADD
        CONSTRAINT Produit_Blessures_FK FOREIGN KEY (idBlessure) REFERENCES Blessures(idBlessure);

ALTER TABLE
        Produit
ADD
        CONSTRAINT Produit_Bataille0_FK FOREIGN KEY (idBataille) REFERENCES Bataille(idBataille);

ALTER TABLE
        Subi
ADD
        CONSTRAINT Subi_Soldats_FK FOREIGN KEY (idSoldat) REFERENCES Soldats(idSoldat);

ALTER TABLE
        Subi
ADD
        CONSTRAINT Subi_Blessures0_FK FOREIGN KEY (idBlessure) REFERENCES Blessures(idBlessure);