<?php

class Account_IOA extends Account_Core {


    public static function getUserById($id){
        $id = (int)$id;
        return DB::query(DB::SELECT, "SELECT * FROM `pracownicy` WHERE `id` = $id");
    }

    public function login(){
        $user = Model_Admin::get($_POST['id']);
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
        return DB::query(DB::SELECT, "SELECT `id`, `imie`, `nazwisko` FROM `pracownicy`");
    }

}