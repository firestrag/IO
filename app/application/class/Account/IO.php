<?php

class Account_IO extends Account_Core {


    public static function getUserById($id){
        $id = (int)$id;
        return DB::query(DB::SELECT, "SELECT * FROM `klienci` WHERE `id` = $id");
    }

    public function login(){
//        $user = Model_Radius::getUserById($_POST['id']);
//        $user_data = self::getUserById($i)



        return true;
    }

    public function getId(){
        return $_SESSION[self::$_login_id];
    }

    public function getUsersList(){
        return DB::query(DB::SELECT, "SELECT `id`, `imie`, `nazwisko` FROM `klienci`");
    }

}