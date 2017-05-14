<?php 

 class menuDAO extends DAO {
private $_id = "id as _id";
private $_libelle_fr = "libelle_fr as _libelle_fr";
private $_libelle_en = "libelle_en as _libelle_en";
private $_lien = "lien as _lien";

 public function get_menu(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_libelle_fr, $this->_libelle_en, $this->_lien FROM menu " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_menu_By_PK($id){ 
 $req = $this-> prepare("SELECT   $this->_id ,  $this->_libelle_fr ,  $this->_libelle_en ,  $this->_lien  FROM menu  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$req->execute(); 
 return $this->cursorToObject($req);
}

 public function delete_menu($id){ 
 $req = $this-> prepare("DELETE  FROM menu  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$resultat = $req->execute(); 
 return $resultat;
}

 public function update_menu($The_menu){ 
 $req = $this-> prepare("UPDATE  menu  SET id = :X_id , libelle_fr = :X_libelle_fr , libelle_en = :X_libelle_en , lien = :X_lien  WHERE  id = :X_id");
$req->bindValue(':X_id', $The_menu->get_id());
$req->bindValue(':X_libelle_fr', $The_menu->get_libelle_fr());
$req->bindValue(':X_libelle_en', $The_menu->get_libelle_en());
$req->bindValue(':X_lien', $The_menu->get_lien());
 $resultat = $req->execute(); 
 return $resultat ;
}

 public function insert_menu($The_menu){ 
 $req = $this-> prepare("INSERT INTO  menu (id, libelle_fr, libelle_en, lien) VALUES (:X_id, :X_libelle_fr, :X_libelle_en, :X_lien) ");
$req->bindValue(":X_id", $The_menu->get_id());
$req->bindValue(":X_libelle_fr", $The_menu->get_libelle_fr());
$req->bindValue(":X_libelle_en", $The_menu->get_libelle_en());
$req->bindValue(":X_lien", $The_menu->get_lien());
 $resultat = $req->execute(); 
 return $resultat ;
}

 }