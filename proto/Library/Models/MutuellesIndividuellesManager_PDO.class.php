<?php
namespace Library\Models;
 
use \Library\Entities\MutuelleIndividuelle;
 
class MutuellesIndividuellesManager_PDO extends MutuellesIndividuellesManager
{
	protected function add(MutuelleIndividuelle $mi)
	{
/*		$q = $this->dao->prepare('INSERT INTO com SET idCom = :idCom, auteur = :auteur, com = :com, dateAjout = NOW()');

		$q->bindValue(':idCom', $com->idCom(), \PDO::PARAM_INT);
		$q->bindValue(':auteur', $com->auteur());
		$q->bindValue(':contenu', $com->contenu());
		 
		$q->execute();
		
		$com->setId($this->dao->lastInsertId());
*/	}

	public function getList($debut = -1, $limite = -1)
	{
		$whereClause = ($debut == 0)? "" : "";
		$sql = 'SELECT * FROM mutuelles_individuelles '.$whereClause.' ORDER BY id';
		if ($debut != -1 || $limite != -1)
		{
			$sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
		}

		$requete = $this->dao->query($sql);
		$requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Library\Entities\MutuelleIndividuelle');
		 
		$listeMIs = $requete->fetchAll();
		foreach ($listeMIs as $mi)
		{
			$mi->setDateNaissance(new \DateTime($mi->dateNaissance()));
		}
		 
		$requete->closeCursor();
		 
		return $listeMIs;

	}

	protected function modify(MutuelleIndividuelle $mi)
	{
/*		$q = $this->dao->prepare('UPDATE com SET auteur = :auteur, com = :com WHERE idCom = :idCom');

		$q->bindValue(':auteur', $comment->auteur());
		$q->bindValue(':com', $com->com());
		$q->bindValue(':idCom', $com->idCom(), \PDO::PARAM_INT);

		$q->execute();
*/	}
   
	public function get($id)
	{
/*		$q = $this->dao->prepare('SELECT * FROM com WHERE idCom = :idCom');
		$q->bindValue(':idCom', (int) $id, \PDO::PARAM_INT);
		$q->execute();

		$q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Library\Entities\Com');

		return $q->fetch();
*/	}

	public function delete($id)
	{
/*		$this->dao->exec('DELETE FROM com WHERE idCom = '.(int) $id);
*/	}
}
?>