<?php

class Employe
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_date;
    private $_fonction;
    private $_salaire;
    private $_service;

    /*****************Accesseurs***************** */

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getDate()
    {
        return $this->_date;
    }

    public function setDate($date)
    {
        $this->_date = $date;
    }

    public function getFonction()
    {
        return $this->_fonction;
    }

    public function setFonction($fonction)
    {
        $this->_fonction = $fonction;
    }

    public function getSalaire()
    {
        return $this->_salaire;
    }

    public function setSalaire($salaire)
    {
        $this->_salaire = $salaire;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function setService($service)
    {
        $this->_service = $service;
    }

    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        // return "L'employer s'appelle : " .$this->getNom() ." ". $this->getPrenom().;
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }

    public function embauche()
    {

        $origin = new DateTime(($this->getDate()) . "-0-0");
        $target = new DateTime('2020-0-0');
        $interval = $origin->diff($target);
        $anne= $interval->format(' %y')*1;

        return $anne;
        

    }

   public function prime()
    {
        // = 2500 $ep1  $primeAnnuel +    * (($this->getSalaire() * 1000) + $primeAnnuel));
        $primeAnnuel =((($this->getSalaire() * 1000) /100)* 5);

        // $pourcent = 2 * $this->embauche();

        $primeAncien = ((($this->getSalaire() * 1000) /100)*2);

        return $primeAncien+$primeAnnuel;

        // return $primeAnciennete;
        // return $primeAnnuel;
    }
}








$ep1 = new Employe(["Nom" => "Courquin", "Prenom" => "Pierre", "Date" => 2017, "Fonction" => "Dev PHP", "Salaire" => 50, "Service" => "DEV"]);
$ep2 = new Employe(["Nom" => "Cugny", "Prenom" => "Maxime", "Date" => 2012, "Fonction" => "Dev JS", "Salaire" => 47, "Service" => "DEV"]);
$ep3 = new Employe(["Nom" => "Balair", "Prenom" => "Quentin", "Date" => 2018, "Fonction" => "Dev HTML", "Salaire" => 30, "Service" => "DEV"]);
$ep4 = new Employe(["Nom" => "Arrouss", "Prenom" => "Sofiane", "Date" => 2005, "Fonction" => "Dev CSS", "Salaire" => 25, "Service" => "DEV"]);
$ep5 = new Employe(["Nom" => "Rjeb", "Prenom" => "Zied", "Date" => 2019, "Fonction" => "Dev Ruby", "Salaire" => 17, "Service" => "DEV"]);

// echo $ep1->embauche()."\n";
// echo $ep2->embauche()."\n";
// echo $ep3->embauche()."\n";
// echo $ep4->embauche()."\n";
// echo $ep5->embauche()."\n";

// echo $ep1->prime();


// echo "\nl'employer est embauché depuit".$ep1->embauche(). $an = $ep1->embauche() > 1 ? ' ans' : ' an';