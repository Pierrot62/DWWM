<?php

class Villes 
{

	/*****************Attributs***************** */

	private $_idVille;
	private $_nomVille;
	private $_codePostal;

	/***************** Accesseurs ***************** */


	public function getIdVille()
	{
		return $this->_idVille;
	}

	public function setIdVille($idVille)
	{
		$this->_idVille=$idVille;
	}

	public function getNomVille()
	{
		return $this->_nomVille;
	}

	public function setNomVille($nomVille)
	{
		$this->_nomVille=$nomVille;
	}

	public function getCodePostal()
	{
		return $this->_codePostal;
	}

	public function setCodePostal($codePostal)
	{
		$this->_codePostal=$codePostal;
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
		return "IdVille : ".$this->getIdVille()."NomVille : ".$this->getNomVille()."CodePostal : ".$this->getCodePostal()."\n";
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