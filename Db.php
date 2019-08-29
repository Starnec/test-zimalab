<?php

namespace App;

class Db
{
    use TSingletone;

    public function __construct() 
    {
        try {
            $opt = array(
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, 
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
            );
            $db = require_once 'config_db.php';
            $pdo = new \PDO($db['dsn'], $db['user'], $db['pass'], $opt);
        }    
        catch (PDOException $e) {
                echo $e->getMessage("Нет соединения с БД", 500);
        }
        return $pdo;
        /*
        \R::freeze(true);
        if(DEBUG){
            \R::debug(true, 1);
        }

        \R::ext('xdispense', function($type){
            return \R::getRedBean()->dispense( $type );
        });
        */
    }

}