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

    public static function getAll(){
        parent::$_table_name = self::$__table_name;
        return parent::getAll();
    }

    public static function getInsurancesByUserId($user_id){
        $user_id = (int)$user_id;
        $query = "SELECT 
          `nazwa`,`opis_polisy`,`cena`,`wt`.`max_odszkodowaniemax_odszkodowanie`,`data_rozpoczecia`,`data_zakonczenia` 
          FROM `warianty_turystyczne` `wt` 
          INNER JOIN `polisy_turystyczne` `pt` 
            ON `pt`.`Warianty_turystyczne_ubezpieczenia_ID` = `wt`.`id`
          WHERE `pt`.`Klienci_id` = '$user_id'";
        return DB::query(DB::SELECT, $query);
    }
}