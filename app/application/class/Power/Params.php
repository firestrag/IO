<?php

class Power_Params{
	
	static private $params = [];
	static private $count_jump_params = 0;
	
	
	public static function setParams(){
		$a = substr($_SERVER['PHP_SELF'], 0, strlen("index.php")*(-1) );
// 		if( strlen( $_SERVER['REQUEST_URI'] ) > main::MAX_URI_LENGTH + strlen($a) ){
// 			die();
// 		}
		$data = substr($_SERVER['REQUEST_URI'], strlen($a) );
		$size = strlen( $data );
		
		if( 0 === $size)
			return;
			
			$index = 0;
			self::$params[0] = '';
			for($i=0; $i<$size; $i++){
				if('?' === $data[$i])
					break;
					if('/' === $data[$i]){
						$index++;
						if( $i+1 < $size)
							self::$params[ $index ] = '';
							
							continue;
					}
					self::$params[$index] .= $data[$i];
			}
			
			// decode URL
			$size = count(self::$params);
			for($i=0; $i<$size; $i++){
				self::$params[$i] = urldecode(self::$params[$i]);
			}
	}
	
	public static function getParam($number){
		$index = $number + self::$count_jump_params;
		if( !isset(self::$params[$index]) ){
			return null;
		}
		return self::$params[$index];
		
	}
	
	public static function setJumpParams($count){
		self::$count_jump_params = $count;
	}
	
	public static function getParamsCount(){
		return count(self::$params);
	}
	
	public static function getJumpParamsCount(){
		return self::getParamsCount();
	}
	
	public static function getParams(){
		return self::$params;
	}
}