<?php

class Tuteurs 
{

	/*****************Attributs***************** */

	private $_idTuteur;
	private $_nomTuteur;
	private $_prenomTuteur;
	private $_fonctionTuteur;
	private $_telTuteur;
	private $_emailTuteur;
	private $_idEntreprise;

	/***************** Accesseurs ***************** */


	public function getIdTuteur()
	{
		return $this->_idTuteur;
	}

	public function setIdTuteur($idTuteur)
	{
		$this->_idTuteur=$idTuteur;
	}

	public function getNomTuteur()
	{
		return $this->_nomTuteur;
	}

	public function setNomTuteur($nomTuteur)
	{
		$this->_nomTuteur=$nomTuteur;
	}

	public function getPrenomTuteur()
	{
		return $this->_prenomTuteur;
	}

	public function setPrenomTuteur($prenomTuteur)
	{
		$this->_prenomTuteur=$prenomTuteur;
	}

	public function getFonctionTuteur()
	{
		return $this->_fonctionTuteur;
	}

	public function setFonctionTuteur($fonctionTuteur)
	{
		$this->_fonctionTuteur=$fonctionTuteur;
	}

	public function getTelTuteur()
	{
		return $this->_telTuteur;
	}

	public function setTelTuteur($telTuteur)
	{
		$this->_telTuteur=$telTuteur;
	}

	public function getEmailTuteur()
	{
		return $this->_emailTuteur;
	}

	public function setEmailTuteur($emailTuteur)
	{
		$this->_emailTuteur=$emailTuteur;
	}

	public function getIdEntreprise()
	{
		return $this->_idEntreprise;
	}

	public function setIdEntreprise($idEntreprise)
	{
		$this->_idEntreprise=$idEntreprise;
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
 		foreach ($data as $key => $value)
		{
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
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
		return "IdTuteur : ".$this->getIdTuteur()."NomTuteur : ".$this->getNomTuteur()."PrenomTuteur : ".$this->getPrenomTuteur()."FonctionTuteur : ".$this->getFonctionTuteur()."TelTuteur : ".$this->getTelTuteur()."EmailTuteur : ".$this->getEmailTuteur()."IdEntreprise : ".$this->getIdEntreprise()."\n";
	}


	
	/* Renvoit Vrai si lobjet en paramètre est égal 
	* à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		return;
	}


	/**
	* Compare l'objet à un autre
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*      - 1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return Integer
	*/
	public function compareTo($obj)
	{
		return;
	}
}