CREATE TABLE `assurmf`.`counter` (     `id` INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
 `counter_type` VARCHAR(16) NOT NULL , `number` INT NULL ) ENGINE = InnoDB;

/* table has to contain all the counter types and the matching initiated number
	-> SQL command line :
INSERT INTO `counter`(`counter_type`, `number`) VALUES ("visit", 17751);
*/