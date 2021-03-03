<?php

date_default_timezone_set('Asia/Colombo');

class Registration_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function get_province() {
        return $this->db->select(array('table' => 'province', 'column' => '*'));
    }

    function add($data) {
        $date = array('created_date' => date('Y-m-d H:i:s'));
        $newData = $data + $date;
        return $this->db->insert(array('table' => 'register', 'data' => $newData));
    }

}
