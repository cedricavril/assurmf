<?php
	ini_set('display_errors', 1);
	$message = $_POST['news'];

	//=============================== pdo connexion ==================================//
	include '../private/PDOFactory.class.php';
	$db = PDOFactory::getMysqlConnexion();

	// Vérification de conflit de dates, et suppression des vieilles prédictions le cas échéant.
	$requete = $db->prepare("SELECT id, date FROM amf_news") or die ("plantage 3");
		$requete->execute();

	while($row=$requete->fetch(PDO::FETCH_OBJ)) {



	}



	//=================================== insertion ======================================//

	$requete = $db->prepare('INSERT INTO amf_news(news) VALUES(:news)');
	$requete->bindParam(':news', $message);

	$requete->execute();
	$id = $db->lastInsertId();
?>