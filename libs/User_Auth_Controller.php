<?php

class User_Auth_Controller extends Controller {

    function __construct($model_name) {
        parent::__construct($model_name);
        $this->auth();
//        $this->model->check_login_token();
        $this->view->user = $this->model->get_user(Hash::decrypt(Session::get(AUTH_PREFIX.'adminid')));
    }

    function auth() {
//        echo "auth called";
        if (Session::isset_session(AUTH_PREFIX.'adminid')) {
            $id = Hash::decrypt(Session::get(AUTH_PREFIX.'adminid'));
            $login_token = Hash::decrypt(Session::get(AUTH_PREFIX.'adminlogin_token'));
//            var_dump($login_token);
            if ($id != '' && $login_token != '' && !empty($login_token)) {
                $result = $this->model->check_login_token($id, $login_token);
                if (!empty($result)) {
                    return TRUE;
                } else {
                    header('Location: ' . URL);
                }
            }
        } else {
            header('Location: ' . URL);
        }
    }

}
