<?php

class Router {

    public static function route($url){
        // Defining The Route form Web.php and Api.php
        $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route) {
            require_once(ROOT . DS . 'app' . DS . 'Routers' . DS . 'Web.php');
            require_once(ROOT . DS . 'app' . DS . 'Routers' . DS . 'Api.php');
        });
        
        // Fetch method and URI from somewhere
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $url;
        
        // Strip query string (?foo=bar) and decode URI
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);
        
        $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
        switch ($routeInfo[0]) {
            case FastRoute\Dispatcher::NOT_FOUND:
                echo "not found";
                break;
            case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                echo "gagal";
                break;
            case FastRoute\Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $vars = $routeInfo[2];
                list($class,$method) = explode("*", $handler);
                call_user_func_array(array(new $class, $method),$vars);
        }
           
    }
    
}