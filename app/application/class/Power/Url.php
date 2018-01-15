<?php

class Power_Url{
	
	static private $url = '';
	
	static public function setBasicUrl(){
		self::$url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'],0,strlen('index.php')*(-1));
	}
	
	static public function getBasicUrl(){
		return self::$url;
	}
	
}