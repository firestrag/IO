<?php

class model_Insurances extends Model{

    static private $_table_name = 'klienci';

    public static function get($id){
        parent::$_table_name = self::$_table_name;
        return parent::get($id);
    }

    
}