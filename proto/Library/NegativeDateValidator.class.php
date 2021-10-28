<?php
namespace Library;
 
class NegativeDateValidator extends Validator
{
  public function isValid($value)
  {

      $d = new \DateTime($value);
      $yesterdayAtMidnight = new \DateTime('YESTERDAY');
      if (!$d) return false;

      return $yesterdayAtMidnight >= $d;
  }
}
?>