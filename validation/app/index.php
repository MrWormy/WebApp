<?php
/**
* @author Thomas
* setting up relationships between M -V - C
* components - authentication
* example
*/

if(! empty( $_GET ["action"]) )
  $action = $_GET ["action"];
else
  $action = "";

include_once "models/model.php";
include_once "controllers/controller.php";
include_once "views/view.php";

$model = new Model() ;
$controller = new Controller($model , $action , $_GET ) ;
$view = new View( $controller , $model ) ;
$view->output() ;
?>
