<?php

class Power_ORM{
	
	static private $connect = null;
	static private $object_count = 0;
	
	
	
	
	public function __construct(){
		if( !self::$object_count ){
			// @TODO dorobić pobranie konfiguracji i połączenie
		}
		self::$object_count++;
	}
	
	
	public function __destruct(){
		self::$object_count--;
		if( !self::$object_count ){
			// @TODO close db connect
		}
	}
	
}