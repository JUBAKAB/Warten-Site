<?php
include_once "DAO/Param/Param.inc.php";
require_once 'Object/param/mainObject.inc.php'; 


abstract class DAO extends PDO{
    
    
	public function __construct(){
        //Connexion
		parent::__construct(Param::$dsn, Param::$login, Param::$mdp);
        //Erreur si la connexion ne se fais pas
		$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}
    //Classe herité de l'interface PDO pour renvoyé des tableaux
	protected function cursorToObjectArray($curseur){
        
		$tab = $curseur->fetchAll(PDO::FETCH_CLASS, substr(get_class($this),0,-3));
		return $tab;
	}
	//Classe herité de l'interface PDO pour renvoyé des objets
	protected function cursorToObject($curseur){
		$curseur->setFetchMode(PDO::FETCH_CLASS, substr(get_class($this),0,-3));
		return $curseur->fetch(PDO::FETCH_CLASS);
	}
    //Classe herité de l'interface PDO pour renvoyé des tableaux non objet
	protected function cursorToArrayNonObject($curseur){
		$tab = $curseur->fetchAll(PDO::FETCH_ASSOC);
		return $tab;
	}
}
