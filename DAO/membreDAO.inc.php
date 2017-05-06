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

 public function get_membre_By_PK(){ 
 $req = $this-> prepare("SELECT FROM membre  WHERE  $this->_id, $this->_login, $this->_password, $this->_date, $this->_twitch, $this->_grade $this->_id = :X_id");
$req->BindParam(":X_id",$id);
$req->exectute(); 
 return $this->cursorToObject($req);
}
}