<?php
namespace Library\Models;
 
use \Library\Entities\Regime;
 
abstract class RegimesManager extends \Library\Manager
{
  /**
   * Méthode permettant d'ajouter une Mutuelle individuelle
   * @param $miAjout La mutuelle individuelle à ajouter
   * @return void
   */
  abstract protected function add(Regime $regime);
   
  /**
   * Méthode permettant d'enregistrer une Mutuelle Individuelle.
   * @param $mi La mutuelle individuelle à enregistrer
   * @return void
   */
  public function save(Regime $regime)
  {
    if ($regime->isValid())
    {
      $regime->isNew() ? $this->add($regime) : $this->modify($regime);
    }
    else
    {
      throw new \RuntimeException('Le régime doit être validé pour être enregistré');
    }
  }
    /**
   * Méthode permettant de récupérer une liste de regimes.
   */
  abstract public function getList($debut = -1, $limite = -1);
  
    /**
   * Méthode permettant de modifier une mutuelle individuelle.
   * @param $miAMettreAjour La mutuelle individuelle à modifier
   * @return void
   */
  abstract protected function modify(Regime $regimeAMettreAjour);
   
  /**
   * Méthode permettant d'obtenir une mutuelle individuelle spécifique.
   * @param $id L'identifiant de la mutuelle individuelle
   */
  abstract public function get($idRegime);
    /**
   * Méthode permettant de supprimer une mutuelle individuelle
   * @param $id L'identifiant de la mutuelle individuelle à supprimer
   * @return void
   */
  abstract public function delete($regimeASupprimer);
}