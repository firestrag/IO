<?php

class Account_IO extends Account_Core {


    public static function getUserById($id){
        $id = (int)$id;
        return DB::query(DB::SELECT, "SELECT * FROM `klienci` WHERE `id` = $id");
    }

    public function login(){
        $user = Model_User::get($_POST['id']);
        if(!$user){
            return false;
        }

        parent::setLoginId($user[0]['ID']);

        return true;
    }

    public function getId(){
        return $_SESSION[self::$_login_id];
    }

    public function getUsersList(){
        return DB::query(DB::SELECT, "SELECT `id`, `imie`, `nazwisko` FROM `klienci`");
    }

}