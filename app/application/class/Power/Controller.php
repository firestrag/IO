<?php

class Power_Controller{

    public $template = null;

    public function __construct(){
        $this->template = new Power_Template_Object();
    }

    public function before(){

    }
}