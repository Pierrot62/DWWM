#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
#        CREATION DE LA BDD
#------------------------------------------------------------

DROP DATABASE IF EXISTS HOTEL;
CREATE DATABASE HOTEL;
USE HOTEL;
 

#------------------------------------------------------------
# Table: station
#------------------------------------------------------------

CREATE TABLE station(
        idStation       Int  Auto_increment  NOT NULL PRIMARY KEY ,
        altitudeStation Numeric NOT NULL ,
        nomStation      Varchar (200) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: hotel
#------------------------------------------------------------

CREATE TABLE hotel(
        idHotel        Int  Auto_increment  NOT NULL PRIMARY KEY ,
        categorieHotel Numeric NOT NULL ,
        adresseHotel   Varchar (200) NOT NULL ,
        villeHotel     Varchar (200) NOT NULL ,
        idStation      Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: chambre
#------------------------------------------------------------

CREATE TABLE chambre(
        idChambre       Int  Auto_increment  NOT NULL PRIMARY KEY ,
        numeroDeChambre Int NOT NULL ,
        typeDeChambre   Varchar (200) NOT NULL ,
        capaciteChambre Int NOT NULL ,
        dateDebutSejour Date NOT NULL ,
        dateFinSejour   Date NOT NULL ,
        prixSejour      Numeric NOT NULL ,
        arrhes          Numeric NOT NULL ,
        idHotel         Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: client
#------------------------------------------------------------

CREATE TABLE client(
        idClient      Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomClient     Varchar (200) NOT NULL ,
        prenomClient  Varchar (200) NOT NULL ,
        adresseClient Varchar (200) NOT NULL ,
        villeClient   Varchar (200) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: effectue
#------------------------------------------------------------

CREATE TABLE effectue(
        idSejour        int NOT NULL PRIMARY KEY ,
        idChambre       Int NOT NULL ,
        idClient        Int NOT NULL ,
        dateDebutSejour Date NOT NULL ,
        dateFinSejour   Date NOT NULL ,
        prixSejour      Numeric NOT NULL ,
        arrhes          Numeric NOT NULL


)ENGINE=InnoDB;



ALTER TABLE hotel ADD CONSTRAINT FK_hotel_station FOREIGN KEY (idStation) REFERENCES station(idStation);
ALTER TABLE chambre ADD CONSTRAINT FK_chambre_hotel FOREIGN KEY (idHotel) REFERENCES hotel(idHotel);
ALTER TABLE effectue ADD CONSTRAINT FK_effectue_chambre FOREIGN KEY (idChambre) REFERENCES chambre(idChambre);
ALTER TABLE effectue ADD CONSTRAINT FK_effectue_client FOREIGN KEY (idClient) REFERENCES client(idClient);
