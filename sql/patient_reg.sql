CREATE TABLE `myhealth`.`patient_reg` ( `sno` INT NOT NULL AUTO_INCREMENT ,  `aadhaar_no` BIGINT NOT NULL ,  `last_visit` DATE NOT NULL ,  `name` TEXT NOT NULL ,  `gender` CHAR(2) NOT NULL ,  `doctor_name` TEXT NOT NULL ,  `diseases_found` VARCHAR(250) NOT NULL ,  `presc_med` VARCHAR(250) NOT NULL ,  `next_visit` DATE NOT NULL ,    PRIMARY KEY  (`aadhaar_no`),    UNIQUE  `unique` (`sno`)) ENGINE = InnoDB;

​
asc