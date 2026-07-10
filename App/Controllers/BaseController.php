<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 10/07/2026
 * Time: 12:59
 */

namespace App\Controllers;


class BaseController
{
    protected $twig;

    public function setTwig($twig)
    {
        $this->twig = $twig;
    }

}