<?php

class Registration extends Controller {

    function __construct($model_name) {
        parent::__construct($model_name);
    }

    function index() {
        $this->view->render('header');
        $this->view->province = $this->model->get_province();
        $this->view->render('registration/index');
    }

}
