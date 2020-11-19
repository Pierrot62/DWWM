<?php

class Clients 
{

	/*****************Attributs***************** */

	private $_idClient;
	private $_nomClient;
	private $_prenomClient;
	private $_ageClient;
	private $_fidelite;
	private $_cagnotte;

	/***************** Accesseurs ***************** */


	public function getIdClient()
	{
		return $this->_idClient;
	}

	public function setIdClient($idClient)
	{
		$this->_idClient=$idClient;
	}

	public function getNomClient()
	{
		return $this->_nomClient;
	}

	public function setNomClient($nomClient)
	{
		$this->_nomClient=$nomClient;
	}

	public function getPrenomClient()
	{
		return $this->_prenomClient;
	}

	public function setPrenomClient($prenomClient)
	{
		$this->_prenomClient=$prenomClient;
	}

	public function getAgeClient()
	{
		return $this->_ageClient;
	}

	public function setAgeClient($ageClient)
	{
		$this->_ageClient=$ageClient;
	}

	public function getFidelite()
	{
		return $this->_fidelite;
	}

	public function setFidelite($fidelite)
	{
		$this->_fidelite=$fidelite;
	}

	public function getCagnotte()
	{
		return $this->_cagnotte;
	}

	public function setCagnotte($cagnotte)
	{
		$this->_cagnotte=$cagnotte;
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
		return "IdClient : ".$this->getIdClient()."NomClient : ".$this->getNomClient()."PrenomClient : ".$this->getPrenomClient()."AgeClient : ".$this->getAgeClient()."Fidelite : ".$this->getFidelite()."Cagnotte : ".$this->getCagnotte()."\n";
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