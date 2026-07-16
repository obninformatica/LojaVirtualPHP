<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 15/07/2026
 * Time: 21:58
 */
namespace App\Classes;

use App\Classes\Uri;

class BreadCrumb
{
    private $uri;

    public function __construct()
    {
        $uri = new Uri();
        $this->uri = $uri->getUri();
    }

    public function createBreadCrumb()
    {
//      breadcrumb para busca
        if(substr_count($this->uri, '?') > 0)
        {
            $explodeIgual = explode('=',$this->uri);
            return "<span style='color: #000000;'> Você está buscando:</span><span style='font-style: italic;'><a href='/' style='text-decoration: none;'>Inicio</a>".str_replace('+','-', $explodeIgual[1].'</span>');
        }
//      bread crumb para a página inicial
        if($this->uri == '/')
        {
            return "<span style='color: #000;'>Navegação</span>: <span style='font-style: italic;'>Início</span>";
        }
//      para outras páginas internas do site
        return "<span style='color: #000;'>Navegação</span>: <span style='font-style: italic;'><a href='/' style='text-decoration: none;'>Inicio</a>/" . ucfirst(ltrim($this->uri, '/') . '</span>');

    }

}