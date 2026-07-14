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
        // listar pelo destaque
        $produtoRepository = new ProdutoRepository();
        $produtoDestaque = $produtoRepository->listarProdutosOrdenadosPeloDestaque(6);

        // listar pela promoção
        $produtoPromocao = $produtoRepository->listarProdutosPromocao(6);
        //dump($produtoPromocao);
        $dados =
        [
            'titulo' => 'Curso PHPOO | Loja Virtual',
            'produtos' => $produtoDestaque,
            'produtosPromocao' => $produtoPromocao
        ];

        $template = $this->twig->load('site_home.html');
        $template->display($dados);

    }
}