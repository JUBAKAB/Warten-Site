<?php

 class main_settingsDAO extends DAO {
private $_id = "id as _id";
private $_langues = "langues as _langues";
private $_color = "color as _color";

 public function get_main_settings(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_langues, $this->_color FROM main_settings " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_main_settings_By_PK(){ 
 $req = $this-> prepare("SELECT FROM main_settings  WHERE  $this->_id, $this->_langues, $this->_color $this->_id = :X_id");
$req->BindParam(":X_id",$id);
$req->exectute(); 
 return $this->cursorToObject($req);
}
}