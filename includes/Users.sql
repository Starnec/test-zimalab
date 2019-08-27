CREATE DATABASE userlistdb;

CREATE TABLE `Users`.`accounts` ( 
    `id` INT NOT NULL auto_increment, 
    `first_name` VARCHAR(255) NOT NULL , 
    `last_name` VARCHAR(255) NOT NULL , 
    `email` VARCHAR(255) NOT NULL , 
    `company_name` VARCHAR(255) NOT NULL , 
    `position` VARCHAR(255) NOT NULL , 
    `phone_1` INT NOT NULL , 
    `phone_2` INT NOT NULL , 
    `phone_3` INT NOT NULL , 
    UNIQUE KEY `username` (`username`),
    PRIMARY KEY (`id`)) ENGINE = InnoDB;