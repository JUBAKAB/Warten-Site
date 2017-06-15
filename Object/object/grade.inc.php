<?php class grade{
private $_id; 
 private $_libelle; 
 
public function get_id(){
		return $this->_id;} 
public function get_libelle(){
		return $this->_libelle;} 

public function set_id($x){
		$this->_id=$x;} 
public function set_libelle($x){
		$this->_libelle=$x;} 
}