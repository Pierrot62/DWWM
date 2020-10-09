<?php

 Class Cercle {
	/***************************************** Attributs **********************************************/

	private $_diametre ;

	/***************************************** Accesseurs **********************************************/
	
	public function getDiametre()
	{
		return $this->_diametre;
	}

	public function setDiametre($diametre)
	{
		return $this->_diametre = $diametre;
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
		return "diametre : ".$this->getDiametre()	;
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
		$r = $this->_diametre / 2;
        return 2 * pi() * $r;
    }

    public function Aire()
    {
		$r = $this->_diametre / 2;
        return pi() * pow($r,2);
	}

	public function AfficherCercle()
    {

        return "\nDiametre : " . $this->getDiametre() . "\nPérimetre : " . $this->Perimetre() . "\nAire : " . $this->Aire() . " cm2\n";
    }
	
}
