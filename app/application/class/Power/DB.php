<?php

class Power_DB{
    protected static $connect = null;

    const SELECT = 1;
    const INSERT = 2;
    const UPDATE = 3;
    const DELETE = 4;


    public static function query($type, $query){
        switch ($type){
            case Power_DB::SELECT:
                return self::querySelect($query);
            case Power_DB::INSERT:
                return self::queryInsert($query);
            case Power_DB::UPDATE:
                return self::queryUpdate($query);
            case Power_DB::DELETE:
                return self::queryDelete($query);
        }
        return null;
    }

    protected static function queryDelete($query){
        return mysqli_query(self::$connectm, $query);
    }

    protected static function queryUpdate($query){
        return mysqli_query(self::$connect, $query);
    }

    protected static function queryInsert($query){
        $result = mysqli_query(self::$connect, $query);
        return mysqli_insert_id($result);
    }

    protected static function querySelect($query){
        $ret = [];
        $result = mysqli_query(self::$connect, $query);
        while($rek = mysqli_fetch_array($result)){
            $ret[] = $rek;
        }
        return $ret;
    }

    public static function isConnect(){
        return (bool)self::$connect;
    }

    public static function connect(){
        $conf = Config_Reader::get('database');
        self::$connect = mysqli_connect($conf['host'],$conf['user'],$conf['password'],$conf['database']);
        return self::isConnect();
    }

    public static function close(){
        if(self::isConnect()){
            mysqli_close(self::$connect);
        }
    }

}