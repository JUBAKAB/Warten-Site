<?php 
class joursemaine{
    private $_id; 
    private $_jour; 
    //GETTER
    public function get_id(){
            return $this->_id;
    } 
    public function get_jour(){
            return $this->_jour;
    }
    //SETTER
    public function set_id($x){
            $this->_id=$x;
    } 
    public function set_jour($x){
            $this->_jour=$x;
    } 
}
?>