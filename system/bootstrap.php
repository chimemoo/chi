<?php

    // LOAD ENVIRONTMENT CONFIGURATION
    require_once(ROOT . DS . 'vendor' . DS . 'autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable(ROOT . DS);
    $dotenv->load();
    
    // LOADING CLASS ON system, controllers and models FOLDER
    spl_autoload_register(function ($className) {
        if(file_exists(ROOT . DS . 'system' . DS . $className . '.php')){
            require_once(ROOT . DS . 'system' . DS . $className . '.php');
        }
        elseif(file_exists(ROOT . DS . 'app' . DS . 'Controllers' . DS . $className . '.php')) {
            require_once ROOT . DS . 'app' . DS . 'Controllers' . DS . $className . '.php' ;
        }
        elseif(file_exists(ROOT . DS . 'app' . DS . 'Models' . DS . $className . '.php')){
            require_once ROOT . DS . 'app' . DS . 'Controllers' . DS . $className . '.php' ;
        }
    });

    Router::route($url);

    
