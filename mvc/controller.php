<?php
/**
* @author MrWormy
*/

class Controller {
  private $model;
  public function __construct($model)
  {
    $this->model = $model;
  }
  public function clicked()
  {
    $this->model->str = "data successfully updated !";
  }
}
?>
