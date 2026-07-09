<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 28/06/2026
 * Time: 09:00
 */

namespace App\Classes;


class Template
{
    public function loader()
    {
        return new \Twig\Loader\FilesystemLoader(['../App/Views/Site', '../App/Views/Admin']);
    }

    public function init()
    {
        return new \Twig\Environment($this->loader(),
        [
            'debug' => true,
            //'cache' =>,
            'auto_reload' => true
        ]);
    }
}