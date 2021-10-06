<?php
namespace Library\Models;
 
use \Library\Entities\MutuelleIndividuelle;
 
abstract class MutuellesIndividuellesManager extends \Library\Manager
{
  /**
   * Méthode permettant d'ajouter une Mutuelle individuelle
   * @param $miAjout La mutuelle individuelle à ajouter
   * @return void
   */
  abstract protected function add(MutuelleIndividuelle $miAjout);
   
  /**
   * Méthode permettant d'enregistrer une Mutuelle Individuelle.
   * @param $mi La mutuelle individuelle à enregistrer
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
      throw new \RuntimeException('La Mutuelle individuelle doit être validée pour être enregistrée');
    }
  }
    /**
   * Méthode permettant de récupérer une liste de mutuelles individuelles.
   */
  abstract public function getList($debut = -1, $limite = -1);
  
    /**
   * Méthode permettant de modifier une mutuelle individuelle.
   * @param $miAMettreAjour La mutuelle individuelle à modifier
   * @return void
   */
  abstract protected function modify(MutuelleIndividuelle $miAMettreAjour);
   
  /**
   * Méthode permettant d'obtenir une mutuelle individuelle spécifique.
   * @param $id L'identifiant de la mutuelle individuelle
   */
  abstract public function get($idMi);
    /**
   * Méthode permettant de supprimer une mutuelle individuelle
   * @param $id L'identifiant de la mutuelle individuelle à supprimer
   * @return void
   */
  abstract public function delete($miASupprimer);
}