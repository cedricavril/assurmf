<?php
function connexionBdd($mysql = "",$login = "",$mdp = "")
{
	// paramètres ne servent à rien ici car le local est géré et le remote l'est pour le id de vspro.
	$dbName = preg_replace("/(.+)=/","",$mysql);
	if ($_SERVER["REMOTE_ADDR"]=='127.0.0.1')
		$db = new PDO("mysql:host=localhost;dbname=poo", 'root', '');
	else
		// $db = new PDO($mysql, $login, $mdp);
		$db = new \PDO('mysql:host=sql.franceserv.fr;dbname=nomDeLaBase', 'name', 'pass');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $db;
}
?>