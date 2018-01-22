<?php

class Controller_Frontend_Test extends Controller{

    public function action_index(){



        $tests_results = [
            'add_insurance' => $this->insertInsurance(),
            'create_insurance' => $this->createInsurance()
        ];


        $this->template->view = View::factory('Frontend/Test/Index')
        ->bind('tests_results', $tests_results);


    }


    private function insertInsurance(){
        $c = count(Model_Insurances::getAll());
        Model_Insurances::create('test','testowe','110','1500');
        $c2 = count(Model_Insurances::getAll());
        return ($c2>$c);
    }

    private function createInsurance(){
        $query = "SELECT * FROM `polisy_turystyczne`";
        $c = count(DB::query(DB::SELECT,$query));
        Model_Insurances::add('1','1','2015-10-17','2018-11-15',777,999);
        $c2 = count(DB::query(DB::SELECT,$query));
        return ($c2>$c);
    }
}