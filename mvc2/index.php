<?php
/**
 * @author MrWormy
 */

$page = "home_page";

//instantiate mvc
if(!empty($_GET["page"])){
  $page = $_GET["page"];
}

include_once("models/model_".$page.".php");
include_once("controllers/controller_".$page.".php");
include_once("views/view_".$page.".php");

$action = null;
if(!empty($_GET["action"])){
  $action = $_GET["action"];
}

$modelObj = new Model();
$controllerObj = new Controller($modelObj, $action);
$viewObj = new View($modelObj, $controllerObj);

echo $viewObj->output();
?>
