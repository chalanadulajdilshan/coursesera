<?php

class Index extends Controller {

    function __construct($model_name) {
        parent::__construct($model_name);
    }

    function index() {
        $this->view->title = "VTA | Login";
        $this->view->render('index/login');
    //   var_dump( Hash::create('whirlpool', '1234', SALT));
    }

    function login() {
//        var_dump(Hash::create('whirlpool', 'Fj5nmND3BTZ94sB', SALT));
        $data = array(
            'username' => [$_POST['username'], 'is_empty'],
            'password' => [$_POST['password'], 'is_empty']
        );
        $errors = $this->validation->form_validate($data);

        if (empty($errors)) {
            //
//            $data = $this->model->by_username($_POST['username']);
            $result = $this->model->login($_POST['username']);
            $data = $result;
//            var_dump($data);
            if ($data != NULL) {
                $try = $data[0]['try'] + 1;
                if ($data[0]['try'] < MAX_TRY) {


                    if (isset($result[0]['password']) && $result[0]['password'] == Hash::create('whirlpool', $_POST['password'], SALT)) {

                        $login_token = rand(100000, 999999); //lgout fuc
                        $result2 = $this->model->set_login_token($result[0]['id'], $login_token); //TOKEN AND RESET TRY
                        if ($result2) {
                            Session::set(AUTH_PREFIX.'adminid', $this->hash->encrypt($result[0]['id']));
                            Session::set(AUTH_PREFIX.'adminlogin_token', $this->hash->encrypt($login_token));

                            echo json_encode(array('has_errors' => FALSE, 'status' => TRUE));
//                    header('Location: ' . URL_Admin . 'dashboard/');
                        } else {//TOKEN SET=====
                            echo json_encode(array('has_errors' => FALSE, 'status' => FALSE, 'message' => 'Somethin Whent Wrong.'));
                        }
                    } else {//ISSET PASS CHECK====
                        $result2 = $this->model->update_try($result[0]['id'], $try); //UPDATE TRY IF WRONG PASS 
                        if ($try == MAX_TRY) {
                            $result = $this->model->deactivate($result[0]['id']); //DEACTIVE IF TRY exceeded
                            echo json_encode(array('has_errors' => FALSE, 'status' => FALSE, 'message' => 'Account Deactivated'));
                        } else {
                            echo json_encode(array('has_errors' => FALSE, 'status' => FALSE, 'message' => 'invalid username or password'));
                        }
                    }
                } else {//MAX_TRY=====
//                    $result = $this->model->update_try($result[0]['id'], $try); //UPDATE TRY IF WRONG PASS DEACTIVE
//                    if ($result) {
                    echo json_encode(array('has_errors' => FALSE, 'status' => FALSE, 'message' => 'invalid username or password tr'));
//                    }
                }
            } else {//NULL=====
                echo json_encode(array('has_errors' => FALSE, 'status' => FALSE, 'message' => 'invalid username or password'));
            }




            //
        } else {//ERRORS======
            echo json_encode(array('has_errors' => TRUE, 'errors' => $errors));
        }
    }

    function logout() {
        $result = $this->model->logout(Hash::decrypt(Session::get(AUTH_PREFIX.'adminid')));
        Session::unset_session(AUTH_PREFIX.'adminid');
        Session::unset_session(AUTH_PREFIX.'adminlogin_token');
        header('Location: ' . URL_Admin . "");
    }

}
