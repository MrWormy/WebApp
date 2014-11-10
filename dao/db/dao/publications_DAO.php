<?php
/**
* @example publications dao
*/

include_once 'db/dao/base_DAO.php';

class PublicationsDAO extends BaseDAO
{
  /**
  * Overiding parent's constructor
  */
  function __construct($dbManager)
  {
    parent::__construct($dbManager);
  }

  public function getPublications()
  {
    $db = $this->getDBManager();
    $stmt = $db->prepareQuery("SELECT * FROM `publications` ;");

    $db->executeQuery($stmt);
    $result = $db->fetchQuery($stmt);

    return $result;
  }

 /* SQL injection pbs
  public function getPublicationsContaining($str)
  {
    $str =
    $query = "SELECT * FROM `publications` WHERE publications.authors LIKE '". $str ."'";
    $query .=  "ORDER BY publications.authors;";

    $db = $this->getDBManager();
    $result = $db->executeQuery($query);

    return $result;
  }*/
}
?>
