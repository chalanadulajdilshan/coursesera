<?php

class District_model extends Model {

    function __construct() {
        parent::__construct();
    }

    function get_district_by_province($province) {

        $queue = $this->db->select(array('table' => 'district', 'column' => '*', 'where' => 'province=:province', 'data' => array('province' => $province)));
        return $queue;
    }

}
