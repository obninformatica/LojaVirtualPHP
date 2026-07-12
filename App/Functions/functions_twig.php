<?php

use App\Repositories\Site\CategoriaRepository;

$site_url = new \Twig\TwigFunction('site_url', function(){
    return 'http://'.$_SERVER['SERVER_NAME'];
});

// Listar as categorias no left menu
$categorias = new \Twig\TwigFunction('categorias', function(){
    $categoriaRepository = new CategoriaRepository();
    return $categoriaRepository->listarCategoriasProdutos();
});




/*
*
*  $twig = new \Twig\Environment($loader);
*/
