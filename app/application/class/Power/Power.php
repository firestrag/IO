<?php

class Power_Power{

	static private $routing_name = 'default';
	static private $params = [];
	static private $url_base = '';
	static private $routing_config = [];

	static private $objects = [];

	static private $controller = null;
	
	
	public static function run(){

	    DB::connect();

		Power_Routing::load();
		Power_Url::setBasicUrl();
		Power_Params::setParams();
		self::$params = Power_Params::getParams();

		self::runController();
		self::runTemplate();


		DB::close();
	}

	static private function runController(){
        $routing_name = Power_Routing::getActiveRoutingName(self::$params);
        $rc = self::$routing_config = Power_Routing::getRouting($routing_name);


        self::$controller = $rc['controller'];
        $method = 'action_'.$rc['action'];

        self::$objects[self::$controller] = new self::$controller();
        self::$objects[self::$controller]->before();
        self::$objects[self::$controller]->$method();

    }
	
	static public function getRoutingName(){
		return self::$routing_name;
	}

	static private function runTemplate(){
        self::$objects[self::$controller]->template->run();
	    // render view
//        $content = self::$objects[self::$controller]->template->content->render();

        // render and echo template
//        global $content = self::$objects[self::$controller]->template->content->render();

    }
}