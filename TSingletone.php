<?php

namespace App;

trait TSingletone
{

    private static $instance;

    private static function instance(){
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

}