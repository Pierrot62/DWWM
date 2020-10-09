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

  	/***************************************** Constructeur **********************************************/

	public function __construct(array $options = [])
	{
		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
		foreach ($data as $key => $value)
		{
			$methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}


    //AUTRE METHODE

    public function toString()
    {
        return "longueur :" .$this->getLongueur()." largeur : ". $this->getLargeur();

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

            $carre = "Il s'agit d'un carré";

        } else {
            $carre = "Il ne s'agit pas d'un carré";
        }

        return "\nLongueur : " . $this->getLongueur() . "\nLargeur : " . $this->getLargeur() . "\nPérimetre : " . $this->Perimetre() . "\nAire : " . $this->Aire() . " cm2\n" . $carre . "\n";
    }

}

