<?php include_once '../DAO.inc.php'; 

 class main_settingsDAO extends DAO {
private $_id = "id as _id";
private $_langues = "langues as _langues";
private $_color = "color as _color";

 public function get_main_settings(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_langues, $this->_color FROM main_settings " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_main_settings_By_PK($id){ 
 $req = $this-> prepare("SELECT   $this->_id ,  $this->_langues ,  $this->_color  FROM main_settings  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$req->execute(); 
 return $this->cursorToObject($req);
}

 public function delete_main_settings($id){ 
 $req = $this-> prepare("DELETE  FROM main_settings  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$resultat = $req->execute(); 
 return $resultat;
}

 public function update_main_settings($The_main_settings){ 
 $req = $this-> prepare("UPDATE  main_settings  SET id = :X_id , langues = :X_langues , color = :X_color  WHERE  id = :X_id");
$req->bindValue(':X_id', $The_main_settings->get_id());
$req->bindValue(':X_langues', $The_main_settings->get_langues());
$req->bindValue(':X_color', $The_main_settings->get_color());
 $resultat = $req->execute(); 
 return $resultat ;
}

 public function insert_main_settings($The_main_settings){ 
 $req = $this-> prepare("INSERT INTO  main_settings (id, langues, color) VALUES (:X_id, :X_langues, :X_color) ");
$req->bindValue(":X_id", $The_main_settings->get_id());
$req->bindValue(":X_langues", $The_main_settings->get_langues());
$req->bindValue(":X_color", $The_main_settings->get_color());
 $resultat = $req->execute(); 
 return $resultat ;
}

 }