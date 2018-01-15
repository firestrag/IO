<?php

class Controller_Frontend_Admin extends Controller{

    private $auth = null;

    public function __construct(){
        parent::__construct();
        $this->auth = new Account_IO;
//        $this->template = new P
    }


    public function action_index(){
//        if(Account_Core::isLogin()){
//            $this->action_changePassword();
//        }else{
            $this->action_login();
//        }
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

        if(isset($_POST['action'])){

            $this->auth->login();
            $try_login = true;

        }

        if( $this->auth->isLogin() ){
            $this->action_index();
            return;
        }

        $users_list = $this->auth->getUsersList();
        $this->template->view = Power_View::factory('Frontend/Admin/login')
            ->bind('try_login', $try_login)
            ->bind('users_list',$users_list);
    }

    public function action_mainPage(){

    }



}