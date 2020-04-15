<?php 

class Welcome extends Controller {

    public function index(){
        
        $data = [
            'name' => 'Chi Framework',
            'created_at' => 'April 13 2020',
            'user' => WelcomeModel::all()
        ];
        $this->View('welcome',$data);
    }

}