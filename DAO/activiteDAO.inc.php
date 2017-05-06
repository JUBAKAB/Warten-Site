<?php

 class activiteDAO extends DAO {
private $_id = "id as _id";
private $_reseaux = "reseaux as _reseaux";
private $_APIurl = "APIurl as _APIurl";

 public function get_activite(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_reseaux, $this->_APIurl FROM activite " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_activite_By_PK(){ 
 $req = $this-> prepare("SELECT FROM activite  WHERE  $this->_id, $this->_reseaux, $this->_APIurl $this->_id = :X_id");
$req->BindParam(":X_id",$id);
$req->exectute(); 
 return $this->cursorToObject($req);
}
}
