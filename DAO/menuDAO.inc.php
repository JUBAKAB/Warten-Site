<?php 

 class menuDAO extends DAO {
private $_id = "id as _id";
private $_libelle_fr = "libelle_fr as _libelle_fr";
private $_libelle_en = "libelle_en as _libelle_en";

 public function get_menu(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_libelle_fr , $this->_libelle_en FROM menu " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_menu_By_PK(){ 
 $req = $this-> prepare("SELECT FROM menu  WHERE  $this->_id, $this->_libelle_fr , $this->_libelle_fr  $this->_id = :X_id");
$req->BindParam(":X_id",$id);
$req->exectute(); 
 return $this->cursorToObject($req);
}
}