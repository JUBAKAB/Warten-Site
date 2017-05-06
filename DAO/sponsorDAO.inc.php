<?php

 class sponsorDAO extends DAO {
private $_id = "id as _id";
private $_nom = "nom as _nom";
private $_url = "url as _url";
private $_image = "image as _image";
private $_texte_fr = "texte_fr as _texte_fr";
private $_texte_en = "texte_en as _texte_en";

 public function get_sponsor(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_nom, $this->_url, $this->_image, $this->_texte_fr, $this->_texte_en FROM sponsor " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_sponsor_By_PK(){ 
 $req = $this-> prepare("SELECT FROM sponsor  WHERE  $this->_id, $this->_nom, $this->_url, $this->_image, $this->_texte_fr, $this->_texte_en $this->_id = :X_id");
$req->BindParam(":X_id",$id);
$req->exectute(); 
 return $this->cursorToObject($req);
}
}