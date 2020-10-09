<?php

 Class Sphere extends Cercle {
	/***************************************** Attributs **********************************************/

	private $_hauteur;

	/***************************************** Accesseurs **********************************************/
	
	public function getHauteur()
	{
		return $this->_hauteur;
	}

	public function sethauteur($hauteur)
	{
		$this->_hauteur = $hauteur;
	}

	/***************************************** Constructeur **********************************************/

	public function __construct(array $options = [])
	{
		parent::__construct($options);  // on appelle le construct de la mère pour "ranger" les attributs correspondants
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
		return ;
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
		$r = parent::getDiametre() / 2;
        return 4 * pi() * pow($r, 2) ;
    }

    public function Volume()
    {
        return (4 * pi() * pow(parent::getDiametre(),3)) / 3;
	}
	public function AfficherSphere()
    {

        return "\nSPHERE :\nPérimetre : " . $this->Perimetre() . "\nAire : " . $this->Aire() . " cm2\n";
    }

}