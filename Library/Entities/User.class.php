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
            $address,
            $postcode,
            $newsletter,
            $city,
            $prenom,
            $nom;
             
/*  public function isValid()
  {
    return !(empty($this->username) || empty($this->pass));
  }*/
   
   
  // SETTERS //
  public function setDate_arrivee(){
    $date_arrivee = time();
  }

  // GETTERS //
}
?>