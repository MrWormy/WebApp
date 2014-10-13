<?php
/**
 * @author Thomas Laurence <thomas.laurenc@mydit.ie>
 * @description Simple DB Manage
 */

include_once("../conf/conf.inc.php");

/**
* manage connection
*/
class DBManager
{

  private $db_link;
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
    $this->db_link = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
  }

  public function closeConnection()
  {
    if(!empty($this->db_link)){
      $this->db_link->close();
    }
  }

  public function executeQuery($query)
  {
    if(!empty($this->db_link)){
      $result = mysqli_query($this->db_link, $query);
    }

    $rows = array();
    while ($row = $result->fetch_array(MYSQLT_ASSOC)) {
      $rows[] = $row;
    }

    return rows;
  }
}
?>
