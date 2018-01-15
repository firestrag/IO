<?php

class Account_Radius extends Account_Core {


    public function login(){
        $user = Model_Radius::getUserByName($_POST['login']);
        if(!$user || $user[0]['value'] !== md5($_POST['password'])){
            return false;
        }

        $_SESSION[self::$_login_id] = $user[0]['id'];

        return true;
    }

    public function getId(){
        return $_SESSION[self::$_login_id];
    }

    public function setPassword($id, $password){
        $password = md5($password);
        return Model_Radius::setPassword(['id'=>$id,'value'=>$password]);
    }
}