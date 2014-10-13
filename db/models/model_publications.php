<?php
/**
 * @author MrWormy
 * @example MVC with db
 */

include_once("db/simple_db_mysql_manager.php");

class Model {
  public $publication_list;

  public function __construct()
  {
    $dbManager = new DBManager();
    //Step 1
    $dbManager->openConnection();
    //Step 2, 3
    $query = "SELECT * FROM `publications`;";
    $this->publication_list = $dbManager->executeQuery($query);
    //Step 4
    $dbManager->closeConnection();
  }
}

?>
