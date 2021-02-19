<?php

class Registration_Model extends Model{
    function __construct() {
        parent::__construct();
    }
    function get_province(){
       return $this->db->select(array('table'=>'province','column'=>'*'));
    }
}
