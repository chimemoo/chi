<?php


    class Exceptions {
        
        public static function controllerNotFound($className){
            throw new Exception('controller "'. $className . '" is does not exist');
        }

        public static function controllerMethodNotFound($methodName,$className){
            throw new Exception($methodName. ' method does not exist in the controller "' . $className . '"');
        }

    }