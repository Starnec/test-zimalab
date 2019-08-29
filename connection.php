
<?php

//namespace Theory;

$opt = array(
	\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, 
	\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
);

$pdo = new \PDO('mysql:host=localhost;dbname=userlistdb;charset=utf8', root, null, $opt);

/*
$pdo->exec("DROP DATABASE userlistdb");
$pdo->exec("CREATE DATABASE userlistdb;
CREATE TABLE users ( 
    `id` INT NOT NULL auto_increment, 
    `first_name` VARCHAR(255) NOT NULL , 
    `last_name` VARCHAR(255) NOT NULL , 
    `email` VARCHAR(255) NOT NULL , 
    `company_name` VARCHAR(255) NOT NULL , 
    `position` VARCHAR(255) NOT NULL , 
    `phone_1` INT NOT NULL , 
    `phone_2` INT NOT NULL , 
    `phone_3` INT NOT NULL , 
    UNIQUE KEY `first_name` (`first_name`),
	PRIMARY KEY (`id`)) ENGINE = InnoDB;"
);
*/
	
?>