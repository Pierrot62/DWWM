#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS voitures;
CREATE DATABASE voitures;
USE voitures;

#------------------------------------------------------------
# Table: modeles
#------------------------------------------------------------

CREATE TABLE voitures.modeles(
        idModele  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomModele Varchar (50) NOT NULL,
        idMarque  Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: marques
#------------------------------------------------------------

CREATE TABLE voitures.marques(
        idMarque  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomMarque Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# foreign keys
#------------------------------------------------------------

ALTER TABLE voitures.modeles ADD CONSTRAINT modeles_marques_FK FOREIGN KEY (idMarque) REFERENCES marques(idMarque);