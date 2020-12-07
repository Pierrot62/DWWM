<?php

class Produits 
{

	/*****************Attributs***************** */

	private $_IdProduit;
	private $_NomProduit;
	private $_CouleurProduit;
	private $_PoidsProduit;

	/***************** Accesseurs ***************** */


	public function getIdProduit()
	{
		return $this->_IdProduit;
	}

	public function setIdProduit($IdProduit)
	{
		$this->_IdProduit=$IdProduit;
	}

	public function getNomProduit()
	{
		return $this->_NomProduit;
	}

	public function setNomProduit($NomProduit)
	{
		$this->_NomProduit=$NomProduit;
	}

	public function getCouleurProduit()
	{
		return $this->_CouleurProduit;
	}

	public function setCouleurProduit($CouleurProduit)
	{
		$this->_CouleurProduit=$CouleurProduit;
	}

	public function getPoidsProduit()
	{
		return $this->_PoidsProduit;
	}

	public function setPoidsProduit($PoidsProduit)
	{
		$this->_PoidsProduit=$PoidsProduit;
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
		return "IdProduit : ".$this->getIdProduit()."NomProduit : ".$this->getNomProduit()."CouleurProduit : ".$this->getCouleurProduit()."PoidsProduit : ".$this->getPoidsProduit()."\n";
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