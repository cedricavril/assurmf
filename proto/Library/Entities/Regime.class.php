<?php
namespace Library\Entities;

class Regime extends \Library\Entity
{
  protected $id,
            $titre;

  // SETTERS //
  public function setTitre($titre){
    $this->titre = $titre;
  }

  // GETTERS //
  public function titre(){
    return $this->titre;
  }

  public function __toString() {
    return "$this->titre";
  }

}
?>