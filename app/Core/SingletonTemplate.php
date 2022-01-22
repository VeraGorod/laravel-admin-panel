<?php

namespace App\Core;


trait SingletonTemplate
{
    private static $instance;

    public static function instance(){
        if(null === self::$instance){
            self::$instance = new self;
        }

        return self::$instance;
    }
}