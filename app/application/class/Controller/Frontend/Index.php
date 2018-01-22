<?php

class Controller_Frontend_Index extends Controller{

    private $auth = null;



    public function __construct(){
        parent::__construct();
        $this->auth = new Account_IO;
//        $this->template = new P
    }


    public function action_index(){
        if($this->auth->isLogin()){
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

        $insurances = Model_Insurances::getInsurancesByUserId($this->auth->getId());

        $this->template->view = Power_View::factory('Frontend/Index/insurancesList')
            ->bind('insurances', $insurances)
            ->bind('user',$user);
    }

    public function action_insurancesAll(){

        $insurances = Model_Insurances::getAll();

        $this->template->view = Power_View::factory('Frontend/Index/insurancesAll')
            ->bind('insurances', $insurances);
    }

    public function action_addInsurance(){
//        Model_Insurances::add()
        $insurance_id = Power_Params::getParam(1);
        $user_id = $this->auth->getId();
        $date_from = $_POST['date_from_submit'];
        $date_to = $_POST['date_to_submit'];

        $insurance = Model_Insurances::get($insurance_id)[0];

        $time_1 = strtotime($date_from);
        $time_2 = strtotime($date_to);
        $time = $time_2 - $time_1;


        if($time <= 0){
            $this->action_index();
            return;
        }

        $k = ((int)($time/(30*24*60*60))+1);
        $price = $k*$insurance['skladka_miesieczna'];


        Model_Insurances::add($insurance_id, $user_id, $date_from, $date_to, $price, $insurance['max_odszkodowanie']);

        $this->action_insurancesList();
    }
}