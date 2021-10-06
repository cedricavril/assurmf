<?php
namespace Library\Entities;

class MutuelleIndividuelle extends \Library\Entity
{
  protected $id,
            $dateNaissance,
            $regime;
             
   
  // SETTERS //
  public function setDateNaissance($dateNaissance){
    $this->dateNaissance = $dateNaissance;
  }

  public function setRegime($regime){
    $this->regime = $regime;
  }

  // GETTERS //
  public function dateNaissance(){
    return $this->dateNaissance;
  }

  public function regime(){
    return $this->regime;
  }


  public function __toString() {
    //$dateNaissance = $this->dateNaissance->format('d/m/Y');
    return "$this->id. $this->dateNaissance->dateNaissance - $this->regime";
  }

}
?>