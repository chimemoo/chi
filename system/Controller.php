<?php

class Controller {

    public $capsule;

    public function __construct(){
        $model = new Model;
        $this->capsule = $model->connect();
    }

    public function View($view,$data = []){
        $this->capsule;
        $view = new View($view,$data);
        echo $view->render();
    }

}