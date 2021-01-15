<?php

class Valeurhoraires 
{

	/*****************Attributs***************** */

	private $_idValeurHoraires;
	private $_idStage;
	private $_idLibelleHoraire;
	private $_valeurHoraire;

	/***************** Accesseurs ***************** */


	public function getIdValeurHoraires()
	{
		return $this->_idValeurHoraires;
	}

	public function setIdValeurHoraires($idValeurHoraires)
	{
		$this->_idValeurHoraires=$idValeurHoraires;
	}

	public function getIdStage()
	{
		return $this->_idStage;
	}

	public function setIdStage($idStage)
	{
		$this->_idStage=$idStage;
	}

	public function getIdLibelleHoraire()
	{
		return $this->_idLibelleHoraire;
	}

	public function setIdLibelleHoraire($idLibelleHoraire)
	{
		$this->_idLibelleHoraire=$idLibelleHoraire;
	}

	public function getValeurHoraire()
	{
		return $this->_valeurHoraire;
	}

	public function setValeurHoraire($valeurHoraire)
	{
		$this->_valeurHoraire=$valeurHoraire;
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
		return "IdValeurHoraires : ".$this->getIdValeurHoraires()."IdStage : ".$this->getIdStage()."IdLibelleHoraire : ".$this->getIdLibelleHoraire()."ValeurHoraire : ".$this->getValeurHoraire()."\n";
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