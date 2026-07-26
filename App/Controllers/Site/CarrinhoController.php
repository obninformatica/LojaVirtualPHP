<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 25/07/2026
 * Time: 18:31
 */
namespace App\Controllers\Site;

use App\Classes\Carrinho;
use App\Controllers\BaseController;

class CarrinhoController extends BaseController
{
    private $carrinho;

    public function __construct()
    {
        $this->carrinho = new Carrinho();
    }
    public function add($param)
    {
        $this->carrinho->add($param[0]);
        //var_dump($param);
    }



}
