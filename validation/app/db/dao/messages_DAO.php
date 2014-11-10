<?php
/**
* @author Luca
* definition of the messages DAO
*/
require_once("db/dao/base_DAO.php") ;
class messagesDAO extends BaseDAO {

  function messagesDAO( $dbMng ) {
   parent::__construct( $dbMng ) ;
  }

  function getMessages() {
    $sqlQuery ="SELECT *";
    $sqlQuery .=" FROM board";
    $sqlQuery .=" ORDER BY board.author ;";

    $db = $this->getDbManager();

    $stmt = $db->prepareQuery($sqlQuery);

    $db->executeQuery($stmt);
    $result = $db->fetchQuery($stmt);

    return $result ;
  }

  function insertNewMessage( $email , $title , $content ) {
    $sqlQuery ="INSERT INTO board(id, author, title, content )";
    $sqlQuery .=" VALUES( NULL , '$email', '$title', '$content')";

    $db = $this->getDbManager();

    $stmt = $db->prepareQuery($sqlQuery);

    $db->executeQuery($stmt);
    $result = $db->fetchQuery($stmt);

    return $result ;
  }
}
?>
