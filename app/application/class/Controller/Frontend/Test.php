<?php

class Controller_Frontend_Test extends Controller{

    public function action_index(){



        $tests_results = [
            'add_insurance' => $this->insertInsurance(),
            'create_insurance' => $this->createInsurance()
        ];


        $this->template->view = View::factory('Frontend/Test/Index')
        ->binf('tests_results', $tests_results);


    }


    private function insertInsurance(){
        return (bool)Model_Insurances::create('test','testowe','110','1500');
    }

    private function createInsurance(){
        return (bool)Model_Insurances::add('1','1','2015-10-17','2018-11-15',777,999);
    }
}