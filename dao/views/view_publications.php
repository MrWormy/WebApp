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
    $pubArray = $this->model->getPublicationsArray();

    $publications = "";
    /*foreach ($pubArray as $key => $value) {
      $publications .= "<li>".$key." ".$value."</li>";
    }*/
    foreach ($pubArray as $value) {
      $publications .= "<li>".$value["authors"]." ".$value["title"]." ".$value["conference"]."</li>";
    }
    $publications = "<ul>".$publications."</ul>";
    include_once("templates/template_publications.php");
  }
}

?>
