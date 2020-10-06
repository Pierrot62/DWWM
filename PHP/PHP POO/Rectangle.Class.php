<?php

class Rectangle
{
//Attributs
    private $_longueur;
    private $_largeur;

    public function getLargeur()
    {
        return $this->_largeur;
    }

    public function setLargeur($_largeur)
    {
        $this->_largeur = $_largeur;
    }

    public function getLongueur()
    {
        return $this->_longueur;
    }

    public function setLongueur($_longueur)
    {
        $this->_longueur = $_longueur;
    }

    public function __construct($lar, $lon)
    {

        $this->setLongueur($lon);
        $this->setLargeur($lar);

    }

    //AUTRE METHODE

    public function toString()
    {
        return "La longueur du rectangle est de  $this->_longueur et sa largeur est de $this->_largeur ";

    }

    public function equalTo(rectangle $obj)
    {

        if ($this->_longueur > $obj->getLongueur()) {
            return 1;
        } else if ($this->_longueur < $obj->getLongueur()) {
            return -1;
        } else {
            return 0;
        }

    }

    public function Perimetre()
    {
        return ($this->_longueur + $this->_largeur) * 2;
    }

    public function Aire()
    {
        return $this->_longueur * $this->_largeur;
    }

    public function AfficherRectangle()
    {

        if ($this->getLongueur() == $this->getLargeur()) {

            $carre = "Il s'agit d'un carré.";

        } else {
            $carre = "Il ne s'agit pas d'un carré.";
        }

        return "\nLongueur : " . $this->getLongueur() . ".\nLargeur : " . $this->getLargeur() . ".\nPérimetre : " . $this->Perimetre() . ".\nAire : " . $this->Aire() . " cm2.\n" . $carre . "\n";
    }

}

$rec1 = new Rectangle(50, 50);

echo $rec1->AfficherRectangle();
