<?php

$controller = new App\Controllers\Controller();
$object = $controller->controller();
//$controller = new App\Controllers\Controller();
//dump($controller->controller());

$method = new App\Controllers\Method();
dump($method->method($object));