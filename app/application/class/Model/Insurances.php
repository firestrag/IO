<?php

class Model_Insurances extends Model{

    static private $__table_name = 'warianty_turystyczne';

    public static function get($id){
        parent::$_table_name = self::$__table_name;
        return parent::get($id);
    }

    public static function create($name, $description, $price, $max_price){
        $name = addslashes(htmlspecialchars($name));
        $description = addslashes(htmlspecialchars($description));
        $price = addslashes(htmlspecialchars($price));
        $max_price = addslashes(htmlspecialchars($max_price));

        $table_name= self::$__table_name;

        $query = "INSERT INTO `$table_name` (`nazwa`,`opis_polisy`,`skladka_miesieczna`,`max_odszkodowanie`,`ubezpieczenia_ID`)
                VALUES('$name','$description','$price','$max_price','1')";

        DB::query(DB::SELECT, $query);
    }
}