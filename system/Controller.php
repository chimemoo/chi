<?php

class Controller {
    
    public function View($view,$data = []){
        $view = new View($view,$data);
        echo $view->render();
    }

}