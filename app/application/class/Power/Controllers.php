<?php

class Power_Controllers{
	
	public function getControllersList(){
		$path = '/application/class/Controller';
		$dirs = scandir($path);
		$ret = [];
		foreach ($dirs as $dir){
			if( is_dir($path.'/'.$dir)){
				$ret[] = $dir;
			}
		}
		return $ret;
	}
}