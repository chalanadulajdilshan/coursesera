<?php

class Index_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function login($data)
    {
        $result = $this->db->select(array(
            'table' => 'user', 'column' => '*', 'where' => 'username = :username and is_active = :is_active',
            'data' => array('username' => $data, 'is_active' => 1)
        ));
        return $result;
    }

    function set_login_token($id, $login_token)
    {
        $result = $this->db->update(array('table' => 'user', 'where' => 'id = :id', 'values' => array('id' => $id), 'data' => array('token' => $login_token, 'try' => '0')));
        return $result;
    }

    function by_username($username)
    {
        $result = $this->db->select(array('table' => 'user', 'column' => '*', 'where' => 'username = :username', 'data' => array('username' => $username)));
        return $result;
    }

    function update_try($id, $try)
    {
        $result = $this->db->update(
            array(
                'table' => 'user',
                'data' => ['try' => ' :try'],
                'where' => 'id = :id',
                'values' => array('id' => $id, 'try' => $try)
            )
        );
        return $result;
    }

    function deactivate($id)
    {
        $result = $this->db->update(
            array(
                'table' => 'user',
                'data' => ['is_active' => ' :is_active'],
                'where' => 'id = :id',
                'values' => array('id' => $id, 'is_active' => '0')
            )
        );
        return $result;
    }

    function logout($id)
    {
        $result = $this->db->update(
            array(
                'table' => 'user',
                'data' => ['token' => ' :token'],
                'where' => 'id = :id',
                'values' => array('id' => $id, 'token' => rand(100000, 999999))
            )
        );
        return $result;
    }
}
