<?php

class Stages 
{

	/*****************Attributs***************** */

	private $_idStage;
	private $_etape;
	private $_dateVisite;
	private $_nomVisiteur;
	private $_lieuRealisation;
	private $_deplacement;
	private $_frequenceDeplacement;
	private $_modeDeplacement;
	private $_attFormReglement;
	private $_libelleAttFormReg;
	private $_visiteMedical;
	private $_travauxDang;
	private $_dateDeclarationDerog;
	private $_sujetStage;
	private $_travauxRealises;
	private $_objectifPAE;
	private $_dateDebut;
	private $_dateFin;
	private $_idTuteur;
	private $_idStagiaire;

	/***************** Accesseurs ***************** */


	public function getIdStage()
	{
		return $this->_idStage;
	}

	public function setIdStage($idStage)
	{
		$this->_idStage=$idStage;
	}

	public function getEtape()
	{
		return $this->_etape;
	}

	public function setEtape($etape)
	{
		$this->_etape=$etape;
	}

	public function getDateVisite()
	{
		return $this->_dateVisite;
	}

	public function setDateVisite($dateVisite)
	{
		$this->_dateVisite=$dateVisite;
	}

	public function getNomVisiteur()
	{
		return $this->_nomVisiteur;
	}

	public function setNomVisiteur($nomVisiteur)
	{
		$this->_nomVisiteur=$nomVisiteur;
	}

	public function getLieuRealisation()
	{
		return $this->_lieuRealisation;
	}

	public function setLieuRealisation($lieuRealisation)
	{
		$this->_lieuRealisation=$lieuRealisation;
	}

	public function getDeplacement()
	{
		return $this->_deplacement;
	}

	public function setDeplacement($deplacement)
	{
		$this->_deplacement=$deplacement;
	}

	public function getFrequenceDeplacement()
	{
		return $this->_frequenceDeplacement;
	}

	public function setFrequenceDeplacement($frequenceDeplacement)
	{
		$this->_frequenceDeplacement=$frequenceDeplacement;
	}

	public function getModeDeplacement()
	{
		return $this->_modeDeplacement;
	}

	public function setModeDeplacement($modeDeplacement)
	{
		$this->_modeDeplacement=$modeDeplacement;
	}

	public function getAttFormReglement()
	{
		return $this->_attFormReglement;
	}

	public function setAttFormReglement($attFormReglement)
	{
		$this->_attFormReglement=$attFormReglement;
	}

	public function getLibelleAttFormReg()
	{
		return $this->_libelleAttFormReg;
	}

	public function setLibelleAttFormReg($libelleAttFormReg)
	{
		$this->_libelleAttFormReg=$libelleAttFormReg;
	}

	public function getVisiteMedical()
	{
		return $this->_visiteMedical;
	}

	public function setVisiteMedical($visiteMedical)
	{
		$this->_visiteMedical=$visiteMedical;
	}

	public function getTravauxDang()
	{
		return $this->_travauxDang;
	}

	public function setTravauxDang($travauxDang)
	{
		$this->_travauxDang=$travauxDang;
	}

	public function getDateDeclarationDerog()
	{
		return $this->_dateDeclarationDerog;
	}

	public function setDateDeclarationDerog($dateDeclarationDerog)
	{
		$this->_dateDeclarationDerog=$dateDeclarationDerog;
	}

	public function getSujetStage()
	{
		return $this->_sujetStage;
	}

	public function setSujetStage($sujetStage)
	{
		$this->_sujetStage=$sujetStage;
	}

	public function getTravauxRealises()
	{
		return $this->_travauxRealises;
	}

	public function setTravauxRealises($travauxRealises)
	{
		$this->_travauxRealises=$travauxRealises;
	}

	public function getObjectifPAE()
	{
		return $this->_objectifPAE;
	}

	public function setObjectifPAE($objectifPAE)
	{
		$this->_objectifPAE=$objectifPAE;
	}

	public function getDateDebut()
	{
		return $this->_dateDebut;
	}

	public function setDateDebut($dateDebut)
	{
		$this->_dateDebut=$dateDebut;
	}

	public function getDateFin()
	{
		return $this->_dateFin;
	}

	public function setDateFin($dateFin)
	{
		$this->_dateFin=$dateFin;
	}

	public function getIdTuteur()
	{
		return $this->_idTuteur;
	}

	public function setIdTuteur($idTuteur)
	{
		$this->_idTuteur=$idTuteur;
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
		return "IdStage : ".$this->getIdStage()."Etape : ".$this->getEtape()."DateVisite : ".$this->getDateVisite()."NomVisiteur : ".$this->getNomVisiteur()."LieuRealisation : ".$this->getLieuRealisation()."Deplacement : ".$this->getDeplacement()."FrequenceDeplacement : ".$this->getFrequenceDeplacement()."ModeDeplacement : ".$this->getModeDeplacement()."AttFormReglement : ".$this->getAttFormReglement()."LibelleAttFormReg : ".$this->getLibelleAttFormReg()."VisiteMedical : ".$this->getVisiteMedical()."TravauxDang : ".$this->getTravauxDang()."DateDeclarationDerog : ".$this->getDateDeclarationDerog()."SujetStage : ".$this->getSujetStage()."TravauxRealises : ".$this->getTravauxRealises()."ObjectifPAE : ".$this->getObjectifPAE()."DateDebut : ".$this->getDateDebut()."DateFin : ".$this->getDateFin()."IdTuteur : ".$this->getIdTuteur()."IdStagiaire : ".$this->getIdStagiaire()."\n";
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