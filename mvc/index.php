<?php
/**
 * @author MrWormy
 */

include 'model.php';
include 'view.php';
include 'controller.php';

//instantiate mvc

$modelObj = new Model();
$controllerObj = new Controller($modelObj);
$viewObj = new View($modelObj, $controllerObj);

if (!empty($_GET["action"])) {
  if(method_exists($controllerObj, $_GET["action"])){
    $controllerObj->{$_GET["action"]}();
  }
}

echo $viewObj->output();
?>
