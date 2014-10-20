<?php
/**
 * @author MrWormy
 * @example MVC with db
 */

include_once("db/DAO_factory.php");

class Model {
  private $DAOFactory = null;

  public function __construct()
  {
    $this->DAOFactory = new DAO_factory();
    $this->DAOFactory->initDBResources();
  }

  public function getPublicationsArray()
  {
    $pubsDAO = $this->DAOFactory->getPublicationDAO();
    $res = $pubsDAO->getPublications();

    return $res;
  }

  function __destruct()
  {
    $this->DAOFactory->clearDBResources();
  }
}

?>
