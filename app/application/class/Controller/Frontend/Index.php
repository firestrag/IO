<?php

class Controller_Frontend_Index extends Controller{

    private $auth = null;



    public function __construct(){
        parent::__construct();
        $this->auth = new Account_IO;
//        $this->template = new P
    }


    public function action_index(){
        if(Account_Core::isLogin()){
            $this->action_mainPage();
        }else{
            $this->action_login();
        }
//        echo "sad"; die();
//        $this->action_logout();
	}


	public function action_logout(){
        $this->auth->logout();
        $this->action_index();
//        $this->template->view = Power_View::factory('Frontend/Index/login')
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

        $users_list = $this->auth->getUsersList();
        $this->template->view = Power_View::factory('Frontend/Index/login')
            ->bind('try_login', $try_login)
            ->bind('users_list',$users_list);
    }

    public function action_mainPage(){
        $this->action_insurancesList();
    }

    public function action_insurancesList(){

        $user = [
            'id' => 0,
            'name' => 'name',
            'lastname' => 'lastname'
        ];
        $insurances = [
            [
                'name' => 'Wycieczka zagraniczma',
                'description' => 'Wycieczka zagraniczna do arabskiego burdelu, gdzie czekają na ciebie chętne kozy',
                'price_per_month' => '1920',
                'date_start' => '2017-03-12',
                'date_end' => '2017-04-11',
            ],
            [
                'name' => 'Wycieczka zagraniczma',
                'description' => 'Wycieczka zagraniczna do arabskiego burdelu, gdzie czekają na ciebie chętne kozy',
                'price_per_month' => '1920',
                'date_start' => '2017-03-12',
                'date_end' => '2017-04-11',
            ],
            [
                'name' => 'Wycieczka zagraniczma',
                'description' => 'Wycieczka zagraniczna do arabskiego burdelu, gdzie czekają na ciebie chętne kozy',
                'price_per_month' => '1920',
                'date_start' => '2017-03-12',
                'date_end' => '2017-04-11',
            ],
            [
                'name' => 'Wycieczka zagraniczma',
                'description' => 'Wycieczka zagraniczna do arabskiego burdelu, gdzie czekają na ciebie chętne kozy',
                'price_per_month' => '1920',
                'date_start' => '2017-03-12',
                'date_end' => '2017-04-11',
            ],
        ];

        $this->template->view = Power_View::factory('Frontend/Index/insurancesList')
            ->bind('insurances', $insurances)
            ->bind('user',$user);
    }

    public function action_insurancesAll(){

        $insurances = [
            [
                'id' => '1',
                'name' => 'Wycieczka zagraniczna',
                'description' => 'Wycieczka zagraniczna do arabskiego burdelu, gdzie czekają na ciebie chętne kozy',
                'price_per_month' => '1920',
                'date_start' => '2017-03-12',
                'date_end' => '2017-04-11',
            ],
            [
                'id' => '2',
                'name' => 'Wycieczka w Polsce',
                'description' => 'Obóz rekreacyjny',
                'price_per_month' => '999',
                'date_start' => '2017-03-12',
                'date_end' => '2017-04-11',
            ],
            [
                'id' => '3',
                'name' => 'Ubezpieczenie rodzinne',
                'description' => 'Ubezpieczenie całej rodziny na wakacyjny wyjazd',
                'price_per_month' => '3200',
                'date_start' => '2017-03-12',
                'date_end' => '2017-04-11',
            ],
        ];

        $this->template->view = Power_View::factory('Frontend/Index/insurancesAll')
            ->bind('insurances', $insurances);
    }

    public function action_addInsurance(){
//        Model_Insurances::add()
        var_dump(Power_Params::getParam(1)); die();
    }
}