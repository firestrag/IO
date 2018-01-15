<?php

class Model_Radius extends Model {




    protected static $_table_name = 'radcheck';

    public static function getUserByName($name){
        $name = addslashes($name);
        $query = "SELECT * FROM `".self::$_table_name."` WHERE `username` = '$name' LIMIT 1";
        return DB::query(DB::SELECT, $query);
    }

    public static function getUserById($id){
        $id = (int)$id;
        parent::$_table_name = self::$_table_name;
        return self::get($id);
    }

    public static function editUser($fields = []){
        return self::update($fields);
    }

    public static function setPassword(array $fields){
        parent::$_table_name = self::$_table_name;
        return parent::update($fields);
    }


}