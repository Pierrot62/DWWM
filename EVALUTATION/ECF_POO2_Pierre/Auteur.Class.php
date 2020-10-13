<?php

 Class Auteur {
	/***************************************** Attributs **********************************************/

	private $_Nom ;
	private $_Prenom ;
	private $_DateNaissance ;
	private $_DateMort ;

	/***************************************** Accesseurs **********************************************/
	
	public function getNom()
	{
		return $this->_Nom;
	}

	public function setNom($Nom)
	{
		return $this->_Nom = $Nom;
	}
	public function getPrenom()
	{
		return $this->_Prenom;
	}

	public function setPrenom($Prenom)
	{
		return $this->_Prenom = $Prenom;
	}
	public function getDateNaissance()
	{
		return $this->_DateNaissance;
	}

	public function setDateNaissance($DateNaissance)
	{
		return $this->_DateNaissance = $DateNaissance;
	}
	public function getDateMort()
	{
		return $this->_DateMort;
	}

	public function setDateMort($DateMort)
	{
		return $this->_DateMort = $DateMort;
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
		return "Nom : ".$this->getNom()	."Prenom : ".$this->getPrenom()	."Date de Naissance : ".$this->getDateNaissance()->format('d-m-Y')	."\nDate de decé : ".$this->getDateMort()->format('d-m-Y')."\n";
	}

	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] obj
	* @return bool
	*/
	public function equalsTo($obj){
		if($this->_Nom==$obj->getNom() && $this->_Prenom==$obj->getPrenom()){
            return true;
        }
        return false;
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