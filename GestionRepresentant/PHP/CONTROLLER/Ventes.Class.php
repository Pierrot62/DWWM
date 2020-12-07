<?php

class Ventes 
{

	/*****************Attributs***************** */

	private $_IdVente;
	private $_IdRepres;
	private $_IdProduit;
	private $_IdClient;
	private $_Quantité;

	/***************** Accesseurs ***************** */


	public function getIdVente()
	{
		return $this->_IdVente;
	}

	public function setIdVente($IdVente)
	{
		$this->_IdVente=$IdVente;
	}

	public function getIdRepres()
	{
		return $this->_IdRepres;
	}

	public function setIdRepres($IdRepres)
	{
		$this->_IdRepres=$IdRepres;
	}

	public function getIdProduit()
	{
		return $this->_IdProduit;
	}

	public function setIdProduit($IdProduit)
	{
		$this->_IdProduit=$IdProduit;
	}

	public function getIdClient()
	{
		return $this->_IdClient;
	}

	public function setIdClient($IdClient)
	{
		$this->_IdClient=$IdClient;
	}

	public function getQuantité()
	{
		return $this->_Quantité;
	}

	public function setQuantité($Quantité)
	{
		$this->_Quantité=$Quantité;
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
		return "IdVente : ".$this->getIdVente()."IdRepres : ".$this->getIdRepres()."IdProduit : ".$this->getIdProduit()."IdClient : ".$this->getIdClient()."Quantité : ".$this->getQuantité()."\n";
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