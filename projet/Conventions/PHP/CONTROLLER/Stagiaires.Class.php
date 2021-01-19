<?php

class Stagiaires 
{

	/*****************Attributs***************** */

	private $_idStagiaire;
	private $_genreStagiaire;
	private $_nomStagiaire;
	private $_prenomStagiaire;
	private $_numSecuStagiaire;
	private $_numBenefStagiaire;
	private $_dateNaissanceStagiaire;
	private $_emailStagiaire;

	/***************** Accesseurs ***************** */


	public function getIdStagiaire()
	{
		return $this->_idStagiaire;
	}

	public function setIdStagiaire($idStagiaire)
	{
		$this->_idStagiaire=$idStagiaire;
	}

	public function getGenreStagiaire()
	{
		return $this->_genreStagiaire;
	}

	public function setGenreStagiaire($genreStagiaire)
	{
		$this->_genreStagiaire=$genreStagiaire;
	}

	public function getNomStagiaire()
	{
		return $this->_nomStagiaire;
	}

	public function setNomStagiaire($nomStagiaire)
	{
		$this->_nomStagiaire=$nomStagiaire;
	}

	public function getPrenomStagiaire()
	{
		return $this->_prenomStagiaire;
	}

	public function setPrenomStagiaire($prenomStagiaire)
	{
		$this->_prenomStagiaire=$prenomStagiaire;
	}

	public function getNumSecuStagiaire()
	{
		return $this->_numSecuStagiaire;
	}

	public function setNumSecuStagiaire($numSecuStagiaire)
	{
		$this->_numSecuStagiaire=$numSecuStagiaire;
	}

	public function getNumBenefStagiaire()
	{
		return $this->_numBenefStagiaire;
	}

	public function setNumBenefStagiaire($numBenefStagiaire)
	{
		$this->_numBenefStagiaire=$numBenefStagiaire;
	}

	public function getDateNaissanceStagiaire()
	{
		return $this->_dateNaissanceStagiaire;
	}

	public function setDateNaissanceStagiaire($dateNaissanceStagiaire)
	{
		$this->_dateNaissanceStagiaire=$dateNaissanceStagiaire;
	}

	public function getEmailStagiaire()
	{
		return $this->_emailStagiaire;
	}

	public function setEmailStagiaire($emailStagiaire)
	{
		$this->_emailStagiaire=$emailStagiaire;
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
		return "IdStagiaire : ".$this->getIdStagiaire()."GenreStagiaire : ".$this->getGenreStagiaire()."NomStagiaire : ".$this->getNomStagiaire()."PrenomStagiaire : ".$this->getPrenomStagiaire()."NumSecuStagiaire : ".$this->getNumSecuStagiaire()."NumBenefStagiaire : ".$this->getNumBenefStagiaire()."DateNaissanceStagiaire : ".$this->getDateNaissanceStagiaire()."EmailStagiaire : ".$this->getEmailStagiaire()."\n";
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