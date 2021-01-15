<?php

class Valeuracquis 
{

	/*****************Attributs***************** */

	private $_idValeurAcquis;
	private $_idStage;
	private $_ordreAcquis;
	private $_libelleAcquis;
	private $_valeurAcquis;

	/***************** Accesseurs ***************** */


	public function getIdValeurAcquis()
	{
		return $this->_idValeurAcquis;
	}

	public function setIdValeurAcquis($idValeurAcquis)
	{
		$this->_idValeurAcquis=$idValeurAcquis;
	}

	public function getIdStage()
	{
		return $this->_idStage;
	}

	public function setIdStage($idStage)
	{
		$this->_idStage=$idStage;
	}

	public function getOrdreAcquis()
	{
		return $this->_ordreAcquis;
	}

	public function setOrdreAcquis($ordreAcquis)
	{
		$this->_ordreAcquis=$ordreAcquis;
	}

	public function getLibelleAcquis()
	{
		return $this->_libelleAcquis;
	}

	public function setLibelleAcquis($libelleAcquis)
	{
		$this->_libelleAcquis=$libelleAcquis;
	}

	public function getValeurAcquis()
	{
		return $this->_valeurAcquis;
	}

	public function setValeurAcquis($valeurAcquis)
	{
		$this->_valeurAcquis=$valeurAcquis;
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
		return "IdValeurAcquis : ".$this->getIdValeurAcquis()."IdStage : ".$this->getIdStage()."OrdreAcquis : ".$this->getOrdreAcquis()."LibelleAcquis : ".$this->getLibelleAcquis()."ValeurAcquis : ".$this->getValeurAcquis()."\n";
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