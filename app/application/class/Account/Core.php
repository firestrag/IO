<?php

abstract class Account_Core{

    protected static $_login_id = 'Account_Core__id';
    protected static $_account_type = 'Account_Core__type';

    public static function isLogin($type){
        return (
            isset($_SESSION[self::$_login_id]) &&
            (isset($_SESSION[self::$_account_type])) &&
            ($_SESSION[self::$_account_type] == $type)
        );
    }

    protected static function setLoginId($id){

        $_SESSION[self::$_login_id] = $id;
    }

    protected static function setAccountType($type){
        $_SESSION[self::$_account_type] = $type;
    }

    abstract function login();

    public function logout(){
        unset($_SESSION[self::$_login_id]);
    }

}