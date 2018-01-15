<?php

class Power_Template_Object{

    public $content = '';
    public $title = '';
    public $render_template = true;
    public $view = null;
    public $template_name = 'Default';

    public function __construct(){
        $this->view = new Power_View();
    }


    public function run(){
        if(!$this->render_template){
            return;
        }
        global $content;
        global $title;
        $content = $this->view->render();
        $title = $this->title;
        $path = $this->template_name;
        return require __DIR__.'/../../../templates/'.$path.'.php';
    }
}