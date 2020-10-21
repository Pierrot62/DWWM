<?php

 Class TriangleRectangle {
	/***************************************** Attributs **********************************************/

	private $_base ;
	private $_hauteur ;

	/***************************************** Accesseurs **********************************************/
	
	public function getBase()
	{
		return $this->_base;
	}

	public function setBase($base)
	{
		return $this->_base = $base;
	}
	public function getHauteur()
	{
		return $this->_hauteur;
	}

	public function setHauteur($hauteur)
	{
		return $this->_hauteur = $hauteur;
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

	/***************************************** Methode **********************************************/

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString(){
		return "base : ".$this->getBase()	."hauteur : ".$this->getHauteur() . "Perimetre : ".$this->Perimetre() . "Air : ".$this->Aire() 	;
	}

	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] obj
	* @return bool
	*/
	public function equalsTo(){
		return  "";
	}

	/**
	* Compare 2 objets
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*        -1 si le 1er est <
	*
	* @param [type] obj1
	* @param [type] obj2
	* @return void
	*/
	public function compareTo(){
		return "";
	}


	
    public function Perimetre()
    {
		$cote3 = pow($this->getHauteur(), 2)+ pow($this->getBase(), 2);
        return $this->getHauteur() + $this->getBase() + sqrt($cote3);
    }

    public function Aire()
    {
        return $this->_base * $this->_hauteur;
    }

	public function AfficherTriangle()
    {

        return "\nBase : " . $this->getBase() . ".\nHauteur : " . $this->getHauteur() . "\nPerimetre : " . $this->Perimetre() ."\nAire " . $this->Aire() . " cm2\n";
    }
}