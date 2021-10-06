<?php
namespace Library;
 
class FrenchDateValidator extends Validator
{
  public function isValid($value)
  {
    return preg_match('`^((0\d)|(1\d)|(2\d)|(3[0-1]))\/((0[1-9])|(1[0-2]))\/(\d{4})`', $value);
  }
}
?>