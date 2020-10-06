<?php

class Personne
{
//Attributs
    private $_nom;
    private $_prenom;

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($_nom)
    {
        $this->_nom = $_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($_prenom)
    {
        $this->_prenom = $_prenom;
    }

    public function __construct($n, $p)
    {

        $this->setNom($n);
        $this->setPrenom($p);

    }

    //AUTRE METHODE

    public function toString()
    {
        return "La personne s'appelle" . $this->getNom() ." ". $this->getPrenom() ."ok";


    }

    public function equalTo(personne $obj)
    {

        if ($this->_nom > $obj->getNom()) {
            return 1;
        } else if ($this->_nom < $obj->getNom()) {
            return -1;
        } else {
            return 0;
        }

    }
}


$pere  = new Personne("Pierre","COURQUIN");
var_dump($pere);


