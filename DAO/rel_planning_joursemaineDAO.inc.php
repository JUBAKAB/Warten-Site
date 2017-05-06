<?php 
 class rel_planning_joursemaineDAO extends DAO {
private $_id = "id as _id";
private $_jour = "jour as _jour";
private $_live = "live as _live";
private $_datedebut = "datedebut as _datedebut";
private $_datefin = "datefin as _datefin";
private $_libelle_fr = "libelle_fr as _libelle_fr";
private $_libelle_en = "libelle_en as _libelle_en";

 public function get_rel_planning_joursemaine(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_jour, $this->_live, $this->_datedebut, $this->_datefin, $this->_libelle_fr, $this->_libelle_en FROM rel_planning_joursemaine " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_rel_planning_joursemaine_By_PK(){ 
 $req = $this-> prepare("SELECT FROM rel_planning_joursemaine  WHERE  $this->_id, $this->_jour, $this->_live, $this->_datedebut, $this->_datefin, $this->_libelle_fr, $this->_libelle_en $this->_id = :X_id AND $this->_jour= :X_jour AND $this->_live= :X_live");
$req->BindParam(":X_live",$live);
$req->exectute(); 
 return $this->cursorToObject($req);
}
}