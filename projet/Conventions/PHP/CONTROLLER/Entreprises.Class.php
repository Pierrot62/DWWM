<?php

class Entreprises 
{

	/*****************Attributs***************** */

	private $_idEntreprise;
	private $_raisonSociale;
	private $_statutJuridiqueEnt;
	private $_adresseEnt;
	private $_numSiretEnt;
	private $_telEnt;
	private $_assureurEnt;
	private $_numSocietaire;
	private $_nomRepresentant;
	private $_prenomRepresentant;
	private $_fctRepresentant;
	private $_telRepresentant;
	private $_mailRepresentant;
	private $_idVille;

	/***************** Accesseurs ***************** */


	public function getIdEntreprise()
	{
		return $this->_idEntreprise;
	}

	public function setIdEntreprise($idEntreprise)
	{
		$this->_idEntreprise=$idEntreprise;
	}

	public function getRaisonSociale()
	{
		return $this->_raisonSociale;
	}

	public function setRaisonSociale($raisonSociale)
	{
		$this->_raisonSociale=$raisonSociale;
	}

	public function getStatutJuridiqueEnt()
	{
		return $this->_statutJuridiqueEnt;
	}

	public function setStatutJuridiqueEnt($statutJuridiqueEnt)
	{
		$this->_statutJuridiqueEnt=$statutJuridiqueEnt;
	}

	public function getAdresseEnt()
	{
		return $this->_adresseEnt;
	}

	public function setAdresseEnt($adresseEnt)
	{
		$this->_adresseEnt=$adresseEnt;
	}

	public function getNumSiretEnt()
	{
		return $this->_numSiretEnt;
	}

	public function setNumSiretEnt($numSiretEnt)
	{
		$this->_numSiretEnt=$numSiretEnt;
	}

	public function getTelEnt()
	{
		return $this->_telEnt;
	}

	public function setTelEnt($telEnt)
	{
		$this->_telEnt=$telEnt;
	}

	public function getAssureurEnt()
	{
		return $this->_assureurEnt;
	}

	public function setAssureurEnt($assureurEnt)
	{
		$this->_assureurEnt=$assureurEnt;
	}

	public function getNumSocietaire()
	{
		return $this->_numSocietaire;
	}

	public function setNumSocietaire($numSocietaire)
	{
		$this->_numSocietaire=$numSocietaire;
	}

	public function getNomRepresentant()
	{
		return $this->_nomRepresentant;
	}

	public function setNomRepresentant($nomRepresentant)
	{
		$this->_nomRepresentant=$nomRepresentant;
	}

	public function getPrenomRepresentant()
	{
		return $this->_prenomRepresentant;
	}

	public function setPrenomRepresentant($prenomRepresentant)
	{
		$this->_prenomRepresentant=$prenomRepresentant;
	}

	public function getFctRepresentant()
	{
		return $this->_fctRepresentant;
	}

	public function setFctRepresentant($fctRepresentant)
	{
		$this->_fctRepresentant=$fctRepresentant;
	}

	public function getTelRepresentant()
	{
		return $this->_telRepresentant;
	}

	public function setTelRepresentant($telRepresentant)
	{
		$this->_telRepresentant=$telRepresentant;
	}

	public function getMailRepresentant()
	{
		return $this->_mailRepresentant;
	}

	public function setMailRepresentant($mailRepresentant)
	{
		$this->_mailRepresentant=$mailRepresentant;
	}

	public function getIdVille()
	{
		return $this->_idVille;
	}

	public function setIdVille($idVille)
	{
		$this->_idVille=$idVille;
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
		return "IdEntreprise : ".$this->getIdEntreprise()."RaisonSociale : ".$this->getRaisonSociale()."StatutJuridiqueEnt : ".$this->getStatutJuridiqueEnt()."AdresseEnt : ".$this->getAdresseEnt()."NumSiretEnt : ".$this->getNumSiretEnt()."TelEnt : ".$this->getTelEnt()."AssureurEnt : ".$this->getAssureurEnt()."NumSocietaire : ".$this->getNumSocietaire()."NomRepresentant : ".$this->getNomRepresentant()."PrenomRepresentant : ".$this->getPrenomRepresentant()."FctRepresentant : ".$this->getFctRepresentant()."TelRepresentant : ".$this->getTelRepresentant()."MailRepresentant : ".$this->getMailRepresentant()."IdVille : ".$this->getIdVille()."\n";
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