<?php 

 class membreDAO extends DAO {
private $_id = "id as _id";
private $_login = "login as _login";
private $_password = "password as _password";
private $_date = "date as _date";
private $_twitch = "twitch as _twitch";
private $_grade = "grade as _grade";

 public function get_membre(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_login, $this->_password, $this->_date, $this->_twitch, $this->_grade FROM membre " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_membre_By_PK($id){ 
 $req = $this-> prepare("SELECT   $this->_id ,  $this->_login ,  $this->_password ,  $this->_date ,  $this->_twitch ,  $this->_grade  FROM membre  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$req->execute(); 
 return $this->cursorToObject($req);
}

 public function delete_membre($id){ 
 $req = $this-> prepare("DELETE  FROM membre  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$resultat = $req->execute(); 
 return $resultat;
}

 public function update_membre($The_membre){ 
 $req = $this-> prepare("UPDATE  membre  SET id = :X_id , login = :X_login , password = :X_password , date = :X_date , twitch = :X_twitch , grade = :X_grade  WHERE  id = :X_id");
$req->bindValue(':X_id', $The_membre->get_id());
$req->bindValue(':X_login', $The_membre->get_login());
$req->bindValue(':X_password', $The_membre->get_password());
$req->bindValue(':X_date', $The_membre->get_date());
$req->bindValue(':X_twitch', $The_membre->get_twitch());
$req->bindValue(':X_grade', $The_membre->get_grade());
 $resultat = $req->execute(); 
 return $resultat ;
}

 public function insert_membre($The_membre){ 
 $req = $this-> prepare("INSERT INTO  membre (id, login, password, date, twitch, grade) VALUES (:X_id, :X_login, :X_password, :X_date, :X_twitch, :X_grade) ");
$req->bindValue(":X_id", $The_membre->get_id());
$req->bindValue(":X_login", $The_membre->get_login());
$req->bindValue(":X_password", $The_membre->get_password());
$req->bindValue(":X_date", $The_membre->get_date());
$req->bindValue(":X_twitch", $The_membre->get_twitch());
$req->bindValue(":X_grade", $The_membre->get_grade());
 $resultat = $req->execute(); 
 return $resultat ;
}

 }