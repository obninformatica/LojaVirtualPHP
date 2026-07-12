<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 10/07/2026
 * Time: 12:53
 */

namespace App\Controllers\Site;
use App\Controllers\BaseController;
//use App\Models\Site\UsersModel;
use App\Repositories\Site\ProdutoRepository;


class HomeController extends BaseController
{
    public function index()
    {
        $produtoRepository = new ProdutoRepository();
        dump($produtoRepository->listarProdutosOrdenadosComLimite(3));
        //$user = new UsersModel();
        //dump($user->fetchAll());
        //dump($user->fetch());
        //dump($user->find('id',1));

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