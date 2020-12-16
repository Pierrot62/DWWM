<?php

class Utilisateur 
{

	/*****************Attributs***************** */

	private $_IdUtilisateur;
	private $_Login;
	private $_NomUtilisateur;
	private $_PrenomUtilisateur;
	private $_MotDePasse;
	private $_Role;
	private $_idMatieres;

	/***************** Accesseurs ***************** */


	public function getIdUtilisateur()
	{
		return $this->_IdUtilisateur;
	}

	public function setIdUtilisateur($IdUtilisateur)
	{
		$this->_IdUtilisateur=$IdUtilisateur;
	}

	public function getLogin()
	{
		return $this->_Login;
	}

	public function setLogin($Login)
	{
		$this->_Login=$Login;
	}

	public function getNomUtilisateur()
	{
		return $this->_NomUtilisateur;
	}

	public function setNomUtilisateur($NomUtilisateur)
	{
		$this->_NomUtilisateur=$NomUtilisateur;
	}

	public function getPrenomUtilisateur()
	{
		return $this->_PrenomUtilisateur;
	}

	public function setPrenomUtilisateur($PrenomUtilisateur)
	{
		$this->_PrenomUtilisateur=$PrenomUtilisateur;
	}

	public function getMotDePasse()
	{
		return $this->_MotDePasse;
	}

	public function setMotDePasse($MotDePasse)
	{
		$this->_MotDePasse=$MotDePasse;
	}

	public function getRole()
	{
		return $this->_Role;
	}

	public function setRole($Role)
	{
		$this->_Role=$Role;
	}

	public function getIdMatieres()
	{
		return $this->_idMatieres;
	}

	public function setIdMatieres($idMatieres)
	{
		$this->_idMatieres=$idMatieres;
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
		return "IdUtilisateur : ".$this->getIdUtilisateur()."Login : ".$this->getLogin()."NomUtilisateur : ".$this->getNomUtilisateur()."PrenomUtilisateur : ".$this->getPrenomUtilisateur()."MotDePasse : ".$this->getMotDePasse()."Role : ".$this->getRole()."IdMatieres : ".$this->getIdMatieres()."\n";
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