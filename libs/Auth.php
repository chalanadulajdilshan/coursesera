<?php

class Auth {

    function __construct() {
//        parent::__construct();
    }

    function auth() {
//        echo "auth called";
        if (Session::isset_session('vtaslid')) {
            $id = Hash::decrypt(Session::get('vtaslid'));
            $login_token = Hash::decrypt(Session::get('vtasllogin_token'));
//            var_dump($login_token);
            if ($id != '' && $login_token != '' && !empty($login_token)) {
                $result = $this->check_login_token($id, $login_token);
                if (!empty($result)) {
                    return TRUE;
                } else {
                    header('Location: ' . URL_Admin);

                }
            }
        } else {
            header('Location: ' . URL_Admin);
        }
    }
     function check_login_token($id, $login_token) {
         $db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
        $result = $db->select(array('table' => 'user', 'column' => '*', 'where' => 'id = :id and login_token = :token', 'data' => array('id' => $id, 'token' => $login_token)));
        return $result;
    }

}
