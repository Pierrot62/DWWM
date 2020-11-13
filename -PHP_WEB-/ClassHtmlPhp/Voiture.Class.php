<?php

Class Voiture {
	/***************************************** Attributs **********************************************/

	private $_marque ;
	private $_modele ;
	private $_kilometrage ;
	private $_annee ;


	/***************************************** Accesseurs **********************************************/
	
	public function getMarque()
	{
		return $this->_marque;
	}

	public function setMarque($marque)
	{
		$this->_marque = $marque;
	}
	public function getModele()
	{
		return $this->_modele;
	}

	public function setModele($modele)
	{
		$this->_modele = $modele;
	}
	public function getKilometrage()
	{
		return $this->_kilometrage;
	}

	public function setKilometrage($kilometrage)
	{
		$this->_kilometrage = $kilometrage;
	}
	public function getAnnee()
	{
		return $this->_annee;
	}

	public function setAnnee($annee)
	{
		$this->_annee = $annee;
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
		return " marque : ".$this->getMarque()	." modele : ".$this->getModele()	." kilometrage : ".$this->getKilometrage()	." annee : ".$this->getAnnee()	;
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

}