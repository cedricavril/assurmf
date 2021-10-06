<?php
namespace Library\Models;
 
use \Library\Entities\MutuelleIndividuelle;
 
abstract class MutuelleIndividuelleManager extends \Library\Manager
{
  /**
   * Méthode permettant d'ajouter un mi
   * @param $mi Le mi à ajouter
   * @return void
   */
  abstract protected function add(MutuelleIndividuelle $mi);
   
  /**
   * Méthode permettant d'enregistrer un mi.
   * @param $mi Le mi à enregistrer
   * @return void
   */
  public function save(MutuelleIndividuelle $mi)
  {
    if ($mi->isValid())
    {
      $mi->isNew() ? $this->add($mi) : $this->modify($mi);
    }
    else
    {
      throw new \RuntimeException('La mutuelle individuelle doit être validée pour être enregistrée');
    }
  }
    /**
   * Méthode permettant de récupérer une liste de mis.
   * @param $news La news sur laquelle on veut récupérer les mis
   * @return array
   */
  abstract public function getList($debut = -1, $limite = -1);
  
    /**
   * Méthode permettant de modifier un mi.
   * @param $mi Le mi à modifier
   * @return void
   */
  abstract protected function modify(Com $comAMettreAjour);
   
  /**
   * Méthode permettant d'obtenir un mi spécifique.
   * @param $id L'identifiant du mi
   * @return mi
   */
  abstract public function get($idCom);
    /**
   * Méthode permettant de supprimer un mi.
   * @param $id L'identifiant du mi à supprimer
   * @return void
   */
  abstract public function delete($comASupprimer);
}