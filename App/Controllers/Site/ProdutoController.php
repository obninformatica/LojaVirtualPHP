<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 25/06/2026
 * Time: 10:05
 */

namespace App\Controllers\Site;

use App\Controllers\BaseController;

class ProdutoController extends BaseController
{
    public function index($parameters)
    {
        dump($parameters[2]);
    }

    public function calca($parameters)
    {
        dump($parameters[2]);
    }

}