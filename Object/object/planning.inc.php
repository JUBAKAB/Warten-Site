<?php 
class planning{
    private $_id; 
    private $_datedebutplanning; 
    private $_datefinplanning; 
    //GETTER
    public function get_id(){
            return $this->_id;
    } 
    public function get_datedebutplanning(){
            return $this->_datedebutplanning;
    } 
    public function get_datefinplanning(){
            return $this->_datefinplanning;
    }
    //SETTER
    public function set_id($x){
            $this->_id=$x;
    } 
    public function set_datedebutplanning($x){
            $this->_datedebutplanning=$x;
    } 
    public function set_datefinplanning($x){
            $this->_datefinplanning=$x;
    } 
}
?>