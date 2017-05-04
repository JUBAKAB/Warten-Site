<?php 

 class reseauxsociauxDAO extends DAO {
private $_id = "id as _id";
private $_nom = "nom as _nom";
private $_url = "url as _url";
private $_API = "API as _API";

 public function get_reseauxsociaux(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_nom, $this->_url, $this->_API FROM reseauxsociaux " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_reseauxsociaux_By_PK(){ 
 $req = $this-> prepare("SELECT FROM reseauxsociaux  WHERE  $this->_id, $this->_nom, $this->_url, $this->_API $this->_id = :X_id");
$req->BindParam(":X_id",$id);
$req->exectute(); 
 return $this->cursorToObject($req);
}
}