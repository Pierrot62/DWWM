<?php
class ClientsManager
{
    public static function add(Clients $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Client (nomClient,prenomClient,ageClient,fidelite,cagnotte) VALUES (:nomClient,:prenomClient,:ageClient,:fidelite,:cagnotte)");
        $q->bindValue(":nomClient", $obj->getnomClient());
        $q->bindValue(":prenomClient", $obj->getprenomClient());
        $q->bindValue(":ageClient", $obj->getageClient());
        $q->bindValue(":fidelite", $obj->getfidelite());
        $q->bindValue(":cagnotte", $obj->getcagnotte());

        $q->execute();
    }

    public static function update(Clients $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Client SET nomClient=:nomClient, prenomClient=:prenomClient, ageClient=:ageClient, fidelite=:fidelite, cagnotte=:cagnotte WHERE idClient=:idClient");
        $q->bindValue(":nomClient", $obj->getNomClient());
        $q->bindValue(":prenomClient", $obj->getPrenomClient());
        $q->bindValue(":ageClient", $obj->getAgeClient());
        $q->bindValue(":idClient", $obj->getIdClient());
        $q->bindValue(":fidelite", $obj->getfidelite());
        $q->bindValue(":cagnotte", $obj->getcagnotte());
        $q->execute();
    }

    public static function delete(Clients $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Clients WHERE idClient=" . $obj->getidClient());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Clients WHERE idClient=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Clients($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Clients");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Clients($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Clients
    }

}
