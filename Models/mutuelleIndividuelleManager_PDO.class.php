<?php
namespace Library\Models;
 
use \Library\Entities\MutuelleIndividuelle;
 
class MutuelleIndividuelleManager_PDO extends MutuelleIndividuelleManager
{
	protected function add(mutuelleIndividuelle $mi)
	{
		$q = $this->dao->prepare('INSERT INTO com SET idCom = :idCom, auteur = :auteur, com = :com, dateAjout = NOW()');

		$q->bindValue(':idCom', $com->idCom(), \PDO::PARAM_INT);
		$q->bindValue(':auteur', $com->auteur());
		$q->bindValue(':contenu', $com->contenu());
		 
		$q->execute();
		
		$com->setId($this->dao->lastInsertId());
	}

	public function getList($debut = -1, $limite = -1)
	{
		// si debut = 0 on suppose qu'on doit enlever les com pas encore autorisées car il n'est utilisé pour l'instant que par le contrôleur de home. Aviser par la suite si ça ne convient plus.
		$where = ($debut == 0)? "WHERE publie = TRUE" : "";
		$sql = 'SELECT * FROM com '.$where.' ORDER BY idCom DESC';
		if ($debut != -1 || $limite != -1)
		{
			$sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
		}

		$requete = $this->dao->query($sql);
		$requete->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Library\Entities\Com');
		 
		$listeComs = $requete->fetchAll();
		foreach ($listeComs as $com)
		{
			$com->setDateAjout(new \DateTime($com->dateAjout()));
			$com->setDateModif(new \DateTime($com->dateModif()));
		}
		 
		$requete->closeCursor();
		 
		return $listeComs;
	}

	protected function modify(mutuelleIndividuelle $mi)
	{
		$q = $this->dao->prepare('UPDATE com SET auteur = :auteur, com = :com WHERE idCom = :idCom');

		$q->bindValue(':auteur', $<<<<ent->auteur());
		$q->bindValue(':com', $com->com());
		$q->bindValue(':idCom', $com->idCom(), \PDO::PARAM_INT);

		$q->execute();
	}
   
	public function get($id)
	{
		$q = $this->dao->prepare('SELECT * FROM com WHERE idCom = :idCom');
		$q->bindValue(':idCom', (int) $id, \PDO::PARAM_INT);
		$q->execute();

		$q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Library\Entities\Com');

		return $q->fetch();
	}

	public function delete($id)
	{
		$this->dao->exec('DELETE FROM com WHERE idCom = '.(int) $id);
	}
}
?>