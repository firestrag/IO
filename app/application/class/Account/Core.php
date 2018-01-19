<?php

abstract class Account_Core{

    protected static $_login_id = 'Account_Core__id';

    public static function isLogin(){
        return isset($_SESSION[self::$_login_id]);
    }

    protected static function setLoginId($id){
        $_SESSION[self::$_login_id] = $id;
    }

    abstract function login();

    public function logout(){
        unset($_SESSION[self::$_login_id]);
    }

}