CREATE TABLE IF NOT EXISTS `amf_users` (
    `id` INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `pass` TINYTEXT NOT NULL,
    `email` TINYTEXT NOT NULL,
    `date_arrivee` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    `licence_date` TIMESTAMP NULL,
    `birth_date` TIMESTAMP NULL,
    `description` TEXT NULL,
    `address` TINYTEXT NULL,
    `postcode` TINYTEXT NULL,
    `city` TINYTEXT NULL,
    `tel` TINYTEXT NOT NULL,
    `prenom` TINYTEXT NOT NULL,
    `nom` TINYTEXT NOT NULL,
    `newsletter` TINYINT DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `amf_news` (
    `id` INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    `title` TINYTEXT NOT NULL,
    `news` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `amf_users` (`pass`, `email`, `licence_date`, `birth_date`, `description`, `address`, `postcode`, `city`, `tel`, `prenom`, `nom`, `newsletter`) VALUES
('pass', 'cedric_avril_pro@hotmail.fr', '2019-04-25', '2010-00-00', 'description test\r\nsaut', 'adresse test', '33600', 'Pessac', '0660999649', 'Cédric', 'Avril', 1),
('PDO méthode add', 'cabinet-amf@outlook.fr', '2019-04-17 09:58:06', '2019-04-17 09:58:06', 'description PDO', '31 rue du général de gaulle ', '33310', 'Lormont', '0557832810', 'kali', 'mekl', 1);