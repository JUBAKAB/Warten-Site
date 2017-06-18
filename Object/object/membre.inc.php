<?php 

class membre{
    private $_id; 
    private $_login; 
    private $_password; 
    private $_date; 
    private $_twitch; 
    private $_grade; 
    //GETTER
    public function get_id(){
            return $this->_id;
    } 
    public function get_login(){
            return $this->_login;
    } 
    public function get_password(){
            return $this->_password;
    } 
    public function get_date(){
            return $this->_date;
    } 
    public function get_twitch(){
            return $this->_twitch;
    } 
    public function get_grade(){
            return $this->_grade;
    }
    //SETTER
    public function set_id($x){
            $this->_id=$x;
    } 
    public function set_login($x){
            $this->_login=$x;
    } 
    public function set_password($x){
            $this->_password=$x;
    } 
    public function set_date($x){
            $this->_date=$x;
    } 
    public function set_twitch($x){
            $this->_twitch=$x;
    } 
    public function set_grade($x){
            $this->_grade=$x;
    } 
}

?>