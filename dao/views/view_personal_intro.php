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
    $personal_intro = "<p>".$this->model->personal_intro."</p>";
    include_once($this->model->template);
  }
}

?>
