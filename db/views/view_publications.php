<?php
/**
 * @author MrWormy
 */

class View {
  private $model;
  private $controller;

  public function __construct($model, $controller)
  {
    $this->model = $model;
    $this->controller = $controller;
  }

  public function output()
  {
    $publications = "";
    foreach ($this->model->publication_list as $value) {
      $publications .= "<li>".$value["authors"]." ".$value["title"]." ".$value["conference"]."</li>";
    }
    $publications = "<ul>".$publications."</ul>";
    include_once("templates/template_publications.php");
  }
}

?>
