<?php

class Helper_ID {

    private static $id = 0;

    public static function getUniqueID(){
        return self::$id++;
    }
}