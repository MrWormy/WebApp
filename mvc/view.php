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
    return "<p><a href=\"index.php?action=clicked\">".$this->model->str."</a></p>";
  }
}

?>
