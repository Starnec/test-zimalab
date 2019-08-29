CREATE TABLE users (
 `id` INT NOT NULL AUTO_INCREMENT, 
 `first_name` VARCHAR(255) NOT NULL, 
 `last_name` VARCHAR(255) NOT NULL, 
 `email` VARCHAR(255) NOT NULL, 
 `company_name` VARCHAR(255) NOT NULL, 
 `position` VARCHAR(255) NOT NULL, 
 `phone_1` INT NOT NULL, 
 `phone_2` INT NOT NULL, 
 `phone_3` INT NOT NULL, 
 PRIMARY KEY (`id`)) ENGINE = InnoDB
 );