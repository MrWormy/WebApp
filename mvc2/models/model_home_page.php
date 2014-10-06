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
    $this->template = "templates/template_home_page.php";
    $this->motto = "mottoooooooooooooo!!";
    $this->personal_intro = "coucou c est moi";
    $this->publications = "<ul><li>pub 1</li><li>pub 2</li></ul>";
  }
}

?>
