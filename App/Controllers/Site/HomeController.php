<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 10/07/2026
 * Time: 12:53
 */

namespace App\Controllers\Site;
use App\Controllers\BaseController;


class HomeController extends BaseController
{
    public function index()
    {

        $dados =
        [
            'titulo' => 'Curso PHPOO | Loja Virtual',
            'nome' => 'Engenheiro Osvaldo'
        ];


        //dump('Chamando a index do home');
        $template = $this->twig->load('site_home.html');
        $template->display($dados);


    }
}