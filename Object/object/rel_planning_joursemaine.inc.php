<?php 
class rel_planning_joursemaine{
    private $_id; 
    private $_jour; 
    private $_live; 
    private $_datedebut; 
    private $_datefin; 
    private $_libelle_fr; 
    private $_libelle_en; 
    //GETTER
    public function get_id(){
            return $this->_id;
    } 
    public function get_jour(){
            return $this->_jour;
    } 
    public function get_live(){
            return $this->_live;
    } 
    public function get_datedebut(){
            return $this->_datedebut;
    } 
    public function get_datefin(){
            return $this->_datefin;
    } 
    public function get_libelle_fr(){
            return $this->_libelle_fr;
    } 
    public function get_libelle_en(){
            return $this->_libelle_en;
    }
    //SETTER
    public function set_id($x){
            $this->_id=$x;
    } 
    public function set_jour($x){
            $this->_jour=$x;
    } 
    public function set_live($x){
            $this->_live=$x;
    } 
    public function set_datedebut($x){
            $this->_datedebut=$x;
    } 
    public function set_datefin($x){
            $this->_datefin=$x;
    } 
    public function set_libelle_fr($x){
            $this->_libelle_fr=$x;
    } 
    public function set_libelle_en($x){
            $this->_libelle_en=$x;
    } 
}
?>