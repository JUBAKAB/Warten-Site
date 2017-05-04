<?php

 class articlesDAO extends DAO {
private $_id = "id as _id";
private $_titre = "titre as _titre";
private $_texte_fr = "texte_fr as _texte_fr";
private $_texte_en = "texte_en as _texte_en";
private $_image = "image as _image";

 public function get_articles(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_titre, $this->_texte_fr, $this->_texte_en, $this->_image FROM articles " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_articles_By_PK(){ 
 $req = $this-> prepare("SELECT FROM articles  WHERE  $this->_id, $this->_titre, $this->_texte_fr, $this->_texte_en, $this->_image $this->_id = :X_id");
$req->BindParam(":X_id",$id);
$req->exectute(); 
 return $this->cursorToObject($req);
}
}