<?php
	ini_set('display_errors', 1);
    if ($_SERVER["REMOTE_ADDR"]=='127.0.0.1' || $_SERVER["REMOTE_ADDR"]=="::1") $db = new \PDO('mysql:host=localhost;dbname=assurmf', 'user1', 'pass') or die("plantage");
    else $db = new \PDO('mysql:host=sql.franceserv.fr;dbname=cavril_db1', 'cavril', 'pGZEn6WH');

    $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $db->exec("SET CHARACTER SET utf8");

/*    $res = $db->query("SELECT message, nick, DATE_FORMAT(date, '%d/%m/%Y %H:%i') AS date, date as dateTri FROM livreOr WHERE publie=1 ORDER BY dateTri DESC");
    $res->execute();*/
?>
