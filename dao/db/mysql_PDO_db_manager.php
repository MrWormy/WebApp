<?php
/**
 * @author Thomas Laurence <thomas.laurenc@mydit.ie>
 * @description Simple DB Manage
 */

include_once("conf/config.inc.php");

/**
* manage connection
*/
class Mysql_PDO_db_manager
{

  private $pdo;
  private $hostname;
  private $username;
  private $password;
  private $dbname;

  function __construct($dbname = DB_NAME)
  {
    $this->hostname = DB_HOST;
    $this->username = DB_USER;
    $this->password = DB_PASS;
    $this->dbname = $dbname;
  }

  public function openConnection()
  {
    try {
      $this->pdo = new PDO ("mysql:host=$this->hostname;dbname=$this->dbname", "$this->username", "$this->password",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch (PDOException $e) {
      echo "Failed to get DB handle: ". $e->getMessage() . "\n";
      exit();
    }
  }

  public function closeConnection()
  {
    unset($this->pdo);
  }

  public function prepareQuery($query)
  {
    return $this->pdo->prepare($query);
  }

  public function executeQuery($stmt)
  {
    $stmt->execute();
  }

  public function fetchQuery($stmt)
  {
    return $stmt->fetchAll();
  }
}
?>
