<?php
namespace Library;
session_start();

class User extends ApplicationComponent
{
  public function getAttribute($attr)
  {
    return isset($_SESSION[$attr]) ? $_SESSION[$attr] : null;
  }
   
  public function getFlash()
  {
    $flash = $_SESSION['flash'];
    unset($_SESSION['flash']);

    return $flash;
  }
   
  public function hasFlash()
  {
    return isset($_SESSION['flash']);
  }
   
  public function isAuthenticated()
  {
    return isset($_SESSION['auth']) && $_SESSION['auth'] === true;
  }
   
  public function setAttribute($attr, $value)
  {
    $_SESSION[$attr] = $value;
  }
   
  public function setAuthenticated($authenticated = true)
  {
    if (!is_bool($authenticated))
    {
      throw new \InvalidArgumentException('La valeur spécifiée à la méthode User::setAuthenticated() doit être un boolean');
    }
    $_SESSION['auth'] = $authenticated;
    $_SESSION['rang'] = "0";
  }
   
  public function setFlash($value)
  {
    $_SESSION['flash'] = $value;
  }
public function detruireSession()
{
	$_SESSION = array();
	session_destroy();
	// si pb tester aussi unset
}
}
?>