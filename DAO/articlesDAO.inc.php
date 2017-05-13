<?php include_once '../DAO.inc.php'; 

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

 public function get_articles_By_PK($id){ 
 $req = $this-> prepare("SELECT   $this->_id ,  $this->_titre ,  $this->_texte_fr ,  $this->_texte_en ,  $this->_image  FROM articles  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$req->execute(); 
 return $this->cursorToObject($req);
}

 public function delete_articles($id){ 
 $req = $this-> prepare("DELETE  FROM articles  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$resultat = $req->execute(); 
 return $resultat;
}

 public function update_articles($The_articles){ 
 $req = $this-> prepare("UPDATE  articles  SET id = :X_id , titre = :X_titre , texte_fr = :X_texte_fr , texte_en = :X_texte_en , image = :X_image  WHERE  id = :X_id");
$req->bindValue(':X_id', $The_articles->get_id());
$req->bindValue(':X_titre', $The_articles->get_titre());
$req->bindValue(':X_texte_fr', $The_articles->get_texte_fr());
$req->bindValue(':X_texte_en', $The_articles->get_texte_en());
$req->bindValue(':X_image', $The_articles->get_image());
 $resultat = $req->execute(); 
 return $resultat ;
}

 public function insert_articles($The_articles){ 
 $req = $this-> prepare("INSERT INTO  articles (id, titre, texte_fr, texte_en, image) VALUES (:X_id, :X_titre, :X_texte_fr, :X_texte_en, :X_image) ");
$req->bindValue(":X_id", $The_articles->get_id());
$req->bindValue(":X_titre", $The_articles->get_titre());
$req->bindValue(":X_texte_fr", $The_articles->get_texte_fr());
$req->bindValue(":X_texte_en", $The_articles->get_texte_en());
$req->bindValue(":X_image", $The_articles->get_image());
 $resultat = $req->execute(); 
 return $resultat ;
}

 }