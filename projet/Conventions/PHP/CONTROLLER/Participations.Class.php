<?php

class Participations 
{

	/*****************Attributs***************** */

	private $_idParticipation;
	private $_idSessionFormation;
	private $_idStagiaire;

	/***************** Accesseurs ***************** */


	public function getIdParticipation()
	{
		return $this->_idParticipation;
	}

	public function setIdParticipation($idParticipation)
	{
		$this->_idParticipation=$idParticipation;
	}

	

	public function getIdSessionFormation()
	{
		return $this->_idSessionFormation;
	}

	public function setIdSessionFormation($idSessionFormation)
	{
		$this->_idSessionFormation=$idSessionFormation;
	}

	public function getIdStagiaire()
	{
		return $this->_idStagiaire;
	}

	public function setIdStagiaire($idStagiaire)
	{
		$this->_idStagiaire=$idStagiaire;
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
		return "IdParticipation : ".$this->getIdParticipation()."DateDebut : ".$this->getDateDebut()."DateFin : ".$this->getDateFin()."IdSessionFormation : ".$this->getIdSessionFormation()."IdStagiaire : ".$this->getIdStagiaire()."\n";
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