<?php

class Model_User extends Model{

    static private $__table_name = 'klienci';

    public static function get($id){
        parent::$_table_name = self::$__table_name;
        return parent::get($id);
    }


}