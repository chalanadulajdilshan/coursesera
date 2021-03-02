<?php

class Registration_Model extends Model{
    function __construct() {
        parent::__construct();
    }
    function get_province(){
       return $this->db->select(array('table'=>'province','column'=>'*'));
    }
    function add($data){
         return $this->db->insert(array('table'=>'register','data'=> $data));
        
    }
   
}
