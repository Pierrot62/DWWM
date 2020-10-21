<?php

 Class Produit {
	/***************************************** Attributs **********************************************/

	private $_numero ;
	private $_designation ;
	private $_dateValidite ;
	private $_categorie ;
	private $_lieuDeStockage ;
    private static $_compteur = 0;


	/***************************************** Accesseurs **********************************************/
	
	public function getNumero()
	{
		return $this->_numero;
	}

	public function setNumero($numero)
	{
		return $this->_numero = $numero;
	}
	public function getDesignation()
	{
		return $this->_designation;
	}

	public function setDesignation($designation)
	{
		return $this->_designation = $designation;
	}
	public function getDateValidite()
	{
		return $this->_dateValidite;
	}

	public function setDateValidite($dateValidite)
	{
		return $this->_dateValidite = $dateValidite;
	}
	public function getCategorie()
	{
		return $this->_categorie;
	}

	public function setCategorie($categorie)
	{
		return $this->_categorie = $categorie;
	}
	public function getlieuDeStockage()
	{
		return $this->_lieuDeStockage;
	}

	public function setlieuDeStockage($lieuDeStockage)
	{
		return $this->_lieuDeStockage = $lieuDeStockage;
	}
	public static function getCompteur()
    {
        return self::$_compteur;
    }

    public static function setCompteur($compteur)
    {
        self::$_compteur = $compteur;
    }

	/***************************************** Constructeur **********************************************/

	public function __construct(array $options = [])
	{
		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
        }
        self::setCompteur(self::getCompteur() + 1); //on increment le compteur
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
		return "numero : ".$this->getNumero()	."designation : ".$this->getDesignation()	."detaValidite : ".$this->getDateValidite()	."categorie : ".$this->getCategorie()	."lieuDeStockage : ".$this->getlieuDeStockage()	."compteur : ".$this->getCompteur()	;
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
    
    public function function(){
    
    
    return ;
    }

}