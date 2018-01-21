<?php

class Account_IOA extends Account_Core {


    public static function getAdminById($id){
        return Model_Admin::get($id);
    }

    public function login(){
        $admin = Model_Admin::get($_POST['id']);
        if(!$admin){
            return false;
        }

        parent::setLoginId($admin[0]['ID']);
        parent::setAccountType('admin');
//        $_SESSION['Account_Core__type'] = 'admin';


        return true;
    }

    public static function isLogin(){
        return parent::isLogin('admin');
    }

    public function getId(){
        return $_SESSION[self::$_login_id];
    }

    public function getAdminsList(){
        return Model_Admin::getAll();
    }

}