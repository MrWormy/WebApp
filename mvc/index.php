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

echo $viewObj->output();
?>
