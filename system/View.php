<?php
use League\Plates\Engine as ViewEngine;

class View {
    
    public $templates;
    public $view;
    public $data;

    public function __construct($view, $data = []){
        $this->templates = new ViewEngine(ROOT . DS . 'app' . DS . 'Views' . DS);
        $this->templates->setFileExtension = 'php';
        $this->view = $view;
        $this->data = $data;
    }

    public function render()
    {
        $renderView = $this->templates;
        return $renderView->render($this->view,$this->data);
    }
}