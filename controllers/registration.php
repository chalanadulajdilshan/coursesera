<?php

class Registration extends Controller {

    function __construct($model_name) {
        parent::__construct($model_name);
    }

    function index() {
        $this->view->render('header');
        $this->view->province = $this->model->get_province();
        $this->view->render('navigation');
        $this->view->render('registration/index');
        $this->view->render('footer');
    }

    function success() {
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('registration/registration-success');
        $this->view->render('footer');
    }

    function add() {


        $data = [

            'about_us' => $_POST['about_us'],
            'first_name' => $_POST['first_name'],
            'middle_name' => $_POST['middle_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'mobile_phone' => $_POST['mobile_phone'],
            'land_phone' => $_POST['land_phone'],
            'date_of_birth' => $_POST['date_of_birth'],
            'gender' => $_POST['gender'],
            'address_no' => $_POST['address_no'],
            'address_street' => $_POST['address_street'],
            'province' => $_POST['province'],
            'district' => $_POST['district'],
            'city' => $_POST['city'],
            'is_differently_abled' => $_POST['is_differently_abled'],
            'is_student' => $_POST['is_student'],
            'student_status' => $_POST['student_status'],
            'employee_status' => $_POST['employee_status'],
            'reason_for_unemployee' => $_POST['reason_for_unemployee'],
            'scholarship_suitability' => $_POST['scholarship_suitability'],
            'current_occupation' => $_POST['current_occupation'],
            'education' => $_POST['education'],
            'field_of_study' => $_POST['field_of_study'],
            'english_language_proficiency' => $_POST['english_language_proficiency'],
            'have_internet' => $_POST['have_internet'],
            'how_access_course' => $_POST['how_access_course'],
            'computer_lab' => $_POST['computer_lab'],
            'scholarship' => $_POST['scholarship'],
            'is_consent' => $_POST['is_consent']
        ];

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
