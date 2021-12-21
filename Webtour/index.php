<?php
require "./Controllers/BaseController.php";
$controllerName = ucfirst(strtolower(($_REQUEST['controllers']??'Category')).'Controller'); 
$actionName =strtolower($_REQUEST['action']??'index');
require "./Controllers/${controllerName}.php";
$controllerObj= new $controllerName;

$controllerObj->$actionName();