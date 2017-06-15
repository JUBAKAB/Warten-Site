<?php class main_settings{
private $_id; 
 private $_langues; 
 private $_color; 
 
public function get_id(){
		return $this->_id;} 
public function get_langues(){
		return $this->_langues;} 
public function get_color(){
		return $this->_color;} 

public function set_id($x){
		$this->_id=$x;} 
public function set_langues($x){
		$this->_langues=$x;} 
public function set_color($x){
		$this->_color=$x;} 
}