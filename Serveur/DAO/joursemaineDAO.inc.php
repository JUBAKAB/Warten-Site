<?php 

 class joursemaineDAO extends DAO {
private $_id = "id as _id";
private $_jour = "jour as _jour";

 public function get_joursemaine(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_jour FROM joursemaine " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_joursemaine_By_PK(){ 
 $req = $this-> prepare("SELECT FROM joursemaine  WHERE  $this->_id, $this->_jour $this->_id = :X_id");
$req->BindParam(":X_id",$id);
$req->exectute(); 
 return $this->cursorToObject($req);
}
}