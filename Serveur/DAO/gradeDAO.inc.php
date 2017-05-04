<?php 

 class gradeDAO extends DAO {
private $_id = "id as _id";
private $_libelle = "libelle as _libelle";

 public function get_grade(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_libelle FROM grade " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_grade_By_PK(){ 
 $req = $this-> prepare("SELECT FROM grade  WHERE  $this->_id, $this->_libelle $this->_id = :X_id");
$req->BindParam(":X_id",$id);
$req->exectute(); 
 return $this->cursorToObject($req);
}
}