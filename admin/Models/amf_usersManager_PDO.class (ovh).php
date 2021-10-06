<?php
//namespace amf_usersManager_PDO;

include('private/PDOFactory.class.php');

class amf_userManager_PDO {

	public function getList($debut = -1, $limite = -1)
	{
		$sql = 'SELECT * FROM amf_users ORDER BY id DESC';

		if ($debut != -1 || $limite != -1)
		{
			$sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
		}

		$db = PDOFactory::getMysqlConnexion();
		$requete = $db->query($sql);
		$requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'User');

		$amfUsers = $requete->fetchAll();
		$data = array();
		foreach ($amfUsers as $user)
		{
			$user->hydrate($user->getData());
			$dataUser = $user->getData();
			$dataUser['date_arrivee'] = strftime("%d/%m/%G à %R", strtotime($dataUser['date_arrivee']));
			$dataUser['licence_date'] = strftime("%d/%m/%G", strtotime($dataUser['licence_date']));
			$dataUser['birth_date'] = strftime("%d/%m/%G", strtotime($dataUser['birth_date']));
			$dataUser = json_encode($dataUser);
			$data[] = $dataUser;
		}
		$requete->closeCursor();

		return $data;
	}

	public function get(int $info)
	{
		$db = PDOFactory::getMysqlConnexion();
		if (is_int($info))
		{
			$requete = $db->prepare('SELECT * FROM amf_users WHERE id = :info');
			$requete->bindValue(':info', (int) $info, \PDO::PARAM_INT);
		}
		else
		{
			$requete = $db->prepare('SELECT * FROM amf_users WHERE username = :info');
			$requete->bindValue(':info', (string) $info);
		}
		$requete->execute();

		$requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'User');

		if ($user = $requete->fetch())
		{
			$dataUser = $user->getData();
			$dataUser['date_arrivee'] = strftime("%d/%m/%G à %R", strtotime($dataUser['date_arrivee']));
			// js format so it can be edited and displayed in a date input
			$dataUser['licence_date'] = strftime("%G-%m-%d", strtotime($dataUser['licence_date']));
			$dataUser['birth_date'] = strftime("%G-%m-%d", strtotime($dataUser['birth_date']));

			$requete->closeCursor();
			return $dataUser;
		}

		return "erreur ou utilisateur inexistant";
	}
	public function count()
	{
		$db = PDOFactory::getMysqlConnexion();
		return $db->query('SELECT COUNT(*) FROM amf_users')->fetchColumn();
	}

	public function add(user $user)
	{
		$db = PDOFactory::getMysqlConnexion();
		$userData = $user->getData();
		$valuesPDO2 = '';
		$valuesPDO1 = '';
		unset($userData['erreurs']); // unused yet
		unset($userData['dataArray']); // idem
		unset($userData['date_arrivee']);
		unset($userData['id']);
		$userData['pass'] = "PDO méthode add";

		foreach ($userData as $key => $value) {
			$valuesPDO2 .= ":".$key.", ";
			$valuesPDO1 .= $key.",";
		}
		$valuesPDO2 = rtrim($valuesPDO2, ', ');
		$valuesPDO1 = rtrim($valuesPDO1, ',');

		$requete = $db->prepare('INSERT INTO amf_users('.$valuesPDO1.') VALUES('.$valuesPDO2.')');

		foreach ($userData as $key => $value) {
			$requete->bindValue(':'.$key, $value);
		}

		$requete->execute();

		$data['type'] = 'success';
		$data['message'] = 'Utilisateur ajouté.';
		$data['id'] = $db->lastInsertId();
		return $data;
	}

	public function edit(user $user)
	{
		$db = PDOFactory::getMysqlConnexion();
		$userData = $user->getData();
		$valuesPDO = 'SET ';
		unset($userData['erreurs']);
		unset($userData['dataArray']);
		unset($userData['date_arrivee']);
		$userData['pass'] = "PDO méthode edit";

		foreach ($userData as $key => $value) {
			$valuesPDO .= $key."=:".$key.", ";
		}
		$valuesPDO = rtrim($valuesPDO, ', ');

		$requete = $db->prepare('UPDATE amf_users '.$valuesPDO.' WHERE id = :id');
		$requete->execute($userData);

		$data['type'] = 'success';
		$data['message'] = "Utilisateur modifié.";
		return $data;
	}
	
	public function delete($id)
	{
		$db = PDOFactory::getMysqlConnexion();
		if (is_array($id)) {
			foreach ($id as $key => $value) {
				$idArray[] = $value['id'];

				// delete the user dir and files from ../images
				$dir = $value['id'];
				array_map('unlink', glob("../images/$dir/*"));
				if (is_dir("../images/$dir")) rmdir("../images/$dir");
			}
			$idArray = '('.implode(',', $idArray).')';
			$db->exec('DELETE FROM amf_users WHERE id in '. $idArray);

		} else {
			$db->exec('DELETE FROM amf_users WHERE id = '. (int) $id);

			// delete the user dir and files from ../images
			array_map('unlink', glob("../images/$id/*"));
			if (is_dir("../images/$id")) rmdir("../images/$id");
		}

		$data['type'] = json_encode('success');
		$data['message'] = json_encode("Utilisateur(s) supprimé(s).");
		return $data;
	}
}

?>