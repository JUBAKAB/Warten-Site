<?php class menu{
private $_id; 
 private $_libelle_fr; 
 private $_libelle_en;
 private $_lien; 
 
public function get_id(){
		return $this->_id;} 
public function get_libelle_fr(){
		return $this->_libelle_fr;}

public function get_libelle_en(){
		return $this->_libelle_en;} 


public function get_lien(){
		return $this->_lien;} 


public function set_id($x){
		$this->_id=$x;} 
public function set_libelle_en($x){
		$this->_libelle_en=$x;}
public function set_libelle_fr($x){
		$this->_libelle_fr=$x;}  

public function set_lien($x){
		$this->_lien=$x;}  
}
