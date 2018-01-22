<?php

class Account_IO extends Account_Core {

    const GROUP_NAME = 'users';

    public static function getUserById($id){
        return Model_User::get($id);
//        $id = (int)$id;
//        return DB::query(DB::SELECT, "SELECT * FROM `klienci` WHERE `id` = $id");
    }

    public function login(){
        $user = Model_User::get($_POST['id']);
        if(!$user){
            return false;
        }
        parent::setLoginId($user[0]['ID']);
        parent::setAccountType(self::GROUP_NAME);

        return true;
    }

    public static function isLogin(){
        return parent::isLogin(self::GROUP_NAME);
    }

    public function getId(){
        return $_SESSION[self::$_login_id];
    }

    public function getUsersList(){
        return DB::query(DB::SELECT, "SELECT `id`, `imie`, `nazwisko` FROM `klienci`");
    }

}