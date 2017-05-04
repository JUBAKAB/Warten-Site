<?php class sponsor{
private $_id; 
 private $_nom; 
 private $_url; 
 private $_image; 
 private $_texte_fr; 
 private $_texte_en; 
 
public function get_id(){
		return $this->_id;} 
public function get_nom(){
		return $this->_nom;} 
public function get_url(){
		return $this->_url;} 
public function get_image(){
		return $this->_image;} 
public function get_texte_fr(){
		return $this->_texte_fr;} 
public function get_texte_en(){
		return $this->_texte_en;} 

public function set_id($x){
		$this->_id=$x;} 
public function set_nom($x){
		$this->_nom=$x;} 
public function set_url($x){
		$this->_url=$x;} 
public function set_image($x){
		$this->_image=$x;} 
public function set_texte_fr($x){
		$this->_texte_fr=$x;} 
public function set_texte_en($x){
		$this->_texte_en=$x;} 
}