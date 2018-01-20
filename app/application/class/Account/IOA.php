<?php

class Account_IOA extends Account_Core {


    public static function getAdminById($id){
        $id = (int)$id;
        return DB::query(DB::SELECT, "SELECT * FROM `pracownicy` WHERE `id` = $id");
    }

    public function login(){
//        var_dump('dsa22');die();
        $admin = Model_Admin::get($_POST['id']);
//        var_dump($user);die();
        if(!$admin){
            return false;
        }



        parent::setLoginId($admin[0]['ID']);

        return true;
    }

    public function getId(){
        return $_SESSION[self::$_login_id];
    }

    public function getAdminsList(){
        return DB::query(DB::SELECT, "SELECT `id`, `imie`, `nazwisko` FROM `pracownicy`");
    }

}