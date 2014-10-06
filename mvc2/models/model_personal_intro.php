<?php
/**
 * @author MrWormy
 */

class Model {
  public $motto; //slogan
  public $personal_intro;
  public $publication_list;

  public function __construct()
  {
    $this->template = "templates/template_personal_intro.php";
    $this->personal_intro = "coucou c est moi";
  }
}

?>
