CREATE TABLE IF NOT EXISTS `amf_users` (
    `id` INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `pass` TEXT(32) NOT NULL,
    `email` TEXT(255) NOT NULL,
    `date_arrivee` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    `licence_date` TIMESTAMP NULL,
    `birth_date` TIMESTAMP NULL,
    `description` TEXT(255) NULL,
    `adresse` TEXT(255) NULL,
    `tel` VARCHAR(45) NOT NULL,
    `prenom` VARCHAR(45) NOT NULL,
    `nom` VARCHAR(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `amf_news` (
    `id` INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    `news` TEXT(255) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `amf_users` (`pass`, `email`, `licence_date`, `birth_date`, `description`, `adresse`, `tel`, `prenom`, `nom`) VALUES
('pass', 'cedric_avril_pro@hotmail.fr', '2019-04-25', '2010-00-00', 'description test\r\nsaut', 'adresse test', '0660999649', 'Cédric', 'Avril'),
('pass2', 'assurmf@contact.fr',  '2010-10-01 00:00:00', '2010-00-00 04:00:00', 'description 2', 'je sais plus', '0660001122', 'Kalissa', 'Marchela'),
('pass2', 'assurmf@contact.fr',  '2009-10-02 00:00:00', '2010-00-00 04:00:00', 'description 2', 'je sais plus', '0660001122', 'Kalissa', 'Marchela');
