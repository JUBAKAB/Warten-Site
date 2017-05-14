<?php 

 class prestationDAO extends DAO {
private $_id = "id as _id";
private $_titre = "titre as _titre";
private $_texte_fr = "texte_fr as _texte_fr";
private $_texte_en = "texte_en as _texte_en";
private $_image = "image as _image";

 public function get_prestation(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_titre, $this->_texte_fr, $this->_texte_en, $this->_image FROM prestation " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_prestation_By_PK(){ 
 $req = $this-> prepare("SELECT   $this->_id ,  $this->_titre ,  $this->_texte_fr ,  $this->_texte_en ,  $this->_image  FROM prestation  WHERE ");
$req->execute(); 
 return $this->cursorToObject($req);
}

 public function delete_prestation(){ 
 $req = $this-> prepare("DELETE  FROM prestation  WHERE ");
$resultat = $req->execute(); 
 return $resultat;
}

 public function update_prestation($The_prestation){ 
 $req = $this-> prepare("UPDATE  prestation  SET id = :X_id , titre = :X_titre , texte_fr = :X_texte_fr , texte_en = :X_texte_en , image = :X_image  WHERE ");
$req->bindValue(':X_id', $The_prestation->get_id());
$req->bindValue(':X_titre', $The_prestation->get_titre());
$req->bindValue(':X_texte_fr', $The_prestation->get_texte_fr());
$req->bindValue(':X_texte_en', $The_prestation->get_texte_en());
$req->bindValue(':X_image', $The_prestation->get_image());
 $resultat = $req->execute(); 
 return $resultat ;
}

 public function insert_prestation($The_prestation){ 
 $req = $this-> prepare("INSERT INTO  prestation (id, titre, texte_fr, texte_en, image) VALUES (:X_id, :X_titre, :X_texte_fr, :X_texte_en, :X_image) ");
$req->bindValue(":X_id", $The_prestation->get_id());
$req->bindValue(":X_titre", $The_prestation->get_titre());
$req->bindValue(":X_texte_fr", $The_prestation->get_texte_fr());
$req->bindValue(":X_texte_en", $The_prestation->get_texte_en());
$req->bindValue(":X_image", $The_prestation->get_image());
 $resultat = $req->execute(); 
 return $resultat ;
}

 }