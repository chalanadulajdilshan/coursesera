<?php

class Registration extends Controller {

    function __construct($model_name) {
        parent::__construct($model_name);
    }

    function index() {

        $this->view->render('registration/index');
    }

}
