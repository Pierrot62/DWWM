<?php

class PeriodesStages 
{

	/*****************Attributs***************** */

	private $_idPeriode;
	private $_idSessionFormation;
	private $_dateDebutPAE;
	private $_dateFinPAE;
	private $_dateRapportSuivi;
	private $_objectifPAE;

	/***************** Accesseurs ***************** */


	public function getIdPeriode()
	{
		return $this->_idPeriode;
	}

	public function setIdPeriode($idPeriode)
	{
		$this->_idPeriode=$idPeriode;
	}

	public function getIdSessionFormation()
	{
		return $this->_idSessionFormation;
	}

	public function setIdSessionFormation($idSessionFormation)
	{
		$this->_idSessionFormation=$idSessionFormation;
	}

	public function getDateDebutPAE()
	{
		return $this->_dateDebutPAE;
	}

	public function setDateDebutPAE($dateDebutPAE)
	{
		$this->_dateDebutPAE=$dateDebutPAE;
	}

	public function getDateFinPAE()
	{
		return $this->_dateFinPAE;
	}

	public function setDateFinPAE($dateFinPAE)
	{
		$this->_dateFinPAE=$dateFinPAE;
	}

	public function getDateRapportSuivi()
	{
		return $this->_dateRapportSuivi;
	}

	public function setDateRapportSuivi($dateRapportSuivi)
	{
		$this->_dateRapportSuivi=$dateRapportSuivi;
	}

	public function getObjectifPAE()
	{
		return $this->_objectifPAE;
	}

	public function setObjectifPAE($objectifPAE)
	{
		$this->_objectifPAE=$objectifPAE;
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
		return "IdPeriode : ".$this->getIdPeriode()."IdSessionFormation : ".$this->getIdSessionFormation()."DateDebutPAE : ".$this->getDateDebutPAE()."DateFinPAE : ".$this->getDateFinPAE()."DateRapportSuivi : ".$this->getDateRapportSuivi()."ObjectifPAE : ".$this->getObjectifPAE()."\n";
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