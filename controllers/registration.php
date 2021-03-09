<?php

class Registration extends Controller {

    function __construct($model_name) {
        parent::__construct($model_name);
    }

    function index() {

        $this->view->province = $this->model->get_province();
        $this->view->render('registration/index');
    }

    function success() {
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('registration/registration-success');
        $this->view->render('footer');
    }

    function add() {

        $student_status = 0;
      
       
        if ($this->model->add($data)) {
            $this->mail->set_address($_POST['email']);
            $this->mail->set_content();

            $this->mail->send();
            echo json_encode(array('has_errors' > FALSE, 'status' => TRUE));
        } else {
            echo json_encode(array('has_errors' > FALSE, 'status' => FALSE));
        }
    }

}
