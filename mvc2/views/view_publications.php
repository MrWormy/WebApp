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
    $publications = "<p>".$this->model->publications."</p>";
    include_once($this->model->template);
  }
}

?>
