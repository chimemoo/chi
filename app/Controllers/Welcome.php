<?php 

use Controller as Chi;

class Welcome extends Chi {

    public function index(){
        $data = [
            'name' => 'Chi Framework',
            'created_at' => 'April 13 2020'
        ];
        $this->View('welcome',$data);
    }

}