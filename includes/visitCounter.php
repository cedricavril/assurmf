<?php

/* table has to contain all the counter types and the matching initiated number
	-> SQL command line :
INSERT INTO `counter`(`counter_type`, `number`) VALUES ("visit", 17751);
*/

	include "private/PDOFactory.class.php";
	$db = PDOFactory::getMysqlConnexion();

// vérifier que le cookie n'existe pas avant d'incrémenter.
if (!isset($_COOKIE['first_visit'])) {
    $res = $db->query("UPDATE `counter` SET `number`=`number` + 1 WHERE counter_type='visit'");
    setcookie('first_visit', 1);
}

    $res = $db->query("SELECT `number` FROM counter WHERE counter_type = 'visit'");
    $res->execute();

    $visitCounterContent = '
<div id="visitCounter">    
    <div class="center">';

	$row = $res->fetch(PDO::FETCH_OBJ);
	$nbrVisits = str_split(strval($row->number));

	for($i = 0; $i < count($nbrVisits); $i++) {
		$visitCounterContent .= '<span class="charCounter">'.$nbrVisits[$i]."</span>\n";
	}

	$visitCounterContent .= '
    </div>
    <div class="message">intéressés</div>
</div>';
