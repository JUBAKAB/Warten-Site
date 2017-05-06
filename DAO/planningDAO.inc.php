<?php 
 class planningDAO extends DAO {
private $_id = "id as _id";
private $_datedebutplanning = "datedebutplanning as _datedebutplanning";
private $_datefinplanning = "datefinplanning as _datefinplanning";

 public function get_planning(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_datedebutplanning, $this->_datefinplanning FROM planning " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_planning_By_PK(){ 
 $req = $this-> prepare("SELECT FROM planning  WHERE  $this->_id, $this->_datedebutplanning, $this->_datefinplanning $this->_id = :X_id");
$req->BindParam(":X_id",$id);
$req->exectute(); 
 return $this->cursorToObject($req);
}
}