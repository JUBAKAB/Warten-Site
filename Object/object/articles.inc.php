<?php class articles{
private $_id; 
 private $_titre; 
 private $_date_publi;
 private $_texte_fr; 
 private $_texte_en; 
 private $_image; 
 
public function get_id(){
		return $this->_id;} 
public function get_titre(){
		return $this->_titre;} 
public function get_date_publi(){
	return $this->_date_publi;
}
public function get_texte_fr(){
		return $this->_texte_fr;} 
public function get_texte_en(){
		return $this->_texte_en;} 
public function get_image(){
		return $this->_image;} 

public function set_id($x){
		$this->_id=$x;} 
public function set_titre($x){
		$this->_titre=$x;} 

public function set_date_publi($x){
		$this->_date_publi=$x;} 

public function set_texte_fr($x){
		$this->_texte_fr=$x;} 
public function set_texte_en($x){
		$this->_texte_en=$x;} 
public function set_image($x){
		$this->_image=$x;} 
}