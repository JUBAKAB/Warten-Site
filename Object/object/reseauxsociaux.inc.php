<?php 
class reseauxsociaux{
    private $_id; 
    private $_nom; 
    private $_url; 
    private $_API; 
    //GETTER
    public function get_id(){
            return $this->_id;
    } 
    public function get_nom(){
            return $this->_nom;
    } 
    public function get_url(){
            return $this->_url;
    } 
    public function get_API(){
            return $this->_API;
    } 
    //SETTER
    public function set_id($x){
            $this->_id=$x;
    } 
    public function set_nom($x){
            $this->_nom=$x;
    } 
    public function set_url($x){
            $this->_url=$x;
    } 
    public function set_API($x){
            $this->_API=$x;
    } 
}
?>