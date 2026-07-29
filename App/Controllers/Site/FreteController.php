<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 29/07/2026
 * Time: 03:43
 */
namespace App\Controllers\Site;

use App\Controllers\BaseController;

class FreteController extends BaseController
{

    public function calcular()
    {
        echo json_encode('calcular frete dentro do controller');
    }
}