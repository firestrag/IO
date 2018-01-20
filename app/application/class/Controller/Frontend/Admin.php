<?php

class Controller_Frontend_Admin extends Controller{

    private $auth = null;

    public function __construct(){
        parent::__construct();
        $this->auth = new Account_IOA;
//        $this->template = new P
    }


    public function action_index(){
        if(Account_Core::isLogin()){
            $this->action_mainPage();
        }else{
            $this->action_login();
        }
//        $this->action_logout();
    }


    public function action_logout(){
        $this->auth->logout();
        $this->template->view = Power_View::factory('Frontend/Admin/login')
            ->bind('try_login', false)
            ->bind('try_logout', true);
    }


    public function action_login(){
        $try_login = false;


        if(isset($_POST['action_login'])){
            $this->auth->login();
            $try_login = true;

        }

        if( $this->auth->isLogin() ){
            $this->action_index();
            return;
        }

        $admin_list = $this->auth->getAdminsList();
        $this->template->view = Power_View::factory('Frontend/Admin/login')
            ->bind('try_login', $try_login)
            ->bind('admin_list',$admin_list);
    }

    public function action_mainPage(){

    }



}