#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS Facture;
CREATE DATABASE Facture;
USE Facture;

#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------

CREATE TABLE Clients(
        idClient         Int  Auto_increment PRIMARY NOT NULL,
        nomClient        Varchar (50) NOT NULL ,
        prenomClient     Varchar (50) NOT NULL ,
        adresseClient    Varchar (100) NOT NULL ,
        codePostalClient Int NOT NULL ,
        villeClient      Varchar (50) NOT NULL ,
        genre            Varchar (50) NOT NULL
	,CONSTRAINT Clients_PK PRIMARY KEY (idClient)
)ENGINE=InnoDB, CHARSET = `UTF-8`;


#------------------------------------------------------------
# Table: UnitesDeMesure
#------------------------------------------------------------

CREATE TABLE UnitesDeMesure(
        idUnite      Int  Auto_increment PRIMARY  NOT NULL ,
        LibelleUnite Varchar (50) NOT NULL
	,CONSTRAINT UnitesDeMesure_PK PRIMARY KEY (idUnite)
)ENGINE=InnoDB, CHARSET = `UTF-8`;


#------------------------------------------------------------
# Table: Produits
#------------------------------------------------------------

CREATE TABLE Produits(
        idProduit    Int  Auto_increment PRIMARY  NOT NULL ,
        nomProduit   Varchar (60) NOT NULL ,
        prixUnitaire Double NOT NULL ,
        idUnite      Int NOT NULL
	,CONSTRAINT Produits_PK PRIMARY KEY (idProduit)

	,CONSTRAINT Produits_UnitesDeMesure_FK FOREIGN KEY (idUnite) REFERENCES UnitesDeMesure(idUnite)
)ENGINE=InnoDB;
AFTER TABLE Produits ADD CONSTRAINT FK_Produits_Unite;


#------------------------------------------------------------
# Table: Factures
#------------------------------------------------------------

CREATE TABLE Factures(
        idFacture         Int Auto_increment PRIMARY NOT NULL ,
        numeroDevis       Int NOT NULL ,
        dateFacture       Date NOT NULL ,
        tvaFacture        Int NOT NULL COMMENT "En pourcentage"  ,
        remiseFacture     Int NOT NULL ,
        acompteFacture    Int NOT NULL ,
        conditionPaiement Varchar (50) NOT NULL ,
        echeancePaiement  Varchar (50) NOT NULL ,
        montant           Float NOT NULL ,
        idClient          Int NOT NULL
	,CONSTRAINT Factures_PK PRIMARY KEY (idFacture)

	,CONSTRAINT Factures_Clients_FK FOREIGN KEY (idClient) REFERENCES Clients(idClient)
)ENGINE=InnoDB;
AFTER TABLE Factures ADD CONSTRAINT FK_Factures_Client;


#------------------------------------------------------------
# Table: achete
#------------------------------------------------------------

CREATE TABLE achete(
        idProduit       Int PRIMARY NOT NULL ,
        idClient        Int NOT NULL ,
        quantiteAchetee Double NOT NULL
	,CONSTRAINT achete_PK PRIMARY KEY (idProduit,idClient)

	,CONSTRAINT achete_Produits_FK FOREIGN KEY (idProduit) REFERENCES Produits(idProduit)
	,CONSTRAINT achete_Clients0_FK FOREIGN KEY (idClient) REFERENCES Clients(idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contient
#------------------------------------------------------------

CREATE TABLE contient(
        idFacture        Int PRIMARY NOT NULL ,
        idProduit        Int NOT NULL ,
        quantiteFacturee Double NOT NULL
	,CONSTRAINT contient_PK PRIMARY KEY (idFacture,idProduit)

	,CONSTRAINT contient_Factures_FK FOREIGN KEY (idFacture) REFERENCES Factures(idFacture)
	,CONSTRAINT contient_Produits0_FK FOREIGN KEY (idProduit) REFERENCES Produits(idProduit)
)ENGINE=InnoDB;



ALTER TABLE Produits ADD CONSTRAINT FK_Produits_UnitesDeMesure FOREIGN KEY (idUnite) REFERENCES UnitesDeMesure (idUnite);
ALTER TABLE Factures ADD CONSTRAINT FK_Factures_Clients FOREIGN KEY (idClient) REFERENCES Clients (idClient);
ALTER TABLE achete ADD CONSTRAINT FK_achete_Clients FOREIGN KEY (idClient) REFERENCES Clients (idClient);
ALTER TABLE achete ADD CONSTRAINT FK_achete_Produits FOREIGN KEY (idProduit) REFERENCES Produits (idProduit);
ALTER TABLE contient ADD CONSTRAINT FK_contient_Factures FOREIGN KEY (idFacture) REFERENCES Factures (idFacture);
ALTER TABLE contient ADD CONSTRAINT FK_contient_Produits FOREIGN KEY (idProduit) REFERENCES Produits (idProduit);