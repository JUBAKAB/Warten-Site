<?php 

 class biographieDAO extends DAO {
private $_id = "id as _id";
private $_titre = "titre as _titre";
private $_texte_fr = "texte_fr as _texte_fr";
private $_texte_en = "texte_en as _texte_en";

 public function get_biographie(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_titre, $this->_texte_fr, $this->_texte_en FROM biographie " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_biographie_By_PK(){ 
 $req = $this-> prepare("SELECT FROM biographie  WHERE  $this->_id, $this->_titre, $this->_texte_fr, $this->_texte_en");
$req->exectute(); 
 return $this->cursorToObject($req);
}
}