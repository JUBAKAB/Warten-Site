<?php class langues{
private $_id; 
 private $_libellé; 
 
public function get_id(){
		return $this->_id;} 
public function get_libellé(){
		return $this->_libellé;} 

public function set_id($x){
		$this->_id=$x;} 
public function set_libellé($x){
		$this->_libellé=$x;} 
}