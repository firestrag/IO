<?php

class Controller_Frontend_Test extends Controller{

    public function action_index(){
        $this->template->view = View::factory('Frontend/Test/Index');
    }

    public function action_testMainPage1(){



        $this->template->view = View::factory('Frontend/Test/test_main_page_1');
    }
}