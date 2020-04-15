<?php

    // LOAD vendor/autoload.php
    require_once(ROOT . DS . 'vendor' . DS . 'autoload.php');

    // LOAD ENVIRONTMENT CONFIGURATION
    $dotenv = Dotenv\Dotenv::createImmutable(ROOT . DS);
    $dotenv->load();

    // LOAD WHOOPS
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    
    // LOADING CLASS ON system, controllers and models FOLDER
    spl_autoload_register(function ($className) {
        if(file_exists(ROOT . DS . 'system' . DS . $className . '.php')){
            require_once(ROOT . DS . 'system' . DS . $className . '.php');
        }
        elseif(file_exists(ROOT . DS . 'app' . DS . 'Controllers' . DS . $className . '.php')) {
            require_once ROOT . DS . 'app' . DS . 'Controllers' . DS . $className . '.php' ;
        }
        elseif(file_exists(ROOT . DS . 'app' . DS . 'Models' . DS . $className . '.php')){
            require_once ROOT . DS . 'app' . DS . 'Models' . DS . $className . '.php' ;
        }
    });

    Router::route($url);

    
