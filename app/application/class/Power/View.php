<?php

class Power_View{
	
	private $variables = ['tmp'=>'testowa'];
	private $path = '';

	public function setView($path){
		$this->path = $path;
	}
	
	public function getVariables(){
		return $this->variables;
	}
	
	public function bind($name, $content){
		$this->variables[$name] = $content;
		return $this;
	}
	
	public function render(){

        $func_render_view = function($Power_variables = []){
            foreach ($Power_variables as $k => $variable) {
                global ${$k};
                ${$k} = $variable;
            }
            return require __DIR__.'/../../view/'.$this->path.'.php';
        };

	    $ob = ob_get_contents();
	    ob_clean();

        $func_render_view($this->variables);
	    $view_data = ob_get_contents();
	    ob_clean();
	    echo $ob;
	    return $view_data;
	}

	public static function factory($path){
	    $ret = new self;
	    $ret->setView($path);
	    return $ret;
    }
}