<?php 
 class languesDAO extends DAO {
private $_id = "id as _id";
private $_libellé = "libellé as _libellé";
private $_libcourt = "libcourt as _libcourt";

 public function get_langues(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_libellé, $this->_libcourt FROM langues " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_langues_By_PK(){ 
 $req = $this-> prepare("SELECT FROM langues  WHERE  $this->_id, $this->_libellé $this->_id = :X_id");
$req->BindParam(":X_id",$id);
$req->exectute(); 
 return $this->cursorToObject($req);
}
}