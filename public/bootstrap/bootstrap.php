<?php
use App\Classes\Template;
use App\Classes\Parameters;

$template = new Template();
$twig = $template->init();

// Chamando as funcções do functionsTwig
$twig->addFunction($site_url);
$twig->addFunction($categorias);
$twig->addFunction($novidade);
$twig->addFunction($promocao);

/**
 * chamando o controller digitado na URL
 * http://localhost/controller
 */
$callController = new App\Controllers\Controller();
$calledController = $callController->controller();
$controller = new $calledController();
$controller->setTwig($twig);

/**
 * Chamando o metodo digitado na URL
 * http://localhost/controller/metodo
 */
$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);

/**
 * Chamando o controller através da classe controller e da classe method
 */
$parameters = new Parameters();
$parameter = $parameters->getParameterMethod($controller,$method);
$controller->$method($parameter);

//==================== estava nesta ordem
//$controller = new App\Controllers\Controller();
//$object = $controller->controller();
//$controller = new App\Controllers\Controller();
//dump($controller->controller());
//$method = new App\Controllers\Method();
//dump($method->method($object));