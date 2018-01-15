<?php

class Power_Model{

    protected static $_table_name = '';

    public static function get($id){
        $id = (int)$id;
        $table_name = self::$_table_name;
        return DB::query(DB::SELECT, "SELECT * FROM `{$table_name}` WHERE `id` = '$id'");
    }

    public static function getAll(){
        $table_name = self::$_table_name;
        return DB::query(DB::SELECT, "SELECT * FROM `{$table_name}`");
    }

    public static function insert($fields=[]){
        $table_name = self::$_table_name;
        $array_keys = '`';
        $array_values = '\'';

        foreach ($fields as $k => $field) {
            $array_keys .= addslashes($k).'`,';
            $array_values .= addslashes($field).'\',';
        }


        $query = "INSERT INO `$table_name`(`".substr($array_keys,0,-2).") VALUES(".substr($array_values,0,-2).'")';
        return DB::query(DB::INSERT, $query);
    }

    protected static function update($fields=[]){
        $table_name = self::$_table_name;
        $id = (int)$fields['id'];
        unset($fields['id']);

        $set = '`';

        foreach ($fields as $k => $field) {
            $set .= addslashes($k)."`='".addslashes($field)."', ";
        }

        $query = "UPDATE `$table_name` SET ".substr($set, 0, -2)." WHERE `id` = '$id'";
        return DB::query(DB::UPDATE, $query);
    }

    public static function delete($id){
        $table_name = self::$_table_name;
        $id = (int)$id;

        return DB::query(DB::DELETE, "DELETE FROM `$table_name` WHERE `id` = '$id'");
    }

}