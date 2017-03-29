CREATE DATABASE `log_reg_home` ;
CREATE TABLE `log_reg_home`.`dw_users_data` (
   `user_id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
   `fname` VARCHAR( 255 ) NOT NULL ,
   `lname` VARCHAR( 255 ) NOT NULL ,
   `email` VARCHAR( 60 ) NOT NULL ,
   `password` VARCHAR( 255 ) NOT NULL ,
   `date` TIMESTAMP,
    UNIQUE (`user_email`)
) ENGINE = MYISAM ;
