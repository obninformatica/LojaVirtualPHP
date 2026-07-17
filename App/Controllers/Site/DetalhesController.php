<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 16/07/2026
 * Time: 22:52
 */
namespace App\Controllers\Site;

use App\Controllers\BaseController;
use App\Models\Site\ProdutoModel;


class DetalhesController extends BaseController
{

    private $produto;

    public function __construct()
    {
        $this->produto = new ProdutoModel();

    }
    public function index($param)
    {
        $produtoEncontrado = $this->produto->find('produto_slug', $param[0]);
        $dados = [
            'titulo' => 'Detalhes do Produto '.$produtoEncontrado->produto_nome,
            'produto' => $produtoEncontrado
        ];

        $template = $this->twig->load('site_detalhes.html');
        $template->display($dados);
    }
}