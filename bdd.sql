CREATE TABLE `assurmf`.`counter` ( `id` PRIMARY KEY NOT NULL AUTO_INCREMENT,
 `counter_type` VARCHAR(16) NOT NULL , `number` INT NULL ) ENGINE = InnoDB;

/* table has to contain all the counter types and the matching initiated number
	-> SQL command line :
INSERT INTO `counter`(`counter_type`, `number`) VALUES ("visit", 17751);
*/

CREATE TABLE IF NOT EXISTS `amf_users` (
    `id` INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `username` TEXT(16) NOT NULL,
    `pass` TEXT(32) NOT NULL,
    `email` TEXT(255) NOT NULL,
    `date_arrivee` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    `description` TEXT(255) NULL,
    `adresse` TEXT(255) NULL,
    `tel` VARCHAR(45) NOT NULL,
    `prenom` VARCHAR(45) NOT NULL,
    `nom` VARCHAR(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `amf_users` (`id`, `username`, `pass`, `email`, `date_arrivee`, `description`, `adresse`, `tel`, `prenom`, `nom`) VALUES
(1, 'usernameTest', 'pass', 'cedric_avril_pro@hotmail.fr', '2019-03-20 00:00:00', 'description test\r\nsaut', 'adresse test', '0660999649', 'Cédric', 'Avril'),
(2, 'kmarchela', 'pass2', 'assurmf@contact.fr', '2019-03-12 13:19:28', 'description 2', 'je sais plus', '0660001122', 'Kalissa', 'Marchela');
