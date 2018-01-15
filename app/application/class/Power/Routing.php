<?php

class Power_Routing{
	
	private static $routing_table = [];

	public static function getRouting($routing_name){
		if( !self::isRoutingName($routing_name)){
			return null;
		}

		$ret = self::$routing_table[$routing_name];

		foreach (self::$routing_table[$routing_name] as $key => $value){
		    if( is_numeric($value) ){
                $ret[$key] = Power_Params::getParam($value);
            }else{
		        $ret[$key] = $value;
            }
        }
        $i = 0;
        foreach ($ret['url'] as $key){
		    $value = Power_Params::getParam($i);

		    if( !$value && isset($ret[$key])){
		        $value = $ret[$key];
            }
            $ret[$key] = $value;
        }
		return $ret;
	}
	
	public static function load(){
		self::$routing_table = require 'application/routing/routing.php';

		foreach (self::$routing_table as &$route){
		    $route['controller'] = 'Controller_'.$route['controller'];
            if(!isset($route['url'])){
                $route['url'] = [];
            }
            if(!isset($route['action'])){
                $route['action'] = 'index';
            }
        }
	}

	private static function isRoutingName($routing_name){
		if( isset(self::$routing_table[$routing_name]) ){
			return true;
		}
		return false;
	}
	
	public static function getParam($routing_name, $param_name){
		$param = isset(self::$routing_table[$routing_name][$param_name]) ? self::$routing_table[$routing_name][$param_name] : null;
        if( is_numeric($param) ){
            return Power_Params::getParam($param);
        }
		
		return $param;
	}

	public static function getActiveRoutingName($params){
	    $routing_name = null;
	    $found_routing_name = 'default';

        foreach ($params as $param) {

            if( !$routing_name ){
                $routing_name = $param;
            }else{
                $routing_name = (string)$routing_name . '/'.$param;
            }

            if( isset(self::$routing_table[$routing_name]) ){
                $found_routing_name = $routing_name;
            }
	    }

        return $found_routing_name;
    }
}