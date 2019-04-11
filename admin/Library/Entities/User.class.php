<?php
//namespace Users;

require_once('Library/Entity.class.php');

class User extends Entity
{
  protected $id,
            $pass,
            $email,
            $date_arrivee,
            $birth_date,
            $licence_date,
            $description,
            $tel,
            $adresse,
            $prenom,
            $nom;
             
  const LOGIN_INVALIDE = 1;
  const PASS_INVALIDE = 2;
  const DESCRIPTION_INVALIDE = 3;
   
  public function isValid()
  {
    return !(empty($this->username) || empty($this->pass));
  }
   
   
  // SETTERS //
  public function setDate_arrivee(){
    $date_arrivee = time();
  }
   
  // SETTERS //
  public function setLicence_date(){
    $licence_date = time();
  }
   
   
  // GETTERS //
   
   
}
?>