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
    $motto = "<div>".$this->model->motto."</div>";
    $personal_intro = "<div>".$this->model->personal_intro."</div>";
    $publications = "<div>".$this->model->publications."</div>";
    include_once($this->model->template);
  }
}

?>
