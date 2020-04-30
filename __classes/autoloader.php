<?php

class Autoloader{

    /**
    * Enregistre notre autoloader
    */
    static function register(){
        spl_autoload_register(function($class) {
            require '__classes/' . $class . ' .php';
        });
    }

}