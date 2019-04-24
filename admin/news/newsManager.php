<?php
	ini_set('display_errors', 1);
	$message = $_POST['news'];
	$title = $_POST['title'];

	//=============================== pdo connexion ==================================//
	include '../private/PDOFactory.class.php';
	$db = PDOFactory::getMysqlConnexion();

	// Vérification de conflit de dates, et suppression des vieilles news le cas échéant.
	$requete = $db->prepare("SELECT id, date FROM amf_news") or die ("plantage 3");
		$requete->execute();

	while($row=$requete->fetch(PDO::FETCH_OBJ)) {

		// supprimer les anciennes news

	}



	//=================================== insertion ======================================//

	$requete = $db->prepare('INSERT INTO amf_news(news, title) VALUES(:news, :title)');
	$requete->bindParam(':news', $message);
	$requete->bindParam(':title', $title);

	$requete->execute();
	$id = $db->lastInsertId();
?>