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
        $this->action_index();
//        $this->template->view = Power_View::factory('Frontend/Admin/login')
//            ->bind('try_login', false)
//            ->bind('try_logout', true);
    }


    public function action_login(){
        $try_login = false;


        if(isset($_POST['action_login'])){
            $this->auth->login();
            $try_login = true;

        }

        if( $this->auth->isLogin() ){
            var_dump('zalogowano');
            $this->action_index();
            return;
        }

        $admin_list = $this->auth->getAdminsList();
        $this->template->view = Power_View::factory('Frontend/Admin/login')
            ->bind('try_login', $try_login)
            ->bind('admin_list',$admin_list);
    }

    public function action_mainPage(){
        $this->action_insurancesAll();
    }

    public function  action_insurancesAll(){

        $insurances = [
            [
                'id' => '1',
                'name' => 'Wycieczka zagraniczna',
                'description' => 'Wycieczka zagraniczna za granice :)',
                'price_per_month' => '6666',
                'date_start' => '2017-03-12',
                'date_end' => '2017-04-11',
            ],
            [
                'id' => '2',
                'name' => 'Wycieczka w Polsce',
                'description' => 'W Polsce jak w lesie',
                'price_per_month' => '9999',
                'date_start' => '2018-03-12',
                'date_end' => '2018-04-11',
            ],
            [
                'id' => '3',
                'name' => 'Ubezpieczenie rodzinne',
                'description' => 'Ubezpieczenie całej rodziny na wakacyjny wyjazd do Afganistanu',
                'price_per_month' => '2.50 PLN/per person',
                'date_start' => '2018-07-12',
                'date_end' => '2018-08-11',
            ],
        ];

        $this->template->view = Power_View::factory('Frontend/Admin/insurancesAll')
            ->bind('insurances', $insurances);
    }



}