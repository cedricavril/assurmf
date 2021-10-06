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
    else $db = new \PDO('mysql:host=sql.franceserv.fr;dbname=,nomDeLaBase', 'name', 'pass');
    $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
  	$db->exec("SET CHARACTER SET utf8");
    return $db;
  }
}
?>