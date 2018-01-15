<?php


class Power_Config_Reader{

    private static $configs = [];

    public static function get($name){
        self::load($name);
        if(isset(self::$configs[$name])){
            return self::$configs[$name];
        }
        return null;
    }

    private static function load($name){
        if(isset(self::$configs[$name])){
            return;
        }
        self::$configs[$name] = require __DIR__.'/../../../configuration/'.$name.'.php';
    }

}