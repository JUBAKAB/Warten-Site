<?php class activite{
private $_id; 
 private $_reseaux; 
 private $_APIurl; 
 
public function get_id(){
		return $this->_id;} 
public function get_reseaux(){
		return $this->_reseaux;} 
public function get_APIurl(){
		return $this->_APIurl;} 

public function set_id($x){
		$this->_id=$x;} 
public function set_reseaux($x){
		$this->_reseaux=$x;} 
public function set_APIurl($x){
		$this->_APIurl=$x;} 
}
