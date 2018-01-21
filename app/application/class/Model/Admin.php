<?php

class Model_Admin extends Model{

    static private $__table_name = 'pracownicy';

    public static function get($id){
        parent::$_table_name = self::$__table_name;
        return parent::get($id);
    }

    public static function getAll(){
        parent::$_table_name = self::$__table_name;
        return parent::getAll();
    }

}