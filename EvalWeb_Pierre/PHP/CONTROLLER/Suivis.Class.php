<?php

class Suivis 
{

	/*****************Attributs***************** */

	private $_idSuivi;
	private $_idMatiere;
	private $_idEleve;
	private $_Note;
	private $_Coefficient;

	/***************** Accesseurs ***************** */


	public function getIdSuivi()
	{
		return $this->_idSuivi;
	}

	public function setIdSuivi($idSuivi)
	{
		$this->_idSuivi=$idSuivi;
	}

	public function getIdMatiere()
	{
		return $this->_idMatiere;
	}

	public function setIdMatiere($idMatiere)
	{
		$this->_idMatiere=$idMatiere;
	}

	public function getIdEleve()
	{
		return $this->_idEleve;
	}

	public function setIdEleve($idEleve)
	{
		$this->_idEleve=$idEleve;
	}

	public function getNote()
	{
		return $this->_Note;
	}

	public function setNote($Note)
	{
		$this->_Note=$Note;
	}

	public function getCoefficient()
	{
		return $this->_Coefficient;
	}

	public function setCoefficient($Coefficient)
	{
		$this->_Coefficient=$Coefficient;
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
		return "IdSuivi : ".$this->getIdSuivi()."IdMatiere : ".$this->getIdMatiere()."IdEleve : ".$this->getIdEleve()."Note : ".$this->getNote()."Coefficient : ".$this->getCoefficient()."\n";
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