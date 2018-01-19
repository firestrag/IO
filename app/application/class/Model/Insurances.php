<?php

class Model_Insurances extends Model{

    static private $_table_name = 'klienci';

    public static function get($id){
        parent::$_table_name = self::$_table_name;
        return parent::get($id);
    }

    public static function add($id, $user_id, $date_start, $date_end){

    }
}