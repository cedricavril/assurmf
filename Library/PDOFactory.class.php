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
    $db = new \PDO('mysql:host=localhost;dbname=poo', 'root', '');
//    $db = new \PDO('mysql:host=sql.franceserv.fr;dbname=hotellespins33_db1', 'hotellespins33', 'J9eNjJKL');
    $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
     
    return $db;
  }
}
?>