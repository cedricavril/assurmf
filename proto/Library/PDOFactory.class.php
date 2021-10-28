<?php
/*class DBFactory
{
  public static function getMysqlConnexionWithPDO()
  {
    $db = new PDO('mysql:host=localhost;dbname=poo', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    return $db;
  }
   
  public static function getMysqlConnexionWithMySQLi()
  {
    return new MySQLi('localhost', 'root', '', 'poo');
  }
}*/
namespace Library;
 
class PDOFactory
{
  public static function getMysqlConnexion()
  {
    if ($_SERVER["REMOTE_ADDR"]=='127.0.0.1') $db = new \PDO('mysql:host=localhost;dbname=assurmf', 'root', '');
    else $db = new \PDO('mysql:host=mk134330-001.privatesql;dbname=mkkhali;port=35322', 'mk134330-ovh', '21051978Kali');
    $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
  	$db->exec("SET CHARACTER SET utf8");
/*  $db->exec("SET NAMES utf8");*/
    return $db;
  }
}
?>
