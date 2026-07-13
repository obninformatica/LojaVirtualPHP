<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 10/07/2026
 * Time: 12:53
 */

namespace App\Controllers\Site;
use App\Controllers\BaseController;
use App\Repositories\Site\ProdutoRepository;

class HomeController extends BaseController
{
    public function index()
    {
        $produtoRepository = new ProdutoRepository();
        $produtoDestaque = $produtoRepository->listarProdutosOrdenadosPeloDestaque(6);

        $dados =
        [
            'titulo' => 'Curso PHPOO | Loja Virtual',
            'produtos' => $produtoDestaque
        ];

        $template = $this->twig->load('site_home.html');
        $template->display($dados);

    }
}