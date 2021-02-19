<?php

header('Content-type: application/json');

class District extends Controller {

    function __construct($model_name) {
        parent::__construct($model_name);
    }

    function get_district_by_province() {

        $id = $_POST['province_id'];
        $result = $this->view->district = $this->model->get_district_by_province($id);
        echo json_encode($result);
    }

}
